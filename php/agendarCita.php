<?php
require('vendor/autoload.php');
$nombre    = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo    = $_POST['correo'];
$celular   = $_POST['celular'];
$fecha     =   $_POST['fechaSelect'];
$hora     =   $_POST['hora'];

echo "$nombre $apellidos $correo $celular $fecha $hora";
