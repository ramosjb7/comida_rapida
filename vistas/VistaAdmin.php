<?php include_once("../datos/conexion.php"); 
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMIDA RÁPIDA ""</title>
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


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
    <?php 
        include_once("../partials/navAdmin.php");
    ?>
   
    

    <article class="articulo_principal">
        
        <section class="seccion_titulos">
            <h1 class="titulo_principal">EL GUSTITO</h1>
            <!-- <h2 class="titulo_productos">Productos</h2> -->
            <?php 



            
            if(isset($_GET['nombreCliente'])){
                $nombreCliente = $_GET['nombreCliente'];
                echo "<p class='nombreCliente'>Bienvenido: " .$nombreCliente. "</p>";
            }
            ?>

        </section>

        <section>
            <h1><?php $sql="SELECT * from histofactura ";

        $result=mysqli_query($conexion,$sql);
       $total = 0; // total declarado antes del bucle
       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){
            $total = $total + $mostrar['total']; // Sumar variable $total + resultado de la consulta
    


}
echo " total vendido ".$total." bs";
         ?>
             
         </h1>

        </section>

        <section class="">
          <p class="titulo_principal"> HISTORIAL GENERAL VENTAS</p>
            <table class="table">
                <thead>
                    <tr>
                        <!--<th>nombre completo</th>
                        <th> correo</th>-->
                        <th>producto</th>
                        <th>descripcion</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        <th>total</th>

                </tr>
                    
                </thead>
                <tbody>
                    <tr>
                      <!-- para externas        -->
                                <?php 

        $sql="SELECT * from histofactura ";

        $result=mysqli_query($conexion,$sql);

       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){

    



         ?>

            <tr>

             <!--  <th scope="row"><?//php echo $mostrar['nombre']?></th>

            <td><?//php echo $mostrar['correo']?></td>-->

              <td><?php echo $mostrar['nompreproducto']?></td>

               <td><?php echo $mostrar['descripcion']?></td>

              <td>  <?php echo $mostrar['precio']?></td>   
              <td>  <?php echo $mostrar['cantidad']?></td> 
              <td>  <?php echo $mostrar['total']?></td>      

           

            </tr>

        <?php }

        ?>
                    </tr>
                  </tbody>


            </table>
           
        </section>
                

      

       

    </article>

    <footer class="footer">
        <p class="parrafo-footer">Contáctanos</p>   
         <div class="contenedor_redesSociales">
             
            <a href="#" class="a1">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="a2">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="#" class="a3">
                <i class="fab fa-whatsapp"></i>
            </a>

            <a href="#" class="a4">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </footer>
        <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body> 
</html> 