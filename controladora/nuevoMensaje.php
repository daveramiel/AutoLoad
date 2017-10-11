<?php namespace controladora;
require('..\Config\Autoload.php');
require('..\Config\Config.php');

use Config\Autoload as Autoload;
use Modelo\Usuario as Usuario;
use Modelo\Mensaje as Mensaje;

Autoload::Start();
session_start();
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>New Message</title>
 	<meta charset="utf-8">
 	<style type="text/css"> 
 		*{ font-family: Arial;}
		body {background-color: rgb(45,45,45); color: white;margin:0;} 
		td { text-align: center; padding: 10px 20px; }
		p  {width: 100%; text-align: center; display: inline-block;}
		.button{padding: 10px 15px; border: 0; outline: 0; cursor: pointer; transition: 6s;} 
		.button:hover{opacity: 0.1;}
		.primary-color{background-color: #EF233C; color: white;}
 	</style>
 </head>
 <body>
 	<?php  if (isset($_SESSION['usuarioCompleto'])){ 
 		$usuarioCompleto=$_SESSION['usuarioCompleto'];
 	?>
 	<div>
 		<p>Hola! : </p><p><?= $usuarioCompleto->getNombre() ?></p>
 		<p>Email : </p><p><?= $usuarioCompleto->getEmail()?></p>
 		<form action="../controladora/cargamensaje" method="GET">
 			<p>Ingresar Titulo de Mensaje: </p><input type="text" name="titulo" placeholder="Ingrese Titulo Mensaje">
 			<p>Mensaje: </p><textarea rows="10" cols="100" name="texto"> </textarea>
 			<br>
 			<input class="button primary-color" type="submit" name="enviarMensaje" value="Carga Mensaje">

 			<input class="button primary-color" type="reset" name="reset">

 			<input class="button primary-color" type="button" name="volver" onclick="location='../Index.php'" value="Volver Inidice">
 		</form>
 	</div>
 	<?php } ?>
 
 </body>
 </html>