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

    $consulta= "SELECT * FROM usuarios WHERE id_usuario='".$id_usuario."'"; 
    $resultado= pg_query($consulta) or die (pg_error());
    $fila=pg_fetch_array($resultado);
    $name= $fila['nombres'];
    $apellidos = $fila['apellidos'];

    $url = $_GET['val'];
?>

<?php include('archivos/head1.html'); ?>
    <div class="container">
         <div class="row" style="margin-top:0px">
            <center><div style="width: 100%; height:100%; background-color: #fff; padding: 10px;border-radius: 4px;border: 1px solid #ddd;">
                <div id="reporte">
                <center><h4 style="margin-left: 10px;"> REPORTE EVALUACION DE ACCESIBILIDAD WEB </h4></center>
                <?php 
                    $fecha="";
                    $rppc=0;
                    $rpc=0;
                    $sqlw = "SELECT fecha, rp, rpp from direccion where url= '".$url."'";
                    $resultw = pg_query($sqlw);
                    if($resultw==FALSE){
                        echo "<br> Hay errores en la consulta SQL";
                    }
                    while($roww= pg_fetch_array($resultw)){
                        $fecha= $roww['fecha'];
                        $rpc= $roww['rp'];
                        $rppc= $roww['rpp'];
                    }
                 ?>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>Fecha evaluación:</strong></h4><br>
                <h3 style="text-align: justify; padding:20px"><?php echo $fecha; ?></h3>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>Sitio web evaluado:</strong> </h4><br>
                <h3 style="text-align: justify; padding:20px"><?php echo $url; ?></h3>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>Experto:</strong></h4></h4><br>
                <h3 style="text-align: justify; padding:20px"><?php echo $name." ".$apellidos; ?></h3>
                <center><h4 style="margin-left: 10px;"> RESUMEN </h4></center>

                <h4 style="margin-left: 10px; float:left"><strong>Detalle de la evaluación</strong></h4><br><br>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Evaluación automática:</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">A continuación se presenta el resultado obtenido después de haber realizado la evaluación automática mediante un validador 
                    de accesibilidad automático. <br>
                    Donde RP Corresponde al valor que da como resultado el validador y RPP Corresponde a la conversión del resultado del validador a la escala 
                    de porcentajes utilizada, mediante la operación: RP%=(RP*100)/10, donde 10 corresponde al valor máximo que se puede obtener por el validador.</h3>
                    <strong>Resultado parcial (RP): </strong><?php echo $rpc; ?>  y  <strong>Resultado parcial porcentual (RPP):</strong> <?php echo $rppc; ?>.
                <br><br>

                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Análisis manual:</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">Luego  se realizó el análisis manual, del cual se obtuvieron los siguientes resultados:
                    Inicialmente se analizaron los criterios categorizados en errores y estos tuvieron una ponderación del 50%.</h3>
                <br><br>


                <center><h4 style="margin-left: 10px; float:left;"><strong>Resultado final:</strong></h4></center><br>
<!--  ===================================================    fin  dos.php      =========================================================================  -->
                

<!--  ===================================================      error.php      =========================================================================  -->
                
<!--  ===================================================      advertencia.php      =========================================================================  -->
                
<!--  ===================================================      sugerencia.php      =========================================================================  -->
                
<!--  ===================================================      fin.php      =========================================================================  -->
                <h3 style="text-align: justify; padding:20px">
                    A continuación una descripción de los campos que muestran en las anteriores tablas adscritas al análisis manual.
                </h3>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Cantidad de elementos (CE):</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">
                        corresponde a la cantidad de elementos del sitio web a los cuales se les hizo  la respectiva revisión según el criterio que corresponda. 
                    </h3>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Cantidad de elementos que cumplen (CC):</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">
                        En este campo, para el número de elementos registrados en el campo anterior, se debe verificar cuántos de estos cumplen el criterio que se está evaluando. 
                    </h3>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Total criterio (TC):</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">
                        En este campo se hace una relación entre la cantidad de elementos que pertenecen al sitio web y la cantidad de elementos que cumplen el criterio.
                        Dicha relación se describe con la siguiente operación:  <strong>TC= CC / CE</strong>
                    </h3>

                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Promedio (P):</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">
                        El valor de este campo se obtiene calculando el promedio de los resultados obtenidos en la columna “Total Criterio” 
                    </h3>
                <h4 style="margin-left: 10px; float:left;  font-size: 15px"><strong>-   Promedio (%):</strong></h4><br>
                    <h3 style="text-align: justify; padding:20px">
                        El valor del promedio de cada grupo convertido en porcentaje según la ponderación asignada a cada grupo.<br>
                            <strong>Promedio (%)=(P*PN)*100 </strong>
                        Donde PN  es la ponderación de cada grupo de criterios.
                    </h3>

                <br><br><center><h4 style="margin-left: 10px;">RESULTADOS DE LA EVALUACION </h4></center>
                <h3 style="text-align: justify; padding:20px">
                    <strong>Resultado Evaluación Manual: </strong>Posteriormente se hace una agrupación de los resultados obtenidos del análisis manual.
                </h3>
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

                    $prome= (($pp1 + $pp2 + $pp3));
                ?>
                <div class="table-responsive" style="width: 500px;">
                    <table class="table ">
                        <thead style="background-color:#0f436f; color:#fff">
                            <th><center>Tipo de criterio</center></th>
                            <th><center>Promedio %</center></th>
                        </thead>
                        <tbody>
                            <tr style="background-color:#eee; color:#000">  
                                <td><center><strong>Error</strong></center></td>
                                <td><center>
                                <?php echo $pp1 ?>
                                </center></td>
                            </tr>
                            <tr style="background-color:#eee; color:#000">
                                <td><center><strong>Advertencia</strong></center></td>
                                <td><center>
                                <?php echo $pp2 ?>
                                </center></td>
                            </tr>
                            <tr style="background-color:#eee; color:#000">
                                <td><center><strong>Sugerencia</strong></center></td>
                                <td><center>
                                <?php echo $pp3 ?>
                                </center></td>
                            </tr>
                            <tr style="background-color:#086538; color:#fff">
                                <td><center><strong>Resultado Parcial (%)</strong></center></td>
                                <td><center>
                                <?php echo $prome ?>
                                </center></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3 style="text-align: justify; padding:20px">
                    <strong>Resultado Evaluación Accesibilidad: </strong>Finalmente se integran los resultados de la evaluación automática y el análisis manual.
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
                            <tr style="background-color:#eee; color:#000">  
                                <td><center><strong>Manual</strong></center></td>
                                <td><center>
                                    <?php 
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
                            <tr style="background-color:#eee; color:#000">
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
                    <strong> <?php echo $url; ?> </strong>, tiene un nivel porcentual de accesibilidad de:
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
                             <a><input type="button" name="imprimir" value="Imprimir" onclick="window.print();"></a>
                        </div>
                        <div class="col-md-6">
                            <h3 style="text-align: justify; padding:20px">
                                Haga clic a continuación, para finalizar la evaluación e iniciar otra.
                            </h3>
                            <a href="inicioUser.php"><input name="uno" type="submit" id="uno" value="Finalizar y continuar"/></a>
                        </div>
                    </div>
            </div></center>         
        </div>
    </div>
    <script>
        function DescargarPDF(ContenidoID,nombre) {
            var pdf = new jsPDF('p', 'pt', 'letter');
            html = $('#'+ContenidoID).html();
            specialElementHandlers = {};
            margins = {top: 10,bottom: 20,left: 20,width: 500};
            pdf.fromHTML(html, margins.left, margins.top, {'width': margins.width},function (dispose) {pdf.save(nombre+'.pdf');}, margins);
        }
    </script>

