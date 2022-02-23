<?php
//Deficicion de pacientes
$aPacientes = array();
$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombreyapellido" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.5,

);
$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombreyapellido" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,

);
$aPacientes[] = array(
    "dni" => "23.854.221",
    "nombreyapellido" => "Juan Irraola",
    "edad" => 27,
    "peso" => 86,

);
$aPacientes[] = array(
    "dni" => "31.712.122",
    "nombreyapellido" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 74.8,

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
                <h1>Listado de Pacientes</h1>
            </div>
        </div>
        <table class="table table-striped">
            <tr>
                <th scope="col">DNI</th>
                <th scope="col">Nombre y Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Peso</th>

            </tr>

            <?php foreach ($aPacientes as $paciente) { ?>
                <tr>
                    <td><?php echo $paciente["dni"];  ?></td>
                    <td><?php echo $paciente["nombreyapellido"];  ?></td>
                    <td><?php echo $paciente["edad"];  ?></td>
                    <td><?php echo $paciente["peso"];  ?></td>
                </tr>
            <?php } ?>
        </table>
    </main>

</body>