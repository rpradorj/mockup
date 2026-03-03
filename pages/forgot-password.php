<?php include '../includes/head.php'; ?>

<body class="bg-[#0a0b14] flex items-center justify-center min-h-screen p-6">
    <div class="w-full max-w-[440px] bg-[#11131f] p-10 rounded-2xl shadow-2xl border border-gray-800/40">
        
        <div class="flex justify-center mb-6">
            <div class="w-16 h-16 bg-violet-600/10 rounded-2xl flex items-center justify-center border border-violet-600/20">
                <i class="fa-solid fa-key text-violet-500 text-2xl"></i>
            </div>
        </div>

        <div class="text-center mb-8">
            <h1 class="text-white text-2xl font-bold font-['Montserrat'] mb-2">Recuperar Senha</h1>
            <p class="text-gray-500 text-sm leading-relaxed px-4">
                Esqueceu seus dados? Digite seu e-mail para receber um link de redefinição.
            </p>
        </div>

        <form action="login.php" method="POST" class="space-y-6">
            <div class="space-y-2">
                <label class="text-xs font-bold text-gray-400 uppercase tracking-widest ml-1">E-mail Cadastrado</label>
                <input type="email" 
                       placeholder="seu@email.com" 
                       required
                       class="w-full bg-[#08090f] border border-gray-800 text-gray-300 rounded-xl px-4 py-3.5 outline-none focus:border-violet-600 focus:ring-1 focus:ring-violet-600/50 transition-all placeholder:text-gray-700">
            </div>

            <button type="submit" 
                    class="w-full bg-violet-600 hover:bg-violet-700 text-white font-bold py-4 rounded-xl shadow-lg shadow-violet-900/20 transition-all transform active:scale-[0.98] mt-2">
                Enviar Instruções
            </button>
        </form>

        <div class="mt-8 text-center pt-6 border-t border-gray-800/50">
            <a href="login.php" class="text-sm font-bold text-gray-400 hover:text-violet-500 transition-colors flex items-center justify-center gap-2">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                Voltar para o Login
            </a>
        </div>
    </div>
</body>

<?php include '../includes/footer.php'; ?>