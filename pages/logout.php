<?php
declare(strict_types=1);

/**
 * Ação de Logout - Prado Systems
 * Integra a invalidação do pacote Auth com a destruição da sessão PHP.
 */

// 1. Invalida o token no pacote Auth (se existir na sessão)
if (isset($_SESSION['user_token'])) {
    try {
        // O método logout() do seu AuthManager cuida da expiração do token
        $auth->logout($_SESSION['user_token']);
    } catch (\Exception $e) {
        // Silenciamos falhas no logout do pacote para garantir que a sessão local caia
    }
}

// 2. Limpa todas as variáveis de sessão local
$_SESSION = [];

// 3. Destrói o cookie de sessão no navegador
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// 4. Destrói a sessão no servidor
session_destroy();

// 5. Redireciona para a tela de login com um parâmetro de feedback (opcional)
header("Location: /login?logged_out=1");
exit;