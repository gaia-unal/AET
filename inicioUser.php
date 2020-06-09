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
            <center><h4 style="margin-left: 10px;">MENU PRINCIPAL</h4></center>
                <div class="col-md-3">
                        Señor experto, a continuación se muestran las evaluaciones de accesibilidad a
                        sitios web que ha realizado mediante la herramienta hasta el momento. Basta 
                        con hacer clic sobre el elace del sitio web evaluado para visualizar los 
                        resultados.
                </div>
                <div class="col-md-6">
                    <table class="table table-striped" style="margin-top:-40px">
                        <thead style="background-color:#1D9DF9; color:#fff">
                            <th><center>Fecha</center></th>
                            <th>Sitio Web</th>
                            <th></th>
                            <th>Opción</th>
                        </thead>
                        <tbody style="text-align:justify">
                                <?php 
                                    $sql = "select url, fecha from direccion where idUser= ".$id_usuario."";
                                    $result = pg_query($sql);
                                    while($row= pg_fetch_array($result)){
                                        $row['url'];
                                        $consultaUrl= $row['url'];
                                        $row['fecha'];
                                        ?>
                                        <tr>
                                            <td style="width: 100px"><center> <?php echo $row['fecha']; ?> </center></td>
                                            <td style="width: 100px"> <?php echo "<a href='diario.php?actividad=$consultaUrl'>$consultaUrl</a>" ?> </td>
                                            <td></td>
                                            <td style="width: 100px"> <?php echo "<a href='eliminar.php?actividad=$consultaUrl'>Eliminar</a>" ?> </td>
                                        </tr>
                                        <?php 
                                    } 
                                ?>
                        </tbody>
                     </table>
                </div>
                <div class="col-md-3">
                    
                    <div class="thumbnail">
                    <img src="images/aet.png" alt="Imagen accesibilidad web">
                    </div>
                </div>
                <a href="uno.php"><button type="button" class="myButtom" style="width: 300px; height: 35px;">Realizar una nueva evaluación</button></a><br>
            </div></center>         
        </div>
    </div>

<?php include('archivos/pie.html'); ?>