<?php
$auth = require __DIR__ . '/bootstrap.php';

use PradoSystems\Auth\DTOs\AuthData;
use PradoSystems\Auth\Exceptions\AuthException;

// Simulação de fluxo no Mockup:

try {
    echo "--- Testando Registro Prado Systems ---\n";
    $userData = new AuthData('dev@pradosystems.com', 'senha_segura_123');
    $auth->register($userData);
    echo "Usuário registrado! Verifique seu 'e-mail' para o token.\n\n";

    // No Mockup, capturamos o token que "estaria" no e-mail (usando o InMemoryMailer global)
    global $mailer; 
    $lastEmail = end($mailer->sent);
    echo "E-mail enviado para: " . $lastEmail['to'] . "\n";
    echo "Corpo: " . $lastEmail['body'] . "\n\n";

    // Simular confirmação de e-mail
    preg_match('/token to confirm your email: (.*)/', $lastEmail['body'], $matches);
    $token = $matches[1];
    $auth->confirmEmail($token);
    echo "E-mail confirmado com sucesso!\n\n";

    // Tentar Login
    echo "--- Testando Login ---\n";
    $sessionToken = $auth->login($userData);
    echo "Login realizado! Token de sessão: $sessionToken\n";

} catch (AuthException $e) {
    echo "ERRO DE AUTENTICAÇÃO: " . $e->getMessage() . "\n";
}