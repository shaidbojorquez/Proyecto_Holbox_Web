<?php
session_start();
include("libs/funciones_comprobacion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iniciar Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=$url_base;?>resources/css/estilos.css">
</head>
<body>
<div class="contenedor-formulario">
<h1>Iniciar de sesion</h1>
<form id="formulario"  class="caja-login" method="post" action="<?=$url_base;?>inicioSesion/validar">
    <div class="campo">
        <label for="correo">Correo: </label>
        <input type="text" name="correo" id="correo" placeholder="Correo">
    </div>
    <div class="campo">
        <label for="password">Contraseña: </label>
        <input type="password" name="contrasena" id="password" placeholder="Password">
    </div>
    <?=isError($errores,'no_login');?>
    <div class="campo enviar">
        <input type="hidden" id="tipo" value="login">
        <input type="submit" class="boton" value="Iniciar Sesión"><a href="<?=$url_base?>paginas/Inicio">
        <input type="button" value="Cancelar" class="boton"></a>
    </div>
</form>
</div>
</body>
</html>