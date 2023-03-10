<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Gestion de multas</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <h1>Gestion de multas</h1>
  <div>
    <?php
    $videos = array(
      "video1" => "https://www.youtube.com/embed/WDlf21iG_zo",
      "video2" => "https://www.youtube.com/embed/1D5RFYu3NDs",
      "video3" => "https://www.youtube.com/embed/OzQ16tZXFRU"
    );
    $video = array_rand($videos);
    echo "<iframe width='560' height='315' src='" . $videos[$video] . "' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen autoplay='true'></iframe>";
    ?>
  </div>
  <br />
  <form action='index_view.php' method="POST">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <p></p>
    <div class="figura">
      <?php
      $figuras = array(
        "cuadrado" => "Cuadrado",
        "circulo" => "Circulo",
        "triangulo" => "Triangulo"
      );
      $figura = array_rand($figuras);

      switch ($figura) {
        case "cuadrado":
          echo "<div class='cuadrado'value='cuadrado'></div>";
          break;
        case "circulo":
          echo "<div class='circulo' value='circulo'></div>";
          break;
        case "triangulo":
          echo "<div class='triangulo' value='triangulo'></div>";
          break;
      }
      ?>
      <input type="radio" name="figura" value="cuadrado">Cuadrado
      <input type="radio" name="figura" value="circulo">Circulo
      <input type="radio" name="figura" value="triangulo">Triangulo
      <input type="submit" value="Enviar">
    </div>
  </form>

  <?php

  ?>
</body>

</html>