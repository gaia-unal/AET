<?php
    //Proceso de conexión con la base de datos

include('archivos/conec.php');
    //Iniciar Sesión
    session_start();

    //Validar si se está ingresando con sesión correctamente
    if (!$_SESSION){
    echo '<script language = javascript>
    alert("usuario no autenticado")
    self.location = "formulario.html"
    </script>';
    }

    $id_usuario = $_SESSION['id_usuario'];

    $consulta= "SELECT apellidos FROM usuarios WHERE id_usuario='".$id_usuario."'"; 
    $resultado= pg_query($consulta) or die (pg_error());
    $fila=pg_fetch_array($resultado);
    $apellidos = $fila['apellidos'];
?>

<?php include('archivos/head.html'); ?>
    <div class="container">
         <div class="row" style="margin-top:0px">
            <div align="right" style="text-transform: capitalize; margin-top:-31px; color: #0f880f">Usuario: <strong><?php echo $_SESSION['nombres'];?></strong></div>
            <div align="right"><a href="desconectar_usuario.php" style="color: #009EFF;"><strong>Cerrar Sesi&oacute;n</strong></a> </div>
            <center><div style="width: 100%; height:100%; background-color: #fff; padding: 10px;border-radius: 4px;border: 1px solid #ddd;">
            <center><h4 style="margin-left: 10px;">Procesos fundamentales para llevar a cabo la evaluación: </h4></center>
                <h3 style="text-align: justify; padding:20px">La presente herramienta consta de dos pilares fundamentales, el primero en el cual se realiza la evaluación
                automática por medio del validador eXaminator. El segundo es la parte del análisis manual, el cual se lleva a cabo por 
                parte del experto.<br><br>
                Los siguientes son los pasos a seguir para la evaluación de accesibilidad de sitios web.<br>
                <strong>- Paso 1: </strong> Seleccionar el sitio web a evaluar y realizar evaluación automática mediante eXaminator.<br><br>
                <strong>- Paso 2: </strong> Realizar la evaluación manual al sitio web seleccionado en base a 39 criterios de accesibilidad, los cuales se
                han categorizado en tres grupos (errores, advertencias y sugerencias).<br><br>
                <strong>- Paso 3: </strong> Estudio y análisis de los resultados arrojados por la herramienta de apoyo al análisis manual de accesibilidad web.<br></h3>

                <a href="dos.php"><button type="button" class="myButtom" style="width: 300px; height: 35px;">Comenzar la Evaluación</button></a><br>
            </div></center>         
        </div>
    </div>
<?php include('archivos/pie.html'); ?>
