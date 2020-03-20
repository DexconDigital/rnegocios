<?php require 'variables/variables.php';
$page = 'Contáctanos' ?>

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
    <section id="banner" class="banner2 d-flex align-items-center justify-content-center position-relative">

        <div class="blanco titulo_banner position-absolute">
            <h1> Contáctanos </h1>
            <h6 class="text-center"> <a href="index.php"> Inicio </a> / Contáctanos </h6>
        </div>

        <div>
            <img style="object-fit:cover;" src="images/banner_contactanos.jpg" alt="">
        </div>

        <div class="position-absolute contenedor_negro">

        </div>

    </section>
    <!-- BANNER -->

    <!-- MAPA -->
    <section id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54934.77138206447!2d-75.62621918567667!3d6.155554219801202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4683df1aa5c905%3A0x31d04612c67cd56c!2sCl.%2075%20Sur%20%2345-44%2C%20Sabaneta%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1576762125225!5m2!1ses!2sco" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <!-- MAPA -->

    <!-- CONTACTANOS_CARDS -->
    <section id="contactanos_cards" class="py-5 fondo p-0 d-flex align-items-center">
        <div class="container">
            <div class="container">
                <div class="container p-0">

                    <div class="col-12">
                        <div class="row justify-content-center">

                            <div class="col-12 p-0 row justify-content-center">

                                <div class="border p-2 col-12 col-md-6 col-lg-4 col-xl-6 d-flex caja_cards flex-column align-items-center justify-content-center">
                                    <div class="contenedor_icono align-items-center justify-content-center d-flex"><i class=" <?php echo $datos_contacto['direccion']['icono'] ?>"> </i></div>
                                    <h5 class="font-weight-bold mt-2"> Visítanos </h5>
                                    <p class="p-0 text-center"><?php echo $datos_contacto['direccion']['direccion'] ?></p>
                                </div>

                                <div class="border p-2 t-2 col-12 col-md-6 col-lg-4 col-xl-6 d-flex caja_cards flex-column align-items-center justify-content-center">
                                    <div class="contenedor_icono align-items-center justify-content-center d-flex"><i class=" <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"> </i></div>
                                    <h5 class="font-weight-bold mt-2"> Llámanos </h5>
                                    <a href="tel:<?php echo $datos_contacto['celular']['link'] ?>"> <?php echo $datos_contacto['celular']['imprimir'] ?> </a>
                                    <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"> <?php echo $datos_contacto['telefono_fijo']['imprimir'] ?> </a>
                                </div>

                                <div class="border p-2 t-2 col-12 col-md-6 col-lg-4 col-xl-6 d-flex caja_cards flex-column align-items-center justify-content-center">
                                    <div class="contenedor_icono align-items-center justify-content-center d-flex"><i class="fas fa-share-alt"></i></div>
                                    <h5 class="font-weight-bold mt-2"> Síguenos </h5>
                                    <div class="d-flex">

                                        <li class="redes_sociales nav-link">
                                            <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"> <i class="<?php echo $redes_sociales['facebook']['icono'] ?>"> </i> </a>
                                        </li>

                                        <li class="redes_sociales nav-link">
                                            <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>"> <i class="<?php echo $redes_sociales['instagram']['icono'] ?>"> </i> </a>
                                        </li>

                                    </div>
                                </div>

                                <div class="border p-2 t-2 col-12 col-md-6 col-lg-4 col-xl-4 d-flex caja_cards flex-column align-items-center justify-content-center">
                                    <div class="contenedor_icono align-items-center justify-content-center d-flex"><i class=" <?php echo $datos_contacto['correo']['icono'] ?>"> </i></div>
                                    <h5 class="font-weight-bold mt-2"> Escríbenos </h5>
                                    <a class="text-break" href="mailto:<?php echo $datos_contacto['correo']['correo'] ?>"> <?php echo $datos_contacto['correo']['correo'] ?> </a>
                                    <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"><i class="<?php echo $datos_contacto['whatsapp']['icono'] ?>"> </i> <?php echo $datos_contacto['whatsapp']['imprimir'] ?> </a>
                                </div>

                                <div class="border p-2 t-2 col-12 col-lg-4 col-xl-4 d-flex caja_cards flex-column align-items-center justify-content-center">
                                    <div class="contenedor_icono align-items-center justify-content-center d-flex"><i class=" <?php echo $datos_contacto['horario']['icono'] ?>"> </i></div>
                                    <h5 class="font-weight-bold mt-2 text-center"> Horario de atención </h5>
                                    <p class="p-0 text-center"><?php echo $datos_contacto['horario']['horario'] ?></p>
                                </div>
                            </div>






                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="caja_azul"></div>

    </section>
    <!-- CONTACTANOS_CARDS -->




    <!-- FORMULARIO_CONTACTO -->
    <section id="formulario_contacto">

        <div class="container">
            <div class="container p-0">
                <div class="col-12 p-0">

                    <h2 class="text-center mt-4"> Formulario de contacto </h2>
                    <div class="my-2 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>

                    <div class="col-12 p-0">

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre y Apellido" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Correo" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Teléfono/Celular" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group text_Area">
                                <textarea cols="10" rows="7" name="message" class="textarea form-control tamaño_tex_area" placeholder="Mensaje"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="custom-control custom-checkbox mb-4">
                                <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy" required>
                                <label class="custom-control-label" for="defaultContactFormCopy">Confimo que he leído, entendido y acepto la<a class="color_a_contacto" target="blank" href="politica_de_datos.pdf" download="Politica de Datos"> política de tratamiento de datos personales.</a></label>
                            </div>
                        </div>

                        <!-- BOTON_ENVIAR -->
                        <button type="submit" class="ml-3 btn boton_buscar_formulario color_boton_consignar_inmueble" data-toggle="modal" data-target="#exampleModal"> Enviar </button>
                        <!-- BOTON_ENVIAR -->

                    </div>
                </div>
            </div>

    </section>
    <!-- FORMULARIO_CONTACTO -->










    <!-- FOOTER -->
    <section>
        <?php include 'layout/4_footer.php' ?>
    </section>
    <!-- FOOTER -->


    <section>
        <?php include 'layout/2_archivos_footer.php' ?>
    </section>

</body>

</html>