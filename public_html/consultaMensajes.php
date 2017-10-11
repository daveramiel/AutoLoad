<?php  
require('..\Config\Autoload.php');
require('..\Config\Config.php');

use Config\Autoload as Autoload;
use Modelo\Usuario as Usuario;
use Modelo\Mensaje as Mensaje;

Autoload::Start();
session_start();
if(isset($_SESSION['usuarioCompleto'])){
	$mensajines=$_SESSION['usuarioCompleto'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mensajes</title>
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
	<div align="center">
		<?php  foreach($mensajines->getMensajes() as $key => $value) {
		?>
		<tr>
			<td>Titulo: <?= $value->getTitulo() ?></td><br>
			<td>Texto : <?= $value->getTexto() ?></td><br>
		</tr>
		<?php } ?>
	</div>
	<div>
		<input class="button primary-color" type="button" name="volver" onclick="location='../Index.php'" value="Volver Inidice">
	</div>
		
</body>
</html>