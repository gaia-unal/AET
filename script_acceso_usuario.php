<?php 
//Inicio de variables de sesi�n
if (!isset($_SESSION)) {
  session_start();
}
include('archivos/conec.php');

//Recibir los datos ingresados en el formulario
$usuario= $_POST['usuario'];
$contrasena= md5($_POST['contrasena']);


//Consultar si los datos son est�n guardados en la base de datos
$consulta= "SELECT * FROM usuarios WHERE usuario='".$usuario."' AND contrasena='".$contrasena."'"; 
$resultado= pg_query($consulta) or die (pg_error());
$fila=pg_fetch_array($resultado);


if (!$fila[0]) //opcion1: Si el usuario NO existe o los datos son INCORRRECTOS
{
	echo '<script language = javascript>
	alert("Usuario o Password errados, por favor verifique.")
	self.location = "index.php"
	</script>';
}
else //opcion2: Usuario logueado correctamente
{
	//Definimos las variables de sesi�n y redirigimos a la p�gina de usuario
	$_SESSION['id_usuario'] = $fila['id_usuario'];
	$_SESSION['nombres'] = $fila['nombres'];
	header("Location: inicioUser.php");
}
?>