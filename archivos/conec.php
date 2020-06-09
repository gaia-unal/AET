<?php
$servidor = "localhost";
$puerto = "5432";
$baseDatos = "aet";
$usuario = "postgres";
$clave = "%froac$";
$conexion=pg_connect("host='$servidor' port='$puerto' dbname='$baseDatos' user='$usuario' password='$clave'");
?>