<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use PradoSystems\Auth\AuthManager;
use PradoSystems\Auth\Actions\{RegisterAction, LoginAction, LogoutAction, EmailConfirmationAction, ResetPasswordAction, CancelAction};
use PradoSystems\Auth\Support\{InMemoryUserRepository, InMemoryTokenRepository, InMemoryAuthProvider, NativePasswordHasher, InMemoryMailer, SimpleEventDispatcher, SystemClock};
use PradoSystems\Auth\Tests\Unit\{TestUserFactory, TestEmailVerifier, TestPasswordUpdater};

// 1. Infraestrutura básica
$clock = new SystemClock();
$hasher = new NativePasswordHasher();
$users = new InMemoryUserRepository();
$tokens = new InMemoryTokenRepository($clock);
$mailer = new InMemoryMailer();
$events = new SimpleEventDispatcher();

// 2. Implementações de Teste/Suporte para o Mockup
$factory = new TestUserFactory();
$verifier = new TestEmailVerifier();
$passwords = new TestPasswordUpdater();
$authProvider = new InMemoryAuthProvider($hasher);

// 3. Instanciar as Actions
$registerAction = new RegisterAction($factory, $users, $tokens, $mailer, $events, $clock);
$loginAction = new LoginAction($authProvider);
$logoutAction = new LogoutAction($authProvider);
$emailConfirmAction = new EmailConfirmationAction($tokens, $users, $verifier);
$resetAction = new ResetPasswordAction($tokens, $users, $mailer, $events, $clock, $passwords);
$cancelAction = new CancelAction($tokens);

// 4. O Manager (Fachada única para o Mockup)
$auth = new AuthManager(
    $registerAction,
    $loginAction,
    $logoutAction,
    $emailConfirmAction,
    $resetAction,
    $cancelAction
);

return $authManager;