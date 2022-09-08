<?php
include_once('conexion.php');
$cantidadVecesError = 0;
 if(isset($_POST['btnLogin'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $query = "SELECT * FROM usuarios where usuario= '$usuario' and contraseña='$contraseña'";

    $resultado = mysqli_query($conexion,$query);

    if(!$resultado){
        return "ERROR";
    }
    
    if(mysqli_num_rows($resultado) >= 1){
        session_start();
                $_SESSION['user_id'] = $fetch['usuario'];
                $_SESSION['time'] = time();
        while($fila = mysqli_fetch_array($resultado)){
            $nombre = $fila['nombre'];
            $apellido = $fila['apellido'];
            $correo = $fila['correo'];
            $usuario = $fila['usuario'];
            $pass = $fila['contraseña'];
            $_SESSION['dueno']=$nombre;
            //$nombre = $fila['nombre'];
            
        }
        if ($nombre=="admi") {
                header("location:../vistas/VistaAdmin.php?nombreCliente=$nombre");
            }else{
                 header("location:../vistas/VistaPrincipal.php?nombreCliente=$nombre&apellido=$apellido&correu=$correo$usuario=$usuario&pasw=$pass");
            }
       
    }else{
        header("location:../index.php");
    }
}

?>
