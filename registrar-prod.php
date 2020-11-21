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
    <link rel="icon" href="img/3544734.jpg">
    <title>Tienda Virtual</title>
</head>

<body>

    <img src="img/wave.png" class="wave">

    <div class="container1">
        <div class="img vista1">
            <img src="img/undraw_empty_cart_co35.svg">
        </div>
        <div class="login-content">
            <form action="registrar.php" class="vista3" method="POST">
                <img src="img/market-575842_1280.png">
                <h2 class="title">Registra tu producto.</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-div pass">
                            <div class="i">
                                <i class="fas fa-info"></i>
                            </div>
                            <div class="div">
                                <h5>Nombre del producto</h5>
                                <input type="text" name="nombreProd" class="input">
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
                                <input type="text" class="input" name="marcaProd">
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
                                <input type="text" name="precioProd" class="input">
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
                        <textarea name="descripcionProd" cols="30" rows="2" type="text" placeholder="Todos los campos deben estar llenos." class="form-control"></textarea>
                    </div>
                </div>
                <a class="badge bagde-secondary" href="inicio.php">Regreso a la tienda.</a>
                <input type="submit" name="enviarProd" id="btn1" class="btn" value="Enviar">
            </form>

        </div>
    </div>


    <script src="js/main2.js"></script>
    <script src="js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>