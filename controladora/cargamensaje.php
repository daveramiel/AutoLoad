<?php namespace controladora;
require('..\Config\Autoload.php');
require('..\Config\Config.php');

use Config\Autoload as Autoload;
use Modelo\Usuario as Usuario;
use Modelo\Mensaje as Mensaje;

Autoload::Start();
session_start();
if(isset($_GET)){
	$mensajin=new Mensaje($_GET['titulo'],$_GET['texto']);
	$user=$_SESSION['usuarioCompleto'];
	$user->setMensaje($mensajin);
	$_SESSION['usuarioCompleto']=$user;
} else{
	echo "Algo Malo Paso";
}
header("Location: ../Index.php");
?>