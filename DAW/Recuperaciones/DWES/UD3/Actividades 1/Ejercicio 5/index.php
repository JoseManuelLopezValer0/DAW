<?php
// Escribe un script que muestre una figura geométrica utilizando el formato svg. Para ello el script mostrará formulario con un radio button con las figuras disponibles: círculo, rectángulo, cuadrado y un cuadro de texto para seleccionar el color. En función de la figura elegida, el script solicitará los datos necesarios para su visualización.

if (isset($_POST['enviar'])) {
    $figura = $_POST['figura'];
    $color = $_POST['color'];
    if ($figura == 'circulo') {
        echo "<a href='index.php'>Volver</a>
        <form action='index.php' method='post'>
        <label for='radio'>Radio:</label>
        <input type='number' name='radio' id='radio'>
        <input type='hidden' name='color' value='$color'>
        <input type='hidden' name='figura' value='$figura'>
        <input type='submit' name='enviar' value='Enviar'>
        </form>";
        if (isset($_POST['radio'])) {
            $radio = $_POST['radio'];
            echo "<svg height='100' width='100'>
            <circle cx='50' cy='50' r='$radio' stroke='black' stroke-width='3' fill='$color' />
            </svg>";
        }
    } elseif ($figura == 'rectangulo') {
        echo "<a href='index.php'>Volver</a>
        <form action='index.php' method='post'>
        <label for='ancho'>Ancho:</label>
        <input type='number' name='ancho' id='ancho'>
        <label for='alto'>Alto:</label>
        <input type='number' name='alto' id='alto'>
        <input type='hidden' name='color' value='$color'>
        <input type='hidden' name='figura' value='$figura'>
        <input type='submit' name='enviar' value='Enviar'>
        </form>";
        if (isset($_POST['ancho'])) {
            $ancho = $_POST['ancho'];
            $alto = $_POST['alto'];
            echo "<svg height='100' width='100'>
            <rect width='$ancho' height='$alto' style='fill:$color;stroke-width:3;stroke:rgb(0,0,0)' />
            </svg>";
        }
    } elseif ($figura == 'cuadrado') {
        echo "<a href='index.php'>Volver</a>
        <form action='index.php' method='post'>
        <label for='lado'>Lado:</label>
        <input type='number' name='lado' id='lado'>
        <input type='hidden' name='color' value='$color'>
        <input type='hidden' name='figura' value='$figura'>
        <input type='submit' name='enviar' value='Enviar'>
        </form>";
        if (isset($_POST['lado'])) {
            $lado = $_POST['lado'];
            echo "<svg height='100' width='100'>
            <rect width='$lado' height='$lado' style='fill:$color;stroke-width:3;stroke:rgb(0,0,0)' />
            </svg>";
        }
    }
} else {
    echo "<form action='index.php' method='post'>
    <input type='radio' name='figura' value='circulo' id='circulo'>
    <label for='circulo'>Círculo</label>
    <input type='radio' name='figura' value='rectangulo' id='rectangulo'>
    <label for='rectangulo'>Rectángulo</label>
    <input type='radio' name='figura' value='cuadrado' id='cuadrado'>
    <label for='cuadrado'>Cuadrado</label>
    <br>
    <label for='color'>Color:</label>
    <input type='color' name='color' id='color'>
    <br>
    <input type='submit' name='enviar' value='Enviar'>
    </form>";
}
