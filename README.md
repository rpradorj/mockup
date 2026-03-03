# 🛡️ Prado Systems - Auth Mockup v2.6

Este repositório contém o Mockup funcional do ecossistema **Prado Systems**, focado na implementação de autenticação robusta e persistência desacoplada seguindo princípios de **Arquitetura Hexagonal**.

## 🚀 Arquitetura e Fluxo
O projeto utiliza um **Front Controller** para gerenciar rotas amigáveis e separa rigorosamente as regras de negócio (pacote canônico) da infraestrutura (este mockup).

* **Lógica de Core:** Consumida via `PradoSystems\Auth`.
* **Infraestrutura Local:** Implementações customizadas de Repositórios e Provedores em PHP 8.2+.
* **Persistência:** Sistema de arquivos JSON para portabilidade e testes rápidos.



## 🛠️ Tecnologias Utilizadas
* **PHP 8.2+** com tipagem estrita (`strict_types`).
* **Composer** para gerenciamento de dependências e Autoload PSR-4.
* **Tailwind CSS** para uma interface Dark Mode moderna.
* **Git/SSH** para versionamento e deploy seguro.

## 📂 Estrutura de Pastas
* `/config`: Bootstrapping e injeção de dependências do motor de Auth.
* `/data`: Armazenamento físico dos dados (`users.json`).
* `/pages`: Views e controladores específicos de cada rota.
* `/public`: Ponto de entrada do servidor (Front Controller).
* `/src`: Implementações de infraestrutura (Repositories, Factories, AuthProviders).

## 🔧 Como Rodar Localmente
1. Clone o repositório.
2. Certifique-se de que a pasta `data/` tenha permissão de escrita para o servidor web.
3. Execute `composer install` para gerar o autoload.
4. Acesse via `/public/index.php`.

---
**Desenvolvido por  Ronaldo Prado** *Prado Systems &copy; 2026 | Inovação e Segurança em Software*
