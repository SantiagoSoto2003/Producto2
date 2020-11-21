<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=º, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <title>Tienda Virtual</title>
    <link rel="icon" href="img/3544734.jpg">
</head>

<body>
    <header>
        <div class="wrapper">
            <a href="inicio.php">
                <div class="logo vista">
                    TIENDAVIRTUAL.
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
                    </svg>
                </div>
            </a>


            <nav class="vista">
                <a href="inicio.php" style="text-decoration: none;">
                    <div>
                        NUESTRA TIENDA
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539a8.372 8.372 0 0 1-1.198-.49 7.01 7.01 0 0 1 2.276-1.52 6.7 6.7 0 0 0-.597.932 8.854 8.854 0 0 0-.48 1.079zM3.509 7.5H1.017A6.964 6.964 0 0 1 2.38 3.825c.47.258.995.482 1.565.667A13.4 13.4 0 0 0 3.508 7.5zm1.4-2.741c.808.187 1.681.301 2.591.332V7.5H4.51c.035-.987.176-1.914.399-2.741zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5H7.5v2.409c-.91.03-1.783.145-2.591.332a12.343 12.343 0 0 1-.4-2.741zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696A12.63 12.63 0 0 1 7.5 11.91v3.014c-.67-.204-1.335-.82-1.887-1.855a7.776 7.776 0 0 1-.395-.872zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964a9.083 9.083 0 0 0-1.565.667A6.963 6.963 0 0 1 1.018 8.5h2.49a13.36 13.36 0 0 0 .437 3.008zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909c.81.03 1.577.13 2.282.287-.12.312-.252.604-.395.872-.552 1.035-1.218 1.65-1.887 1.855V11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5h-2.49a13.361 13.361 0 0 0-.437-3.008 9.123 9.123 0 0 0 1.565-.667A6.963 6.963 0 0 1 14.982 7.5zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343c-.705.157-1.473.257-2.282.287V1.077c.67.204 1.335.82 1.887 1.855.143.268.276.56.395.872z" />
                        </svg>
                    </div>
                </a>

                <a href="index.php" style="text-decoration: none;">
                    <div>
                        CONOZCANOS
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-in" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z" />
                            <path fill-rule="evenodd" d="M6.5 3a.5.5 0 0 1 .5.5V6h2.5a.5.5 0 0 1 0 1H7v2.5a.5.5 0 0 1-1 0V7H3.5a.5.5 0 0 1 0-1H6V3.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </div>
                </a>

                <a href="#" style="text-decoration: none;">
                    <div>
                        UNETE
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        </svg>
                    </div>
                </a>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 vista2">
                <p class="font-weight-bolder font-italic h4">Mision</p>
                <div>
                    <img src="img/agente-inmobiliario.png" alt="">
                </div>
                <p class="mt-2 lead">Somos una empresa encargada de brindar y ofrecer productos de excelente calidad; a través de un buen servicio, el mejor precio y un trato amable por parte de quienes conformamos esta empresa. Somos una empresa que promueve un estilo de vida creando sentimientos y emociones positivas a través del servicio, diseño e innovación de productos de uso personal, con la máxima calidad, que transmiten un mensaje de conciencia.</p>
            </div>
            <div class="col-md-4 vista3">
                <p class="font-weight-bolder font-italic h4">Vision</p>
                <div>
                    <img src="img/manual.png" alt="">
                </div>
                <p class="mt-2 lead">Buscamos ser la primera opción de nuestros clientes al momento de adquirir insumos para su negocio; permitiéndonos crear relaciones duraderas basadas en la confianza, el respeto y la honestidad que nos permita crecer conjuntamente todos los días. Ser la firma líder del nivel socioeconómico medio alto, estando a la vanguardia y vistiendo con estilo y estatus a la gente económicamente activa. Ser los más fuertes en el mercado nacional y con una importante proyección internacional.</p>
            </div>
            <div class="col-md-4 vista4">
                <p class="font-weight-bolder font-italic h4">Filosofia</p>
                <div>
                    <img src="img/filosofia.png" alt="">
                </div>
                <p class="mt-2 lead">El trabajo, constancia, orden y disciplina es el factor del éxito de nuestra empresa. Somos una empresa que nos esforzamos día a día para dar a nuestros clientes lo mejor de nosotros a fin de brindarle una buena y cordial atención y así copar todas sus necesidades dentro del rubro en el cual nos hemos desarrollado. Estamos dispuestos a emplear todo nuestro potencial, conocimiento y calidad humana para cumplir nuestros objetivos.</p>
            </div>
        </div>
    </div>

    <footer class="footer mt-5">
        <div class="l-footer vista1">
            <h1>
                <img src="img/tienda.png" alt=""> TIENDA.
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam atque recusandae in sit sunt molestiae aliquid fugit. Mollitia eaque tempore iure sit nobis? Vitae nemo, optio maiores numquam quis recusandae.
            </p>
        </div>
        <ul class="r-footer vista2">
            <li>
                <h2>
                    Social</h2>
                <ul class="box">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Pinterest</a></li>
                    <li><a href="#">Dribbble</a></li>
                </ul>
            </li>
            <li class="features vista3">
                <h2>
                    Informacion</h2>
                <ul class="box h-box">
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Precios</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Tickets</a></li>
                    <li><a href="#">Certificacion</a></li>
                    <li><a href="#">Sugerencias</a></li>
                </ul>
            </li>
            <li class="vista4">
                <h2>
                    Legal</h2>
                <ul class="box">
                    <li><a href="#">Politicas de privacidad</a></li>
                    <li><a href="#">Terminos de uso</a></li>
                    <li><a href="#">Contrato</a></li>
                </ul>
            </li>
        </ul>
        <div class="b-footer vista5">
            <p>
                Todos los derechos reservados. by ©Santiago Soto - ©Sebastian Gallego 2020 </p>
        </div>
    </footer>

    <script src="js/header.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>