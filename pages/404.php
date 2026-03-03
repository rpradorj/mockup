<?php
declare(strict_types=1);
/**
 * PÁGINA 404 - NÃO ENCONTRADO
 * Exibida quando o roteador não encontra a rota no array $routes.
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página Não Encontrada | Prado Systems</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-montserrat { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 h-screen flex items-center justify-center p-6">

    <div class="max-w-md w-full text-center">
        <div class="mb-8 relative">
            <h1 class="text-[12rem] font-black text-gray-200 leading-none font-montserrat select-none">404</h1>
            <div class="absolute inset-0 flex items-center justify-center mt-8">
                <div class="bg-white p-4 rounded-2xl shadow-xl border border-gray-100 transform -rotate-6">
                    <i class="fa-solid fa-compass-slash text-6xl text-teal-600 animate-pulse"></i>
                </div>
            </div>
        </div>

        <h2 class="text-3xl font-bold text-gray-800 font-montserrat mb-4 tracking-tight">Ops! Caminho perdido.</h2>
        <p class="text-gray-500 mb-10 leading-relaxed">
            A página que você está procurando não existe no Mockup da <span class="font-semibold text-teal-600">Prado Systems</span> ou foi movida para uma nova rota.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/" class="inline-flex items-center justify-center px-6 py-3 bg-teal-600 text-white font-bold rounded-xl shadow-lg shadow-teal-200 hover:bg-teal-700 hover:-translate-y-1 transition-all duration-200">
                <i class="fa-solid fa-house-chimney mr-2"></i> Voltar ao Início
            </a>
            
            <a href="mailto:suporte@pradosystems.com" class="inline-flex items-center justify-center px-6 py-3 bg-white border border-gray-200 text-gray-600 font-bold rounded-xl hover:bg-gray-50 transition-all">
                <i class="fa-solid fa-headset mr-2"></i> Relatar Erro
            </a>
        </div>

        <p class="mt-12 text-xs text-gray-400 uppercase tracking-widest font-bold">
            &copy; 2026 Prado Systems - Mockup v2.6
        </p>
    </div>

</body>
</html>