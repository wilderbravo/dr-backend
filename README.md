# Backend Laravel

Proyecto para creación de un API con 2 tablas y 4 endpoints (2 por cada tabla).

## Instalación

Se debe tener instalado previamente [Docker](https://www.docker.com/).


## ¿Cómo se usa?

Descargar las imágenes de los contenedores e iniciarlos, mediante el siguiente comando:
```python
docker-compose up -d
```

Ingresar al contenedor del aplicativo laravel con el siguiente comando:
```python
docker exec -ti laravel_app bash
```
Moverse a la carpeta api:
```python
cd api
```
Realizar la instalación de las dependencias:
```python
composer install
```
Ejecutar el comando de migración:
```python
php artisan migrate
```
Y luego cargar datos ficticios para las peticiones:
```python
php artisan db:seed
```
Finalmente, si el entorno de ejecución es linux, ejecutar los siguientes permisos:
```python
sudo chmod 777 -R storage/*
```
## Endpoints

Verificar en un  navegador o en un cliente como Postman los siguientes enlaces:

```python
http://localhost:8000/api/public/index.php/api/personas/
http://localhost:8000/api/public/index.php/api/personas/1
http://localhost:8000/api/public/index.php/api/articles/
http://localhost:8000/api/public/index.php/api/articles/1
```

## License

[MIT](https://choosealicense.com/licenses/mit/)