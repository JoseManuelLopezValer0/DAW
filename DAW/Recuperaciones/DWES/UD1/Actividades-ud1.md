# Actividades evaluables UD1

## Actividad 1

---

### Instalación y configuración de XAMPP.

![ej1-1]()

### Instalación de phpmyadmin.

### Prueba la instalación creando un porfolio personal básico

---

## Actividad 2

---

### Descargar e instalar VirtualBox.

### Crear una máquina virtual con las siguientes especificaciones:

- Unbuntu Server.
- Apache.
- MySQL.
- PHP.
- Phpmyadmin

### Prueba la instalación creando un porfolio personal básico

---

## Actividad 3

---

### Instalación y configuración del entorno de trabajo.

### Instalación y configuración del Servidor.

### Desarrollo de una página JSP que muestre el mensaje “Hello World”.

### Desarrollo de una aplicación que calcule el doble de un número.

---

## Actividad 4

---

### Descarga e instala Vagrant.

### Comprueba que la instalación se realizó correctamente lanzando el comando que muestra la versión instalada.

### Añade el proyecto Laravel Homstead seleccionando VirtualBox:
    vagrant box add laravel/homestead

### Clonar el proyecto de Laravel Homstead en el directorio de trabajo:
    git clone https://github.com/laravel/homestead.git


### Inicia homstead
    init.bat

### Observa el archivo de configuración Homestead.yaml, especialmente en folders, y sites. Es posible tener múltiples proyectos en la misma máquina.

###  Lanza la máquina.
    vagrant up

### Prueba a conectarte a la máquina por ssh.


### Modifica el fichero de hosts para asignar nombre y dirección ip del archivo de configuración
    Homstead.yaml

### Crea una página que muestre el mensaje “Hello Vagrant”