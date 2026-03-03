# Definir diretórios
$baseDir = Get-Location
$assetsDir = New-Item -ItemType Directory -Force -Path "$baseDir\assets"
$fontsDir = New-Item -ItemType Directory -Force -Path "$baseDir\assets\fonts"

# URLs das dependências
$deps = @{
    "js_main"  = "https://devsalesstudiopro.com.br/assets/index-C4LLdIVz.js"
    "css_main" = "https://devsalesstudiopro.com.br/assets/index-Bp1A1bw0.css"
    "fa_css"   = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    "bs_icons" = "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
}

# Download das dependências principais
foreach ($key in $deps.Keys) {
    $fileName = Split-Path $deps[$key] -Leaf
    Write-Host "Baixando: $fileName..." -ForegroundColor Cyan
    Invoke-WebRequest -Uri $deps[$key] -OutFile "$assetsDir\$fileName"
}

# Ler o HTML e atualizar para referências locais
$htmlPath = "$baseDir\dashboard.html"
$localHtmlPath = "$baseDir\dashboard_offline.html"
$content = Get-Content -Path $htmlPath -Raw

# Substituições de caminhos remotos por locais
$content = $content -replace 'https://devsalesstudiopro.com.br/assets/index-C4LLdIVz.js', './assets/index-C4LLdIVz.js'
$content = $content -replace 'https://devsalesstudiopro.com.br/assets/index-Bp1A1bw0.css', './assets/index-Bp1A1bw0.css'
$content = $content -replace 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', './assets/all.min.css'
$content = $content -replace 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', './assets/bootstrap-icons.min.css'

# Remover pré-conexões externas para evitar latência offline
$content = $content -replace '<link rel="preconnect".*?>', ''

$content | Set-Content -Path $localHtmlPath
Write-Host "`nAmbiente offline preparado em dashboard_offline.html" -ForegroundColor Green