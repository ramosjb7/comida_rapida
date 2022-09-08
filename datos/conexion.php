<?php
$usuario = "root";
$contraseña = "";
$servidor = "localhost";
$nombreBD = "comidarapida";

$conexion = mysqli_connect($servidor,$usuario,$contraseña,$nombreBD);

if(!isset($conexion)){
    die("Error");
}
session_start();
?>