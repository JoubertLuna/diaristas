### Projeto Sistema LARAVEL DIARISTAS

Desenvolvido por Joubert Luna

### Instalando o projeto

### Clonar o repositório

....
Aqui
....

### Instalar as dependências

......
composer install
......

Ou em Ambiente de Desenvolvimento

......
composer update
......

### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto
configurar os detalhes da aplicação e conexão com o banco de dados.

### Criar a estrutura no banco de dados

.....
php artisan migrate
.....

### Criar usuário admin

.....
php artisan db:seed
usuário é gerado de forma automatica havendo a necessidade de olhar no banco qual o E-mail.
senha: @admin123 
.....

### Iniciar o Servidor de desenvolvimento

.....
php artisan serve
.....
