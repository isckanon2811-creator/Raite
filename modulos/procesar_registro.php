<?php
session_start();
require_once("conn.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Recoger los datos
     $nombre = $_POST['nombre'];
     $apellidos = $_POST['apellidos'];
     $curp = $_POST['curp'];
     $correoelectronico = $_POST['correo'];
     $pass = $_POST['pass'];
     $telefono = $_POST['telefono'];
     $unidad = $_POST['unidad'];
     $fecha = date("Y-m-d H:i:s");

    //creamos coneccion
    $conn = mysql_connect($host,$usr,$paswrd);
    mysql_select_db($db,$conn);

    //Guardar en DB
    mysql_query("INSERT INTO conductores(NOMBRE,APELLIDOS,CURP,CORREO,PASS,TELEFONO,UNIDAD) 
    VALUES ('$nombre','$apellidos','$curp','$correoelectronico','$pass','$telefono','$unidad')
    ",$conn); 
    
    // 4. Crear la sesión para el index
    //$_SESSION['usuario_rol'] = 'conductor';
    //$_SESSION['usuario_nombre'] = $nombre;

    // 5. Redirigir
    header("Location: ../ventanas/guardar_conductor.php");
    exit();
}
?>