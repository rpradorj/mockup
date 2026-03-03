<?php
declare(strict_types=1);

/**
 * PÁGINA DE PERFIL - PRADO SYSTEMS
 * Exibe os dados do usuário autenticado no sistema.
 */

// 1. Proteção de Acesso
if (!isset($_SESSION['user_token'])) {
    header('Location: /login');
    exit;
}

$userEmail = $_SESSION['user_email'] ?? 'Não identificado';
$userToken = $_SESSION['user_token'] ?? 'Nenhum token ativo';

// Simulamos a data de criação baseada na persistência em memória do Mockup
$createdAt = date('d/m/Y H:i');
?>

<?php include __DIR__ . '/../includes/head.php'; ?>

<div class="flex">
    <?php include __DIR__ . '/../includes/cli-sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8 bg-gray-50 min-h-screen">
        <?php include __DIR__ . '/../includes/header.php'; ?>
        
        <div class="max-w-4xl">
            <div class="mb-8 mt-4">
                <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat'] tracking-tight">Meu Perfil</h1>
                <p class="text-gray-500 text-sm">Gerencie suas informações de segurança e preferências da conta.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm text-center">
                        <div class="w-24 h-24 bg-teal-50 text-teal-600 rounded-full flex items-center justify-center mx-auto mb-4 border-4 border-white shadow-md">
                            <i class="fa-solid fa-user-check text-4xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800"><?= htmlspecialchars($userEmail) ?></h3>
                        <p class="text-xs text-gray-400 font-semibold uppercase tracking-widest mt-1">Usuário Verificado</p>
                        
                        <div class="mt-6 pt-6 border-t border-gray-50">
                            <span class="text-[10px] font-bold text-gray-400 uppercase block mb-2">Status da Sessão</span>
                            <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-[10px] font-black">ONLINE</span>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                        <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                            <h4 class="font-bold text-gray-800 font-['Montserrat']">Dados de Identificação</h4>
                            <button class="text-xs font-bold text-teal-600 hover:text-teal-700">Editar</button>
                        </div>
                        <div class="p-6 space-y-4">
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">E-mail de Acesso</label>
                                <div class="p-3 bg-gray-50 rounded-lg border border-gray-100 text-gray-700 font-medium">
                                    <?= htmlspecialchars($userEmail) ?>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-[10px] font-bold text-gray-400 uppercase mb-1">ID da Sessão (Auth Token)</label>
                                <div class="p-3 bg-gray-50 rounded-lg border border-gray-100 font-mono text-[11px] text-teal-600 break-all">
                                    <?= $userToken ?>
                                </div>
                                <p class="mt-2 text-[10px] text-gray-400">Este token é gerado dinamicamente pelo Prado Auth System v2.6.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                        <h4 class="font-bold text-gray-800 font-['Montserrat'] mb-4">Segurança</h4>
                        <div class="flex items-center justify-between p-4 bg-orange-50 rounded-xl border border-orange-100">
                            <div class="flex items-center gap-4">
                                <i class="fa-solid fa-shield-halved text-orange-600 text-xl"></i>
                                <div>
                                    <p class="text-sm font-bold text-orange-800">Autenticação em Memória</p>
                                    <p class="text-xs text-orange-600">A sessão será expirada ao reiniciar o servidor.</p>
                                </div>
                            </div>
                            <a href="/logout" class="text-xs font-bold bg-orange-600 text-white px-3 py-2 rounded-lg hover:bg-orange-700 transition-colors">Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>