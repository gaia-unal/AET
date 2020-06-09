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

    $url=""; 
    $sqln = "SELECT url from direccion order by id asc";
    $resultn = pg_query($sqln);
    if($resultn==FALSE){
        echo "<br> Hay errores en la consulta SQL";
    }
    while($rown= pg_fetch_array($resultn)){
        $url= $rown['url'];
    }
?>

<?php include('archivos/head.html'); ?>
    <div class="container">
        <div class="row" style="margin-top:0px">
            <div align="right" style="text-transform: capitalize; margin-top:-31px; color: #0f880f">Usuario: <strong><?php echo $_SESSION['nombres'];?></strong></div>
            <div align="right"><a href="desconectar_usuario.php" style="color: #009EFF;"><strong>Cerrar Sesi&oacute;n</strong></a> </div>
            <center><div style="width: 100%; height:100%; background-color: #fff; padding: 10px;border-radius: 4px;border: 1px solid #ddd;">
            <center><h2 style="margin-left: 10px;">La evaluación ha terminado</h2></center>
                <div id="reporte">
                <h3 style="text-align: justify; padding:20px">
                    Los resultados presentados a continuación, fueron obtenidos después de haber aplicado la metodología de valuación de accesibilidad.
                </h3>
                <div class="table-responsive" style="width: 500px;">
                    <table class="table ">
                        <thead style="background-color:#0f436f; color:#fff">
                            <th><center>Evaluación</center></th>
                            <th><center>Resultado Parcial</center></th>
                            <th><center>Ponderación</center></th>
                            <th><center>Resultado</center></th>
                        </thead>
                        <tbody>
                            <tr style="background-color:#33A2FD; color:#fff">  
                                <td><center><strong>Manual</strong></center></td>
                                <td><center>
                                    <?php 
                                        $uno= 1;
                                        $dos= 2;
                                        $tres= 3;
                                        $pp1=0;
                                        $pp2=0;
                                        $pp3=0;

                                        $sql = "SELECT pp from porcentaje where url='".$url."' and categoria='".$uno."'";
                                        $result = pg_query($sql);
                                        if($result==FALSE){
                                            echo "<br> Hay errores en la consulta SQL";
                                        }
                                        while($row= pg_fetch_array($result)){
                                            $pp1= $row['pp'];
                                        }

                                        $sql2 = "SELECT pp from porcentaje where url='".$url."' and categoria='".$dos."'";
                                        $result2 = pg_query($sql2);
                                        if($result2==FALSE){
                                            echo "<br> Hay errores en la consulta SQL";
                                        }
                                        while($row2= pg_fetch_array($result2)){
                                            $pp2= $row2['pp'];
                                        }

                                        $sql3 = "SELECT pp from porcentaje where url='".$url."' and categoria='".$tres."'";
                                        $result3 = pg_query($sql3);
                                        if($result3==FALSE){
                                            echo "<br> Hay errores en la consulta SQL";
                                        }
                                        while($row3= pg_fetch_array($result3)){
                                            $pp3= $row3['pp'];
                                        }

                                        $prome= ($pp1 + $pp2 + $pp3);
                                        echo $prome;
                                    ?>
                                </center></td>
                                <td><center>50%</center></td>
                                <td><center>
                                    <?php 
                                        $mult= $prome * 0.5;
                                        echo $mult;
                                    ?>
                                </center></td>
                            </tr>
                            <tr style="background-color:#33A2FD; color:#fff">
                                <td><center><strong>Automática</strong></center></td>
                                <td><center>
                                    <?php 
                                        $rpp= 0;
                                        $sql4 = "SELECT rpp from direccion where url='".$url."'";
                                        $result4 = pg_query($sql4);
                                        if($result==FALSE){
                                            echo "<br> Hay errores en la consulta SQL";
                                        }
                                        while($row4= pg_fetch_array($result4)){
                                            $rpp= $row4['rpp'];
                                        }
                                        echo $rpp;
                                    ?>
                                </center></td>
                                <td><center>50%</center></td>
                                <td><center>
                                    <?php 
                                        $multd= $rpp * 0.5;
                                        echo $multd;
                                    ?>
                                </center></td>
                            </tr>
                            <tr style="background-color:#086538; color:#fff">
                                <td><center></center></td>
                                <td><center></center></td>
                                <td><center><strong>Resultado Final</strong></center></td>
                                <td><center>
                                    <?php 
                                        $rf= $mult + $multd;
                                        echo $rf;
                                    ?>
                                </center></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 style="text-align: justify; padding:20px">
                    De ésta manera se puede deducir que el sitio web evaluado, cuya url es: 
                    <?php 
                        echo $url;
                    ?>
                    , tiene un nivel porcentual de accesibilidad de:
                </h3>
                <h2 style="margin-top:-10px">
                    <?php 
                        echo ($rf * 100)." %";
                    ?>
                </h2>
            </div>
                    <div class="row" style="margin-top: -20px; padding-bottom: 20px">
                        <div class="col-md-6">
                            <center><h3 style="text-align: justify; padding:20px">
                                Haga clic a continuación, para visualizar en detalle la evaluación
                            </h3></center>
                            <a href="report.php"><input name="Imprimir" type="submit" id="Imprimir" value="Ver reporte" /></a>
                        </div>
                        <div class="col-md-6">
                            <h3 style="text-align: justify; padding:20px">
                                Haga clic a continuación, para finalizar la evaluación e iniciar otra.
                            </h3>
                            <a href="inicioUser.php"><button type="button" class="myButtom" style="height: 50px;">Finalizar y continuar</button></a>
                        </div>
                    </div>
            </div></center>         
        </div>
    </div>    
<?php include('archivos/pie.html'); ?>
