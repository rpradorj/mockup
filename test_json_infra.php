<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

// 1. Carregar o nosso AuthManager saneado
$auth = require __DIR__ . '/config/auth_bootstrap.php';

echo "🚀 Iniciando teste de infraestrutura JSON...\n";

// 2. Dados de teste
$testEmail = 'ronaldo_' . time() . '@prado.com'; // E-mail único por execução
$testData = new \PradoSystems\Auth\DTOs\AuthData(
    $testEmail,
    'senha_segura_123',
    ['name' => 'Ronaldo Prado Teste']
);

try {
    echo "📝 Tentando registrar usuário: {$testEmail}...\n";

    // 3. Executar a Action de Registro
    // No seu pacote, o método é register() e ele executa a Action internamente
    $auth->register($testData); 
    $result = true; // Se chegou aqui sem Exception, consideramos sucesso

    if ($result) {
        echo "✅ Sucesso! Usuário registrado via Action.\n";

        // 4. Validar se o arquivo físico foi escrito
        $jsonFile = __DIR__ . '/data/users.json';
        if (file_exists($jsonFile)) {
            $content = file_get_contents($jsonFile);
            if (str_contains($content, $testEmail)) {
                echo "💾 Verificação Física: O e-mail foi encontrado no arquivo users.json!\n";
            } else {
                echo "❌ Erro: O arquivo existe, mas o e-mail não foi encontrado lá.\n";
            }
        } else {
            echo "❌ Erro Crítico: O arquivo users.json não foi criado na pasta data/.\n";
        }
    }
} catch (\Exception $e) {
    echo "💥 Falha no teste: " . $e->getMessage() . "\n";
    echo "Linha: " . $e->getLine() . "\n";
}

echo "\n🏁 Teste finalizado.\n";
