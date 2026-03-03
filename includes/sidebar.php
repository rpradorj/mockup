<aside id="sidebar" class="fixed left-0 top-0 h-full w-64 bg-white border-r border-gray-100 z-[60] flex flex-col transition-transform duration-300 ease-in-out -translate-x-full lg:translate-x-0">
    
    <div class="p-6 border-b border-gray-50 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="bg-teal-600 p-2 rounded-lg shadow-sm shadow-teal-200">
                <i class="fa-solid fa-rocket text-white"></i>
            </div>
            <span class="text-xl font-extrabold text-gray-800 tracking-tight font-['Montserrat']">
                Prado <span class="text-teal-600">Systems</span>
            </span>
        </div>

        <button onclick="toggleSidebar()" class="lg:hidden p-2 text-gray-400 hover:text-red-500 transition-colors">
            <i class="fa-solid fa-xmark text-xl"></i>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto py-4">
        <div class="px-6 mb-2">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Geral</p>
        </div>
        <ul class="space-y-1 mb-6">
            <li>
                <a href="index.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-chart-pie w-5 text-center"></i>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="produtos.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-box-archive w-5 text-center"></i>
                    <span class="ml-3">Produtos</span>
                </a>
            </li>
            <li>
                <a href="pedidos.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-cart-shopping w-5 text-center"></i>
                    <span class="ml-3">Pedidos</span>
                </a>
            </li>
        </ul>

        <div class="px-6 mb-2">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Gestão</p>
        </div>
        <ul class="space-y-1 mb-6">
            <li>
                <a href="membros.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-users w-5 text-center"></i>
                    <span class="ml-3">Área de Membros</span>
                </a>
            </li>
            <li>
                <a href="pagamentos.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-credit-card w-5 text-center"></i>
                    <span class="ml-3">Pagamentos</span>
                </a>
            </li>
        </ul>

        <div class="px-6 mb-2">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Sistema</p>
        </div>
        <ul class="space-y-1">
            <li>
                <a href="aplicacoes.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-layer-group w-5 text-center"></i>
                    <span class="ml-3">Aplicações</span>
                </a>
            </li>
            <li>
                <a href="perfil.php" class="flex items-center px-6 py-3 text-sm font-semibold text-gray-700 hover:bg-teal-50 hover:text-teal-600 transition-all border-l-4 border-transparent hover:border-teal-600">
                    <i class="fa-solid fa-user-gear w-5 text-center"></i>
                    <span class="ml-3">Minha Conta</span>
                </a>
            </li>

            <li>			
                <a href="/logout" class="text-red-600 hover:text-red-800">
                    <i class="fa-solid fa-right-from-bracket"></i> Sair do Sistema
                </a>		
            </li>			
        </ul>
    </nav>

    <div class="p-6 border-t border-gray-50">
        <button class="flex items-center justify-between w-full p-3 bg-gray-50 rounded-xl text-gray-500 hover:bg-gray-100 transition-all group">
            <div class="flex items-center">
                <i class="fa-solid fa-moon group-hover:text-indigo-500"></i>
                <span class="text-xs font-bold ml-3">Modo Escuro</span>
            </div>
            <div class="w-8 h-4 bg-gray-200 rounded-full relative">
                <div class="absolute left-1 top-1 w-2 h-2 bg-white rounded-full"></div>
            </div>
        </button>
    </div>
</aside>