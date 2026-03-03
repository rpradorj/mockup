<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../assets/js/chart-mockup.js"></script>

    <script>
        // 1. Menu Sandwich
        const sidebar = document.getElementById('sidebar');
        function toggleSidebar() {
            if(sidebar) sidebar.classList.toggle('-translate-x-full');
        }

        // 2. Lógica Unificada para Mostrar/Esconder Senha
        // Selecionamos todos os ícones de olho
        document.querySelectorAll('.fa-eye, .fa-eye-slash').forEach(icon => {
            const button = icon.closest('button');
            
            if (button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Acha o container 'relative' mais próximo
                    const container = this.closest('.relative');
                    const input = container.querySelector('input');
                    const i = this.querySelector('i');

                    if (input.type === 'password') {
                        input.type = 'text';
                        i.className = 'fa-solid fa-eye-slash text-sm';
                    } else {
                        input.type = 'password';
                        i.className = 'fa-regular fa-eye text-sm';
                    }
                });
            }
        });
    </script>
</body>
</html>