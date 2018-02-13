<?php

include_once '../clases/conexion.php';

$db = new Conect_MySql();

$operacion = 'consultaAccesoUsuarios';
    
if(isset($_POST['operacion'])) {
   $operacion=$_POST['operacion'];
}

switch($operacion){
    case 'InsertarAccesoUsuarios':
        insertarAccesoUsuarios($db);
        break;
    default:
        consultaAccesoUsuarios($db);
}


function consultaAccesoUsuarios($db) {
    $dni=$_POST['dni'];
    $password=$_POST['password'];
    //vemos si el usuario y contraseña es váildo
    if (comprobar($db, $dni, $password)) {
        echo 'autorizado';
    }else {
        echo 'fallo';
    }
}

function insertarAccesoUsuarios($db) {
    /* comprobar si una variable esta definida(isset)*/
    $dni=$_POST["dni"];
    $password=$_POST["password"];
    $password_cifrada=password_hash($password, PASSWORD_DEFAULT);
    $rol=$_POST["rol"];
    $consulta="INSERT INTO Acceso (dni,password,rol) ";
    $consulta.="VALUES ('$dni','$password_cifrada','$rol');";
    $db->execute($consulta);
    $db->close_db();
}

/**
* Comprueba si existe algun usuario con los datos pasados como parametros. 
* 
* @param type $id Id del usuario.
* @param type $pass Pass del usuario.
* @return boolean 
*/
function comprobar($db,$dni,$password){
    $sql = "SELECT password,rol FROM Acceso WHERE dni='$dni'";
    $resultado = $db->obtentodoslosdatos($sql);
    try{     
        if (password_verify($password, $resultado[0][0])) {
            //CREAMOS SESION
            session_start();
            $_SESSION["tipoUser"]=$resultado[0][1];
            //CREAR COOKIES
            //Guardar fecha de visita
            $fecha = date("d/m/Y | H:i:s");
            setcookie("fecha", $fecha, time()+31536000,"/");
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        // Si se produce una excepción, mato el proceso
        die("Error: " . $e->getMessage());
    }
    
}

