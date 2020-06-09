<?php 
include "archivos/conec.php";

session_start();

$id_usuario = $_SESSION['id_usuario'];

$unoce= $_POST['unoce'];
$unocec= $_POST['unocec'];

$dosce= $_POST['dosce'];
$doscec= $_POST['doscec'];

$tresce= $_POST['tresce'];
$trescec= $_POST['trescec'];

$cuatroce= $_POST['cuatroce'];
$cuatrocec= $_POST['cuatrocec'];

$cincoce= $_POST['cincoce'];
$cincocec= $_POST['cincocec'];

$seisce= $_POST['seisce'];
$seiscec= $_POST['seiscec'];

$sietece= $_POST['sietece'];
$sietecec= $_POST['sietecec'];

$ochoce= $_POST['ochoce'];
$ochocec= $_POST['ochocec'];

$nuevece= $_POST['nuevece'];
$nuevecec= $_POST['nuevecec'];


$contador=0;
$tc= 0;
$categoria= "3";
$url= "";


$sql4 = "SELECT url from direccion order by id asc";
$result4 = pg_query($sql4);
if($result4==FALSE){
    echo "<br> Hay errores en la consulta SQL";
}
while($row4= pg_fetch_array($result4)){
    $url= $row4['url'];
}
$r=0;
$tc1=0;
$tc2=0;
$tc3=0;
$tc4=0;
$tc5=0;
$tc6=0;
$tc7=0;
$tc8=0;
$tc9=0;

if ($unoce != "") {
	if ($unoce >= $unocec) {
		$tc1=0;
		if ($unoce != 0) {
			$contador= $contador +1;
			$tc1= ($unocec / $unoce);
		}
		$tc= $tc + $tc1;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$unoce=-1;
	$unocec=-1;
}
if ($dosce != "") {
	if ($dosce >= $doscec) {
		$tc2=0;
		if ($dosce != 0) {
			$contador= $contador +1;
			$tc2= ($doscec / $dosce);
		}
		$tc= $tc + $tc2;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$dosce=-1;
	$doscec=-1;
}
if ($tresce != "") {
	if ($tresce >= $trescec) {
		$tc3=0;
		if ($tresce != 0) {
			$contador= $contador +1;
			$tc3= ($trescec / $tresce);
		}
		$tc= $tc + $tc3;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$tresce=-1;
	$trescec=-1;
}
if ($cuatroce != "") {
	if ($cuatroce >= $cuatrocec) {
		$tc4=0;
		if ($cuatroce != 0) {
			$contador= $contador +1;
			$tc4= ($cuatrocec / $cuatroce);
		}
		$tc= $tc + $tc4;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$cuatroce=-1;
	$cuatrocec=-1;
}
if ($cincoce != "") {
	if ($cincoce >= $cincocec) {
		$tc5=0;
		if ($cincoce != 0) {
			$contador= $contador +1;
			$tc5= ($cincocec / $cincoce);
		}
		$tc= $tc + $tc5;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$cincoce=-1;
	$cincocec=-1;
}
if ($seisce != "") {
	if ($seisce >= $seiscec) {
		$tc6=0;
		if ($seisce != 0) {
			$contador= $contador +1;
			$tc6= ($seiscec / $seisce);
		}
		$tc= $tc + $tc6;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$seisce=-1;
	$seiscec=-1;
}
if ($sietece != "") {
	if ($sietece >= $sietecec) {
		$tc7=0;
		if ($sietece != 0) {
			$contador= $contador +1;
			$tc7= ($sietecec / $sietece);
		}
		$tc= $tc + $tc7;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$sietece=-1;
	$sietecec=-1;
}
if ($ochoce != "") {
	if ($ochoce >= $ochocec) {
		$tc8=0;
		if ($ochoce != 0) {
			$contador= $contador +1;
			$tc8= ($ochocec / $ochoce);
		}
		$tc= $tc + $tc8;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$ochoce=-1;
	$ochocec=-1;
}
if ($nuevece != "") {
	if ($nuevece >= $nuevecec) {
		$tc9=0;
		if ($nuevece != 0) {
			$contador= $contador +1;
			$tc9= ($nuevecec / $nuevece);
		}
		$tc= $tc + $tc9;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "sugerencias.php";
				</script>';
	}
}else{
	$nuevece=-1;
	$nuevecec=-1;
}


/*insetar categoria, idPregunta, ce, cec,  tc, url */
$unos = "INSERT into tabla values ('".$categoria."', 1, ".$unoce.", ".$unocec.", ".$tc1.", '".$url."', ".$id_usuario.")";
$unor = pg_query($unos);
if($unor==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 1 Tabla";
}

$doss = "INSERT into tabla values ('".$categoria."', 2, ".$dosce.", ".$doscec.", ".$tc2.", '".$url."', ".$id_usuario.")";
$dosr = pg_query($doss);
if($dosr==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 2 Tabla";
}

$tress = "INSERT into tabla values ('".$categoria."', 3, ".$tresce.", ".$trescec.", ".$tc3.", '".$url."', ".$id_usuario.")";
$tresr = pg_query($tress);
if($tresr==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 3 Tabla";
}

$cuatros = "INSERT into tabla values  ('".$categoria."', 4, ".$cuatroce.", ".$cuatrocec.", ".$tc4.", '".$url."', ".$id_usuario.")";
$cuatror = pg_query($cuatros);
if($cuatror==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 4 Tabla";
}

$cincos = "INSERT into tabla values ('".$categoria."', 5, ".$cincoce.", ".$cincocec.", ".$tc5.", '".$url."', ".$id_usuario.")";
$cincor = pg_query($cincos);
if($cincor==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 5 Tabla";
}

$seiss = "INSERT into tabla values ('".$categoria."', 6, ".$seisce.", ".$seiscec.", ".$tc6.", '".$url."', ".$id_usuario.")";
$seisr = pg_query($seiss);
if($seisr==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 6 Tabla";
}

$sietes = "INSERT into tabla values ('".$categoria."', 7, ".$sietece.", ".$sietecec.", ".$tc7.", '".$url."', ".$id_usuario.")";
$sieter = pg_query($sietes);
if($sieter==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 7 Tabla";
}

$ochos = "INSERT into tabla values ('".$categoria."', 8, ".$ochoce.", ".$ochocec.", ".$tc8.", '".$url."', ".$id_usuario.")";
$ochor = pg_query($ochos);
if($ochor==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 8 Tabla";
}

$nueves = "INSERT into tabla values ('".$categoria."', 9, ".$nuevece.", ".$nuevecec.", ".$tc9.", '".$url."', ".$id_usuario.")";
$nuever = pg_query($nueves);
if($nuever==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 9 Tabla";
}

$promedio= $tc / $contador;
$pp= $promedio * 0.2;

$sql2 = "INSERT into porcentaje values (".$promedio.", ".$pp.", 3, '".$url."', ".$id_usuario.")";
$result2 = pg_query($sql2);
if($result2==FALSE){
    echo "<br> Hay errores en la consulta SQL - Porcentaje";
}
header('Location: fin.php');
?>