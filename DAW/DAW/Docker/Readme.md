# Docker comandos basicos
## 1 Crear la imagen

    docker run -d -it --name 'Nombre del contenedor' 'Nombre de la imagen'

## 2 Listado de Docker

    docker ps

## 3 Inspeccion de Docker

    docker inspect 'Nombre del contenedor'' 

## 4 Inicio de Docker por terminal

    docker exec -it 'Nombre del contenedor' bash