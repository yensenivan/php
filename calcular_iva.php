<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 0;
$resPrecioSinIva = 0;
$resPrecioConIva = 0;
$resIvaCantidad = 0;

if($_POST){
    $iva = $_REQUEST["lstIva"];
    $precioSinIva = $_REQUEST["txtImporteSinIva"];
    $precioConIva = $_REQUEST["txtImportConIva"];

    if($precioSinIva > 0 && $precioConIva ==""){
        $resPrecioConIva = $precioSinIva * (21/100+1);
        $resPrecioSinIva = $precioSinIva;
        $resIvaCantidad = $resPrecioConIva - $resPrecioSinIva;
    }
    
    if($precioConIva > 0 && $precioSinIva == ""){
        $resPrecioSinIva = $precioConIva / ($iva/100+1);
        $resPrecioConIva = $precioConIva;
        $resIvaCantidad = $resPrecioConIva  - $resPrecioSinIva;
    }
}
?>

<!DOCTYPE hyml>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 text-center">
                <H1>Calculadora de IVA</H1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-3">
                <form action="" method="POST">
                    <div class="my-3">
                        <label for="">IVA
                        <select name="lstIva" class="form-control">
                            <option value="21">21</option>
                            <option value="10.5">10.5</option>
                            <option value="27">27</option>
                        </select>
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="">Precio sin IVA:
                            <input type="text" name="txtImporteSinIva" id="txtImporteSinIva" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="">Precio sin IVA:
                            <input type="text" name="txtImportConIva" id="txtImportConIva" class="form-control">
                        </label>    
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>
            <div class="col-4 my-3">
                <table class="table table-hover border">
                    <tr>
                        <th>IVA:</th>
                        <td>$<?php echo $iva; ?></td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA:</th>
                        <td>$<?php echo $resPrecioSinIva; ?></td>
                    </tr>
                    <tr>
                        <th>Precio con IVA:</th>
                        <td>$<?php echo $resPrecioConIva; ?></td> 
                    </tr>
                    <tr>
                        <th>IVA Cantidad:</th>
                        <td>$<?php echo $resIvaCantidad; ?></td> 
                    </tr>
                </table>
            </div>
        </div>
    </div>   
</body>
</html>