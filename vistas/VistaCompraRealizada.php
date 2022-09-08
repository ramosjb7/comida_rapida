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
</head>
<body>
      <?php 
        include_once("../partials/navPrincipal.php");
    ?>
    <main class="mainCompraRealizada">
        <div class="contenedorParrafoYBoton">
            <p class="parrafoGraciasPorTuCompra">Gracias por tu Compra !!!</p>
        <button class="btnVolverAProductos">
            <a class="enlaceVolverAProductos" href="./VistaPrincipal.php">Volver</a>
        </button>
        </div>  
        
    </main>
    <?php 
    include_once("../partials/footer.php");
    ?>

         <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>