<?php
$fecha = date("d/m/Y");
$nombre = "nelson daniel tarche";
$edad = 33;
$aPeliculas = array("volver al futuro", "titani", "el despues de mañana");
?>

<!DOCTYPE hyml>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ficha Personal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <main class="container">
    <div class="row">
      <div class="col-12 text-center py-5">
        <h1>Ficha Personal</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <table class="table table-hove border">
          <tbody>
            <tr>
            <th>Fecha:</th>
            <td><?php echo $fecha; ?></td>
            </tr>
            <tr>
            <th>Nombre:</th>
            <td><?php echo $nombre; ?></td>
            </tr>
            <tr>
              <th>Edad:</th>
              <td><?php echo $edad; ?></td>
            </tr>
            <tr>
              <th>Películas Favoritas</th>
              <td><?php echo $aPeliculas[0]; ?><br>
                  <?php echo $aPeliculas[1]; ?><br>
                  <?php echo $aPeliculas[2]; ?>
              </td>
            </tr>
          </tbody>
      </div>
    </div>
  </main>
</body>