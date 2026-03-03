<?php include '../includes/head.php'; ?>

<div class="flex min-h-screen">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8 bg-gray-50">
        <?php include '../includes/header.php'; ?>
        
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat']">Produtos</h1>
                <p class="text-sm text-gray-500">Gerencie seu catálogo e estoque de produtos.</p>
            </div>
            
            <button class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2.5 px-6 rounded-lg transition-all flex items-center gap-2 shadow-sm">
                <i class="fa-solid fa-plus"></i> Novo Produto
            </button>
        </div>

        <div class="bg-white p-4 rounded-t-xl border border-gray-100 flex justify-between items-center">
            <div class="flex gap-2">
                <button class="px-4 py-2 text-xs font-bold bg-gray-100 text-gray-600 rounded-md hover:bg-gray-200 transition-colors">Todos</button>
                <button class="px-4 py-2 text-xs font-bold text-gray-500 hover:bg-gray-100 rounded-md transition-colors">Ativos</button>
                <button class="px-4 py-2 text-xs font-bold text-gray-500 hover:bg-gray-100 rounded-md transition-colors">Rascunhos</button>
            </div>
            <div class="relative w-64">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                    <i class="fa-solid fa-magnifying-glass text-xs"></i>
                </span>
                <input type="text" placeholder="Filtrar produtos..." class="w-full pl-9 pr-4 py-2 text-sm border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500/10 focus:border-teal-500">
            </div>
        </div>

        <div class="bg-white rounded-b-xl border border-t-0 border-gray-100 shadow-sm overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 border-y border-gray-100">
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Produto</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-center">Vendas</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Preço</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-lg bg-gray-100 flex-shrink-0 flex items-center justify-center overflow-hidden border border-gray-200">
                                    <i class="fa-solid fa-image text-gray-300"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-800 text-sm">Curso de Marketing Digital</p>
                                    <p class="text-xs text-gray-400 font-medium">ID: #88291</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center font-bold text-gray-700 text-sm">452</td>
                        <td class="px-6 py-4 font-bold text-gray-800 text-sm">R$ 297,00</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase bg-green-50 text-green-600 border border-green-100">Ativo</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button class="p-2 text-gray-400 hover:text-teal-600 transition-colors"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-lg bg-gray-100 flex-shrink-0 flex items-center justify-center overflow-hidden border border-gray-200">
                                    <i class="fa-solid fa-image text-gray-300"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-gray-800 text-sm">Mentoria Premium (Anual)</p>
                                    <p class="text-xs text-gray-400 font-medium">ID: #88305</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center font-bold text-gray-700 text-sm">89</td>
                        <td class="px-6 py-4 font-bold text-gray-800 text-sm">R$ 1.490,00</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase bg-orange-50 text-orange-600 border border-orange-100">Rascunho</span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <div class="flex justify-end gap-2">
                                <button class="p-2 text-gray-400 hover:text-teal-600 transition-colors"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="p-2 text-gray-400 hover:text-red-500 transition-colors"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="bg-gray-50 px-6 py-3 border-t border-gray-100 flex items-center justify-between text-xs text-gray-500 font-bold uppercase tracking-widest">
                <span>Exibindo 2 de 24 produtos</span>
                <div class="flex gap-2">
                    <button class="p-2 hover:text-teal-600 transition-colors"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="p-2 hover:text-teal-600 transition-colors"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>