<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    </style>

</head>

<body>

    <section>
        <?php include 'layout/1_archivos_header.php' ?>
    </section>

    <section id="propiedades_destacadas_inmuebles" class="container d-flex flex-wrap align-items-center justify-content-around">

        <!-- CARD -->
        <div class="mr-md-2 mr-lg-0 mr-xl-0 mb-4 h-100 col-12 col-md-5 col-lg-12 col-xl-12 align-items-center justify-content-center container contenido_card justify-content-center p-0 row">

            <div class="contenido_card_imagen col-12 col-lg-4 col-xl-4 p-0 position-relative">

                <div class="contenido_texto_card position-absolute">
                    <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_inmueble"> Casa </p>
                    <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_gestion"> Arriendo</p>
                    <h4 class="font-weight-bold position-absolute rounded blanco precio"> $3.000.000 </h4>
                </div>

                <div class="fondo_negro"> </div>
                <div style="height:298px"><img class="border" src="images/no_image.png" alt=""></div>
                <div class="barra_azul"></div>

            </div>

            <div class="contenido pb-3 pb-lg-0 pb-xl-0 col-12 col-lg-8 col-xl-8 d-flex flex-column justify-content-center">

                <div class="d-flex mt-2 mt-lg-0 mt-xl-0 d-flex align-items-baseline">
                    <i class="mr-2 fas fa-map-marker-alt"> </i>
                    <p class="m-0"> Barrio ciudad </p>
                </div>

                <div>
                    <p class="parrafo"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime corrupti corporis deserunt? Aut illum, eaque sint pariatur corporis mollitia exercitationem commodi assumenda consectetur facere quae aliquid quod ducimus debitis enim odit est eius atque adipisci odio consequatur a illo minus. Reiciendis aliquam magni fugit nisi consequuntur quasi voluptas placeat eius? </p>
                </div>

                <div class="border_top pt-3 row justify-content-around align-items-baseline">
                    <div class="d-flex"> <i class="mr-2 fas fa-chart-area"></i>
                        <p class="m-0"> 200m<sup>2 </p>
                    </div>
                    <div class="d-flex"> <i class="mr-2 fas fa-bath"></i>
                        <p class="m-0"> 5 </p>
                    </div>
                    <div class="d-flex"> <i class="mr-2 fas fa-bed"></i>
                        <p class="m-0"> 5 </p>
                    </div>
                    <div class="d-flex"> <i class="mr-2 fas fa-warehouse"></i>
                        <p class="m-0"> 5 </p>
                    </div>

                    <div class="d-flex justify-content-center"> <a class="boton_ver_detalle btn" href="detalle_inmueble.php?co=' . $codigo . '"> Ver más Detalles </a> </button></div>


                </div>

            </div>

        </div>
        <!-- CARD -->  

        <!-- CARD -->
        <div class="mr-md-2 mr-lg-0 mr-xl-0 mb-4 h-100 col-12 col-md-5 col-lg-12 col-xl-12 align-items-center justify-content-center container contenido_card justify-content-center p-0 row">

            <div class="contenido_card_imagen col-12 col-lg-4 col-xl-4 p-0 position-relative">

                <div class="contenido_texto_card position-absolute">
                    <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_inmueble"> Casa </p>
                    <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_gestion"> Arriendo</p>
                    <h4 class="font-weight-bold position-absolute rounded blanco precio"> $3.000.000 </h4>
                </div>

                <div class="fondo_negro"> </div>
                <div style="height:298px"><img class="border" src="images/no_image.png" alt=""></div>
                <div class="barra_azul"></div>

            </div>

            <div class="contenido pb-3 pb-lg-0 pb-xl-0 col-12 col-lg-8 col-xl-8 d-flex flex-column justify-content-center">

                <div class="d-flex mt-2 mt-lg-0 mt-xl-0 d-flex align-items-baseline">
                    <i class="mr-2 fas fa-map-marker-alt"> </i>
                    <p class="m-0"> Barrio ciudad </p>
                </div>

                <div>
                    <p class="parrafo"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime corrupti corporis deserunt? Aut illum, eaque sint pariatur corporis mollitia exercitationem commodi assumenda consectetur facere quae aliquid quod ducimus debitis enim odit est eius atque adipisci odio consequatur a illo minus. Reiciendis aliquam magni fugit nisi consequuntur quasi voluptas placeat eius? </p>
                </div>

                <div class="border_top pt-3 row justify-content-around align-items-baseline">
                    <div class="d-flex"> <i class="mr-2 fas fa-chart-area"></i>
                        <p class="m-0"> 200m<sup>2 </p>
                    </div>
                    <div class="d-flex"> <i class="mr-2 fas fa-bath"></i>
                        <p class="m-0"> 5 </p>
                    </div>
                    <div class="d-flex"> <i class="mr-2 fas fa-bed"></i>
                        <p class="m-0"> 5 </p>
                    </div>
                    <div class="d-flex"> <i class="mr-2 fas fa-warehouse"></i>
                        <p class="m-0"> 5 </p>
                    </div>

                    <div class="d-flex justify-content-center"> <a class="boton_ver_detalle btn" href="detalle_inmueble.php?co=' . $codigo . '"> Ver más Detalles </a> </button></div>


                </div>

            </div>

        </div>
        <!-- CARD -->

    </section>




</body>

</html>