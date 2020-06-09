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

$diezce= $_POST['diezce'];
$diezcec= $_POST['diezcec'];

$oncece= $_POST['oncece'];
$oncecec= $_POST['oncecec'];

$docece= $_POST['docece'];
$docecec= $_POST['docecec'];

$trecece= $_POST['trecece'];
$trececec= $_POST['trececec'];

$catorcece= $_POST['catorcece'];
$catorcecec= $_POST['catorcecec'];

$quincece= $_POST['quincece'];
$quincecec= $_POST['quincecec'];

$diezseisce= $_POST['diezseisce'];
$diezseiscec= $_POST['diezseiscec'];

$contador=0;
$tc= 0;
$categoria= "2";
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
$tc10=0;
$tc11=0;
$tc12=0;
$tc13=0;
$tc14=0;
$tc15=0;
$tc16=0;

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
				self.location = "advertencias.php";
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$dosce=-1;
	$doscec=-1;
}
if ($tresce != ""  && $tresce >= $trescec) {
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$tresce=-1;
	$trescec=-1;
}
if ($cuatroce != ""  && $cuatroce >= $cuatrocec) {
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$cuatroce=-1;
	$cuatrocec=-1;
}
if ($cincoce != ""  && $cincoce >= $cincocec) {
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$cincoce=-1;
	$cincocec=-1;
}
if ($seisce != ""  && $seisce >= $seiscec) {
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$seisce=-1;
	$seiscec=-1;
}
if ($sietece != ""  && $sietece >= $sietecec) {
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$sietece=-1;
	$sietecec=-1;
}
if ($ochoce != ""  && $ochoce >= $ochocec) {
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
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$ochoce=-1;
	$ochocec=-1;
}
if ($nuevece != ""  && $nuevece >= $nuevecec) {
	if ($nuevece >= $nuevecec) {
		$tc8=0;
		if ($nuevece != 0) {
            $contador= $contador +1;
			$tc9= ($nuevecec / $nuevece);
		}
		$tc= $tc + $tc9;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$nuevece=-1;
	$nuevecec=-1;
}
if ($diezce != ""  && $diezce >= $diezcec) {
	if ($diezce >= $diezcec) {
		$tc10=0;
		if ($diezce != 0) {
            $contador= $contador +1;
			$tc10= ($diezcec / $diezce);
		}
		$tc= $tc + $tc10;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$diezce=-1;
	$diezcec=-1;
}
if ($oncece != ""  && $oncece >= $oncecec) {
	if ($oncece >= $oncecec) {
		$tc11=0;
		if ($oncece != 0) {
            $contador= $contador +1;
			$tc11= ($oncecec / $oncece);
		}
		$tc= $tc + $tc11;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$oncece=-1;
	$oncecec=-1;
}
if ($docece != ""  && $docece >= $docecec) {
	if ($docece >= $docecec) {
		$tc12=0;
		if ($docece != 0) {
            $contador= $contador +1;
			$tc12= ($docecec / $docece);
		}
		$tc= $tc + $tc12;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$docece=-1;
	$docecec=-1;
}
if ($trecece != ""  && $trecece >= $trececec) {
	if ($trecece >= $trececec) {
		$tc13=0;
		if ($trecece != 0) {
            $contador= $contador +1;
			$tc13= ($trececec / $trecece);
		}
		$tc= $tc + $tc13;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$trecece=-1;
	$trececec=-1;
}
if ($catorcece != ""  && $catorcece >= $catorcecec) {
	if ($catorcece >= $catorcecec) {
		$tc14=0;
		if ($catorcece != 0) {
            $contador= $contador +1;
			$tc14= ($catorcecec / $catorcece);
		}
		$tc= $tc + $tc14;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$catorcece=-1;
	$catorcecec=-1;
}
if ($quincece != ""  && $quincece >= $quincecec) {
	if ($quincece >= $quincecec) {
		$tc15=0;
		if ($quincece != 0) {
            $contador= $contador +1;
			$tc15= ($quincecec / $quincece);
		}
		$tc= $tc + $tc15;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$quincece=-1;
	$quincecec=-1;
}
if ($diezseisce != ""  && $diezseisce >= $diezseiscec) {
	if ($diezseisce >= $diezseiscec) {
		$tc16=0;
		if ($diezseisce != 0) {
            $contador= $contador +1;
			$tc16= ($diezseiscec / $diezseisce);
		}
		$tc= $tc + $tc16;
	}else{
		echo '<script language = javascript>
				alert("ERROR... los valores son incorrectos.")
				self.location = "advertencias.php";
				</script>';
	}
}else{
	$diezseisce=-1;
	$diezseiscec=-1;
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

$diezs = "INSERT into tabla values ('".$categoria."', 10, ".$diezce.", ".$diezcec.", ".$tc10.", '".$url."', ".$id_usuario.")";
$diezr = pg_query($diezs);
if($diezr==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 10 Tabla";
}

$onces = "INSERT into tabla values ('".$categoria."', 11, ".$oncece.", ".$oncecec.", ".$tc11.", '".$url."', ".$id_usuario.")";
$oncer = pg_query($onces);
if($oncer==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 11 Tabla";
}

$doces = "INSERT into tabla values ('".$categoria."', 12, ".$docece.", ".$docecec.", ".$tc12.", '".$url."', ".$id_usuario.")";
$docer = pg_query($doces);
if($docer==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 12 Tabla";
}

$treces = "INSERT into tabla values  ('".$categoria."', 13, ".$trecece.", ".$trececec.", ".$tc13.", '".$url."', ".$id_usuario.")";
$trecer = pg_query($treces);
if($trecer==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 13 Tabla";
}

$catorces = "INSERT into tabla values ('".$categoria."', 14, ".$catorcece.", ".$catorcecec.", ".$tc14.", '".$url."', ".$id_usuario.")";
$catorcer = pg_query($catorces);
if($catorcer==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 14 Tabla";
}

$quinces = "INSERT into tabla values ('".$categoria."', 15, ".$quincece.", ".$quincecec.", ".$tc15.", '".$url."', ".$id_usuario.")";
$quincer = pg_query($quinces);
if($quincer==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 15 Tabla";
}

$diezseiss = "INSERT into tabla values ('".$categoria."', 16, ".$diezseisce.", ".$diezseiscec.", ".$tc16.", '".$url."', ".$id_usuario.")";
$diezseisr = pg_query($diezseiss);
if($diezseisr==FALSE){
    echo "<br> Hay errores en la consulta SQL - Valores 16 Tabla";
}


$promedio= $tc / $contador;
$pp= $promedio * 0.3;

$sql2 = "INSERT into porcentaje values (".$promedio.", ".$pp.", 2, '".$url."', ".$id_usuario.")";
$result2 = pg_query($sql2);
if($result2==FALSE){
    echo "<br> Hay errores en la consulta SQL - Porcentaje";
}
header('Location: sugerencias.php');
?>