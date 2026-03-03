<?php
declare(strict_types=1);

// 1. Carregar o nosso repositório de infraestrutura do Mockup
use App\Infrastructure\Repositories\JsonUserRepository;

// 2. Caminho do arquivo JSON
$jsonDbPath = __DIR__ . '/../data/users.json';
$repo = new JsonUserRepository($jsonDbPath);

// 3. Carregar todos os usuários (usando o método interno que criamos)
// Nota: Como o loadAll() é private no repo, vamos usar um truque simples 
// ou apenas ler o arquivo bruto para esta visualização rápida.
$jsonContent = file_exists($jsonDbPath) ? json_decode(file_get_contents($jsonDbPath), true) : [];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuários Cadastrados - Prado Systems</title>
    <link rel="stylesheet" href="assets/css/style.css"> <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
        .badge { padding: 4px 8px; border-radius: 4px; font-size: 0.8em; }
        .verified { background: #d4edda; color: #155724; }
    </style>
</head>
<body>
    <div class="container">
        <h1>👥 Usuários na Base JSON</h1>
        <p>Estes dados são persistidos em: <code>data/users.json</code></p>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($jsonContent)): ?>
                    <tr><td colspan="4">Nenhum usuário cadastrado ainda.</td></tr>
                <?php else: ?>
                    <?php foreach ($jsonContent as $user): ?>
                    <tr>
                        <td><code><?php echo htmlspecialchars($user['id']); ?></code></td>
                        <td><?php echo htmlspecialchars($user['name']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td>
                            <span class="badge verified">Verificado</span>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        
        <br>
        <a href="/register">➕ Cadastrar Novo Usuário</a>
    </div>
</body>
</html>
