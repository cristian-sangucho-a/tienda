<?php 
include_once("./controlacceso.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PANEL PRINCIPAL</h1>
        <p>Bienvenido usuario: <?php echo $_SESSION['nombre']?> </p>

        <a href="panelprincipal.php">ES (Español)</a> | <a href="panelEN.php">EN (English)</a> <br> 
        <a href="cerrarSesion.php">Cerrar Sesion</a>

        <h2>Lista de Productos</h2>
        <!--Se debe hacer la lectura en Español-->
        <p> <?php include_once("./leerEspanol.php");?></p>


</body>
</html>