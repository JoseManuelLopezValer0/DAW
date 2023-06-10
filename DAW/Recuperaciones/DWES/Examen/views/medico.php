<h1>Gestión de Citas</h1>


<h2>Listado de Citas</h2>
<?php
require_once("app/controller/sesionController.php");
$sesion = new sesion();
$citas = $sesion->getCitasListado();
echo "<table border='1' style='border-collapse: collapse' width='100%' cellpadding='3' cellspacing='3' align='center' text-align='center'>";
echo "<tr>";
echo "<th>Paciente</th>";
echo "<th>Fecha</th>";
echo "</tr>";
foreach ($citas as $cita) {
    echo "<tr>";
    echo "<td>" . $cita["paciente"] . "</td>";
    echo "<td>" . $cita["fecha_hora"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>