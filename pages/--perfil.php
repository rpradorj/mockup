<?php include '../includes/head.php'; ?>

<div class="flex min-h-screen">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8 bg-gray-50">
        <?php include '../includes/header.php'; ?>
        
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat']">Minha Conta</h1>
            <p class="text-sm text-gray-500">Gerencie suas informações pessoais e preferências de segurança.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm text-center">
                    <div class="relative inline-block mb-4">
                        <div class="w-32 h-32 rounded-full bg-teal-100 flex items-center justify-center text-4xl font-black text-teal-700 border-4 border-white shadow-md overflow-hidden">
                            <span>RP</span>
                        </div>
                        <button class="absolute bottom-0 right-0 bg-teal-600 text-white p-2 rounded-full border-2 border-white hover:bg-teal-700 transition-colors shadow-sm">
                            <i class="fa-solid fa-camera text-sm"></i>
                        </button>
                    </div>
                    <h3 class="font-bold text-gray-800 text-lg">Ronaldo Prado</h3>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-6">Administrador Master</p>
                    
                    <div class="flex flex-col gap-2">
                        <button class="w-full py-2.5 bg-gray-900 text-white rounded-lg font-bold text-sm hover:bg-gray-800 transition-all">Ver Perfil Público</button>
                        <button class="w-full py-2.5 bg-white border border-gray-200 text-gray-600 rounded-lg font-bold text-sm hover:bg-gray-50 transition-all">Sair da Conta</button>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                    <h4 class="font-bold text-gray-800 text-sm mb-4">Sessões Ativas</h4>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-desktop text-teal-600"></i>
                            <div class="text-[11px]">
                                <p class="font-bold text-gray-700">Windows 11 - Chrome</p>
                                <p class="text-gray-400">Curitiba, Brasil (Atual)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-id-card text-teal-600"></i> Informações Pessoais
                    </h3>
                    
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Nome Completo</label>
                            <input type="text" value="Ronaldo Prado" class="w-full p-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 focus:ring-2 focus:ring-teal-500/10 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">E-mail Principal</label>
                            <input type="email" value="ronaldo@pradosystems.com" class="w-full p-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Telefone / WhatsApp</label>
                            <input type="text" value="+55 (41) 99999-9999" class="w-full p-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Empresa</label>
                            <input type="text" value="Prado Systems" class="w-full p-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none transition-all">
                        </div>
                        
                        <div class="md:col-span-2 pt-4 border-t border-gray-50">
                            <button type="submit" class="bg-teal-600 text-white font-bold py-2.5 px-8 rounded-lg hover:bg-teal-700 transition-all shadow-sm">
                                Salvar Alterações
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-white p-8 rounded-xl border border-gray-100 shadow-sm">
                    <h3 class="font-bold text-gray-800 mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-lock text-teal-600"></i> Alterar Senha
                    </h3>
                    
                    <form class="space-y-4 max-w-md">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Senha Atual</label>
                            <input type="password" placeholder="••••••••" class="w-full p-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Nova Senha</label>
                            <input type="password" class="w-full p-2.5 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none transition-all">
                        </div>
                        <div class="pt-2">
                            <button type="submit" class="bg-gray-100 text-gray-600 font-bold py-2 px-6 rounded-lg hover:bg-gray-200 transition-all text-xs">
                                Atualizar Senha
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>