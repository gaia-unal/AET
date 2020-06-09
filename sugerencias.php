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
            <center><h4 style="margin-left: 10px;">Tipo de criterio: Sugerencias (Ponderación 20%)</h4></center>
                <div class="table-responsive">
                     <form action="tabla3.php" method="post" name="frm_ingreso" id="frm_ingreso">
                     <table class="table table-striped">
                        <thead style="background-color:#0f436f; color:#fff">
                            <th>Código</th>
                            <th>Criterio</th>
                            <th>Descripción</th>
                            <th><center>CE</center></th>
                            <th><center>CC</center></th>
                        </thead>
                        <tbody style="text-align:justify">
                            <tr>  
                                <td style="width: 300px">1</td>
                                <td style="width: 300px">Para los elementos de audio se tiene alternativa de lenguaje de señas.</td>
                                <td style="width: 300px">Se proporciona interpretación de lenguaje de señas para todo el contenido de audio que no cuenta con alternativa textual.</td>
                                <td style="width: 300px"><center><input name="unoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="unocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">2</td>
                                <td style="width: 300px">Para las presentaciones visuales se tienen mecanismos que adapten las necesidades de los usuarios.</td>
                                <td style="width: 300px">Los colores del primer plano y de fondo pueden ser seleccionados por el usuario.<br>
                                Los usuarios pueden aplicar hojas de estilo personalizadas.</td>
                                <td style="width: 300px"><center><input name="dosce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="doscec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">3</td>
                                <td style="width: 300px">Las presentaciones visuales en forma de texto no transmiten información.</td>
                                <td style="width: 300px">Las imágenes de texto solo se usan para decoración o cuando una presentación de texto en particular es esencial para la información que se transmite.</td>
                                <td style="width: 300px"><center><input name="tresce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="trescec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">4</td>
                                <td style="width: 300px">La navegabilidad del contenido es operable mediante teclado.</td>
                                <td style="width: 300px">Todas las funcionalidades del contenido se pueden manejar mediante una interfaz de teclado.</td>
                                <td style="width: 300px"><center><input name="cuatroce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="cuatrocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">5</td>
                                <td style="width: 300px">Se proporciona una identificación para el uso de palabras inusuales.</td>
                                <td style="width: 300px">Para las palabras que no son utilizadas frecuentemente se proporciona su respectiva definición..</td>
                                <td style="width: 300px"><center><input name="cincoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="cincocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">6</td>
                                <td style="width: 300px">Se proporciona un mecanismo para tener la forma expandida de las abreviaturas.</td>
                                <td style="width: 300px">Para las palabras que se utilizan en forma de abreviatura se proporciona su descripción completa.</td>
                                <td style="width: 300px"><center><input name="seisce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="seiscec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">7</td>
                                <td style="width: 300px">Al caducar la sesión en una página no se pierde información.</td>
                                <td style="width: 300px">Cuando una sesión autenticada caduca, el usuario puede continuar la actividad sin perder los datos después de que vuelve a autenticarse.</td>
                                <td style="width: 300px"><center><input name="sietece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="sietecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">8</td>
                                <td style="width: 300px">La información sobre la ubicación del usuario dentro de un conjunto de páginas web está disponible.</td>
                                <td style="width: 300px">Los títulos, los encabezados y las áreas de navegación de la página indican la ubicación.<br>
                                Un área de navegación coherente en la parte superior de las páginas, proporciona acceso rápido a las herramientas principales y las páginas de inicio</td>
                                <td style="width: 300px"><center><input name="ochoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="ochocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">9</td>
                                <td style="width: 300px"></td>
                                <td style="width: 300px"></td>
                                <td style="width: 300px"><center><input name="nuevece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="nuevecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">10</td>
                                <td style="width: 300px">Es posible modificar el tamaño de la letra.</td>
                                <td style="width: 300px">Las características de los contenidos textuales de la página permiten que se pueda aumentar el tamaño de la letra.</td>
                                <td style="width: 300px"><center><input name="diezce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="diezcec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                        </tbody>
                     </table>
                     <center><input type="submit" value="Validar y continuar" name="Submit" id="mc-embedded-subscribe" class="myButton" style="width: 300px"></center>
                    </form>
                 </div>
            </div></center>         
        </div>
    </div><br>

<?php include('archivos/pie.html'); ?>
