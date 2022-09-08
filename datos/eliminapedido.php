<?php
    include_once("conexion.php");

//valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv
    $nombrep = $_GET['valor1'];
    $apellidop = $_GET['valor8'];
    $correop = $_GET['valor2'];
    $nombreprodcup = $_GET['valor3'];
    $descripcionp = $_GET['valor4'];
    $preciop = $_GET['valor5'];
    $cantidadp = $_GET['valor6'];
    $totalp = $_GET['valor7'];
        
        
         $result = mysqli_query($conexion, "DELETE FROM datosfactura 
            WHERE 
            nombre='$nombrep' and 
            apellido='$apellidop' and 
            correo='$correop' and 
            nompreproducto='$nombreprodcup' and 
            descripcion='$descripcionp' and 
            precio='$preciop' and 
            cantidad='$cantidadp' and 
            total=$totalp
            

            ");
           //mysqli_query($conexion,$result);
        //$resultado = mysqli_query($conexion,$result);
        if(!$resultado = mysqli_query($conexion,$result)){
            //return "ERROR";
            header("location:../vistas/VistaAtencion.php");
        }else{
            echo "error";
        }
        
?>