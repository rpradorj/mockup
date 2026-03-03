<?php include '../includes/head.php'; ?>

<div class="flex min-h-screen">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8 bg-gray-50">
        <?php include '../includes/header.php'; ?>
        
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat']">Área de Membros</h1>
                <p class="text-sm text-gray-500">Gestão de alunos, turmas e progresso de consumo.</p>
            </div>
            
            <button class="bg-teal-600 hover:bg-teal-700 text-white font-bold py-2.5 px-6 rounded-lg transition-all flex items-center gap-2 shadow-sm">
                <i class="fa-solid fa-user-plus"></i> Convidar Membro
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-teal-50 text-teal-600 rounded-full flex items-center justify-center text-xl">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Total de Alunos</p>
                    <h3 class="text-xl font-black text-gray-800">2,540</h3>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-full flex items-center justify-center text-xl">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Certificados Emitidos</p>
                    <h3 class="text-xl font-black text-gray-800">892</h3>
                </div>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm flex items-center gap-4">
                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-full flex items-center justify-center text-xl">
                    <i class="fa-solid fa-signal"></i>
                </div>
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase">Média de Conclusão</p>
                    <h3 class="text-xl font-black text-gray-800">64%</h3>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                <h4 class="text-sm font-bold text-gray-700 uppercase tracking-widest">Alunos Recentes</h4>
                <div class="relative w-64">
                    <input type="text" placeholder="Procurar aluno..." class="w-full pl-4 pr-4 py-1.5 text-xs border border-gray-200 rounded-lg outline-none focus:border-teal-500">
                </div>
            </div>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-100">
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Aluno</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Acesso</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest">Progresso</th>
                        <th class="px-6 py-4 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-[10px] font-bold text-gray-500">AM</div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">Ana Martins</p>
                                    <p class="text-[10px] text-gray-400 lowercase font-medium">ana.martins@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-50 text-green-600 text-[10px] font-black rounded border border-green-100 uppercase tracking-tighter">Vitalício</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-24 bg-gray-100 rounded-full h-1.5">
                                    <div class="bg-teal-500 h-1.5 rounded-full" style="width: 75%"></div>
                                </div>
                                <span class="text-xs font-bold text-gray-600">75%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-gray-400 hover:text-teal-600"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-[10px] font-bold text-gray-500">RC</div>
                                <div>
                                    <p class="text-sm font-bold text-gray-800">Ricardo Costa</p>
                                    <p class="text-[10px] text-gray-400 lowercase font-medium">rcosta.dev@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-blue-50 text-blue-600 text-[10px] font-black rounded border border-blue-100 uppercase tracking-tighter">Anual</span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-24 bg-gray-100 rounded-full h-1.5">
                                    <div class="bg-teal-500 h-1.5 rounded-full" style="width: 30%"></div>
                                </div>
                                <span class="text-xs font-bold text-gray-600">30%</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="text-gray-400 hover:text-teal-600"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>