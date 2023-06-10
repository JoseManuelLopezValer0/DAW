<h1>Gestión de Citas</h1>

<h2>Listado de Citas</h2>
<?php
require_once("app/controller/sesionController.php");
$sesion = new sesion();
$citas = $sesion->getCitas();
echo "<table style='border-collapse: collapse' width='100%' cellpadding='3' cellspacing='3' align='center' text-align='center'>";
echo "<tr>";
echo "<th>Especialidad</th>";
echo "<th>Médico</th>";
echo "<th>Fecha</th>";
echo "<th>Acciones</th>";
echo "</tr>";
foreach ($citas as $cita) {
    echo "<tr>";
    echo "<td>" . $cita["especialidad"] . "</td>";
    echo "<td>" . $cita["medico"] . "</td>";
    echo "<td>" . $cita["fecha_hora"] . "</td>";
    echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
    echo "</tr>";
}
echo "</table>";
?>



<h2>Nueva Cita</h2>
<form>
    <label for="especialidad">Especialidad:</label>
    <?php
    require_once("app/controller/sesionController.php");
    $sesion = new sesion();
    $especialidades = $sesion->getEspecialidades();
    echo "<select id='especialidad'>";
    foreach ($especialidades as $especialidad) {
        echo "<option value='" . $especialidad["id"] . "'>" . $especialidad["especialidad"] . "</option>";
    }
    echo "</select>";
    ?>
    <br>
    <label for="medico">Médico:</label>
    <!-- solo son visibles los médicos de la especialidad seleccionada -->
    <?php
    require_once("app/controller/sesionController.php");
        $sesion = new sesion();
        $medicos = $sesion->getMedicos();
        echo "<select id='medico'>";
        foreach ($medicos as $medico) {
            echo "<option value='" . $medico["id"] . "'>" . $medico["nombre"] . "</option>";
        }
        echo "</select>";
    ?>
    <br>
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" value="2020-06-01" min="2020-06-01" max="2020-06-30">
    <br>
    <button type="submit">Programar Cita</button>
</form>