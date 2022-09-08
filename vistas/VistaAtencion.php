<?php 
include_once("../datos/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPRA REALIZADA</title>
    <link rel="shortcut icon" href="../Imagenes/iconoPagina.png" type="image/x-icon">

     <!-- fuente de letra base -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500&display=swap" rel="stylesheet"> 


    <!-- fuente de letra Título Principal -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

    <!-- fuente de letra título Productos -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estiloBasePrincipal.css">
    <link rel="stylesheet" href="../css/estilodeCompraRealizada.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
      <?php 
         include_once("../partials/navAdmin.php");
    ?>
    <article class="mainCompraRealizada" class="container" >

        <div class="container">
            <div class="row">
                 <div class="col">

            <p class="parrafoGraciasPorTuCompra"> PRODUCTOS GENERAL</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>nombre Atencion</th>
                        <!--<th> correo</th>-->
                        <th>producto</th>
                        <th>descripcion</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>total</th>
                        <th>opcion</th>

                </tr>
                    
                </thead>
                <tbody>
                    <tr>
                      <!-- para externas        -->
                                <?php 

        $sql="SELECT * from datosfactura where delivery is null";

        $result=mysqli_query($conexion,$sql);

       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){

    



         ?>

            <tr>

              <th scope="row"><?php echo $mostrar['apodo']?></th>

             <!--<td><?php// echo $mostrar['correo']?></td>-->

              <td><?php echo $mostrar['nompreproducto']?></td>

               <td><?php echo $mostrar['descripcion']?></td>

              <td>  <?php echo $mostrar['precio']?></td>   
              <td>  <?php echo $mostrar['cantidad']?></td> 
              <td>  <?php echo $mostrar['total']?></td>  
             <td>
              



                
              <button type="button" class="btn btn-primary">
                <?php  
                $nombrev=$mostrar['nombre'];
                $correov=$mostrar['correo'];
                $nombreproductv=$mostrar['nompreproducto'];
                $decripcionv=$mostrar['descripcion'];
                $preciov=$mostrar['precio'];
                $cantidadv=$mostrar['cantidad'];
                $totalv=$mostrar['total'];
                echo "<a class='far fa-eye' style='color: white;'' href='../datos/registraratendido.php?valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv'> Atendido</a>";
                ?>






            </button>
              
            <button type="button" class="btn btn-danger">


                <?php  
                $nombrev=$mostrar['nombre'];
                $apellidov=$mostrar['apellido'];
                $correov=$mostrar['correo'];
                $nombreproductv=$mostrar['nompreproducto'];
                $decripcionv=$mostrar['descripcion'];
                $preciov=$mostrar['precio'];
                $cantidadv=$mostrar['cantidad'];
                $totalv=$mostrar['total'];
                echo "<a class='far fa-trash-alt' style='color: white;'' href='../datos/eliminapedido.php?valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv&valor8=$apellidov'> Eliminar</a>";
                ?>
                


            </button>
              
            </td>        

           

            </tr>

        <?php }

        ?>
                    </tr>
                  </tbody>


            </table>
</div>

 <div class="col">

            <p class="parrafoGraciasPorTuCompra"> PRODUCTOS GENERAL DELIVERY</p>
            <table class="table">
                <thead>
                    <tr>
                        <th>nombre completo</th>
                        <th> correo</th>
                        <th>producto</th>
                        <th>descripcion</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>total</th>
                        <th>opcion</th>

                </tr>
                    
                </thead>
                <tbody>
                    <tr>
                      <!-- para externas        -->
                                <?php 

        $sql="SELECT * from datosfactura where local is  null";

        $result=mysqli_query($conexion,$sql);

       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){

    



         ?>

            <tr>

              <th scope="row"><?php echo $mostrar['nombre']?></th>

             <td><?php echo $mostrar['correo']?></td>

              <td><?php echo $mostrar['nompreproducto']?></td>

               <td><?php echo $mostrar['descripcion']?></td>

              <td>  <?php echo $mostrar['precio']?></td>   
              <td>  <?php echo $mostrar['cantidad']?></td> 
              <td>  <?php echo $mostrar['total']?></td>  
             <td>
              



                
              <button type="button" class="btn btn-primary">
                <?php  
                $nombrev=$mostrar['nombre'];
                $correov=$mostrar['correo'];
                $nombreproductv=$mostrar['nompreproducto'];
                $decripcionv=$mostrar['descripcion'];
                $preciov=$mostrar['precio'];
                $cantidadv=$mostrar['cantidad'];
                $totalv=$mostrar['total'];
                echo "<a class='far fa-eye' style='color: white;'' href='../datos/registraratendido.php?valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv'> Entregado</a>";
                ?>






            </button>
              
            <button type="button" class="btn btn-danger">


                <?php  
                $nombrev=$mostrar['nombre'];
                $apellidov=$mostrar['apellido'];
                $correov=$mostrar['correo'];
                $nombreproductv=$mostrar['nompreproducto'];
                $decripcionv=$mostrar['descripcion'];
                $preciov=$mostrar['precio'];
                $cantidadv=$mostrar['cantidad'];
                $totalv=$mostrar['total'];
                echo "<a class='far fa-trash-alt' style='color: white;'' href='../datos/eliminapedido.php?valor1=$nombrev&valor2=$correov&valor3=$nombreproductv&valor4=$decripcionv&valor5=$preciov&valor6=$cantidadv&valor7=$totalv&valor8=$apellidov'> Cancelado</a>";
                ?>
                


            </button>
              
            </td>        

           

            </tr>

        <?php }

        ?>
                    </tr>
                  </tbody>


            </table>
</div>



 </div>
 </div>
    </article>

    <?php 
    include_once("../partials/footer.php");
    ?>

         <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>