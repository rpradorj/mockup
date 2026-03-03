<header class="flex items-center justify-between mb-8 pb-4 border-b border-gray-100 bg-gray-50/50 sticky top-0 z-40 backdrop-blur-sm">
    
    <div class="flex items-center gap-4 flex-1">
        <button onclick="toggleSidebar()" class="lg:hidden p-2.5 text-gray-500 hover:bg-teal-50 hover:text-teal-600 rounded-xl transition-all border border-transparent active:scale-95">
            <i class="fa-solid fa-bars-staggered text-xl"></i>
        </button>

        <div class="relative w-full max-w-md hidden sm:block">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                <i class="fa-solid fa-magnifying-glass text-sm"></i>
            </span>
            <input type="text" 
                   class="block w-full pl-10 pr-4 py-2.5 border border-gray-200 rounded-xl bg-white text-sm placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-teal-500/5 focus:border-teal-500 transition-all shadow-sm" 
                   placeholder="Pesquisar por transações, alunos ou produtos...">
        </div>
    </div>

    <div class="flex items-center gap-2 md:gap-4">
        
        <button class="relative p-2.5 text-gray-400 hover:text-teal-600 hover:bg-teal-50 rounded-xl transition-all">
            <i class="fa-solid fa-bell text-lg"></i>
            <span class="absolute top-2.5 right-2.5 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white"></span>
        </button>

        <div class="h-8 w-px bg-gray-200 mx-1 hidden md:block"></div>

        <div class="flex items-center gap-3 pl-2 cursor-pointer group">
            <div class="text-right hidden md:block">
                <p class="text-sm font-bold text-gray-800 group-hover:text-teal-600 transition-colors">Ronaldo Prado</p>
                <p class="text-[10px] text-teal-600 font-black uppercase tracking-widest">Admin Master</p>
            </div>
            
            <div class="relative">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-teal-600 to-teal-400 flex items-center justify-center text-white font-bold text-sm shadow-sm border-2 border-white overflow-hidden group-hover:scale-105 transition-transform">
                    <span>RP</span>
                </div>
                <div class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
            </div>
            
            <i class="fa-solid fa-chevron-down text-[10px] text-gray-400 group-hover:text-teal-600 transition-colors hidden sm:block"></i>
        </div>
    </div>
</header>