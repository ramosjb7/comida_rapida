<?php
    include_once("conexion.php");

//valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv
    $nombrep1 = $_GET['tipop'];
   // $apellidop = $_GET['valor8'];
    
    //$contraseña =

                    
    //echo "string ".$nombrep1;
        
    $actualizavalor="UPDATE datosfactura
    SET delivery='$nombrep1' WHERE delivery is NULL  and local IS NULL ";
    //UPDATE histo_hoja SET fechafin='2022-10-10' WHERE codnum='123127'and fechafin is null or  fechafin='';
    if (mysqli_query($conexion,$actualizavalor)) {
     header("location:https://uninetplus.bancounion.com.bo/Uninetplus/Account/Login");
      

    }   
        
?>