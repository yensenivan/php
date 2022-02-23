<?php
$aProductos = array();
$aProductos[0] = array(
  "nombre" => "Smart TV 55 4K UHD",
  "marca" => "Hitachi",
  "modelo" => "554KS20",
  "stock" => 60,
  "precio" => 58000
);
$aProductos[1] = array(
  "nombre" => "Samsung Galaxy A30 Blanco",
  "marca" => "Samsung",
  "modelo" => "Galaxy A30",
  "stock" => 0,
  "precio" => 22000
);
$aProductos[2] = array(
  "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
  "marca" => "Surrey",
  "modelo" => "553AIQ1201E",
  "stock" => 1,
  "precio" => 45000
);
$aProductos[3] = array(
  "nombre" => "Impresora Hp Laser",
  "marca" => "Hp",
  "modelo" => "P111w",
  "stock" => 3,
  "precio" => 15000
);
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
      <div class="coll-12 text-center py-5">
        <h1>Listado de Productos</h1>
      </div>
    </div>
    <table class="table table-striped">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Marca</th>
        <th scope="col">Modelo</th>
        <th scope="col">Precio</th>
        <th scope="col">Stock</th>
        <th scope="col">Accion</th>
      </tr>

      <?php
      $subtotal = 0;
      for ($i = 0; $i < count($aProductos); $i++) {
        echo "<tr>";
        echo "<td>" . $aProductos[$i]["nombre"] . "</td>";
        echo "<td>" . $aProductos[$i]["marca"] . "</td>";
        echo "<td>" . $aProductos[$i]["modelo"] . "</td>";
        echo "<td>" . $aProductos[$i]["precio"] . "</td>";
        echo "<td>" . $aProductos[$i]["stock"] . "</td>";
        echo "<td><button class=\"btn btn-primary\">Comprar</button></td>";
        echo "</tr>";
        $subtotal += $aProductos[$i]["precio"];
      }
      ?>
    </table>
  </main>
  <div class="row">
  <div class="coll-12 text-center py-5">
      <h3>El subtotal es $ <?php echo $subtotal; ?></h3>
    </div>
  </div>
</body>