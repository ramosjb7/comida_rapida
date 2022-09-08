<?php
    include_once("conexion.php");

//valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv
    $nombrep1 = $_GET['apodo'];
    $mesa = $_GET['mesa'];
   // $apellidop = $_GET['valor8'];
    
    //$contraseña =

                    
    //echo "string ".$nombrep1;
        
    $actualizavalor="UPDATE datosfactura
    SET local='$mesa',apodo='$nombrep1' WHERE delivery is null and local is null or local=''";
    
    if (mysqli_query($conexion,$actualizavalor)) {
header("location:../vistas/VistaPrincipal.php");
      

    }   
        
?>