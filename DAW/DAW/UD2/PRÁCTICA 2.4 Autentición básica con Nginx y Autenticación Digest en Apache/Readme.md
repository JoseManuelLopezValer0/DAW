```
C.F.G.S de DAW
Despliegue de Aplicaciones Web
```

# PRÁCTICA 2.4: Autentición básica con Nginx y Autenticación Digest en

# Apache

```
Objetivo
En uno de nuestros servidores web, solicitaremos autenticación cuando se quiera acceder a una parte
del site restringida.
```

```
Realización : 1 h desarrollo
```

## A. Procedimiento para autenticación básica en Nginx

```
Leer https://picodotdev.github.io/blog-bitix/2020/08/configurar-autenticacion-basica-en-los-
servidores-web-nginx-y-apache/
```

```
Las directivas auth_basic y auth_basic_user_file habilitan y definen la ubicación de la
base de datos de usuarios del mecanismo de autenticación Basic, respectivamente:
```

_1_ Activar la autenticación Basic en el archivo nginx.conf cuando se acceda a una parte del contenido en tu web bajo el directorio “zona*segura”
\_Nota: recuerda que podemos activar la autenticación sólo a nivel de un server (virtualhost) y no de todo Nginx*

_2_ Cree el archivo de contraseña Nginx y agregue la primera cuenta de usuario _tuapellido htpasswd -c /etc/nginx/.htpasswd user_ Crear cuentas de usuario adicionales,: usuario _tuapellido_

```
Muestra el contenido del archivo.
```

3 Edite el archivo de configuración de Nginx para que al acceder al subdirectorio denominado “zona_segura”

4 Demuestra el funcionamiento correcto.

5 Muestra en el fichero de log los errores de autenticación provocados en las pruebas.

C.F.G.S de DAW
Despliegue de Aplicaciones Web

## B. Procedimiento Apache

```
Las Directivas de Autenticación Digest son: AuthType, AuthName, AuthUserFile,AuthGroupFile y Require
```

1. Lee la práctica completa y activar los módulos necesarios
2. Indica en el siguiente código para qué sirve cada directiva (mete comentario en cada línea
   explicándolo): _AuthType Digest AuthName "1ASIR" AuthUserFile /usr/local/apache/passwd/digest Require user pepe_

```
¿Que valores puede tomar la directiva Require? Explica su uso?
```

3. Controla el acceso a un determinado Directory de tu site mediante Autenticación Digest por usuario.
    Usa un fichero cuyo contenido sea nombre de cuentas de usuario. Crea dos usuario llamados _tuapellido1 y tuapellido2_ y permite que se pueda acceder **sólo** con tuapellido2.
   _Nota: No olvides activar el módulo de Digest que se llama auth_digest_
4. Prueba a entrar con éxito con el usuario correcto y a fallar con el incorrecto Captura error en el fichero de log (ver pregunta 6)
5. Autenticación de un grupo (llámalo grupo_tuapellido)

```
Nota: en el archivo de grupo pueden definirse más de un grupo (uno por línea del fichero).
Se necesita activar el módulo authz_groupfile
```

6. ¿Qué código de error ha enviado Apache durante la ejecución? Muéstralo ¿Qué significa?
