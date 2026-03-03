<aside class="fixed inset-y-0 left-0 w-64 bg-[#11131f] border-r border-gray-800/40 z-50 transition-all">
    <div class="flex flex-col h-full">
        
        <div class="p-8">
            <div class="flex items-center gap-3">
                <div class="bg-violet-600 p-2.5 rounded-xl shadow-lg shadow-violet-900/20">
                    <i class="fa-solid fa-cube text-white text-xl"></i>
                </div>
                <div>
                    <span class="block font-black text-white text-lg leading-none font-['Montserrat'] tracking-tighter">PRADO</span>
                    <span class="text-[10px] text-violet-500 font-bold uppercase tracking-[0.2em]">Systems</span>
                </div>
            </div>
        </div>

        <nav class="flex-1 px-4 space-y-2">
            
            <p class="px-4 text-[10px] font-black text-gray-600 uppercase tracking-[0.3em] mb-4 mt-6">Navegação</p>
            
            <a href="/" class="flex items-center gap-3 px-4 py-3 bg-violet-600/10 text-violet-400 rounded-xl font-bold text-sm transition-all border border-violet-600/20">
                <i class="fa-solid fa-house-user w-5"></i> Dashboard
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-white/[0.03] hover:text-gray-200 rounded-xl font-semibold text-sm transition-all group">
                <i class="fa-solid fa-cart-flatbed w-5 group-hover:text-violet-500 transition-colors"></i> Meus Pedidos
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-white/[0.03] hover:text-gray-200 rounded-xl font-semibold text-sm transition-all group">
                <i class="fa-solid fa-wallet w-5 group-hover:text-violet-500 transition-colors"></i> Financeiro
            </a>

            <div class="pt-8">
                <p class="px-4 text-[10px] font-black text-gray-600 uppercase tracking-[0.3em] mb-4">Privacidade</p>
                
                <a href="/perfil" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-white/[0.03] hover:text-gray-200 rounded-xl font-semibold text-sm transition-all group">
                    <i class="fa-solid fa-user-shield w-5 group-hover:text-violet-500 transition-colors"></i> Segurança e Perfil
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-500 hover:bg-white/[0.03] hover:text-gray-200 rounded-xl font-semibold text-sm transition-all group">
                    <i class="fa-solid fa-circle-info w-5 group-hover:text-violet-500 transition-colors"></i> Ajuda & Suporte
                </a>
            </div>
        </nav>

        <div class="p-4 mt-auto">
            <div class="bg-[#0a0b14] rounded-2xl p-4 border border-gray-800/50">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-8 h-8 rounded-full bg-violet-600/20 flex items-center justify-center border border-violet-600/30">
                        <i class="fa-solid fa-user text-[10px] text-violet-400"></i>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-[10px] font-bold text-gray-300 truncate"><?= htmlspecialchars($_SESSION['user_email'] ?? 'Visitante') ?></p>
                        <p class="text-[9px] text-gray-600 uppercase font-black tracking-widest">Plano Free</p>
                    </div>
                </div>
                <a href="/logout" class="flex items-center justify-center gap-2 w-full py-2 bg-red-500/10 hover:bg-red-500 text-red-500 hover:text-white rounded-lg text-[11px] font-black transition-all duration-300 border border-red-500/20">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> SAIR
                </a>
            </div>
        </div>
    </div>
</aside>