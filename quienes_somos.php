<?php require 'variables/variables.php';
$page = 'Quiénes Somos' ?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1_archivos_header.php' ?>
    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>

</head>

<body>

    <!--HEADER -->
    <?php include 'layout/3_header.php' ?>
    <!---HEADER -->

    <!-- BANNER -->
    <section id="banner" class="d-flex align-items-center justify-content-center position-relative">

        <div class="blanco titulo_banner position-absolute">
            <h1> Quiénes Somos </h1>
            <h6 class="text-center"> <a href="index.php"> Inicio </a> / Quiénes Somos </h6>
        </div>

        <div>
            <img src="images/banner_quienes_somos.jpg" alt="">
        </div>

    </section>
    <!-- BANNER -->




    <div class="container my-5">
        <div class="container d-flex align-items-center flex-column  justify-content-center order-2 order-md-1 order-lg-1 order-xl-1 col-12 col-md-6 col-lg-6 col-xl-6 border rounded p-3 bg-light">
            <h2 class="text-center font-weight-bold"> <?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?> </h2>
            <div class="text-center"> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['0'] ?> </div>
        </div>
    </div>

    <div class="container">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner carousel-inner2">
                    <div class="carousel-item h-100 active">
                        <img src="images/slide1_contactanos.jpg" class="d-block h-100 w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="images/slide2_contactanos.jpg" class="d-block h-100 w-100" alt="...">
                    </div>
                    <div class="carousel-item h-100">
                        <img src="images/slide3_contactanos.jpg" class="d-block h-100 w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


    </section>
    <!-- SECCION-QUIENE-SOMOS -->

    <!-- CONTADOR-ESTADISTICAS -->
    <section id="seccion_estadisticas" class="mt-5 d-flex align-items-center justify-content-center position-relative">

        <div class="container contador">
            <div class="container" id="contador">
                <div class=" d-flex justify-content-between align-items-baseline blanco titulo_banner py-5 flex-wrap">

                    <div class="col-6 col-md-6 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                        <h2 id="counter-propertys">></h2>
                        <p class="text-center"> Total de Inmuebles </p>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                        <h2 id="counter-rent"></h2>
                        <p class="text-center"> Inmuebles en Arriendo </p>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                        <h2 id="counter-sale"></h2>
                        <p class="text-center"> Inmuebles en Venta </p>
                    </div>

                    <div class="col-6 col-md-6 col-lg-3 col-xl-3 d-flex flex-column justify-content-center align-items-center">
                        <h2 id="counter-sale-rent"></h2>
                        <p class="text-center"> Inmuebles en Arriendo/Venta </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="opacidad_negra"> </div>

    </section>
    <!-- CONTADOR-ESTADISTICAS -->

    <!-- MISION_VISION -->
    <section id="mision_vision" class="container d-flex mt-5">

        <div class="container d-flex justify-content-between flex-wrap">

            <div class="col-12 col-md-5 col-lg-5 col-xl-5 pl-0 m-0 mb-md-3 mb-lg-3 mb-xl-3 p-0 rounded justify-content-center d-flex flex-column bg-light">
                <h2 class="font-weight-bold text-center mt-4"> <?php echo $texto_quienes_somos['mision']['titulo'] ?> </h2>
                <div class="mb-2 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>
                <p class="text-justify px-4"> <?php echo $texto_quienes_somos['mision']['parrafo'] ?> </p>
            </div>

            <div class="col-12 col-md-5 col-lg-5 col-xl-5 pr-0 m-0 mt-5 mt-md-0 mt-lg-0 mt-xl-0 mb-md-3 mb-lg-3 mb-xl-3 p-0 rounded justify-content-center d-flex flex-column bg-light">
                <h2 class="font-weight-bold text-center mt-4"> <?php echo $texto_quienes_somos['vision']['titulo'] ?> </h2>
                <div class="mb-2 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>
                <p class="text-justify px-4"> <?php echo $texto_quienes_somos['vision']['parrafo'] ?> </p>
            </div>

        </div>

    </section>
    <!-- MISION_VISION-->

    <!-- VALORES -->
    <section id="valores" class="position-relative blanco bg-light mt-5 justify-content-center">

        <div class="position-absolute w-100 h-100">
            <img class="w-100 h-100" src="images/banner_valores.jpg" alt="">
        </div>

        <div class="caja_negra position-absolute w-100 h-100">
        </div>

        <div class="caja_contenido py-5 position-relative">
            <div class="justify-content-center d-flex flex-column">
                <h2 class="font-weight-bold text-center"> <?php echo $texto_quienes_somos['valores']['titulo'] ?> </h2>
                <div class="my-3 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>
            </div>


            <div class="container">
                <div class="container">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="my-2 col-12 col-md-3 col-lg-3 col-xl-3 valores d-flex align-items-center justify-content-center">
                            <p class="text-center m-0 p-2 rounded"> <?php echo $texto_quienes_somos['valores']['parrafos']['0'] ?></p>
                        </div>
                        <div class="my-2 col-12 col-md-3 col-lg-3 col-xl-3 valores d-flex align-items-center justify-content-center">
                            <p class="text-center m-0 p-2 rounded"> <?php echo $texto_quienes_somos['valores']['parrafos']['1'] ?></p>
                        </div>
                        <div class="my-2 col-12 col-md-3 col-lg-3 col-xl-3 valores d-flex align-items-center justify-content-center">
                            <p class="text-center m-0 p-2 rounded"> <?php echo $texto_quienes_somos['valores']['parrafos']['2'] ?></p>
                        </div>
                        <div class="my-2 col-12 col-md-3 col-lg-3 col-xl-3 valores d-flex align-items-center justify-content-center">
                            <p class="text-center m-0 p-2 rounded"> <?php echo $texto_quienes_somos['valores']['parrafos']['3'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
    <!-- VALORES -->


    <!-- SECCION_NOSOTROS -->
    <section id="seccion_nosotros" class="container mt-5">
        <div class="col-12">
            <div class="row">


                <div class="col-12 col-md-6 col-xl-4 col-lg-4">
                    <div class="my-5 contenedor_iconos_servicios text-center">
                        <div class="contenedor_icono_texto">
                            <div class=" d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['arrendamientos'] ?>"></i></div>
                        </div>
                        <p class="padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['arrendamiento']['titulo'] ?></p>
                        <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['arrendamiento']['parrafo'] ?></p> -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 col-lg-4">
                    <div class="my-5 contenedor_iconos_servicios text-center">
                        <div class="contenedor_icono_texto">
                            <div class="d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['ventas'] ?>"></i></div>
                        </div>
                        <p class="padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['ventas']['titulo'] ?></p>
                        <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['ventas']['parrafo'] ?></p> -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 col-lg-4">
                    <div class="my-5 contenedor_iconos_servicios text-center">
                        <div class="contenedor_icono_texto">
                            <div class="d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['procesos_civiles'] ?>"></i></div>
                        </div>
                        <p class="padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_civiles']['titulo'] ?></p>
                        <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_civiles']['parrafos']['0'] ?></p> -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 col-lg-4">
                    <div class="my-5 contenedor_iconos_servicios text-center">
                        <div class="contenedor_icono_texto">
                            <div class="d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['asesoria'] ?>"></i></div>
                        </div>
                        <p class="padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['asesoria']['titulo'] ?></p>
                        <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['asesoria']['parrafos']['0'] ?></p> -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 col-lg-4">
                    <div class="my-5 contenedor_iconos_servicios text-center">
                        <div class="contenedor_icono_texto">
                            <div class="d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['reclamaciones'] ?>"></i></div>
                        </div>
                        <p class="padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['reclamaciones']['titulo'] ?></p>
                        <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['reclamaciones']['parrafo'] ?></p> -->

                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-4 col-lg-4">
                    <div class="my-5 contenedor_iconos_servicios text-center">
                        <div class="contenedor_icono_texto">
                            <div class="d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['procesos_responsabilidad'] ?>"></i></div>
                        </div>
                        <p class="padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_responsabilidad']['titulo'] ?></p>
                        <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_responsabilidad']['parrafo'] ?></p> -->

                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- SECCION_NOSOTROS -->


    <!-- BOTON_CONSIGNAR_INMUEBLE -->
    <div class="container">
        <div class="container d-flex justify-content-center">
            <div class="boton_consignar_inmueble d-flex justify-content-center align-items-center my-3">
                <button type="submit" class="col-12 btn boton_buscar_formulario boton_consignar_inmueble2" data-toggle="modal" data-target="#exampleModal"> Consigna Tu Inmueble Aquí </button>
            </div>
        </div>
    </div>
    <!-- BOTON_CONSIGNAR_INMUEBLE -->

    <!-- CONTENIDO_MODAL -->
    <section id="contenido_modal">
        <div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Consignar Inmueble</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <form action="email/consignainmueble.php" class="row" method="post">

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Nombre del propietario" name="nombre_del_propietario" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="number" placeholder="Número del propietario" name="numero_del_propietario" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="number" placeholder="Precio" name="precio" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <select class="form-control select_color" id="tipo_inm" name="tipo_inm" requiered="">
                                        <option selected="" disabled="">Tipo de Inmueble</option>
                                        <option value="Apartamento">Apartamento</option>
                                        <option value="Casa">Casa</option>
                                        <option value="Consultorio">Consultorio</option>
                                        <option value="Oficina">Oficina</option>
                                        <option value="Local">Local</option>
                                        <option value="Bodega">Bodega</option>
                                        <option value="Lote">Lote</option>
                                        <option value="Finca">Finca</option>
                                        <option value="Parqueadero">Parqueadero</option>
                                        <option value="Edificio">Edificio</option>
                                        <option value="Apartaestudio">Apartaestudio</option>
                                        <option value="Hotel">Hotel</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <select class="form-control select_color" name="transaccion" requiered="">
                                        <option selected="" disabled="">Tipo de Transacción</option>
                                        <option value="arriendo">Arriendo</option>
                                        <option value="venta">Venta</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Ciudad" name="ciudad" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Barrio" name="barrio" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Dirección" name="direccion" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Nombre de la unidad" name="nombre_de_la_unidad" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="number" placeholder="Áréa del inmueble (mts²)" name="area_del_inmueble" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="number" placeholder="Número de habitaciones" name="numero_de_habitaciones" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="number" placeholder="Baños" name="baños" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <input type="text" placeholder="Tipo de cocina" name="tipo_de_cocina" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <select class="form-control select_color" name="sala_comedor" requiered="">
                                        <option selected="" disabled=""> Sala comedor </option>
                                        <option value="si">Si</option>
                                        <option value="ni">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <select class="form-control select_color" name="zona_de_ropas" requiered="">
                                        <option selected="" disabled=""> Zona de ropas </option>
                                        <option value="si">Si</option>
                                        <option value="ni">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <input type="number" placeholder="Parqueaderos" name="parqueaderos" class="form-control" requiered="">
                                </div>

                                <div class="form-group col-12">
                                    <select class="form-control select_color" name="cuarto_util" requiered="">
                                        <option selected="" disabled=""> Cuarto Útil </option>
                                        <option value="si"> Si </option>
                                        <option value="ni"> No </option>
                                    </select>
                                </div>

                                <div class="form-group col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" requiered="">
                                        <label class="form-check-label" for="exampleCheck1">Acepto <a class="politicas_contacto" href="politica_de_datos.pdf" download="Politica de Datos" class="a-terminos" target="_blank">la política y tratamiento de datos</a></label>
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn boton_buscar_formulario color_boton_consignar_inmueble">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTENIDO_MODAL -->
    <!-- FOOTER -->
    <section>
        <?php include 'layout/4_footer.php' ?>
    </section>
    <!-- FOOTER -->


    <section>
        <?php include 'layout/2_archivos_footer.php' ?>
        <!--  contador -->
        <script src="js/countUp.min.js"></script>
        <script src="js/counter-propertys.js"></script>
    </section>

</body>

</html>