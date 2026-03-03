<?php
declare(strict_types=1);

/**
 * PRADO SYSTEMS - FRONT CONTROLLER & ROUTER
 * Este arquivo centraliza todas as requisições do Mockup.
 */

// 1. Carrega o autoloader do Composer
require_once __DIR__ . '/../vendor/autoload.php';

// 2. Inicializa o motor de autenticação (AuthManager)
// Usamos o auth_bootstrap.php que já está validado e funcional
$auth = require_once __DIR__ . '/../config/auth_bootstrap.php';

// 3. Inicia a sessão para persistência do login
session_start();

$_SERVER['REQUEST_URI'] ?? '/'

// 4. Tratamento da URL (Roteamento)
$requestUri = parse_url(, PHP_URL_PATH);
$route = rtrim($requestUri $_SERVER['REQUEST_URI'] ?? '/');

// Se a rota for vazia após o rtrim, define como string vazia para bater com o array
if ($route === '') {
    $route = ''; 
}

$routes = [
    ''              => '/../pages/index.php',          // Agora bate com https://dominio.com/
    '/login'        => '/../pages/login.php',
    '/register'     => '/../pages/register.php',
    '/perfil'       => '/../pages/perfil.php',
    '/admin-panel'  => '/../pages/admin-panel.php',
    '/logout'       => '/../pages/logout.php',
];

// 6. Execução da Rota
if (array_key_exists($route, $routes)) {
    // Caminho físico do arquivo na pasta pages
    $pageFile = __DIR__ . $routes[$route];

    if (file_exists($pageFile)) {
        require $pageFile;
    } else {
        http_response_code(500);
        echo "Erro Interno: O arquivo da página [{$route}] não foi encontrado na pasta pages.";
    }
} else {
    // Caso a rota não exista
    http_response_code(404);
    include __DIR__ . '/../pages/404.php'; // Opcional: crie uma página de erro bonita
    echo "Página não encontrada no Mockup da Prado Systems.";
}