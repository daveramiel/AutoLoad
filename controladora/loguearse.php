<?php namespace controladora;
require('..\Config\Autoload.php');
require('..\Config\Config.php');

use Config\Autoload as Autoload;
use Modelo\Usuario as Usuario;
use Modelo\Mensaje as Mensaje;

Autoload::Start();
session_start();
$directorioImagen = 'images/';

if(!file_exists($directorioImagen)){
	mkdir($directorioImagen);
}
if($_FILES){
	$file = $directorioImagen.basename($_FILES['fotito']['name']);
	move_uploaded_file($_FILES["fotito"]["tmp_name"], $file);
}
if($_POST){
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$usuario=new Usuario($nombre,$email,$password,$file);
}
$_SESSION['usuarioCompleto']=$usuario;
header("Location: ../Index.php");

?>