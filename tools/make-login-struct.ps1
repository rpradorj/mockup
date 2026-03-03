# make-struct.ps1
# Script para expandir a estrutura do Sales Studio com autenticação

$basePath = Get-Location
$pagesPath = Join-Path $basePath "pages"
$includesPath = Join-Path $basePath "includes"

# Lista de novos arquivos de autenticação para adicionar ao projeto
$newFiles = @(
    "login.php",
    "register.php",
    "forgot-password.php"
)

# Garante que a pasta pages existe
if (!(Test-Path $pagesPath)) {
    New-Item -ItemType Directory -Path $pagesPath | Out-Null
    Write-Host "Pasta 'pages' criada." -ForegroundColor Cyan
}

foreach ($fileName in $newFiles) {
    $fullPath = Join-Path $pagesPath $fileName
    
    # Validação: Só cria o arquivo se ele NÃO existir (Preservação de dados)
    if (!(Test-Path $fullPath)) {
        # Template básico para as páginas Dark Mode baseadas no moc-login
        $content = @"
<?php include '../includes/head.php'; ?>
<body class="bg-[#0a0b14] flex items-center justify-center min-h-screen">
    <div class="w-full max-w-[440px] p-6">
        <div class="bg-[#11131f] p-10 rounded-2xl shadow-2xl border border-gray-800/50">
            <h1 class="text-white text-3xl font-bold text-center mb-2 font-['Montserrat']">Página em Construção</h1>
            <p class="text-gray-500 text-center text-sm mb-8">Baseada no mockup de autenticação.</p>
        </div>
    </div>
</body>
<?php include '../includes/footer.php'; ?>
"@
        New-Item -ItemType File -Path $fullPath -Value $content | Out-Null
        Write-Host "Arquivo criado: $fileName" -ForegroundColor Green
    } else {
        Write-Host "Arquivo ignorado (já existe): $fileName" -ForegroundColor Yellow
    }
}

Write-Host "`nProcesso concluído! As novas rotas de autenticação foram mapeadas." -ForegroundColor White -BackgroundColor DarkGreen