<?php

require('Config\Autoload.php');
require('Config\Config.php');

use Config\Autoload as Autoload;
use Modelo\Usuario as Usuario;
use Modelo\Mensaje as Mensaje;

Autoload::Start();

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<meta charset="utf-8">
	<style type="text/css"> 
		*{ font-family: Arial;} 
		body {background-color: rgb(45,45,45); color: white;margin:0;} 
		p  {width: 100%; text-align: center; display: inline-block;}
		.primary-color{background-color: #EF233C; color: white;}
		.button{padding: 10px 15px; border: 0; outline: 0; cursor: pointer; transition: 6s;} 
		.button:hover{opacity: 0.1;}

	</style>	
</head>
<body>
	<?php if(!isset($_SESSION['usuarioCompleto'])) { ?>
	<div align="center">
		<form action="controladora/loguearse" method="POST" enctype="multipart/form-data">
			<p>Nombre: </p><input type="text" name="nombre" placeholder="Ingrese Nombre">
			<p>Email: </p><input type="email" name="email" placeholder="Ingrese Mail">
			<p>Password: </p><input type="password" name="password" placeholder="Ingrese Password">
			<p>Subir Foto: </p><input type="file" name="fotito" value="Subir Foto">
			<br>
			<input class="button primary-color" type="submit" name="submit" value="Registrarse" >
		</form>
	</div>
	<?php } else { $cargaMensajeUsuario = $_SESSION['usuarioCompleto'] ?>

		<div align="center">
			<br>
			<p>Hola : </p><?= $cargaMensajeUsuario->getNombre() ?>

			<?= $ima=$cargaMensajeUsuario->getFotoPerfil()?>
			<!--<?php var_dump($cargaMensajeUsuario) ?> -->
			<img src="<?=$cargaMensajeUsuario->getFotoPerfil()?>">-->

			<br>
			<input class="button primary-color" type="button" name="nuevoMensaje" onclick="location='controladora/nuevoMensaje'" value="Nuevo Mensaje">
			<input class="button primary-color" type="button" name="ConsultarMensajes" onclick="location='public_html/consultaMensajes'" value="Consulta Mensajes">
		</div>
	<?php } ?>

	<div align="center">
	<br>
		<form action="controladora/CloseSession" method="GET">
			<input type="submit" name="cierreSesion" value="Cerrar Sesion" class="button primary-color">
		</form>
	</div>
</body>
</html>