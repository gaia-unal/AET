<?php
    //Proceso de conexión con la base de datos

include('archivos/conec.php');
    //Iniciar Sesión
    session_start();

    //Validar si se está ingresando con sesión correctamente
    if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "index.php"
    </script>';
    }

    $id_usuario = $_SESSION['id_usuario'];
    $url = $_GET['actividad'];

    // eliminar registros de la tabla porcentaje que tenga q ver con la url que se seleccionó
    $sql = "DELETE from porcentaje where url='".$url."' and iduser='".$id_usuario."' ";
    $result = pg_query($sql);

    // eliminar registros de la tabla TABLA que tenga q ver con la url que se seleccionó
    $sql2 = "DELETE from tabla where url='".$url."' and iduser='".$id_usuario."' ";
    $result2 = pg_query($sql2);

    // eliminar registros de la tabla direccion que tenga q ver con la url que se seleccionó
    $sql3 = "DELETE from direccion where url='".$url."' and iduser='".$id_usuario."' ";
    $result3 = pg_query($sql3);

    echo '<script language = javascript>
    alert("La evaluación seleccionada ha sido eliminada correctamente.")
    self.location = "inicioUser.php"
    </script>';
?>