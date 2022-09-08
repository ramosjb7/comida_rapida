<?php
    include_once("conexion.php");

//href='../datos/registracomida.php?valor1=$nombre&valor2=$nombre&valor3=$nombre&valor4=$nombre&valor5=$descripcion&valor6=$precio&valor7=$cantidad&valor8=$Total

       $nombre = $_GET['valor1'];
        $apellido = $_GET['valor3'];
        $email = $_GET['valor4'];
        $descripcion = $_GET['valor5'];
        $precio = $_GET['valor6'];
        $cantidad = $_GET['valor7'];
        $Total = $_GET['valor8'];
        
       $query = "INSERT INTO datosfactura(nombre,apellido,correo,nompreproducto,descripcion,precio,cantidad,total) values ('$nombre','$apellido','$email','$nombre','$descripcion','$precio','$cantidad','$Total')";
        $resultado = mysqli_query($conexion,$query);
        if(!$resultado){
            return "ERROR";
        }
        header("location:../vistas/VistaCompraGenaral.php");
?>