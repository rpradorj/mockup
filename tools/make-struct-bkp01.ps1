# make-struct.ps1
# Gerador de Estrutura para o Mockup Sales Studio

$basePath = Get-Location

# 1. Definição da Árvore de Diretórios
$directories = @(
    "assets/css",
    "assets/js",
    "assets/img",
    "assets/fonts",
    "includes",
    "pages"
)

Write-Host "--- Iniciando criação da estrutura em $basePath ---" -ForegroundColor Cyan

foreach ($dir in $directories) {
    $path = Join-Path $basePath $dir
    if (!(Test-Path $path)) {
        New-Item -ItemType Directory -Path $path -Force | Out-Null
        Write-Host "[OK] Pasta criada: $dir" -ForegroundColor Green
    }
}

# 2. Criação dos Scaffolds (Arquivos Base)

# Includes: head.php
$headContent = @"
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Studio | Mockup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/tailwind.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-gray-50 font-['Inter']">
"@
$headContent | Set-Content -Path "includes/head.php" -Encoding UTF8

# Includes: sidebar.php
$sidebarContent = @"
<aside id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-white border-r border-gray-100 z-50 transition-transform">
    <div class="p-6">
        <img src="../assets/img/logo.svg" alt="Sales Studio" class="h-8">
    </div>
    <nav class="mt-4">
        <a href="index.php" class="flex items-center px-6 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all">
            <i class="fa-solid fa-chart-line w-5"></i> <span class="ml-3">Dashboard</span>
        </a>
        <a href="produtos.php" class="flex items-center px-6 py-3 text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all">
            <i class="fa-solid fa-box w-5"></i> <span class="ml-3">Produtos</span>
        </a>
    </nav>
</aside>
"@
$sidebarContent | Set-Content -Path "includes/sidebar.php" -Encoding UTF8

# Pages: index.php (Exemplo de Scaffold de Página)
$indexContent = @"
<?php include '../includes/head.php'; ?>
<div class="flex">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8">
        <?php include '../includes/header.php'; ?>
        
        <header class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800">Dashboard de Vendas</h1>
            <p class="text-gray-500">Bem-vindo de volta, Ronaldo Prado.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            </div>
    </main>
</div>
<?php include '../includes/footer.php'; ?>
"@
$indexContent | Set-Content -Path "pages/index.php" -Encoding UTF8

# 3. Criando arquivos vazios para os demais componentes
$emptyFiles = @(
    "assets/js/chart-mockup.js",
    "includes/header.php",
    "includes/footer.php",
    "pages/produtos.php",
    "pages/pagamentos.php",
    "pages/pedidos.php",
    "pages/membros.php",
    "pages/perfil.php"
)

foreach ($file in $emptyFiles) {
    if (!(Test-Path $file)) {
        New-Item -ItemType File -Path $file -Force | Out-Null
        Write-Host "[OK] Arquivo criado: $file" -ForegroundColor Gray
    }
}

Write-Host "`n--- Estrutura pronta! ---" -ForegroundColor Cyan
Write-Host "Dica: Execute 'php -S localhost:8000' dentro da pasta 'pages' para testar." -ForegroundColor Yellow