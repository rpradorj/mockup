<?php include '../includes/head.php'; ?>

<div class="flex min-h-screen">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8 bg-gray-50">
        <?php include '../includes/header.php'; ?>
        
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat']">Pedidos</h1>
                <p class="text-sm text-gray-500">Monitore suas vendas e o status de cada transação.</p>
            </div>
            
            <div class="flex gap-2">
                <button class="bg-white border border-gray-200 text-gray-600 px-4 py-2 rounded-lg hover:bg-gray-50 transition-all text-sm font-semibold shadow-sm flex items-center gap-2">
                    <i class="fa-solid fa-download text-teal-600"></i> Exportar CSV
                </button>
            </div>
        </div>

        <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm mb-6 flex flex-wrap gap-4 items-center">
            <div class="flex-1 min-w-[200px]">
                <label class="text-[10px] font-bold text-gray-400 uppercase ml-1">Pesquisar</label>
                <div class="relative mt-1">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                        <i class="fa-solid fa-magnifying-glass text-xs"></i>
                    </span>
                    <input type="text" placeholder="Nome, E-mail ou ID..." class="w-full pl-9 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:ring-2 focus:ring-teal-500/10 focus:border-teal-500 outline-none">
                </div>
            </div>
            
            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase ml-1">Status</label>
                <select class="mt-1 block w-full pl-3 pr-10 py-2 text-sm border-gray-200 border rounded-lg focus:ring-teal-500 focus:border-teal-500 outline-none">
                    <option>Todos os Status</option>
                    <option>Aprovado</option>
                    <option>Pendente</option>
                    <option>Cancelado</option>
                </select>
            </div>

            <div>
                <label class="text-[10px] font-bold text-gray-400 uppercase ml-1">Período</label>
                <input type="date" class="mt-1 block w-full px-3 py-2 text-sm border-gray-200 border rounded-lg focus:ring-teal-500 focus:border-teal-500 outline-none">
            </div>
        </div>

        <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">ID / Data</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Cliente</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Produto</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-center">Valor</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-gray-800 text-sm">#ORD-9921</p>
                            <p class="text-[10px] text-gray-400 font-bold uppercase">01/03/2026 - 14:30</p>
                        </td>
                        <td class="px-6 py-4 text-sm font-semibold text-gray-700">João Silva Moraes</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Curso de Marketing...</td>
                        <td class="px-6 py-4 text-center font-black text-gray-800 text-sm">R$ 297,00</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase bg-green-50 text-green-600 border border-green-100">Aprovado</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 text-gray-400 hover:text-teal-600 transition-colors" title="Ver Detalhes">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <p class="font-bold text-gray-800 text-sm">#ORD-9920</p>
                            <p class="text-[10px] text-gray-400 font-bold uppercase">01/03/2026 - 12:15</p>
                        </td>
                        <td class="px-6 py-4 text-sm font-semibold text-gray-700">Maria Oliveira</td>
                        <td class="px-6 py-4 text-sm text-gray-500">Mentoria Premium</td>
                        <td class="px-6 py-4 text-center font-black text-gray-800 text-sm">R$ 1.490,00</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase bg-orange-50 text-orange-600 border border-orange-100">Pendente</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 text-gray-400 hover:text-teal-600 transition-colors" title="Ver Detalhes">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>