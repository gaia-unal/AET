<?php 
include "archivos/conec.php";

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$nombreUser= $_POST['nombreUser'];
$contrasena= $_POST['contrasena'];
$contrasena2= $_POST['contrasena2'];
$pass= md5($_POST['contrasena']);
$email= $_POST['email'];

$sql = "SELECT count(1) as a from usuarios";
$result = pg_query($sql);
if($result==FALSE){
    echo "<br> Hay errores en la consulta SQL";
}
while($row= pg_fetch_array($result)){
    $c= $row['a'];
}

if ($contrasena == $contrasena2) {
	$sql1 = "SELECT count(1) as b from usuarios where usuario = '".$nombreUser."'";
	$result1 = pg_query($sql1);
	if($result1==FALSE){
	    echo "<br> Hay errores en la consulta SQL";
	}
	while($row1= pg_fetch_array($result1)){
	    $existe= $row1['b'];
	}
	if ($existe == 0) {
		$sql2 = "INSERT into usuarios(nombres, apellidos, usuario, contrasena, email) values ('".$nombre."', '".$apellido."', '".$nombreUser."', '".$pass."', '".$email."')";
		$result2 = pg_query($sql2);
		if($result2==FALSE){
		    echo "<br> Hay errores en la consulta SQL";
		}
		echo '<script language = javascript>
		alert("Usuario registrado con exito")
		self.location = "index.php"
		</script>';
	}else{
		echo '<script language = javascript>
		alert("Nombre de usuario ya registrado, favor cambiar de nombre de usuario")
		self.location = "registro.php"
		</script>';
	}
}else{
	echo '<script language = javascript>
	alert("Las contraseñas no coinciden, verifique de nuevo para continuar")
	self.location = "registro.php"
	</script>';
}

?>