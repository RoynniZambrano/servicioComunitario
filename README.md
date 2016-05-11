Proyecto Servicio Comunitario

Requisitos:
1. Symfony 2.7
2. apache2
3. php 5.5 
4. mysql
5. composer

Instrucciones de instalacion (via transferencia de archivo)

1. Copiar carpeta ServicioComunitario en el servidor apache destino.

continuar en el paso 5

Instrucciones de instalacion (Via Git)

1. Crear una carpeta llamada ServicioComunitario en el servidor apache con `mkdir ServicioComunitario`

2. inicializar un repositorio vacio dentro de la carpeta ServicioComunitario -> `git init`

3. Crear un puntero al repositorio -> `git remote add origin git@gitlab.com:rzambrano2/ServicioComunitario.git`

4. Halar los cambios existentes en github -> `git pull -u origin master`
nota: para subir/cambios en el repositorio, es ne

continuar en el paso 5

Instrucción Genericas

5. Debido a que en el repositorio no se encuentra la carpeta vendor, hay que instalar las depedencia del proyecto. una vez instalado composer en la maquina local. ejecutar -> `composer update`

6. ejecutar los siguientes comandos dentro del proyecto: -> 


7. luego ir a la ruta /servidorlocal/ServicioComunitario/app, y ejecutamos los siguientes comandos: -> `chmod -R 777 cache/` y `chmod -R 777 logs/`

Ya puedes abrir el navegador e ir a la siguiente ruta 
`http://localhost/ServicioComunitario/web/app.php/SC` nota: localhost es el nombre del servidor apache local.



Configuracion de la base de datos del proyecto
1. (base de datos - mysql) para que el sistema funcione correctamente es necesario crear un usuario con todos los privilegios llamado 'SC' y contraseña 'serviciocomunitario', ademas de crear una base de datos llamada ServicioComunitario. En el archivo /app/config/parameters.yml se encuentra la configuracion de la bases de datos en symfony.

2. importar el script ServicioComunitario.sql que se encuentra en la ruta db/ServicioComunitario.sql en la base de datos recien creada. este script contiene las tablas y la informacion inicial.



notas extras:

instalacion composer:
curl -sS https://getcomposer.org/installer | php

comando para actualizar  carpeta vendor:
composer vendor


configuracion shh_rsa. esto para poder subir/bajar cambios en el repositorio de gitlab.

comando para generarla la clave en caso de no tenerla: 
ssh-keygen -t rsa -C "roynny51@gmail.com" 

comando para consultar la clave ssh del equipo.
cat ~/.ssh/id_rsa.pub


actualizar symfony
composer update symfony/symfony
composer update





Notas de Symfony

1. Limpiar cache de produccion:
`php app/console cache:clear --env=prod --no-debug`

2. Limpiar cache de desarrollo:
`php app/console cache:clear --env=dev --no-debug`

3. Generating a CRUD Controller Based on a Doctrine Entity:
`php app/console generate:doctrine:crud --entity=AcmeBlogBundle:Post --format=annotation --with-write --no-interaction`


Notas de Doctrine

1. Crear BD especificada en app/config/parameters.yml:
   `php app/console doctrine:database:create`

2. Crear una entidad de forma asistida:
`php app/console doctrine:generate:entity`

3. Generar getters, setters y algo mas en las entidades (de 3 formas):

`php app/console doctrine:generate:entities Acme/StoreBundle/Entity/Product`

`php app/console doctrine:generate:entities Acme/StoreBundle/`

`php app/console doctrine:generate:entities Acme`

4. Actualizar tablas en la BD:
`php app/console doctrine:schema:update --force`

5. Generate Entities from an Existing Database:
`php app/console doctrine:mapping:import --force AcmeBlogBundle xml`
`php app/console doctrine:mapping:convert annotation ./src`
`php app/console doctrine:generate:entities AcmeBlogBundle`


Notas de Git

Git global setup

1. git config --global user.name "roynny"
2. git config --global user.email "roynny51@gmail.com"

Create a new repository

1. mkdir ServicioComunitario
2. cd ServicioComunitario
3. git init
4. touch README.md
5. git add README.md
6. git commit -m "first commit"
7. git remote add origin git@gitlab.com:rzambrano2/ServicioComunitario.git
8. git push -u origin master


Push an existing Git repository

1. cd existing_git_repo
2. git remote add origin git@gitlab.com:rzambrano2/ServicioComunitario.git
3. git push -u origin master



Informacion adicional

Para visualizar archivos .md en el navegador chrome visitar [Markdown Preview](https://chrome.google.com/webstore/detail/markdown-preview/jmchmkecamhbiokiopfpnfgbidieafmd)