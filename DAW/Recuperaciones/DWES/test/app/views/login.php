<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form action="index.php?action=login" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required><br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br>

        <label for="captcha">Captcha: Seleccione los números menores de 10</label>
        <input type="checkbox" name="captcha[]" value="1"> 1
        <input type="checkbox" name="captcha[]" value="2"> 2
        <input type="checkbox" name="captcha[]" value="3"> 3
        <!-- Mostrar más opciones de 1 a 20 -->

        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
