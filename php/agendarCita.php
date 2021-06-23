<?php
//cambiar zona horaria 
date_default_timezone_set('America/Mexico_City');

//validación de los inputs del form
$post = (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
    (isset($_POST['apellidos']) && !empty($_POST['apellidos'])) &&
    (isset($_POST['correo']) && !empty($_POST['correo'])) &&
    (isset($_POST['celular']) && !empty($_POST['celular'])) &&
    (isset($_POST['fechaSelect']) && !empty($_POST['fechaSelect'])) &&
    (isset($_POST['hora']) && !empty($_POST['hora']));

if ($post) {
    $nombre    =   $_POST['nombre'];
    $apellidos =   $_POST['apellidos'];
    $correo    =   $_POST['correo'];
    $celular   =   $_POST['celular'];
    $fecha     =   $_POST['fechaSelect'];
    $hora      =   $_POST['hora'];

    //para verificar que la fecha recibida sea posterior a la de hoy
    $fechaHoy  = strtotime(date("d-m-Y H:i:00", time()));
    $fechaPost = strtotime($fecha);

    if ($fechaPost > $fechaHoy) {
        //se obtiene el número de día de la semana si se quiere el texto se esa l en vez de w
        $numday = date("w",$fechaPost);

        //si el día es domingo o sabado no se trabaja
        if($numday == 0 || $numday == 6){
            alertP();
        }else{


            $folio = $fechaHoy;
            echo "Todo good ".$numday." ".$folio;
        }
    } else {
        alertP();
    }
} else {
    alertP();
}

function alertP()
{
    echo "<script language='javascript'>
            alert('Algo esta mal, revisa los datos');  
            window.location='cita.php';
          </script>";
}
