<?php 
include "archivos/conec.php";
session_start();
if (!$_SESSION){
echo '<script language = javascript>
alert("usuario no autenticado")
self.location = "index.php"
</script>';
}
$id_usuario = $_SESSION['id_usuario'];
$url= $_POST['url'];
$valor= $_POST['valor'];
$rpp= 0;
$date= date("Y/m/d");
$id=0;



if ($valor>=0 and $valor <= 10) {
	$v=0;
	$sql5 = "SELECT count(1) as a from direccion where url= '".$url."' and iduser='".$id_usuario."'";
	$result5 = pg_query($sql5);
	if($result5==FALSE){
	    echo "<br> Hay errores en la consulta SQL";
	}
	while($row5= pg_fetch_array($result5)){
	    $v= $row5['a'];
	}
	if ($v==0) {
		if ($valor != 0) {
			$rpp= ($valor * 1)/10;
		}
		$sql = "INSERT into direccion (url, rp, rpp, fecha, iduser) values ('".$url."', ".$valor.", ".$rpp.", '".$date."', ".$id_usuario.")";
		$result = pg_query($sql);
		if($result==FALSE){
		    echo "<br> Hay errores en la consulta SQL";
		}
		header('location: error.php');
	}else{
		echo '<script language = javascript>
	alert("La presente pagina ya se encuentra evaluada, solo puedes evaluar una vez un sitio web")
	self.location = "dos.php"
	</script>';
	}
}else{
	echo '<script language = javascript>
	alert("El valor del resultado parcial (RP) debe ser un valor comprendido entre 0 (cero) y diez (10), por favor verifique para continuar con el proceso")
	self.location = "dos.php"
	</script>';
}

?>