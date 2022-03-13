# challenge-laravel

> Api Challengue

### Requisitos

1.  Laravel 9

2.  php ^8.0.3

3.  composer 2

4.  Docker container
        mysql
        adminer
        apache

### Development

1.  Antes de empezar a desarrollar tenemos que instalar las dependencias de
    nuestro proyecto usando composer

```
composer install
```

2.  Una vez instaladas tenemos que crear nuestro archivo .env para manejar
    variables de entorno

```
touch .env 
```

3.  Se creará un archivo .env en el root del proyecto, llenar ese archivo con las
    siguientes variables

```
APP_ENV=development
APP_DEBUG=true
APP_KEY=SomeRandomString
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=db_excel
DB_USERNAME=root
DB_PASSWORD=123456


CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=info@gmail.co
MAIL_PASSWORD='****'
MAIL_ENCRYPTION=ssl
```

4. Generar la "Application Key" del proyecto

```
php artisan key:generate
```


## Scope
1. MIGRATION - Creación de tablas y modelos relacionales
2. API - Creación de endpoints 
3. CONFIG - Configuración del proyecto
	- Entorno Docker
	- GITHUB
	- DEPLOY
