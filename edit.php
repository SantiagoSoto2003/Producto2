<?php include "BD/baseDatos.php";

$transaccion = new BaseDatos();
$conexion = $transaccion->conectarBD();
if (isset($_GET['idProducto'])) {
    $idProducto = $_GET['idProducto'];
    $consulta = "SELECT * FROM productos WHERE idProducto='$idProducto' ";
    $resultado = $conexion->prepare($consulta);
    $lol = $resultado->execute();

    foreach ($resultado as $dat) {
        $nombreProd = $dat['nombreProd'];
        $marcaProd = $dat['marcaProd'];
        $precioProd = $dat['precioProd'];
        $descripcionProd = $dat['descripcionProd'];
        $foto = $dat['foto'];
    }
}

if (isset($_POST['actualizarProd'])) {
    $idProducto = $_GET['idProducto'];
    $nombreProd = $_POST['nombreProd'];
    $marcaProd = $_POST['marcaProd'];
    $precioProd = $_POST['precioProd'];
    $descripcionProd = $_POST['descripcionProd'];
    $foto = $_POST['foto'];

    $consulta = "UPDATE productos SET nombreProd='$nombreProd', marcaProd='$marcaProd', precioProd='$precioProd', descripcionProd='$descripcionProd', foto='$foto' WHERE idProducto='$idProducto' ";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    $_SESSION['mensaje'] = "Has actualizado correctamente tu producto.";
    $_SESSION['factProd'] = "H0la";
    $_SESSION['tipo-mensaje'] = "warning";
    header("Location: listaProductos.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles2.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Document</title>
</head>

<body>

    <img src="img/wave.png" class="wave">

    <div class="container1">
        <div class="img vista1">
            <img src="img/undraw_Portfolio_update_re_jqnp.svg">
        </div>
        <div class="login-content">
            <form action="edit.php?idProducto=<?php echo $_GET['idProducto']; ?>" class="vista3" method="POST">
                <img src="img/undraw_update_uxn2.png">
                <h2 class="title">Actualiza tu producto.</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-info"></i>
                            </div>
                            <div class="div">
                                <h5>Nombre del producto</h5>
                                <input type="text" value="<?php echo $nombreProd ?>" name="nombreProd" class="input">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-registered"></i>
                            </div>
                            <div class="div">
                                <h5>Marca del producto</h5>
                                <input type="text" class="input" name="marcaProd" value="<?php echo $marcaProd ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                            <div class="div">
                                <h5>Precio del producto.</h5>
                                <input type="text" name="precioProd" value="<?php echo $precioProd ?>" class="input">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fa fa-camera"></i>
                            </div>
                            <div class="div">
                                <h5>Foto del producto</h5>
                                <input type="text" class="input" value="<?php echo $foto ?>" name="foto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="i">
                        <i class="fa fa-anchor" aria-hidden="true"></i>
                    </div>
                    <div class="div">
                        <h5 id="textarea">Descripcion del producto</h5>
                        <textarea name="descripcionProd" cols="30" rows="2" type="text" placeholder="Todos los campos deben estar llenos." class="form-control"><?php echo $descripcionProd ?></textarea>
                    </div>
                </div>

                <a class="badge bagde-secondary" href="inicio.php">Regreso a la tienda.</a>
                <a class="badge bagde-secondary" href="listaProductos.php">Regreso a la lista de Productos.</a>
                <input type="submit" name="actualizarProd" id="btn1" class="btn" value="Enviar">
            </form>

        </div>
    </div>


    <script src="js/main2.js"></script>
    <script src="js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>