<?php
    include_once("conexion.php");


    $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contrasenia'];
        
        $query = "INSERT INTO usuarios(nombre,apellido,correo,usuario,contraseña) values ('$nombre','$apellido','$email','$usuario','$contraseña')";

        $resultado = mysqli_query($conexion,$query);
        if(!$resultado){
            return "ERROR";
        }
        header("location:../index.php");
?>