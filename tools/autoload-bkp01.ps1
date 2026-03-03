# Definir diretório de trabalho
$baseDir = Get-Location
$assetsDir = New-Item -ItemType Directory -Force -Path "$baseDir\assets"

# URLs das dependências (conforme o seu arquivo)
$urlJs = "https://devsalesstudiopro.com.br/assets/index-C4LLdIVz.js"
$urlCss = "https://devsalesstudiopro.com.br/assets/index-Bp1A1bw0.css"

# Download dos arquivos
Write-Host "Baixando dependências..." -ForegroundColor Cyan
Invoke-WebRequest -Uri $urlJs -OutFile "$assetsDir\index-C4LLdIVz.js"
Invoke-WebRequest -Uri $urlCss -OutFile "$assetsDir\index-Bp1A1bw0.css"

# Ler o HTML original e atualizar as rotas para local
$htmlPath = "$baseDir\dashboard.html"
$newHtmlPath = "$baseDir\dashboard_local.html"
$content = Get-Content -Path $htmlPath -Raw

$content = $content -replace 'https://devsalesstudiopro.com.br/assets/index-C4LLdIVz.js', './assets/index-C4LLdIVz.js'
$content = $content -replace 'https://devsalesstudiopro.com.br/assets/index-Bp1A1bw0.css', './assets/index-Bp1A1bw0.css'

$content | Set-Content -Path $newHtmlPath
Write-Host "Sucesso! Use o arquivo dashboard_local.html para testes." -ForegroundColor Green