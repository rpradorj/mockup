<?php
declare(strict_types=1);

/**
 * NOTA: Este arquivo é invocado pelo roteador em public/index.php.
 * As variáveis $auth e $_SESSION já estão disponíveis no escopo global.
 */

use PradoSystems\Auth\DTOs\AuthData;
use PradoSystems\Auth\Exceptions\AuthException;

$error = null;
$email = '';

// 1. Processamento do Formulário (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Executamos o login através do Manager ($auth) instanciado no bootstrap
        $authData = new AuthData($email, $password);
        $sessionToken = $auth->login($authData);

        // Sucesso: Persistimos o token e o e-mail na sessão do PHP
        $_SESSION['user_token'] = $sessionToken;
        $_SESSION['user_email'] = $email;

        // Redireciona para a rota raiz (que o roteador aponta para home.php)
        header('Location: /');
        exit;

    } catch (AuthException $e) {
        $error = $e->getMessage();
    }
}
?>

<?php include __DIR__ . '/../includes/head.php'; ?>

<body class="bg-[#0a0b14] flex items-center justify-center min-h-screen p-6 font-['Inter']">
    <div class="w-full max-w-[440px] bg-[#11131f] p-10 rounded-2xl shadow-2xl border border-gray-800/40">
        
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-violet-600/10 rounded-2xl border border-violet-600/20 mb-6">
                <i class="fa-solid fa-shield-halved text-violet-600 text-2xl"></i>
            </div>
            <h1 class="text-white text-3xl font-bold font-['Montserrat'] mb-2 tracking-tight">Prado Systems</h1>
            <p class="text-gray-500 text-sm">Entre com suas credenciais para acessar</p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 mb-6 rounded-xl flex items-center gap-3 animate-in fade-in duration-300">
                <i class="fa-solid fa-circle-exclamation"></i>
                <p class="text-xs font-semibold"><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>

        <form action="/login" method="POST" class="space-y-6">
            
            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-[0.15em] ml-1">E-mail Corporativo</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-600 group-focus-within:text-violet-500 transition-colors">
                        <i class="fa-solid fa-envelope text-sm"></i>
                    </span>
                    <input type="email" 
                           name="email"
                           value="<?= htmlspecialchars($email) ?>"
                           required
                           placeholder="seu@email.com" 
                           class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl pl-11 pr-4 py-4 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all placeholder:text-gray-700">
                </div>
            </div>

            <div class="space-y-2">
                <div class="flex justify-between items-center px-1">
                    <label class="text-xs font-bold text-gray-400 uppercase tracking-[0.15em]">Sua Senha</label>
                    <a href="#" class="text-[11px] text-violet-600 hover:text-violet-400 font-bold transition-colors">Esqueceu?</a>
                </div>			
				
            <div class="relative group">
                <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-600 group-focus-within:text-violet-500 transition-colors">
                    <i class="fa-solid fa-lock text-sm"></i>
                </span>
                <input type="password" name="password" required placeholder="••••••••"
                       class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl pl-11 pr-12 py-4 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all placeholder:text-gray-700">
                
                <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-600 hover:text-violet-500 transition-colors">
                    <i class="fa-regular fa-eye text-sm"></i>
                </button>
            </div>			
				
            </div>

            <div class="flex items-center gap-3 py-1">
                <input type="checkbox" id="remember" class="w-4 h-4 rounded border-gray-800 bg-[#08090f] text-violet-600 focus:ring-violet-600/50 cursor-pointer">
                <label for="remember" class="text-xs text-gray-500 font-medium cursor-pointer select-none">
                    Mantenha minha sessão ativa por 30 dias
                </label>
            </div>

            <button type="submit" 
                    class="w-full bg-violet-600 hover:bg-violet-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-violet-900/40 transition-all transform active:scale-[0.98] mt-4 flex items-center justify-center gap-2">
                <span>Entrar no Painel</span>
                <i class="fa-solid fa-arrow-right text-xs"></i>
            </button>
        </form>

        <div class="mt-10 text-center border-t border-gray-800/50 pt-8">
            <p class="text-sm text-gray-500 font-medium">
                Novo na Prado Systems? 
                <a href="/register" class="text-violet-600 hover:text-violet-400 font-bold ml-1 transition-colors underline-offset-4 hover:underline">Solicitar Acesso</a>
            </p>
        </div>
    </div>
</body>

<?php include __DIR__ . '/../includes/footer.php'; ?>