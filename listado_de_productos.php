<?php
$aProductos = array ();
$aProductos[0] = array("nombre" =>"Smart TV 55 4K UHD",
                   "marca" => "Hitachi",
                   "modelo" => "554KS20",
                   "stock"=> 60,
                   "precio"=> 58000
);
$aProductos[1] = array("nombre" =>"Samsung Galaxy A30 Blanco",
                   "marca" => "Samsung",
                   "modelo" => "Galaxy A30",
                   "stock"=> 0,
                   "precio"=> 22000
);
$aProductos[2] = array("nombre" =>"Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
                   "marca" => "Surrey",
                   "modelo" => "553AIQ1201E",
                   "stock"=> 1,
                   "precio"=> 45000
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
      <div class="col-12 text-center py-5">
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
 <tbody>
     <tr>
         <td><?php echo $aProductos[0]["nombre"] ?></td>
         <td><?php echo $aProductos[0]["marca"] ?></td>
         <td><?php echo $aProductos[0]["modelo"] ?></td>
         <td><?php echo $aProductos[0]["precio"] ?></td>
         <td><?php echo $aProductos[0]["stock"] > 10? "Hay Stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <=10? "Poco stock" : "Sin Stock"); ?></td> 
         <td><a class="btn btn-primary" href="#" role="button">Comprar</a></td>
     </tr>
     <tr>
         <td><?php echo $aProductos[1]["nombre"] ?></td>
         <td><?php echo $aProductos[1]["marca"] ?></td>
         <td><?php echo $aProductos[1]["modelo"] ?></td>
         <td><?php echo $aProductos[1]["precio"] ?></td>
         <td><?php echo $aProductos[1]["stock"] > 10? "Hay Stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <=10? "Poco Stock" : "Sin Stock"); ?></td> 
         <td><a class="btn btn-primary" href="#" role="button">Comprar</a></td>
     </tr>
     <tr>
         <td><?php echo $aProductos[2]["nombre"] ?></td>
         <td><?php echo $aProductos[2]["marca"] ?></td>
         <td><?php echo $aProductos[2]["modelo"] ?></td>
         <td><?php echo $aProductos[2]["precio"] ?></td>
         <td><?php echo $aProductos[2]["stock"] > 10? "Hay Stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <=10? "Poco Stock" : "Sin Stock"); ?></td> 
         <td><a class="btn btn-primary" href="#" role="button">Comprar</a></td>
     </tr>
 </tbody>
</table>