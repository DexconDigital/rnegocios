<?php require 'variables/variables.php';
$page = 'Requisitos' ?>

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
            <h1> Requisitos </h1>
            <h6 class="text-center"> <a href="index.php"> Inicio </a> / Requisitos </h6>
        </div>

        <div>
            <img src="images/banner_requisitos.jpg" alt="">
        </div>

    </section>
    <!-- BANNER -->

    <!-- REQUISITOS_PARA_ARRENDAR -->

    <section class="text-justify container mt-5">
        <div class="container">

            <h4 class="font-weight-bold text-center mb-3"> <?php echo $textos_requisitos['canon_2']['importante']['titulo'] ?> </h4>
            <p> <?php echo $textos_requisitos['canon_2']['importante']['parrafos'] ?> </p>

            <div class="accordion d-flex flex-wrap" id="accordionExample">

                <div class="col-12 col-lg-6 col-xl-6 d-flex align-items-center card p-0">
                    <div id="headingOne">
                        <h2 class="mb-0">
                            <button class="boton_100 btn boton_requisitos" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <?php echo $textos_requisitos['canon_1']['titulo'] ?>
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                        <div class="card-body mt-3 p-0">
                           <div class="font-weight-bold mb-1"> <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['0']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['1']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['2']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['3']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['4']?></div>
                           <div class="font-weight-bold mt-2 mb-1"> <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['5']?></div>
                           <div  class="pr-5 mb-2"> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['6']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['7']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['8']?></div>
                           <div> • <?php echo $textos_requisitos ['canon_1'] ['parrafos'] ['9']?></div>
                          

                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-6 d-flex mt-2 mt-lg-0 mt-xl-0 align-items-center card p-0">
                    <div id="headingTwo">
                        <h2 class="mb-0">
                            <button class="boton_100 btn boton_requisitos collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <?php echo $textos_requisitos['canon_2']['titulo'] ?>
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                        <div class="card-body mt-3 p-0">
                        <div class="mb-1 font-weight-bold"> <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['0']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['1']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['2']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['3']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['4']?></div>
                        <div class="mb-1 mt-2 font-weight-bold"> <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['5']?></div>
                        <div class="mb-1 mt-2 font-weight-bold mb-2"> <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['6']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['7']?></div>
                        <div class="mb-1 mt-2 font-weight-bold"> <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['8']?></div>
                        <div class="mb-2"> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['9']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['10']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['11']?></div>
                        <div> • <?php echo $textos_requisitos ['canon_2'] ['parrafos'] ['12']?></div>
                        <!-- <div class="font-weight-bold mt-2"> Si la persona trabaja independiente debe traer certificado de ingresos </div> -->

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- REQUISITOS_PARA_ARRENDAR -->
    
    <!-- BOTONES PARA DESCARGAR2 -->

    <div class="container mt-5">
        <div class="container d-flex flex-wrap">
            <div class="col-12 col-lg-6 col-xl-6 p-0 d-flex justify-content-center ">
                <a class="boton_100" target="_blank" href="documentos/FORMULARIO-ARRENDAMIENTO.pdf"> <button class="btn boton_requisitos collapsed"> <?php echo $formularios_requisitos['0']['nombre'] ?> </button></a>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 mt-2 mt-lg-0 mt-xl-0 p-0 d-flex justify-content-center ">
                <a class="boton_100" target="_blank" href="documentos/AUTORIZACIONES-FORMULARIO.pdf"> <button class="btn boton_requisitos collapsed"> <?php echo $formularios_requisitos['1']['nombre'] ?> </button></a>
            </div>
        </div>
    </div>

    <!-- BOTONES PARA DESCARGAR2-->




    <!-- BOTONES_DESCARGAR_FORMULARIO_Y_AUTORIZACIÓN -->














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