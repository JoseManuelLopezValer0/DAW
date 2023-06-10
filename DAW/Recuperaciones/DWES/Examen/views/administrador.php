<h2>Listado de usuarios</h2>
<?php
require_once("app/controller/sesionController.php");
$sesion = new sesion();
$usuarios = $sesion->getUsuarios();
echo "<table style='border-collapse: collapse' width='100%' cellpadding='3' cellspacing='3' align='center' text-align='center'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>usuario</th>";
echo "<th>Acciones</th>";
echo "</tr>";
foreach ($usuarios as $usuario) {
    echo "<tr>";
    echo "<td>" . $usuario["nombre"] . "</td>";
    echo "<td>" . $usuario["usuario"] . "</td>";
    echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
    echo "</tr>";
}
echo "</table>";
?>
<h2>Nuevo usuario</h2>
<form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario">
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">
    <br>
    <button type="submit">Crear usuario</button>
</form>
<h2>Listado de especialidades</h2>
<?php
require_once("app/controller/sesionController.php");
$sesion = new sesion();
$especialidades = $sesion->getEspecialidades();
echo "<table style='border-collapse: collapse' width='100%' cellpadding='3' cellspacing='3' align='center' text-align='center'>";
echo "<tr>";
echo "<th>Especialidad</th>";
echo "<th>Acciones</th>";
echo "</tr>";
foreach ($especialidades as $especialidad) {
    echo "<tr>";
    echo "<td>" . $especialidad["especialidad"] . "</td>";
    echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
    echo "</tr>";
}
echo "</table>";
?>
<h2>Nueva especialidad</h2>
<form>
    <label for="especialidad">Especialidad:</label>
    <input type="text" id="especialidad" name="especialidad">
    <br>
    <button type="submit">Crear especialidad</button>
</form>
<h2>Listado de médicos</h2>
<?php
require_once("app/controller/sesionController.php");
$sesion = new sesion();
$medicos = $sesion->getMedicos();
echo "<table style='border-collapse: collapse' width='100%' cellpadding='3' cellspacing='3' align='center' text-align='center'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Especialidad</th>";
echo "<th>Acciones</th>";
echo "</tr>";
foreach ($medicos as $medico) {
    echo "<tr>";
    echo "<td>" . $medico["nombre"] . "</td>";
    echo "<td>" . $medico["especialidad"] . "</td>";
    echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
    echo "</tr>";
}
echo "</table>";
?>
<h2>Nuevo médico</h2>
<form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <label for="especialidad">Especialidad:</label>
    <select id="especialidad" name="especialidad">
        <?php
        foreach ($especialidades as $especialidad) {
            echo "<option value='" . $especialidad["id"] . "'>" . $especialidad["especialidad"] . "</option>";
        }
        ?>
    </select>
    <br>
    <button type="submit">Crear médico</button>
</form>
<h2>Listado de pacientes</h2>
<?php
require_once("app/controller/sesionController.php");
$sesion = new sesion();
$pacientes = $sesion->getPacientes();
echo "<table style='border-collapse: collapse' width='100%' cellpadding='3' cellspacing='3' align='center' text-align='center'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Acciones</th>";
echo "</tr>";
foreach ($pacientes as $paciente) {
    echo "<tr>";
    echo "<td>" . $paciente["nombre"] . "</td>";
    echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
    echo "</tr>";
}
echo "</table>";
?>
<h2>Nuevo paciente</h2>
<form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <br>
    <button type="submit">Crear paciente</button>
</form>

<div style="height: 100px;"></div>