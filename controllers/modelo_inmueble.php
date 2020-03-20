<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("980-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '
           

                      
    <a href="detalle_inmueble.php?co=' . $codigo . '" class="col-12 col-md-6 col-lg-4 col-xl-4 mb-4">
    <div class="card">
      <div style="height:258px"><img src="'. $imagen . '" class="card-img-top h-100 w-100" alt="..."></div>
      <p class="boton_cards btn boton_gestion"> ' . $api['Tipo_Inmueble'] . ' </p>
      <p class="boton_cards btn boton_inmueble"> ' . $api['Gestion'] . '  </p>
      <div class="card-body">

        <div>
          <p class="font-weigh-bold"> $';
          if ($api['Gestion'] == 'Arriendo') {
              echo $api['Canon'];
          } else if ($api['Gestion'] == 'Venta') {
              echo $api['Venta'];
          } else {
              echo $api['Canon'] . '/ $' . $api['Venta'];
          }
          echo ' </p>
        </div>

        <div class="d-flex">
          <i class="iconos_apartamento mr-2 fas fa-map-marker-alt"></i>
          <p> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
        </div>

        <div>
          <p class="text-muted"> Código: ' . $codigo . ' </p>
        </div>

        <div class="row justify-content-around">
          <div class="d-flex"> <i class="iconos_apartamento mr-2 fas fa-chart-area"></i>
            <p> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
          </div>
          <div class="d-flex"> <i class="iconos_apartamento mr-2 fas fa-bath"></i>
            <p> ' . $api['banios'] . ' </p>
          </div>
          <div class="d-flex"> <i class="iconos_apartamento mr-2 fas fa-bed"></i>
            <p> ' . $api['Alcobas'] . ' </p>
          </div>
          <div class="d-flex"> <i class="iconos_apartamento mr-2 fas fa-warehouse"></i>
            <p> ' . $api['garaje'] . ' </p>
          </div>

        </div>
      </div>
    </div>
  </a>
    
            ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
// function modelo_inmueble2($r)
// {
//     for ($i = 0; $i < count($r); $i++) {
//         $imagen = existeImagen(($r[$i]['foto1']));
//         $codigo = str_ireplace("980-", "", $r[$i]['Codigo_Inmueble']);
//         $api = $r[$i];

//         $descripcion = $api['descripcionlarga'];
//         $limite_de_cadena = 10;
//         // recortar cadena
//         if (strlen($descripcion) <= $limite_de_cadena) {
//             $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
//         } else {
//             $descripcion = $descripcion . '...';
//         }
//         // fin de recortar cadena
//         echo '
    

//         <div class="mt-5 row contenido_card bg_blanco">

//            <div class="contenido_card_imagen col-4 p-0 position-relative">
//             <div class="contenido_texto_card position-absolute">
//             <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_inmueble"> ' . $api['Tipo_Inmueble'] . '</p>
//             <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_gestion"> ' . $api['Gestion'] . ' </p>
//             <h4 class="font-weight-bold position-absolute rounded blanco precio"> $';
//             if ($api['Gestion'] == 'Arriendo') {
//                 echo $api['Canon'];
//             } else if ($api['Gestion'] == 'Venta') {
//                 echo $api['Venta'];
//             } else {
//                 echo $api['Canon'] . '/ $' . $api['Venta'];
//             }
//             echo '
            
//             </h4>
//           </div>
//           <div class="fondo_negro"> </div>
//            <div style="height:298px"><img class="border" src="' . $imagen . '" alt=""></div>
//            <div class="barra_azul"></div>

//            </div>

//          <div class="col-8 d-flex flex-column justify-content-center">

//           <div class="d-flex">
//             <i class="mr-2 fas fa-map-marker-alt"> </i>
//             <p> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
//           </div>

//           <div>
//             <p>'.$descripcion.'</p>
//           </div>

//           <div class="border_top pt-3 row justify-content-around align-items-baseline">
//             <div class="d-flex"> <i class="mr-2 fas fa-chart-area"></i>
//               <p class="m-0"> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
//             </div>
//             <div class="d-flex"> <i class="mr-2 fas fa-bath"></i>
//               <p class="m-0"> ' . $api['banios'] . ' </p>
//             </div>
//             <div class="d-flex"> <i class="mr-2 fas fa-bed"></i>
//               <p class="m-0"> ' . $api['Alcobas'] . ' </p>
//             </div>
//             <div class="d-flex"> <i class="mr-2 fas fa-warehouse"></i>
//               <p class="m-0"> ' . $api['garaje'] . ' </p>
//             </div>

//             <div class="d-flex justify-content-center"> <a class="boton_ver_detalle btn" href="detalle_inmueble.php?co=' . $codigo . '"> Ver más Detalles </a> </button></div>


//           </div>

//         </div>

//       </div>

//  ';
//     }
// }

function modelo_inmueble2($r)
{
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("980-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 10;
        // recortar cadena
        if (strlen($descripcion) <= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }
        // fin de recortar cadena
        echo '
    

        <div class="m-0 mr-lg-0 mr-xl-0 mb-4 h-100 col-12 col-md-5 col-lg-12 col-xl-12 align-items-center justify-content-center container contenido_card justify-content-center p-0 row">

        <div class="contenido_card_imagen col-12 col-lg-4 col-xl-4 p-0 position-relative">

          <div class="contenido_texto_card position-absolute">
            <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_inmueble"> ' . $api['Tipo_Inmueble'] . ' </p>
            <p class="d-flex justify-content-center position-absolute rounded blanco tipo_de_gestion">' . $api['Gestion'] . ' </p>
            <h4 class="font-weight-bold position-absolute rounded blanco precio"> $';
                        if ($api['Gestion'] == 'Arriendo') {
                            echo $api['Canon'];
                        } else if ($api['Gestion'] == 'Venta') {
                            echo $api['Venta'];
                        } else {
                            echo $api['Canon'] . '/ $' . $api['Venta'];
                        }
                        echo ' </h4>
          </div>

          <div class="fondo_negro"> </div>
          <div style="height:298px"><img class="border" src="' . $imagen . '" alt=""></div>
          <div class="barra_azul"></div>

        </div>

        <div class="contenido pb-3 pb-lg-0 pb-xl-0 col-12 col-lg-8 col-xl-8 d-flex flex-column justify-content-center">

          <div class="d-flex mt-2 mt-lg-0 mt-xl-0 d-flex align-items-baseline">
            <i class="mr-2 fas fa-map-marker-alt"> </i>
            <p class="m-0"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . '   </p>
          </div>

          <div>
            <p class="parrafo"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime corrupti corporis deserunt? Aut illum, eaque sint pariatur corporis mollitia exercitationem commodi assumenda consectetur facere quae aliquid quod ducimus debitis enim odit est eius atque adipisci odio consequatur a illo minus. Reiciendis aliquam magni fugit nisi consequuntur quasi voluptas placeat eius? </p>
          </div>

          <div class="border_top pt-3 row justify-content-around align-items-baseline">
            <div class="d-flex"> <i class="mr-2 fas fa-chart-area"></i>
              <p class="m-0"> ' . $api['AreaConstruida'] . 'm<sup>2  </p>
            </div>
            <div class="d-flex"> <i class="mr-2 fas fa-bath"></i>
              <p class="m-0"> ' . $api['banios'] . ' </p>
            </div>
            <div class="d-flex"> <i class="mr-2 fas fa-bed"></i>
              <p class="m-0"> ' . $api['Alcobas'] . ' </p>
            </div>
            <div class="d-flex"> <i class="mr-2 fas fa-warehouse"></i>
              <p class="m-0"> ' . $api['garaje'] . ' </p>
            </div>

            <div class="d-flex justify-content-center mt-2 mt-lg-0 mt-xl-0"> <a class="boton_ver_detalle btn" href="detalle_inmueble.php?co=' . $codigo . '"> Ver más Detalles </a> </button></div>


          </div>

        </div>

      </div>

 ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

  for ($i = 0; $i < count($r); $i++) {
    $imagen = existeImagen(($r[$i]['foto1']));
    $codigo = str_ireplace("980-", "", $r[$i]['Codigo_Inmueble']);
    $api = $r[$i];

    echo '

    <div class="mb-3 col-12 border-top border-bottom mb-5 col-12 px-3">
      <a href="detalle_inmueble.php?co=' . $codigo . '" class="row align-items-center">

        <h6 class="col-12 m-0 text-center py-3 px-3 card-title">' . $api['Tipo_Inmueble'] .' en '. $api['Gestion'] . ' </h6>


        <div class="imagen_similares col-12 d-flex align-items-center justify-content-center mb-3">
            <img src="' . $imagen . '" alt="">
        </div>

        <li class="col-12 justify-content-center align-items-baseline d-flex m-0"> <i class="azul_oscuro fas fa-map-marker-alt"></i>
            <p class="ml-2"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>
        </li>

        <div class="col-12 text-center d-flex flex-column align-items-center">

            <ul class="lista_similares p-0 d-flex">
                <li>
                    <i class="azul_oscuro fas fa-chart-area"></i>
                    <p class="d-inline"> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
                </li>
                <li>
                    <i class="ml-3 azul_oscuro fas fa-bed"></i>
                    <p class="d-inline"> ' . $api['Alcobas'] . ' </p>
                </li>
                <li>
                    <i class="ml-3 azul_oscuro fas fa-bath"></i>
                    <p class="d-inline"> ' . $api['banios'] . ' </p>
                </li>
                <li>
                    <i class="ml-3 azul_oscuro fas fa-warehouse"></i>
                    <p class="d-inline"> ' . $api['garaje'] . ' </p>
                </li>
                <li>

                </li>
            </ul>
            <p class="text-muted"> Código: ' . $codigo . ' </p>

        </div>
    </a>
</div>

    ';
  }
}
// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
