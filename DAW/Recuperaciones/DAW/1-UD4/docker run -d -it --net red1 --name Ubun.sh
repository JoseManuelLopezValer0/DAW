docker run -d -it --net red1 --name UbuntuServer -p 22:22 ubuntu:latest
docker run -d -it --net red1 --name UbuntuCliente ubuntu:latest

docker exec -it UbuntuServer /bin/bash