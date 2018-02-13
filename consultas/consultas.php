<?php

include_once '../clases/conexion.php';

$db = new Conect_MySql();

$operacion = 'consultaDatosPersonales';
if(isset($_POST['operacion'])){
   $operacion=$_POST['operacion'];
}

switch($operacion){
    case 'consultaExperiencia':
        consultaExperiencia($db); 
        break;
    default:
        consultaDatosPersonales($db);
}

function consultaExperiencia($db) {
    $dni=$_POST['dni'];
    $sql = "SELECT * FROM formacion WHERE dni=$dni";
    $resultado = $db->obtentodoslosdatos($sql);
    echo json_encode($resultado);
}

function consultaDatosPersonales($db) {
    $dni=$_POST['dni'];
    $sql = "SELECT nombre,apellidos,puestoPreferido,rutaCVpdf,rutaFotoPerfil,movil,email FROM acceso WHERE dni=$dni";
    $resultado = $db->obtentodoslosdatos($sql);
    $edad=calcularEdad($db,$dni);
    $resultado[0]["edad"] = $edad;
    echo json_encode($resultado);
}

//Con mySql
function calcularEdad($db,$dni){
    $sql="SELECT TIMESTAMPDIFF(YEAR, fecha_nac, CURDATE()) AS Edad FROM acceso WHERE dni=$dni;";
    $resultado = $db->obtentodoslosdatos($sql);
    return $resultado[0][0];
}

//function calcularEdad($fechaNac){
//    $datetime = new DateTime($fechaNac);
//    $dateActual = new DateTime("now");
//    $interval = $dateActual->diff($datetime);
//    $edad=$interval->format("%y");
//    return $edad;
//}




