/**
 * assets/js/chart-mockup.js
 * Lógica de renderização de gráficos para o mockup Sales Studio
 */

document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('salesChart');

    if (ctx) {
        // Configuração do gradiente de fundo (efeito de preenchimento suave abaixo da linha)
        const gradient = ctx.getContext('2d').createLinearGradient(0, 0, 0, 400);
        gradient.addColorStop(0, 'rgba(20, 184, 166, 0.2)'); // Teal com transparência
        gradient.addColorStop(1, 'rgba(20, 184, 166, 0)');   // Transparente

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['01 Mar', '02 Mar', '03 Mar', '04 Mar', '05 Mar', '06 Mar', '07 Mar'],
                datasets: [{
                    label: 'Vendas',
                    data: [12, 19, 15, 25, 22, 30, 28], // Dados fictícios para o mockup
                    borderColor: '#14b8a6', // Teal principal
                    borderWidth: 3,
                    fill: true,
                    backgroundColor: gradient,
                    tension: 0.4, // Curva suave da linha (Bezier)
                    pointRadius: 4,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#14b8a6',
                    pointHoverRadius: 6,
                    pointHoverBackgroundColor: '#14b8a6',
                    pointHoverBorderColor: '#fff'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false // Escondemos a legenda para um look mais clean como no mockup
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        backgroundColor: '#1f2937',
                        titleFont: { family: 'Inter', weight: 'bold' },
                        bodyFont: { family: 'Inter' }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: true,
                            color: '#f3f4f6',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#9ca3af',
                            font: { size: 11, family: 'Inter' }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: '#9ca3af',
                            font: { size: 11, family: 'Inter' }
                        }
                    }
                }
            }
        });
    }
});