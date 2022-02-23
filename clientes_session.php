<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if (!isset($_SESSION["listadoClientes"])) {
    $_SESSION["listadoClientes"] = array();
   
}

if ($_POST) {
    $nombre = $_REQUEST["txtNombre"];
    $dni = $_REQUEST["txtDni"];
    $telefono = $_REQUEST["txtTelefono"];
    $edad = $_REQUEST["txtEdad"];

    if (isset($_POST["btnAgregar"])) {
        
        $_SESSION["listadoClientes"][] = array(
            "nombre" => $nombre,
            "dni"  => $dni,
            "telefono"  => $telefono,
            "edad"  => $edad
        );
    } else if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $_SESSION["listadoClientes"] = array();
    }
}
?>

<!DOCTYPE hyml>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="coll-12 text-center py-5">
                <h1>Tabla de Clientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-3">
                <form action="" method="POST">
                    <div class="my-3">
                        <label for="txtNombre">Nombre:
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="txtDni">DNI:
                            <input type="text" name="txtDni" id="txtDni" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="txtTelefono">Telefono:
                            <input type="text" name="txtTelefono" id="txtTelefono" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <label for="txtEdad">Edad:
                            <input type="text" name="txtEdad" id="txtEdad" class="form-control">
                        </label>
                    </div>
                    <div class="my-3">
                        <button type="submit" name="btnAgregar" class="btn btn-primary">Agregar</button>
                        <button type="submit" name="btnEliminar" class="btn btn-primary">Borrar</button>
                    </div>
                </form>
            </div>
            <div class="col-4 my-3">
                <table class="table table-striped">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Edad</th>
                    </tr>
                    <tbody>
                    <?php
                        foreach ($_SESSION["listadoClientes"] as $cliente) {
                            echo "<tr>";
                            echo "<td>" . $cliente["nombre"] . "</td>";
                            echo "<td>" . $cliente["dni"] . "</td>";
                            echo "<td>" . $cliente["telefono"] . "</td>";
                            echo "<td>" . $cliente["edad"] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>   
                </table>
            </div>

        </div>
    </div>

</body>