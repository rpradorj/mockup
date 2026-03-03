<?php
declare(strict_types=1);

/**
 * REGISTRO DE USUÁRIO - PRADO SYSTEMS
 * Corrigido para funcionar com o toggle global do footer.php.
 */

use PradoSystems\Auth\DTOs\AuthData;
use PradoSystems\Auth\Exceptions\AuthException;

$error = null;
$success = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $name     = $_POST['name'] ?? '';
        $email    = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirm  = $_POST['confirm_password'] ?? '';

        if ($password !== $confirm) {
            throw new AuthException("As senhas não coincidem.");
        }

        $registerData = new AuthData($email, $password, ['name' => $name]);
        $auth->register($registerData);

        $success = "Conta criada com sucesso! Você já pode acessar o sistema.";

    } catch (AuthException $e) {
        $error = $e->getMessage();
    }
}
?>

<?php include __DIR__ . '/../includes/head.php'; ?>

<body class="bg-[#0a0b14] flex items-center justify-center min-h-screen p-6 font-['Inter']">
    <div class="w-full max-w-[460px] bg-[#11131f] p-10 rounded-2xl shadow-2xl border border-gray-800/40">
        
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-violet-600/10 rounded-2xl border border-violet-600/20 mb-6">
                <i class="fa-solid fa-user-plus text-violet-600 text-2xl"></i>
            </div>
            <h1 class="text-white text-3xl font-bold font-['Montserrat'] mb-2 tracking-tight">Criar Conta</h1>
            <p class="text-gray-500 text-sm">Junte-se à plataforma da <span class="text-violet-500 font-semibold">Prado Systems</span></p>
        </div>

        <?php if ($error): ?>
            <div class="bg-red-500/10 border border-red-500/20 text-red-400 p-4 mb-6 rounded-xl flex items-center gap-3">
                <i class="fa-solid fa-triangle-exclamation"></i>
                <p class="text-xs font-semibold"><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 p-4 mb-6 rounded-xl flex items-center gap-3">
                <i class="fa-solid fa-circle-check"></i>
                <p class="text-xs font-semibold"><?= htmlspecialchars($success) ?></p>
            </div>
        <?php endif; ?>

        <form action="/register" method="POST" class="space-y-5">
            
            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1">Nome Completo</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-600">
                        <i class="fa-solid fa-signature text-sm"></i>
                    </span>
                    <input type="text" name="name" required placeholder="Ex: Ronaldo Prado" 
                           class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl pl-11 pr-4 py-3.5 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1">E-mail</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-600">
                        <i class="fa-solid fa-envelope text-sm"></i>
                    </span>
                    <input type="email" name="email" required placeholder="seu@email.com" 
                           class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl pl-11 pr-4 py-3.5 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all">
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1">Senha</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-600">
                        <i class="fa-solid fa-lock text-sm"></i>
                    </span>
                    <input type="password" name="password" required placeholder="••••••••"
                           class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl pl-11 pr-12 py-3.5 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all">
                    <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-600 hover:text-violet-500">
                        <i class="fa-regular fa-eye text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1">Confirmar Senha</label>
                <div class="relative group">
                    <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-600">
                        <i class="fa-solid fa-check-double text-sm"></i>
                    </span>
                    <input type="password" name="confirm_password" required placeholder="••••••••"
                           class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl pl-11 pr-12 py-3.5 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all">
                    <button type="button" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-600 hover:text-violet-500">
                        <i class="fa-regular fa-eye text-sm"></i>
                    </button>
                </div>
            </div>

            <div class="flex items-start gap-3 py-2">
                <input type="checkbox" required class="mt-1 w-4 h-4 rounded border-gray-800 bg-[#08090f] text-violet-600 cursor-pointer">
                <label class="text-[11px] text-gray-500 leading-tight">
                    Li e concordo com os <a href="#" class="text-violet-600 hover:underline">Termos de Uso</a>.
                </label>
            </div>

            <button type="submit" 
                    class="w-full bg-violet-600 hover:bg-violet-700 text-white font-bold py-4 rounded-xl shadow-lg transition-all active:scale-[0.98] mt-2 flex items-center justify-center gap-2">
                <span>Finalizar Cadastro</span>
                <i class="fa-solid fa-circle-arrow-right text-xs"></i>
            </button>
        </form>

        <div class="mt-8 text-center border-t border-gray-800/50 pt-6">
            <p class="text-sm text-gray-500 font-medium">
                Já é membro? <a href="/login" class="text-violet-600 hover:text-violet-400 font-bold ml-1">Fazer Login</a>
            </p>
        </div>
    </div>
</body>

<?php include __DIR__ . '/../includes/footer.php'; ?>