<?php
declare(strict_types=1);

/**
 * HOME - DASHBOARD DO CLIENTE (DARK MODE)
 * Integrado ao Prado Systems Auth v2.6
 */

// 1. Proteção de Acesso
if (!isset($_SESSION['user_token'])) {
    header('Location: /login');
    exit;
}

$userEmail = $_SESSION['user_email'] ?? 'Usuário';
$userToken = $_SESSION['user_token'] ?? '';
?>

<?php include __DIR__ . '/../includes/head.php'; ?>

<body class="bg-[#0a0b14] font-['Inter'] text-gray-300">
    <div class="flex">
        <?php include __DIR__ . '/../includes/cli-sidebar.php'; ?>
        
        <main class="flex-1 ml-64 p-10 min-h-screen">
            
            <header class="flex justify-between items-center mb-12">
                <div>
                    <h1 class="text-white text-3xl font-bold font-['Montserrat'] tracking-tight">Dashboard</h1>
                    <p class="text-gray-500 text-sm mt-1">Bem-vindo à sua área segura, <span class="text-violet-500 font-semibold"><?= htmlspecialchars($userEmail) ?></span></p>
                </div>

                <div class="flex items-center gap-4">
                    <div class="flex flex-col items-end mr-2">
                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Sessão Ativa</span>
                        <span class="text-[10px] font-mono text-violet-400 opacity-70"><?= substr($userToken, 0, 12) ?>...</span>
                    </div>
                    <a href="/logout" class="bg-red-500/10 hover:bg-red-500 text-red-500 hover:text-white border border-red-500/20 px-5 py-2.5 rounded-xl transition-all duration-300 text-sm font-bold flex items-center gap-2">
                        <i class="fa-solid fa-power-off text-xs"></i> Sair
                    </a>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                
                <div class="bg-[#11131f] p-8 rounded-2xl border border-gray-800/50 hover:border-violet-600/30 transition-all group">
                    <div class="flex justify-between items-center mb-6">
                        <div class="w-12 h-12 bg-violet-600/10 rounded-xl flex items-center justify-center text-violet-500 group-hover:bg-violet-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-box-archive text-xl"></i>
                        </div>
                        <span class="text-[10px] font-black text-violet-400 bg-violet-400/10 px-2 py-1 rounded-md uppercase tracking-tighter">Sincronizado</span>
                    </div>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-[0.2em] mb-1">Meus Pedidos</p>
                    <h2 class="text-4xl font-black text-white font-['Montserrat']">08</h2>
                </div>

                <div class="bg-[#11131f] p-8 rounded-2xl border border-gray-800/50 hover:border-violet-600/30 transition-all group">
                    <div class="flex justify-between items-center mb-6">
                        <div class="w-12 h-12 bg-blue-600/10 rounded-xl flex items-center justify-center text-blue-500 group-hover:bg-blue-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-file-contract text-xl"></i>
                        </div>
                    </div>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-[0.2em] mb-1">Contratos</p>
                    <h2 class="text-4xl font-black text-white font-['Montserrat']">02</h2>
                </div>

                <div class="bg-[#11131f] p-8 rounded-2xl border border-gray-800/50 hover:border-violet-600/30 transition-all group">
                    <div class="flex justify-between items-center mb-6">
                        <div class="w-12 h-12 bg-emerald-600/10 rounded-xl flex items-center justify-center text-emerald-500 group-hover:bg-emerald-600 group-hover:text-white transition-all">
                            <i class="fa-solid fa-award text-xl"></i>
                        </div>
                    </div>
                    <p class="text-xs font-bold text-gray-500 uppercase tracking-[0.2em] mb-1">Prado Points</p>
                    <h2 class="text-4xl font-black text-white font-['Montserrat']">1.250</h2>
                </div>

            </div>

            <div class="bg-[#11131f] rounded-2xl border border-gray-800/50 overflow-hidden">
                <div class="px-8 py-6 border-b border-gray-800/50 flex justify-between items-center">
                    <h3 class="text-white font-bold font-['Montserrat'] tracking-tight">Atividades Recentes</h3>
                    <a href="#" class="text-xs font-bold text-violet-500 hover:text-violet-400 transition-colors uppercase tracking-widest">Ver Tudo</a>
                </div>
                
                <div class="divide-y divide-gray-800/30">
                    <div class="px-8 py-6 flex items-center gap-6 hover:bg-white/[0.02] transition-all">
                        <div class="w-2 h-2 rounded-full bg-violet-600 shadow-[0_0_8px_rgba(124,58,237,0.6)]"></div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-300 font-medium">Login realizado com sucesso via <span class="text-violet-400">Prado Auth</span></p>
                            <p class="text-[10px] text-gray-600 font-bold uppercase mt-1">Hoje, às <?= date('H:i') ?></p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-700 text-xs"></i>
                    </div>

                    <div class="px-8 py-6 flex items-center gap-6 hover:bg-white/[0.02] transition-all">
                        <div class="w-2 h-2 rounded-full bg-gray-800"></div>
                        <div class="flex-1">
                            <p class="text-sm text-gray-400 font-medium">Seu contrato de serviços foi atualizado para v2.6</p>
                            <p class="text-[10px] text-gray-600 font-bold uppercase mt-1">28 de Fevereiro, 2026</p>
                        </div>
                        <i class="fa-solid fa-chevron-right text-gray-700 text-xs"></i>
                    </div>
                </div>
            </div>

            <footer class="mt-12 text-center">
                <p class="text-[10px] text-gray-700 font-bold uppercase tracking-[0.4em]">Prado Systems &copy; 2026 | Arquitetura Hexagonal</p>
            </footer>

        </main>
    </div>
</body>

<?php include __DIR__ . '/../includes/footer.php'; ?>