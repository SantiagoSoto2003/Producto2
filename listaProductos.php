<?php
include "BD/baseDatos.php";
$transaccion = new BaseDatos();
$consulta = "SELECT * FROM productos ORDER BY idProducto DESC";
$usuarios = $transaccion->consultarDatos($consulta);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.foundation.min.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" href="img/3544734.jpg">
    <title>Tienda virtual</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        text-decoration: none;
        background-image: url('./img/moroccan-flower.png');
    }

    .img {
        align-items: center;
    }

    .login-content .input-div {
        position: relative;
        display: grid;
        grid-template-columns: 7% 93%;
        margin: 25px 0;
        padding: 5px 0;
        border-bottom: 2px solid #d9d9d9;
    }

    .login-content .input-div.one {
        margin-top: 0;
    }

    .i {
        color: #d9d9d9;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .i i {
        transition: .3s;
    }

    .input-div>div {
        position: relative;
        height: 45px;
    }

    .input-div>div>h5 {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
    }

    #textarea {
        position: relative;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #999;
        font-size: 18px;
        transition: .3s;
        margin-top: 10px;

    }

    .input-div:before,
    .input-div:after {
        content: '';
        position: absolute;
        bottom: -2px;
        width: 0%;
        height: 2px;
        background-color: #38d39f;
        transition: .4s;
    }

    .input-div:before {
        right: 50%;
    }

    .input-div:after {
        left: 50%;
    }

    .input-div.focus:before,
    .input-div.focus:after {
        width: 50%;
    }

    .input-div.focus>div>h5 {
        top: -5px;
        font-size: 15px;
    }

    .input-div.focus>.i>i {
        color: #38d39f;
    }

    .input-div>div>input {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        border: none;
        outline: none;
        background: none;
        padding: 0.5rem 0.7rem;
        font-size: 1.2rem;
        color: #555;
        font-family: 'poppins', sans-serif;
    }

    .input-div.pass {
        margin-bottom: 4px;
    }

    a {
        display: block;
        text-align: right;
        text-decoration: none;
        color: #999;
        font-size: 0.9rem;
        transition: .3s;
    }

    a:hover {
        color: #38d39f;
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

    .btn1 {
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

    .btn1:hover {
        background-position: right;
    }

    .cards1:hover {
        -webkit-transform: scale();
        transform: scale(1.04);
    }
</style>

<body>



    <div class="container">

        <?php
        if (isset($_SESSION['mensaje'])) {
        ?>
            <div class="alert alert-<?php echo $_SESSION['tipo-mensaje'] ?> alert-dismissible fade show text-center mt-3" role="alert">
                <?php echo $_SESSION['mensaje']; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php

            session_unset();
        }
        ?>

        <div class="card">

            <div class="card-header">
                <div class="mt-3 text-center">
                    <h2 class="title">Productos registrados.</h2>
                </div>
            </div>

            <div class="card-body">
                <h4>Lista de productos añadidos.</h4>
                <div class="img text-center">
                    <div class="container">
                        <img src="img/undraw_shopping_app_flsj.svg" class="mt-3" width="30%">
                    </div>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn" id="btnNuevo" data-toggle="modal">
                    Ingresa un nuevo producto.
                </button>

                <a style="background: #38d39f" class="btn" href="inicio.php">Regresar a la tienda.</a>
            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalForm" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="login-content">
                            <form id="formProductos" action="crud.php" method="POST">
                                <h4 class="title titleModal"></h4>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-div pass">
                                            <div class="i">
                                                <i class="fas fa-info"></i>
                                            </div>
                                            <div class="div">
                                                <h5>Nombre del producto</h5>
                                                <input type="text" id="nombreProd1" name="nombreProd1" class="input">
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
                                                <input type="text" class="input" name="marcaProd1" id="marcaProd1">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-div pass">
                                            <div class="i">
                                                <i class="fas fa-info"></i>
                                            </div>
                                            <div class="div">
                                                <h5>Precio del producto.</h5>
                                                <input type="text" name="precioProd1" class="input">
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
                                                <input type="text" class="input" name="foto">
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
                                        <textarea id="descripcionProd1" placeholder="Todos los campos deben estar llenos." name="descripcionProd1" cols="30" rows="3" type="text" class="form-control"></textarea>
                                    </div>
                                </div>
                                <input type="submit" id="btnGuardar" name="btnGuardar" class="btn" value="Enviar">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn" id="btnCerrar" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <table id="example" class="mdl-data-table" style="width:100%">
                <thead>
                    <tr>
                        <th>idProducto</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($usuarios as $dat) {
                    ?>
                        <tr>
                            <td> <?php echo $dat['idProducto'] ?> </td>
                            <td> <?php echo $dat['nombreProd'] ?> </td>
                            <td> <?php echo $dat['marcaProd'] ?> </td>
                            <td> <?php echo $dat['precioProd'] ?> </td>
                            <td> <?php echo $dat['descripcionProd'] ?> </td>
                            <td>
                                <div class='btn-group'>
                                    <a style="text-decoration: none, color: white;" class="btn btnEditar" href="edit.php?idProducto=<?php echo $dat['idProducto'] ?>">Editar</a>
                                    <a href="delete.php?idProducto=<?php echo $dat['idProducto'] ?> " class="btn btnBorrar">Borrar</a>
                                </div>
                            </td>

                        <?php } ?>
                        </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>idProducto</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>


        <div class="container-fluid">
            <div class="alert alert-success" role="alert" name="productosCompra">
                <h4 class="alert-heading text-center">Bienvenido a nuestra estanteria de productos!</h4>
                <p>Esperamos que puedas satisfacer tus necesidades con nuestros productos, esperamos que tu recorrido por la tienda sea lo mas ameno posible. Trataremos de escuchar tus opiniones y trabajar en base a ellas. </p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            </div>
        </div>



        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <?php foreach ($usuarios as $dat) { ?>
                    <div class="col mb-4 cards1">
                        <form method="POST" action="compraProd.php">
                            <div class="card border-info h-100">
                                <div class="card-header text-center font-weight-bold"><input type="checkbox" name="precios[]" value="<?php echo $dat['idProducto'] ?>"> idProducto - <?php echo $dat['idProducto']; ?></div>

                                <img src="<?php echo $dat['foto'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <div class="card-title text-dark ">
                                        <h6 class="font-weight-bolder">NOMBRE DEL PRODUCTO</h6>
                                    </div>

                                    <p class="h5 font-weight-normal ml-3" style="color: #00BFA6"><?php echo $dat['nombreProd'] ?></p>

                                    <div class="card-title text-dark">
                                        <h6 class="font-weight-bolder">MARCA DEL PRODUCTO</h6>
                                    </div>

                                    <p class="h5 font-weight-normal ml-3" style="color: #00BFA6"><?php echo $dat['marcaProd'] ?></p>

                                    <div class="card-title text-dark">
                                        <h6 class="font-weight-bolder">PRECIO DEL PRODUCTO</h6>
                                    </div>

                                    <p class="h5 font-weight-normal ml-3" style="color: #00BFA6"><?php echo $dat['precioProd'] ?></p>

                                    <div class="card-title text-dark">
                                        <h6 class="font-weight-bolder">DESCRIPCION DEL PRODUCTO</h6>
                                    </div>

                                    <p class="h5 font-weight-normal ml-3" style="color: #00BFA6"><?php echo $dat['descripcionProd'] ?></p>



                                    <a style="text-decoration: none, color: white;" class="btn btnEditar text-center mt-3" href="edit.php?idProducto=<?php echo $dat['idProducto'] ?>">Editar <i class="fa fa-book" aria-hidden="true"></i></a>

                                    <a href="delete.php?idProducto=<?php echo $dat['idProducto'] ?>" class="btn">Borrar <i class="fa fa-trash" aria-hidden="true"></i></a>

                                    <div class="card-footer text-center text-muted">
                                        Fecha de registro: <?php echo $dat['fecha_registro']; ?>
                                    </div>
                                </div>


                            </div>
                    </div>

                <?php } ?>
            </div>


            <input type="submit" class="btn-block mb-4 btn" name="comprar" value="Comprar productos seleccionados."></input>
            </form>

        </div>


        <!-- Optional JavaScript -->

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

        <!--    Datatables-->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.foundation.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <script src="main.js"></script>
        <script src="js/main2.js"></script>