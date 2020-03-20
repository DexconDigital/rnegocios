<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php';
$page = 'Inmuebles' ?>

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
      <h1> Inmuebles </h1>
      <h6 class="text-center"> <a href="index.php"> Inicio </a> / Inmuebles </h6>
    </div>

    <div>
      <img src="images/banner_inmuebles.jpg" alt="">
    </div>

  </section>
  <!-- BANNER -->

  <!-- Buscador -->
  <section>
    <?php include 'layout/buscador.php' ?>
  </section>
  <!-- Buscador -->

  <!-- SECCION-PROPIEDADES-DESTACADAS -->
  <section id="propiedades_destacadas_inmuebles" class="container">

    <div class="container  d-flex flex-wrap align-items-center justify-content-around">

      <!-- CARD -->
      <!-- <div class="m-0 mr-lg-0 mr-xl-0 mb-4 h-100 col-12 col-md-5 col-lg-12 col-xl-12 align-items-center justify-content-center container contenido_card justify-content-center p-0 row">

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

            <div class="d-flex justify-content-center mt-2 mt-lg-0 mt-xl-0"> <a class="boton_ver_detalle btn" href="detalle_inmueble.php?co=' . $codigo . '"> Ver más Detalles </a> </button></div>


          </div>

        </div>

      </div> -->
      <!-- CARD -->

      <!-- CARD -->
      <!-- <div class="m-0 mr-lg-0 mr-xl-0 mb-4 h-100 col-12 col-md-5 col-lg-12 col-xl-12 align-items-center justify-content-center container contenido_card justify-content-center p-0 row">

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

            <div class="d-flex justify-content-center mt-2 mt-lg-0 mt-xl-0"> <a class="boton_ver_detalle btn" href="detalle_inmueble.php?co=' . $codigo . '"> Ver más Detalles </a> </button></div>


          </div>

        </div>

      </div> -->
      <!-- CARD -->

      <?php $totalinmuebles = 0;
      if (is_array($api)) {
        $totalinmuebles = $api['datosGrales']['totalInmuebles'];
      } ?>
      <div class="col-12 mb-4">
        <h4 class="titulo_totalinmuebles text-center">Se han encontrado <?php echo $totalinmuebles ?> inmuebles</h4>
      </div>
      <!-- propiedades -->
      <?php
      if (is_array($api)) {
        listar_inmuebles($api['Inmuebles']);
      } else {
        echo '<div class="col-12">
                      <h2 class="text-center" >No se encontraron inmuebles</h2>
                  </div>';
      }
      ?>


    </div>

  </section>
  <!-- SECCION-PROPIEDADES-DESTACADAS -->

  <div class="col-12 text-center">
    <?php if (is_array($api)) : ?>
      <ul class="pagination mt-4 align-items-end justify-content-center">
        <?php if ($paginator->getPrevUrl()) : ?>
          <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
        <?php endif; ?>
        <?php foreach ($paginator->getPages() as $page) : ?>
          <?php if ($page['url']) : ?>
            <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
              <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
            </li>
          <?php else : ?>
            <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
          <?php endif; ?>
        <?php endforeach; ?>

        <?php if ($paginator->getNextUrl()) : ?>
          <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
        <?php endif; ?>
      </ul>
    <?php endif; ?>
  </div>

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