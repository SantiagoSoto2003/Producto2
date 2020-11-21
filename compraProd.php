<?php

include "BD/baseDatos.php";

$transaccion = new BaseDatos();
$conexion = $transaccion->conectarBD();


if (isset($_POST['comprar'])) {
    if (!isset($_POST['precios'])) {
        $_SESSION['mensaje'] = "No hay ningun producto seleccionado, debes agregar por lo menos un producto.";
    } else {
        $precios = $_POST['precios'];
        $_SESSION['sumaTotal'] = 0;

        for ($i = 0; $i < count($precios); $i++) {
            $consulta = "SELECT * FROM productos WHERE idProducto='$precios[$i]'";
            $consultaBuscarDatos = $conexion->prepare($consulta);
            $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
            $consultaBuscarDatos->execute();
            $resultado = $consultaBuscarDatos->fetchAll();


            foreach ($resultado as $dat) {
                $precioProd = $dat['precioProd'];
            }

            $_SESSION['sumaTotal'] = $_SESSION['sumaTotal'] + $precioProd;
        }



        $_SESSION['mensaje'] = "El total de tu compra si llevas los productos seleccionados es: $" . $_SESSION['sumaTotal'] . ".";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda Virtual</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="img/3544734.jpg">
</head>

<style>
    body {
        margin: 0;
        padding: 0;
        text-decoration: none;
        background-image: url('./img/moroccan-flower.png');


    }

    .btn {
        display: block;
        width: 100%;
        height: 50px;
        border-radius: 25px;
        outline: none;
        border: none;
        background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
        background-size: 200%;
        font-size: 1.2rem;
        color: white;
        font-family: 'Poppins', sans-serif;
        text-transform: uppercase;
        margin: 1rem 0;
        cursor: pointer;
        transition: .5s;
    }
</style>

<body>

    <?php
    if (isset($_SESSION['mensaje'])) {
    ?>
        <div class="container mt-3">
            <div class="jumbotron">
                <h2 class="display-4">
                    Apreciado cliente!
                </h2>
                <p class="m-3 lead">¡Gracias por visitarnos y hacer su primera compra! Estamos contentos de que haya encontrado lo que estaba buscando. Nuestro objetivo es que siempre esté satisfecho, así que avísenos su nivel de satisfacción. Esperamos volver a verle de nuevo. ¡Que tengas un gran día!
                </p>

                <div class="alert alert-dark" role="alert">
                    <p class="text-center font-weight-bolder h5">Los productos facturados fueron <i class="fa fa-shopping-cart" aria-hidden="true"></i> : </p>
                </div>

                <?php
                for ($i = 0; $i < count($precios); $i++) {
                    $consulta = "SELECT * FROM productos WHERE idProducto='$precios[$i]'";
                    $consultaBuscarDatos = $conexion->prepare($consulta);
                    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);
                    $consultaBuscarDatos->execute();
                    $resultado = $consultaBuscarDatos->fetchAll();

                    foreach ($resultado as $dat) {

                ?>
                        <p class="text-center"><span style="background: #38d39f" class="badge badge-primaty text-wrap"><?php echo $dat['nombreProd'] ?></span> - <span class="font-italic"> Precio : $<?php echo $dat['precioProd'] ?> </span> </p>
                <?php


                    }
                }

                ?>

                <p class="text-center"><span class="font-weight-bolder font-italic"><?php echo $_SESSION['mensaje'] ?></span></p>


                <hr class="my-4">
                <p class="lead text-center">Gracias por visitar nuestro sitio y utilizar nuestros servicios.</p>
                <a style="background: #38d39f" class="btn" href="listaProductos.php">Regresar a la lista de los productos registrados.</a>
                <a style="background: #38d39f" class="btn" href="inicio.php">Regresar a la tienda.</a>

            </div>
        </div>


    <?php

        session_unset();
    }
    ?>





    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>