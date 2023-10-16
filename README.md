

<body>
    <h1>README - API de Cadastro, Edição e Exclusão de Usuários</h1>
    <p>Este é um projeto em Laravel que oferece uma API para gerenciar usuários, incluindo operações de cadastro, edição e exclusão.</p>
    <h2>Recursos da API</h2>
    <ul>
        <li><strong>Cadastro de Usuário:</strong> Permite criar um novo usuário.</li>
        <li><strong>Edição de Usuário:</strong> Permite atualizar informações de um usuário existente.</li>
        <li><strong>Exclusão de Usuário:</strong> Permite remover um usuário.</li>
    </ul>

    <h2>Requisitos</h2>
    <ul>
        <li>PHP 7.4 ou superior</li>
        <li>Composer</li>
        <li>Laravel 8.x</li>
        <li>Um banco de dados compatível com Laravel (por exemplo, MySQL)</li>
    </ul>

    <h2>Configuração</h2>

    

### Passo a passo
Clone Repositório


Copie os arquivos docker-compose.yml, Dockerfile e o diretório docker/ para o seu projeto
```sh
cp -rf setup-docker-laravel/* app-laravel/
```
```sh
cd app-laravel/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="Nomedoseuapp"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)

</body>
