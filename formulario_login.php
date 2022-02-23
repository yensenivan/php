<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST){
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if($usuario != "" && $clave !=""){
        header("location: acceso-confirmado.php");
    } else {
        $mensaje = "Valido para usuarios registrado.";
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
    <main>
        <div class="row">
            <div class="coll-12">
                <H1>Formulario</H1>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="coll-12 p-3">
                <?php if (isset($mensaje)):?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="">
                    <div>
                     <label for="">Usuario: <input type="text" id="txtUsuario" name="txtUsuario" class="form-control"></label>
                    </div>
                    <div>
                    <label for="">Clave: <input type="password" id="txtClave" name="txtClave" class="form-control"></label>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary my-3">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>