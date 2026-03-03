<?php
declare(strict_types=1);

/**
 * BOOTSTRAP DE AUTENTICAÇÃO - PRADO SYSTEMS
 * Versão Saneada: Utiliza implementações reais do diretório ./src
 */

require_once __DIR__ . '/../vendor/autoload.php';

// Classes do Pacote (Core)
use PradoSystems\Auth\AuthManager;
use PradoSystems\Auth\Actions\{
    RegisterAction, LoginAction, LogoutAction, 
    EmailConfirmationAction, ResetPasswordAction, CancelAction
};
use PradoSystems\Auth\Support\{
    InMemoryTokenRepository, InMemoryAuthProvider, 
    NativePasswordHasher, InMemoryMailer, 
    SimpleEventDispatcher, SystemClock
};

// Classes do Mockup (Infraestrutura do Cliente)
use App\Infrastructure\Repositories\JsonUserRepository;
use App\Infrastructure\Auth\JsonAuthProvider;
use App\Factories\UserFactory;
use App\Infrastructure\Auth\EmailVerifier; // Se optar por criar esta classe
use App\Infrastructure\Auth\PasswordUpdater; // Se optar por criar esta classe

// 1. Definição de Caminhos
$jsonDbPath = __DIR__ . '/../data/users.json';

// 2. Instância das Dependências Sólidas
$clock    = new SystemClock();
$hasher   = new NativePasswordHasher();
$factory  = new UserFactory($hasher);
$users    = new JsonUserRepository($jsonDbPath);
$tokens   = new InMemoryTokenRepository($clock);
$mailer   = new InMemoryMailer();
$events   = new SimpleEventDispatcher();

// Nota: O AuthProvider ainda usa o Hasher e o Repo para validar credenciais

$authProvider = new JsonAuthProvider($users, $hasher);

// 3. Montagem das Actions
// Usamos as classes reais do Mockup injetadas nos construtores do Pacote
$registerAction = new RegisterAction($factory, $users, $tokens, $mailer, $events, $clock);
$loginAction    = new LoginAction($authProvider);
$logoutAction   = new LogoutAction($authProvider);

// Para estas Actions, podemos usar classes anônimas simples se ainda não 
// criamos os arquivos em src/, mantendo o foco no Login/Register
$confirmAction  = new EmailConfirmationAction($tokens, $users, new class implements \PradoSystems\Auth\Contracts\EmailVerifierInterface {
    public function verify(\PradoSystems\Auth\Contracts\UserInterface $user): void {}
});

$resetAction    = new ResetPasswordAction($tokens, $users, $mailer, $events, $clock, new class implements \PradoSystems\Auth\Contracts\PasswordUpdaterInterface {
    public function updatePassword(\PradoSystems\Auth\Contracts\UserInterface $user, string $newPassword): void {}
});

$cancelAction   = new CancelAction($tokens);

// 4. Instância Única do AuthManager (A Fachada do Sistema)
$auth = new AuthManager(
    $registerAction,
    $loginAction,
    $logoutAction,
    $confirmAction,
    $resetAction,
    $cancelAction
);

return $auth;
