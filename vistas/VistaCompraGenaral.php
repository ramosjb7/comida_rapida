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
        include_once("../partials/navPrincipal.php");
    ?>
    <article class="mainCompraRealizada" class="container" >

        <div class="">
            <p class="parrafoGraciasPorTuCompra"> DATOS DE FACTURA GENERAL</p>
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

        $sql="SELECT * from datosfactura ";

        $result=mysqli_query($conexion,$sql);

       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){

    



         ?>

            <tr>

              <!--<th scope="row"><?//php echo $mostrar['nombre']?></th>

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


<!--PARTE MODAL-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATOS PARA LA ATENCION EN MESA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">nombre para la atencion </label>
      <input id="llamdo" type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">N° de mesa </label>
      <select id="inputState" class="form-control">
        <option selected>seleccione mesa...</option>
        <option value="mesa 1">mesa 1</option>
        <option value="mesa 2">mesa 2</option>
        <option value="mesa 3">mesa 3</option>
        <option value="mesa 4">mesa 4</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity">TOTAL A PAGAR </label>
<?php $sql="SELECT * from datosfactura WHERE delivery is NULL ";

        $result=mysqli_query($conexion,$sql);
       $total = 0; // total declarado antes del bucle
       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){
            $total = $total + $mostrar['total']; // Sumar variable $total + resultado de la consulta
    


}
//echo "".$total." bs";
         ?>
      <input type="text" class="form-control" id="inputCity"placeholder="<?php echo "".$total." bs"; ?>">
    </div>
    

  </div>


      </div>
      <div class="modal-footer">
        <button  type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button  onclick="miAlertalocal()" type="button" class="btn btn-primary">


          <a class="enlaceVolverAProductos" >PAGAR</a>




        </button>
      </div>
    </div>
  </div>

<script>
  function miAlertalocal(evento) {

    var parallamado = document.getElementById('llamdo').value;
   
   var mesa = document.getElementById('inputState').value;
    //var mesa = document.getElementById('inputState').value;

  
    //alert("Se ah dado clic al enlace pero el  "+mesa+" "+parallamado);

    window.location = "../datos/registralocal.php?mesa="+mesa+"&apodo="+parallamado;

  }



</script>




</div>
        
<!--PARTE MODAL-->
<center>
        <button type="button" class="btnVolverAProductos" data-toggle="modal" data-target="#exampleModal" >
            <a class="enlaceVolverAProductos" >LOCAL</a>
            
        </button>
        </center>
        <br>


<!--PARTE MODAL-->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modaldeliveri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DATOS PARA EL ENVIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-row">

    <div class="form-group col-md-4">
      <label for="inputState">nombre del delivery </label>
      <select  id="tipop" class="form-control">
        <option selected>seleccione </option>
        <option <?php $dato1="juan" ?>value="juan">juan</option>
        <option <?php $dato2="rodrigo" ?>value="rodrigo">rodrigo</option>
        <option <?php $dato3="maria" ?>value="maria">maria</option>
        <option <?php $dato4="britani" ?>value="britani">britani</option>
      </select>
    </div>

     <div class="form-group col-md-6">
      <label for="inputCity">total a pagar </label>
      <?php $sql="SELECT * from datosfactura WHERE local is NULL ";

        $result=mysqli_query($conexion,$sql);
       $total = 0; // total declarado antes del bucle
       // $mostrar=mysqli_fetch_array($result)

        while($mostrar=mysqli_fetch_array($result)){
            $total = $total + $mostrar['total']; // Sumar variable $total + resultado de la consulta
    


}
//echo "".$total." bs";
         ?>
      <input type="text" class="form-control" id="inputCity"placeholder="<?php echo "".$total." bs";  ?>" >

    </div>

  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button onclick="miAlertaacerta()" type="button" class="btn btn-primary">
           
          <a class="enlaceVolverAProductos">PAGAR</a>

           <?php 

           //$nombreusu = (isset($_SESSION['nombrew']))?$_SESSION['nombrew']:""; 
                 //$nombrev=$mostrar['nombre'];
                //echo "<a class='enlaceVolverAProductos' style='color: black;'' href='../datos/registradelivery.php?valor1=$dato1&valor2=$dato2&valor3=$dato3&valor4=$dato4&valor5=$nombreusu'> Pagar</a>";
                ?>



          

        </button>





      </div>
    </div>
  </div>
 <script>
  function miAlertaacerta(evento) {
   
   var tipo = document.getElementById('tipop').value;


  
    //alert("Se ah dado clic al enlace pero el  "+tipo);

    window.location = "../datos/registradelivery.php?tipop="+tipo;

  }



</script>


</div>
        
<!--PARTE MODAL-->




         <!--<button class="btnVolverAProductos">
            <a class="enlaceVolverAProductos" href="./VistaPrincipal.php">PAGAR EN DELIVERI</a>
            
        </button>-->
        <center>
        <button type="button" class="btnVolverAProductos" data-toggle="modal" data-target="#Modaldeliveri">
            <a class="enlaceVolverAProductos"  >DELIVERY</a>
            
        </button>
<br>
</center>
         <button class="btnVolverAProductos">
            <a class="enlaceVolverAProductos" href="./VistaPrincipal.php">Volver</a>
            
        </button>
        </div>  
    





    </article>

    <?php 
    include_once("../partials/footer.php");
    ?>

         <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>