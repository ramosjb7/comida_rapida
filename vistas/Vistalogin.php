<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN_IIUNIDAD</title>

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
    <link rel="stylesheet" href="../css/estiloLogin.css">
    <link rel="stylesheet" href="../css/estiloBasePrincipal.css">
</head>
<body>
    <?php 
    include_once("../partials/navInicio.php");
    ?>
    <main class="mainLogin">
         <h1 class="tituloLogin">LOGIN</h1>
    <form class="formulario" method="POST" action="../datos/login.php">
        <label class="labelUsuarioLogin"  for="usuario">Usuario: </label>
        <input class="usuario" id="usuario" name="usuario" type="text" placeholder="Ingrese el usuario">

        <label class="labelContraseñaLogin" for="contraseña">Contraseña: </label>
        <input class="contraseña" id="contraseña" name="contraseña" type="password" placeholder="Ingrese la contraseña">

        <div class="contenedorBotonesLogin">
            <input class="btnLogin" name="btnLogin" type="submit" value="Iniciar Sesión">
            <button class="btnVistaRegistrate"><a class="enlaceVistaRegistrate" href="VistaRegistrate.php">Registrate</a></button>
        </div>
    </form>
    <button class="btnVolverInicio"><a class="enlaceVolverInicio" href="../index.php">Volver</a></button>
</main>
<div class="separadorMainFooter">

</div>
    <?php 
    include_once("../partials/footer.php");
    ?>
            <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>