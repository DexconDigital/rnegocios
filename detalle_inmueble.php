<?php require 'variables/variables.php';
require 'controllers/detalleInmuebleController.php';
$page = 'Detalle de Inmueble' ?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1_archivos_header.php' ?>
    <link rel="stylesheet" href="css/carousel.inmuebles.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
    <style>
        #map {
            height: 350px;
            z-index: 2;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }

        .lista {
            list-style: none;
            padding: 0;
        }
    </style>
    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>
</head>

<body>

    <!--HEADER -->
    <?php include 'layout/3_header.php' ?>
    <!---HEADER -->

    <!-- BANNER -->
    <section id="banner" class="banner2 d-flex align-items-center justify-content-center position-relative">

        <div class="blanco titulo_banner position-absolute">
            <h1 class="text-center"> Detalle de Inmueble </h1>
            <h6 class="text-center"> <a href="index.php"> Inicio </a> / Inmuebles / Detalle de Inmueble </h6>
        </div>

        <div>
            <img src="images/banner_detalle_inmueble.jpg" alt="">
        </div>

        <div class="position-absolute contenedor_negro">

        </div>

    </section>
    <!-- BANNER -->

    <section class="contenido_inmueble mt-5">

        <div class="container">

            <div class="container">

                <div class="col-12 ml-1">

                    <div class="row" style="padding-right: 5px">

                        <!-- CONTENIDO IZQUIERDA -->
                        <div class="pl-0 col-12 col-lg-8 col-xl-8">

                            <div class="bg_blanco rounded contenido_izquierda p-0">

                                <!-- DIRECCIÓN/PRECIO/TIPO DE GESTIÓN Y CÓDIGO -->
                                <div class="container">
                                    <div class="container pt-4">
                                        <!-- DIRECCIÓN Y PRECIO -->
                                        <div class="d-flex flex-wrap align-items-center justify-content-between border-bottom pb-3">

                                            <div id="direccion" class="d-flex align-items-center">
                                                <i class="mr-2 azul_oscuro <?php echo $datos_contacto['direccion']['icono'] ?>"> </i>
                                                <h2 class="m-0"> <?php echo $r['barrio'] . ', ' . $r['ciudad'] ?> </h2>
                                            </div>

                                            <div id="precio" class="w-sm-100 align-items-center d-flex">
                                                <h2 class="m-0 azul_claro"> <?php if ($r['Gestion'] == 'Arriendo') {
                                                                                echo '<span class="precio">$ ' . $r['ValorCanon'] . '</span>';
                                                                            } else if ($r['Gestion'] == 'Venta') {
                                                                                echo '<span class="precio">$ ' . $r['ValorVenta'] . '</span>';
                                                                            } else {
                                                                                echo '<span class="precio">$ ' . $r['ValorCanon'] . ' /$' . $r['ValorVenta'] . '</span>';
                                                                            }
                                                                            ?></h2>
                                            </div>
                                        </div>
                                        <!-- DIRECCIÓN Y PRECIO -->

                                        <!-- TIPO DE INMUEBLE/TIPO DE GESTIÓN Y CÓDIGO -->
                                        <div class="mt-3 d-flex flex-wrap justify-content-between align-items-center">

                                            <div class="d-flex align-items-center justify-content-center">
                                                <p class="rounded m-0 blanco tipo_de_inmueble2 mr-2"><?php echo $r['Tipo_Inmueble'] ?></p>
                                                <p class="rounded m-0 blanco tipo_de_gestion2"> <?php echo $r['Gestion']; ?> </p>
                                            </div>

                                            <div class="mt-2 mt-lg-0 mt-md-0 mt-xl-0">
                                                <p class="m-0 text-muted"> Código: <?php echo $co; ?> </p>
                                            </div>
                                        </div>
                                        <!-- TIPO DE INMUEBLE/TIPO DE GESTIÓN Y CÓDIGO -->

                                    </div>
                                </div>
                                <!-- DIRECCIÓN/PRECIO/TIPO DE GESTIÓN Y CÓDIGO -->

                                <!-- CARACTERISTÍCAS INMUEBLE -->
                                <div class="d-flex mt-4 p-0 caracteristicas_inmuebles flex-wrap">

                                    <div class="borde_bottom d-flex flex-column border-left col-3 p-3 bg_azul_claro align-items-center justify-content-center">
                                        <i class="mb-2 blanco fas fa-chart-area"></i>
                                        <p class="blanco m-0"> <?php echo $area_construida; ?>m<sup>2<sup> </p>
                                    </div>

                                    <div class="borde_bottom d-flex flex-column border-left col-3 p-3 bg_azul_claro align-items-center justify-content-center">
                                        <i class="mb-2 blanco fas fa-bath"></i>
                                        <p class="blanco m-0"> <?php echo $banios; ?> Baños </p>
                                    </div>

                                    <div class="d-flex flex-column border-left col-3 p-3 bg_azul_claro align-items-center justify-content-center">
                                        <i class="mb-2 blanco fas fa-bed"></i>
                                        <p class="blanco m-0"> <?php echo $alcobas; ?> Alcobas </p>
                                    </div>

                                    <div class="d-flex flex-column border-left col-3 p-3 bg_azul_claro align-items-center justify-content-center">
                                        <i class="mb-2 blanco fas fa-warehouse"></i>
                                        <p class="blanco m-0"> <?php echo $garaje; ?> Garajes </p>
                                    </div>

                                </div>
                                <!-- CARACTERISTÍCAS INMUEBLE -->


                                <!-- CARRUSEL CON IMAGENES -->
                                <div>
                                    <!-- IMAGENES -->
                                    <section class="mt-3" id="slide-detalle">
                                        <?php
                                        if (isset($r['fotos'])) {
                                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                                echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                            }
                                        } else {
                                            echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                                        }
                                        ?>
                                    </section>
                                    <!-- IMAGENES -->


                                    <!-- MINIATURAS -->
                                    <section class="vertical-center-4 slider" id="miniaturas">
                                        <?php
                                        if (isset($r['fotos'])) {
                                            for ($i = 0; $i < count($r['fotos']); $i++) {
                                                echo '<div class="contenedor-img">
                                        <img src="' . $r['fotos'][$i]['foto'] . '" alt="">
                                    </div>';
                                            }
                                        } else {
                                            echo  '<div class="contenedor-img">
                                        <img src="images/no_image.png" alt="">
                                    </div>';
                                        }
                                        ?>
                                    </section>
                                    <!-- MINIATURAS -->

                                    <!-- COMPARTIR POR REDES Y FICHA -->
                                    <section>

                                        <div class="px-1 d-flex col-12 py-3 align-items-center flex-wrap">

                                            <div class="col-12 align-items-center  p-0 d-flex flex-column justify-content-center">
                                                <a target="blank" style="width:180.33px" class="p-0 d-flex align-items-center justify-content-center boton_ver_detalle_inmueble btn" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=980-<?php echo $co ?>"> Descargar Ficha </a>
                                            </div>

                                            <div class="mt-2 justify-content-center d-flex p-0 col-12 d-flex align-items-center">

                                                <p class="m-0"> Comparte en: </p>

                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.rionegocios.com%2FdetalleInmueble%3Fcodigo%3D<?php echo $co; ?>" target="_blank">
                                                        <i class="ml-3 mr-3 <?php echo $redes_sociales['facebook']['icono'] ?>"></i>
                                                    </a>

                                                    <a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.rionegocios.com%2Fdetalle_inmueble.php%3Fco%3D' . $co . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank">
                                                        <i class="mr-3 fab fa-twitter"></i>
                                                    </a>

                                                    <a href="<?php echo 'https://wa.me/?text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] . '%20www.rionegocios.comdetalleInmueble.php?codigo%3d' . $co ?>" target="_blank">
                                                        <i class="fab fa-whatsapp"></i>
                                                    </a>
                                                </div>

                                            </div>

                                        </div>

                                    </section>
                                    <!-- COMPARTIR POR REDES Y FICHA -->

                                </div>
                                <!-- CARRUSEL CON IMAGENES -->

                            </div>

                            <!-- BOTONES CON CARACTERÍSTICAS DE INMUEBLES -->
                            <div id="accordion" class="bg_blanco rounded mt-3 pt-1">
                                <div class="container">

                                    <div class="col-12 p-0 d-flex flex-wrap justify-content-center">

                                        <!----------BOTONES---------->

                                        <div class="p-0 px-md-3 px-lg-3 px-xl-3 alto_botones row my-1 pl-1 d-flex flex-column col-12 col-md-4 col-lg-4 col-xl-4 justify-content-between">

                                            <div class="mr-1">
                                                <button class="mb-2 boton_ver_detalle_inmueble btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#uno" aria-expanded="false" aria-controls="collapseExample">
                                                    Descripción
                                                </button>
                                            </div>

                                            <div class="mr-1">
                                                <button class="mb-2 boton_ver_detalle_inmueble btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#dos" aria-expanded="true" aria-controls="dos">
                                                    Características Internas
                                                </button>
                                            </div>

                                            <div class="mr-1">
                                                <button class="mb-2 boton_ver_detalle_inmueble btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#tres" aria-expanded="true" aria-controls="tres">
                                                    Características Externas
                                                </button>
                                            </div>

                                            <div class="mr-1">
                                                <button class="mb-2 boton_ver_detalle_inmueble btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#cuatro" aria-expanded="true" aria-controls="cuatro">
                                                    Características Alrededores
                                                </button>
                                            </div>

                                            <div class="mr-1">
                                                <button class="mb-2 boton_ver_detalle_inmueble btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#cinco" aria-expanded="true" aria-controls="dos">
                                                    Video
                                                </button>
                                            </div>

                                        </div>

                                        <!----------BOTONES---------->



                                        <!----------INFORMACION BOTONES---------->

                                        <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                                            <div class="col-12 p-0 pb-1">

                                                <div id="uno" class="collapse show" aria-labelledby="uno" data-parent="#accordion">
                                                    <h4> <strong>Descripción</strong> </h4>
                                                    <p style="text-align: justify;"><?php echo $descripcion ?></p>
                                                    <h4 class="property-single-detail-title"> <strong>Características</strong></h4>
                                                    <ul class="lista">
                                                        <li>Código: <?php echo $co; ?></li>
                                                        <li>Alcobas: <?php echo $alcobas; ?></li>
                                                        <li>Baños: <?php echo $banios; ?></li>
                                                        <li>Área Construida: <?php echo $area_construida; ?>m<sup>2<sup></li>
                                                        <li>Área Privada: <?php echo $area_privada; ?>m<sup>2<sup></li>
                                                        <li>Garaje: <?php echo $garaje; ?></li>
                                                        <li>Estrato: <?php echo $estrato; ?></li>
                                                        <li>Edad Inmueble: <?php echo $edad_inmueble; ?> años</li>
                                                        <?php if ($administracion != "") {
                                                            echo '<li>Administración: $' . $administracion . '</li>';
                                                        } ?>
                                                    </ul>
                                                </div>

                                            </div>

                                            <div class="col-12 p-0 pb-1">

                                                <div id="dos" class="collapse" aria-labelledby="dos" data-parent="#accordion">
                                                    <?php
                                                    if (count($r['caracteristicasInternas']) > 0) {
                                                        echo
                                                            '<div class="col-md-12" style="margin-bottom: 12px;">
                                                              <h4 class="property-single-detail-title"><strong>Características Internas</strong></h4>
                                                                  <ul class="lista">';
                                                        for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                                            $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                                            echo '<li>' . $caracteristicas . '</li>';
                                                        }
                                                        echo  '</ul>
                                                            </div>
                                                            ';
                                                    }
                                                    ?>
                                                </div>

                                            </div>

                                            <div class="col-12 p-0 pb-1">

                                                <div id="tres" class="collapse" aria-labelledby="tres" data-parent="#accordion">
                                                    <?php
                                                    if (count($r['caracteristicasExternas']) > 0) {
                                                        echo
                                                            '<div class="col-md-12" style="margin-bottom: 12px;">
                                                              <h4 class="property-single-detail-title"><strong>Características Externas</strong></h4>
                                                              <ul class="lista">';
                                                        for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                                            $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                                            echo '<li>' . $caracteristicas . '</li>';
                                                        }
                                                        echo  '</ul>
                                                            </div>
                                                                 ';
                                                    }
                                                    ?>
                                                </div>

                                            </div>

                                            <div class="col-12 p-0 pb-1">

                                                <div id="cuatro" class="collapse" aria-labelledby="cuatro" data-parent="#accordion">
                                                    <?php
                                                    if (count($r['caracteristicasAlrededores']) > 0) {
                                                        echo
                                                            '<div class="col-md-12" style="margin-bottom: 12px;">
                                                               <h4 class="property-single-detail-title"><strong>Características de los alrededores</strong></h4>
                                                                 <ul class="lista">';
                                                        for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                                            $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                                            echo '<li>' . $caracteristicas . '</li>';
                                                        }
                                                        echo  '</ul>
                                                            </div>
                                                              ';
                                                    }
                                                    ?>
                                                </div>

                                            </div>

                                            <div class="col-12 p-0 pb-1">

                                                <div id="cinco" class="collapse" aria-labelledby="cinco" data-parent="#accordion">
                                                    <?php if ($r['video'] != "") {
                                                        echo
                                                            ' <h4 class="property-single-detail-title"> <strong>Video</strong></h4>
                                                                    <div class="card">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">Video</h5>
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-4">
                                                                        <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                        </div>
                                                                    </div>
                                                                   </div>
                                                            </div>
                                                             ';
                                                    } ?>
                                                </div>

                                            </div>
                                        </div>

                                        <!----------INFORMACION BOTONES---------->


                                    </div>

                                </div>


                            </div>
                            <!-- BOTONES CON CARACTERÍSTICAS DE INMUEBLES -->

                            <!-- MAPA -->
                            <div class="bg_blanco rounded col-md-12 mb-3 mt-4 p-0 pb-3">
                                <h4 class="d-flex justify-content-center py-3"><strong>Mapa de Ubicación</strong></h4>
                                <div class="card mapa_tamaño">
                                    <div class="">
                                        <div id="map" class="w-100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- MAPA -->

                        </div>
                        <!-- CONTENIDO IZQUIERDA -->

                        <!-- CONTENIDO DERECHA -->
                        <div id="contenido_derecha" class="p-0 col-lg-4 col-xl-4 mr-3 mr-lg-0 mr-xl-0 pl-0 contenido_derecha bg_blanco rounded pt-4">

                            <!-- Inicio contacto con el asesor -->
                            <div id="contacto_asesor" class="d-flex align-items-center justify-content-center flex-column">
                                <h2 class="text-center pb-3 m-0 border-bottom"> Contacto con el asesor </h2>

                                <div class="imagen_asesor mt-3 row justify-content-center"> <img src="<?php echo $asesor['FotoAsesor']; ?>" alt=""> </div>

                                <p class="d-flex text-break flex-xl-row mt-3 col-12">
                                    <i class="azul_oscuro fas fa-user mr-2"></i>
                                    <?php echo $asesor['ntercero']; ?>
                                </p>
                                <p class="d-flex text-break flex-xl-row col-12">
                                    <i class="azul_oscuro fas fa-mobile-alt mr-2"></i>
                                    <a class="color_asesor" href="tel:+57<?php echo $asesor['celular']; ?>"><?php echo $asesor['celular']; ?></a>
                                </p>
                                <p class="d-flex text-break flex-xl-row col-12">
                                    <i class="azul_oscuro fas fa-envelope mr-2"></i>
                                    <a class="color_asesor" href="mailto:<?php echo $asesor['correo']; ?>"><?php echo $asesor['correo']; ?></a>
                                </p>

                            </div>

                            <!-- FORMULARIO DE CONTACTO  -->
                            <div class="col-12 mb-3">

                               <form action="email/enviar_correo_asesor.php" method="POST">
                                    <input type="text" name="name" required class="my-2 border codigo_input form-control" placeholder="Nombre y Apellido">
                                    <input type="text"  value="<?php echo $asesor['correo']; ?>" required name="cor_asesor" class="d-none my-2 border codigo_input form-control">
                                    <input type="text"  value="<?php echo $co; ?>" required name="codigo" class="d-none my-2 border codigo_input form-control">
                                    <input type="email" name="email" class="my-2 border codigo_input form-control" required placeholder="Correo Electrónico">

                                    <input type="number" requried name="telefono" class="my-2 border codigo_input form-control" placeholder="Teléfono / Celular">

                                    <textarea class="form-control" name="mensaje"  placeholder="Mensaje" rows="3"></textarea>

                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                        <label class="form-check-label" for="exampleCheck1"> Confimo que he leído, entendido y acepto la <a class="azul_oscuro" href="politica_de_datos.pdf" download="Politica de Datos">política de tratamiento de datos personales.</a> </label>
                                    </div>
                                    <div class="row justify-content-center">
                                        <button class="col-3 btn boton_ficha"> Enviar </button>
                                    </div>
                               </form>
                            </div>
                            <!-- FORMULARIO DE CONTACTO  -->

                            <!-- Fin contacto con el asesor -->

                            <h5 class="d-flex align-items-center justify-content-center mt-4 pt-2 pb-4"> Propiedades Similares </h5>

                            <div>
                                <?php similares($r['IdCiudad'], $r['IdTpInm']); ?>
                            </div>


                        </div>
                        <!-- CONTENIDO DERECHA -->


                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- FOOTER -->
    <section>
        <?php include 'layout/4_footer.php' ?>
    </section>
    <!-- FOOTER -->

    <section>
        <?php include 'layout/2_archivos_footer.php' ?>
    </section>

    <script src="js/slick.min.js"></script>

    <!-- Carrusel -->
    <script>
        $('#slide-detalle').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '#miniaturas'
        });
        $('#miniaturas').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '#slide-detalle',
            dots: false,
            centerMode: true,
            focusOnSelect: true,
            variableWidth: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- Carrusel -->

    <!-- mapa del inmueble -->
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>



</body>

</html>