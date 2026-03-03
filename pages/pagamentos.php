<?php include '../includes/head.php'; ?>

<div class="flex min-h-screen">
    <?php include '../includes/sidebar.php'; ?>
    
    <main class="flex-1 ml-64 p-8 bg-gray-50">
        <?php include '../includes/header.php'; ?>
        
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 font-['Montserrat']">Configurações de Pagamento</h1>
            <p class="text-sm text-gray-500">Configure suas chaves de API, métodos de recebimento e taxas.</p>
        </div>

        <div class="flex gap-8 border-b border-gray-200 mb-8">
            <button class="pb-4 text-sm font-bold text-teal-600 border-b-2 border-teal-600">Métodos de Recebimento</button>
            <button class="pb-4 text-sm font-bold text-gray-400 hover:text-gray-600 transition-colors">Checkout Personalizado</button>
            <button class="pb-4 text-sm font-bold text-gray-400 hover:text-gray-600 transition-colors">Extrato e Taxas</button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center gap-3">
                            <div class="bg-indigo-50 p-2 rounded-lg text-indigo-600">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">Cartão de Crédito</h3>
                                <p class="text-xs text-gray-400">Aceite as principais bandeiras em até 12x.</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                        </label>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Parcelamento Máximo</label>
                            <select class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none">
                                <option>12x com juros</option>
                                <option>6x sem juros</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase">Juros ao Cliente (%)</label>
                            <input type="text" value="2.99" class="w-full p-2 bg-gray-50 border border-gray-200 rounded-lg text-sm focus:border-teal-500 outline-none">
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <div class="flex items-center gap-3">
                            <div class="bg-teal-50 p-2 rounded-lg text-teal-600">
                                <i class="fa-solid fa-qrcode"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800">PIX</h3>
                                <p class="text-xs text-gray-400">Recebimento instantâneo com menor taxa.</p>
                            </div>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-600"></div>
                        </label>
                    </div>
                    <div class="p-4 bg-teal-50 border border-teal-100 rounded-lg">
                        <p class="text-xs text-teal-700 font-medium leading-relaxed">
                            <i class="fa-solid fa-circle-info mr-1"></i>
                            O pagamento via PIX oferece aprovação imediata e as taxas são reduzidas para 0.99% por transação.
                        </p>
                    </div>
                </div>

            </div>

            <div class="space-y-6">
                <div class="bg-gray-900 p-6 rounded-2xl text-white shadow-xl relative overflow-hidden">
                    <div class="relative z-10">
                        <p class="text-xs font-bold text-teal-400 uppercase tracking-widest mb-1">Saldo Disponível</p>
                        <h2 class="text-3xl font-black font-['Montserrat'] mb-6">R$ 12.450,80</h2>
                        <button class="w-full py-3 bg-teal-600 hover:bg-teal-700 rounded-xl font-bold text-sm transition-all">
                            Solicitar Saque
                        </button>
                    </div>
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-teal-500/10 rounded-full"></div>
                </div>

                <div class="bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                    <h4 class="font-bold text-gray-800 mb-4 flex items-center gap-2 text-sm">
                        <i class="fa-solid fa-shield-halved text-teal-600"></i> Segurança Antifraude
                    </h4>
                    <p class="text-xs text-gray-400 mb-4 leading-relaxed">
                        Seu sistema está operando com **Proteção Nível 3**. Transações suspeitas são bloqueadas automaticamente.
                    </p>
                    <div class="w-full bg-gray-100 rounded-full h-1.5">
                        <div class="bg-teal-600 h-1.5 rounded-full" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include '../includes/footer.php'; ?>