<?php
declare(strict_types=1);

/**
 * BOOTSTRAP DE AUTENTICAÇÃO - PRADO SYSTEMS
 * Configuração final baseada nos contratos reais do auth-package.
 */

require_once __DIR__ . '/../vendor/autoload.php';

use PradoSystems\Auth\AuthManager;
use PradoSystems\Auth\Actions\{RegisterAction, LoginAction, LogoutAction, EmailConfirmationAction, ResetPasswordAction, CancelAction};
use PradoSystems\Auth\Support\{InMemoryUserRepository, InMemoryTokenRepository, InMemoryAuthProvider, NativePasswordHasher, InMemoryMailer, SimpleEventDispatcher, SystemClock};
use PradoSystems\Auth\DTOs\{RegisterData, AuthData};
use PradoSystems\Auth\Contracts\{UserFactoryInterface, UserInterface, EmailVerifierInterface, PasswordUpdaterInterface};

// 1. Instância das dependências de infraestrutura
$clock    = new SystemClock();
$hasher   = new NativePasswordHasher();
$users    = new InMemoryUserRepository();
$tokens   = new InMemoryTokenRepository($clock);
$mailer   = new InMemoryMailer();
$events   = new SimpleEventDispatcher();
$authProvider = new InMemoryAuthProvider($hasher, $users);

// 2. Implementações "Inline" dos Contratos Reais
$factory = new class implements UserFactoryInterface {
    public function create(AuthData $data): UserInterface {
        return new class($data) implements UserInterface {
            public function __construct(private AuthData $data) {}
            
            public function getId(): string|int { 
                return rand(1, 999); 
            }
            
            public function getName(): string { 
                return $this->data->meta['name'] ?? 'Usuário'; 
            }
            
            public function getEmail(): string { 
                return $this->data->email; 
            }
            
            public function getPassword(): string { 
                return $this->data->password ?? ''; 
            }

            /**
             * Método exigido pela UserInterface
             */
            public function isEmailVerified(): bool {
                return true; // No Mockup, consideramos sempre verificado
            }
        };
    }
};

$emailVerifier = new class implements EmailVerifierInterface {
    public function verify(UserInterface $user): void { 
        // Mockup: assume sucesso na verificação
    }
};

$passwordUpdater = new class implements PasswordUpdaterInterface {
    public function updatePassword(UserInterface $user, string $newPassword): void { 
        // Mockup: simulação de alteração de senha
    }
};

// 3. Montagem das Actions (Respeitando a assinatura do construtor)
$registerAction    = new RegisterAction($factory, $users, $tokens, $mailer, $events, $clock);
$loginAction       = new LoginAction($authProvider);
$logoutAction      = new LogoutAction($authProvider);
$confirmAction     = new EmailConfirmationAction($tokens, $users, $emailVerifier);
$resetAction       = new ResetPasswordAction($tokens, $users, $mailer, $events, $clock, $passwordUpdater);
$cancelAction      = new CancelAction($tokens);

// 4. Instância Única do AuthManager
$auth = new AuthManager(
    $registerAction,
    $loginAction,
    $logoutAction,
    $confirmAction,
    $resetAction,
    $cancelAction
);


// 5. Registro do usuário Admin
// 5. Registro e Sincronização do usuário Admin
try {
    $adminEmail = 'admin@prado.com';
    $adminPassword = 'senha123';
    
    $adminData = new AuthData(
        $adminEmail,
        $adminPassword,
        ['name' => 'Admin Prado']
    );

    // 5.1 Criamos o objeto User manualmente usando a nossa Factory
    $user = $factory->create($adminData);
    
    // 5.2 Sincronizamos o AuthProvider (quem de fato valida o login)
    $authProvider->addUser($user, $adminPassword);

    // Nota: Se o seu repositório usar 'save' em vez de 'add', 
    // descomente a linha abaixo caso precise listar o usuário em outras telas.
    // $users->save($user);

} catch (\Exception $e) {
    // Silencia erros de configuração inicial
}
return $auth;