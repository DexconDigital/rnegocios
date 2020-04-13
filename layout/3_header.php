<!-- Codigo del preloader -->
<style>
  #wrap-preload {
    position: fixed;
    z-index: 10;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: #fff;
    opacity: 1;
    visibility: visible;
    transition: opacity .5s ease, visibility .5s ease;
    z-index: 1032;
  }

  #wrap-preload.close {
    opacity: 0;
    visibility: hidden;
  }

  .fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 10;
  }

  #wrap-preload>img.gif {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
    z-index: 1032;
    height: 15%;
  }
</style>
<div id="wrap-preload">
  <img src="images/Radio-1s-200px.gif" alt="gif" class="gif" id="gif">
</div>
<script>
  var loader = document.getElementById("wrap-preload");
  window.addEventListener("load", function() {
    loader.style.visibility = "hidden";
  });
</script>
<!-- Fin de codigo preloader -->

<header id="header_redes" class="header1 w-100 position-fixed sticky-top">

  <div class="container">

    <nav class="d-flex flex-column navbar navbar-expand-lg navbar-light">

      <div class="col-12 d-flex align-items-center justify-content-between p-0">
        <div>
          <a class="navbar-brand" href="index.php"> <img class="logo" src="images/logo.png" alt=""> </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <div id="contacto">
          <a href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i class="azul_claro <?php echo $datos_contacto['celular']['icono'] ?>"> </i> <?php echo $datos_contacto['celular']['imprimir'] ?> </a>
        </div>

        <div id="contacto">
          <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"> <i class="azul_claro <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"> </i> <?php echo $datos_contacto['telefono_fijo']['imprimir'] ?> </a>
        </div>

        <div id="contacto">
          <a href="mailto:<?php echo $datos_contacto['correo']['correo']  ?>"><i class="azul_claro <?php echo $datos_contacto['correo']['icono'] ?>"> </i> <?php echo $datos_contacto['correo']['correo'] ?> </a>
        </div>


      </div>

      <div class="rounded fondo_menu col-12 collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100">

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="index.php"> Inicio </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="quienes_somos.php"> Quiénes Somos </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="inmuebles.php?"> Inmuebles </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="requisitos.php"> Requisitos </a>
          </li>

          <li class="d-flex align-items-center nav-item dropdown">
            <a class="botones_menu nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Transacciones en Linea
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=980&tipo=2"> Arrendatarios </a>
              <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=980&tipo=1"> Propietarios </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="contactanos.php"> Contáctanos </a>
          </li>

        </ul>

        <li class="redes_sociales nav-link">
          <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"> <i class="icono <?php echo $datos_contacto['whatsapp']['icono'] ?>"> </i> </a>
        </li>

        <li class="redes_sociales nav-link">
          <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"> <i class="icono <?php echo $redes_sociales['facebook']['icono'] ?>"> </i> </a>
        </li>

        <li class="redes_sociales nav-link">
          <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>"> <i class="icono <?php echo $redes_sociales['instagram']['icono'] ?>"> </i> </a>
        </li>

      </div>
    </nav>

  </div>

</header>

<header id="header_redes" class="header2 w-100 position-fixed sticky-top">

  <div class="container">

    <nav class="d-flex flex-column navbar navbar-expand-lg navbar-light">



      <div class="col-12 d-flex align-items-center justify-content-between p-0">


        <a class="navbar-brand" href="index.php">
          <img class="logo" src="images/logo.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>




      </div>

      <div class="rounded fondo_menu col-12 collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100">

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="index.php"> Inicio </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="quienes_somos.php"> Quiénes Somos </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="inmuebles.php?"> Inmuebles </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="requisitos.php"> Requisitos </a>
          </li>

          <li class="d-flex align-items-center nav-item dropdown">
            <a class="botones_menu nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Transacciones en Linea
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=980&tipo=2"> Arrendatarios </a>
              <a class="dropdown-item" target="_blank" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=980&tipo=1"> Propietarios </a>
          </li>

          <li class="d-flex align-items-center nav-item">
            <a class="botones_menu nav-link" href="contactanos.php"> Contáctanos </a>
          </li>

        </ul>

        <div class="d-flex justify-content-between pb-3 flex-wrap">

          <div class="d-flex">
            <li class="redes_sociales nav-link">
              <a target="_blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>"> <i class="<?php echo $datos_contacto['whatsapp']['icono'] ?>"> </i> </a>
            </li>

            <li class="redes_sociales nav-link">
              <a target="_blank" href="<?php echo $redes_sociales['facebook']['link'] ?>"> <i class="<?php echo $redes_sociales['facebook']['icono'] ?>"> </i> </a>
            </li>

            <li class="redes_sociales nav-link">
              <a target="_blank" href="<?php echo $redes_sociales['instagram']['link'] ?>"> <i class="<?php echo $redes_sociales['instagram']['icono'] ?>"> </i> </a>
            </li>
          </div>

          <div class="d-flex">
            <li class="nav-link">
              <a href="tel:<?php echo $datos_contacto['celular']['link'] ?>"><i style="color:white; font-size:22px" class="azul_claro <?php echo $datos_contacto['celular']['icono'] ?>"> </i></a>
            </li>

            <li class="nav-link">
              <a href="tel:<?php echo $datos_contacto['telefono_fijo']['link'] ?>"> <i style="color:white; font-size:22px" class="azul_claro <?php echo $datos_contacto['telefono_fijo']['icono'] ?>"> </i> </a>
            </li>

            <li class="nav-link">
              <a href="mailto:<?php echo $datos_contacto['correo']['correo']  ?>"><i style="color:white; font-size:22px" class="azul_claro <?php echo $datos_contacto['correo']['icono'] ?>"> </i> </a>
            </li>

          </div>
        </div>


      </div>
    </nav>

  </div>

</header>