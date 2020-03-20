<?php
require_once 'variables/config.php';
require 'modelo_inmueble.php';

$ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL,'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/12');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $api = json_decode($result, true);
    
    

function inmuebles_destacados($r)
{
    if (is_array($r)) {
            $cantidad_inmuebles= count($r)-1;
            modelo_inmueble($r, $cantidad_inmuebles);
    } else {
        echo '<h2 class="text-center" >No tiene Inmuebles Destacados</h2>';
    }
}


function cantidad_inmuebles_imprimir($r){
    if (is_array($r)) {
    $cantidad_inmuebles = count($r)-1;
    echo '<script>var cantidad_inmuebles = '.$cantidad_inmuebles.'</script>';
    }else{
        echo '<script>var cantidad_inmuebles;</script>';
    }
}

cantidad_inmuebles_imprimir($api);

?>