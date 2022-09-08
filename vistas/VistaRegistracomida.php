<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGÍSTRATE</title>
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
    <link rel="stylesheet" href="../css/estilodeRegistrate.css">
</head>

<body>
    <?php 
     include_once("../partials/navAdmin.php");
    ?>
    <main class="contenedorRegistro">
          <h1 class="titulo_registrate">¡ REGÍSTRATE  NUEVO PRODUCTO EN EL MENU !</h1>
    <form class="formulario" method="POST" action="../datos/registracomida.php">

    <label class="labelRegistro" for="nombre">url Imagen: </label><br>
    <input class="nombreUsuario inputRegistro" id="usuario" name="nombre" type="text" placeholder="Ingrese su nombre" required><br>

   
    <label class="labelRegistro" for="nombre">Nombre: </label><br>
    <input class="email inputRegistro" id="email" name="email" type="text" placeholder="Ingrese su Nombre Del Nuevo Producto" required><br>
    
    <label class="labelRegistro" for="nombre">Descripcion: </label><br>
    <input class="usuario inputRegistro" id="usuario" name="usuario" type="text" placeholder="Ingrese una Descripcion" required><br>

    <label class="labelRegistro" for="nombre">precio: </label><br>
    <input class="contrasenia inputRegistro" id="contrasenia" name="contrasenia" type="text" placeholder="Ingrese su Precio " required><br>

    <input class="btnRegistrate" name="btnRegistrate" type="submit" value="Regístrate">
    </form>
    <br>
   
    </main>
    <?php 
    include_once("../partials/footer.php");
    ?>
            <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>