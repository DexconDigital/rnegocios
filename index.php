<?php require 'variables/variables.php';
require 'controllers/indexController.php';
require 'variables/metaEtiquetas.php';
$page = 'Inicio' ?>

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

  <!---HEADER -->
  <?php include 'layout/3_header.php' ?>
  <!---HEADER -->


  <!-- CARRUSEL PRINCIPAL -->
  <section id="carouselExampleControls" class="carrusel_principal carousel slide" data-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="images/slide1.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="images/slide2.jpg" class="d-block w-100" alt="...">
      </div>

      <div class="carousel-item">
        <img src="images/slide3.jpg" class="d-block w-100" alt="...">
      </div>

    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </section>
  <!-- CARRUSEL PRINCIPAL -->

  <!-- Buscador -->
  <section>
    <?php include 'layout/buscador.php' ?>
  </section>
  <!-- Buscador -->

  <!-- SECCION-NOSOTROS -->
  <section id="seccion_nosotros">

    <div class="container">

      <div class="mb-5 justify-content-center d-flex flex-column">
        <h2 class="font-weight-bold text-center"> <?php echo $texto_quienes_somos['quienes_somos']['titulo'] ?> </h2>
        <div class="my-3 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>
        <p class="text-center"> <?php echo $texto_quienes_somos['quienes_somos']['parrafos']['0'] ?> </p>
      </div>


      <div class="col-12">
        <div class="d-flex flex-wrap justify-content-center">


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
              <p class="px-2 padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_responsabilidad']['titulo'] ?></p>
              <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_responsabilidad']['parrafo'] ?></p> -->

            </div>
          </div>

          <div class="col-12 col-md-6 col-xl-4 col-lg-4">
            <div class="my-5 contenedor_iconos_servicios text-center">
              <div class="contenedor_icono_texto">
                <div class="d-flex justify-content-center contenedor_icono"><i class="align-items-center icono_servicios justify-content-center d-flex <?php echo $iconos_servicios['administracion_propiedad_horizontal'] ?>"></i></div>
              </div>
              <p class="px-2 padding_titulo font-weight-bold text-center"><?php echo $texto_servicios['actividades_inmobiliarias']['administracion_propiedad_horizontal']['titulo'] ?></p>
              <!-- <p><?php echo $texto_servicios['actividades_inmobiliarias']['procesos_responsabilidad']['parrafo'] ?></p> -->

            </div>
          </div>


        </div>
      </div>


    </div>

  </section>
  <!-- SECCION-NOSOTROS -->

  <!-- SECCION-PROPIEDADES-DESTACADAS -->
  <section id="propiedades_destacadas">
    <div class="container">

      <div class="my-5 justify-content-center d-flex flex-column">
        <h2 class="font-weight-bold text-center"> Propiedades Destacadas </h2>
        <div class="my-3 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>
      </div>

      <div class="col-12">

        <div class="row">

          <?php
          if (is_array($api)) {
            inmuebles_destacados($api);
          } else {
            echo ' <div class="col-12">
                    <h2 class="text-center">No tiene Inmuebles Destacados</h2>
                   </div>';
          }
          ?>


        </div>

      </div>




    </div>


  </section>
  <!-- SECCION-PROPIEDADES-DESTACADAS -->

  <!-- SECCION ALIADOS -->
  <section id="seccion_aliados">
    <div class="container especial">

      <!-- TITULO -->
      <div class="mt-5 justify-content-center d-flex flex-column">
        <h2 class="font-weight-bold text-center"> Aliados </h2>
        <div class="mt-3 d-flex justify-content-center"><img src="images/divisor.png" alt=""></div>
      </div>
      <!-- TITULO -->

      <!-- DIV DE IMAGENES -->
      <div class="container container_imagenes">

        <div class="col-12">

          <div class="d-flex">

            <div class="animacion_logo col-4 d-flex justify-content-start aliados">
              <img class="n1 m-auto" src="images/fenalco.png" alt="">
            </div>

            <div class="col-4 d-flex justify-content-center aliados">
              <img class="n2 m-auto" src="images/m2.png" alt="">
            </div>

            <div class="col-4 d-flex justify-content-end aliados">
              <img class="n3 m-auto" src="images/mlibre.png" alt="">
            </div>

            <div class="col-4 d-flex justify-content-end aliados">
              <img class="n4 m-auto" src="images/olx.png" alt="">
            </div>

            <div class="col-4 d-flex justify-content-end aliados">
              <img class="n5 m-auto" src="images/simi.png" alt="">
            </div>

          </div>

        </div>

      </div>
      <!-- DIV DE IMAGENES -->

      <!-- DIV DE IMAGENES (RESPONSIVE) -->
      <div class="container mt-3 container_imagenes2">

        <div class="col-12 d-flex align-items-center">

          <div class="animado col-12 position-relative d-flex justify-content-start aliados">
            <img class="" src="images/fenalco.png" alt="">
          </div>

          <div class="col-12 d-flex justify-content-center aliados2">
            <img class="" src="images/m2.png" alt="">
          </div>

          <div class="col-12 d-flex justify-content-end aliados2">
            <img class="" src="images/mlibre.png" alt="">
          </div>

          <div class="col-12 d-flex justify-content-end aliados2">
            <img class="" src="images/olx.png" alt="">
          </div>

          <div class="col-12 d-flex justify-content-end align-items-center aliados">
            <img style="height:100px" src="images/simi.png" alt="">
          </div>

        </div>

      </div>
      <!-- DIV DE IMAGENES (RESPONSIVE) -->



    </div>

  </section>
  <!-- SECCION ALIADOS -->


  <!-- FOOTER -->
  <section>
    <?php include 'layout/4_footer.php' ?>
  </section>
  <!-- FOOTER -->


  <section>
    <?php include 'layout/2_archivos_footer.php' ?>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>
  </section>

</body>

</html>