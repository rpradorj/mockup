<?php
$auth = require_once __DIR__ . '/../config/auth_bootstrap.php';

// Lógica simples de proteção para o Mockup
// session_start();
// if (!isset($_SESSION['user_token'])) {
//    header('Location: /pages/login.php');
//    exit;
// }
?>
<?php include '../includes/head.php'; ?>
<div class="flex">
    <?php include '../includes/sidebar.php'; ?>
    
<main class="flex-1 ml-64 p-8 bg-gray-50 min-h-screen">
        <?php include '../includes/header.php'; ?>
        
        <div class="flex justify-between items-end mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat']">Dashboard de Vendas</h1>
                <p class="text-gray-500">Bem-vindo de volta, Ronaldo Prado.</p>
            </div>
            
            <div class="flex gap-3">
                <div class="flex bg-white border border-gray-200 rounded-lg p-1 shadow-sm">
                    <button class="px-4 py-1.5 text-xs font-bold bg-teal-600 text-white rounded-md">Hoje</button>
                    <button class="px-4 py-1.5 text-xs font-bold text-gray-500 hover:text-teal-600 transition-colors">7 dias</button>
                    <button class="px-4 py-1.5 text-xs font-bold text-gray-500 hover:text-teal-600 transition-colors">30 dias</button>
                </div>
                <button class="bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-50 transition-colors text-sm font-semibold shadow-sm">
                    <i class="fa-solid fa-calendar-days mr-2 text-teal-600"></i> Filtrar
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="bg-teal-50 p-2 rounded-lg">
                        <i class="fa-solid fa-check-double text-teal-600"></i>
                    </div>
                    <span class="text-xs font-bold text-green-500 bg-green-50 px-2 py-1 rounded">+12%</span>
                </div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Vendas Aprovadas</p>
                <h2 class="text-2xl font-black text-gray-800 font-['Montserrat']">1,284</h2>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="bg-indigo-50 p-2 rounded-lg">
                        <i class="fa-solid fa-hand-holding-dollar text-indigo-600"></i>
                    </div>
                    <span class="text-xs font-bold text-indigo-500 bg-indigo-50 px-2 py-1 rounded">+5.4%</span>
                </div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Receita Líquida</p>
                <h2 class="text-2xl font-black text-gray-800 font-['Montserrat']">R$ 42.590,00</h2>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="bg-orange-50 p-2 rounded-lg">
                        <i class="fa-solid fa-chart-simple text-orange-600"></i>
                    </div>
                </div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Faturamento Total</p>
                <h2 class="text-2xl font-black text-gray-800 font-['Montserrat']">R$ 58.200,00</h2>
            </div>

            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                <div class="flex justify-between items-start mb-4">
                    <div class="bg-purple-50 p-2 rounded-lg">
                        <i class="fa-solid fa-tag text-purple-600"></i>
                    </div>
                </div>
                <p class="text-xs font-bold text-gray-400 uppercase tracking-wider">Ticket Médio</p>
                <h2 class="text-2xl font-black text-gray-800 font-['Montserrat']">R$ 245,50</h2>
            </div>
        </div>

        <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm mb-8">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-bold text-gray-800 font-['Montserrat'] text-lg">Desempenho de Vendas</h3>
                <div class="flex items-center gap-4 text-xs font-bold uppercase tracking-widest text-gray-400">
                    <span class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-teal-500"></div> Este Mês</span>
                    <span class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-gray-200"></div> Mês Passado</span>
                </div>
            </div>
            <div class="h-80 w-full">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </main>
	
</div>
<?php include '../includes/footer.php'; ?>
