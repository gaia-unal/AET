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
            <center><div style="width: 100%; height:275%; background-color: #fff; padding: 10px;border-radius: 4px;border: 1px solid #ddd;">
            <center><h4 style="margin-left: 10px;">Tipo de criterio: Error (Ponderación 50%)</h4></center>
            <center><h3><strong>CE: </strong>Cantidad de elementos, <strong>CC: </strong>Cantidad de elementos que cumplen</h3></center><br>
                <div class="table-responsive">
                    <form action="tabla1.php" method="post" name="frm_ingreso" id="frm_ingreso">
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
                                <td style="width: 300px">Para cada entrada de texto por parte del usuario, <br>sé tiene un nombre que describe su propósito.</td>
                                <td style="width: 300px">Las entradas tienen etiquetas contextuales descriptivas <br>o atributos de título.</td>
                                <td style="width: 300px"><center><input name="unoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="unocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">2</td>
                                <td style="width: 300px">Para cada entrada de texto por parte del usuario se identifican errores automáticamente.</td>
                                <td style="width: 300px">Si un error de entrada se detecta automáticamente, <br>se identifica el elemento con error y este se describe al usuario mediante texto.<br>
                                    Los datos que el usuario ingresa se revisan para que <br>no tengan errores de entrada y el usuario tiene la posibilidad de corregirlos.
                                </td>
                                <td style="width: 300px"><center><input name="dosce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="doscec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">3</td>
                                <td style="width: 300px">Para los elementos basados en el tiempo (Audio y Video), se ofrece una identificación textual que describa el contenido.</td>
                                <td style="width: 300px">Se proporciona subtítulos equivalentes a la información del contenido y estas a su vez se muestran de manera sincronizada.<br>
                                Se proporciona una descripción para los elementos basados en el tiempo. 
                                </td>
                                <td style="width: 300px"><center><input name="tresce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="trescec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">4</td>
                                <td style="width: 300px">Para los elementos de audio de una página web que se reproducen automáticamente se tienen mecanismos para controlar los mismos.</td>
                                <td style="width: 300px">Se proporcionan mecanismos para pausar o detener el audio, o se dispone de un mecanismo para controlar el volumen del audio de manera independiente del nivel del volumen del sistema general.</td>
                                <td style="width: 300px"><center><input name="cuatroce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="cuatrocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">5</td>
                                <td style="width: 300px">Para los elementos de vídeo se tiene una descripción de audio.</td>
                                <td style="width: 300px">Se proporciona una descripción de audio para todo el contenido de vídeo de manera sincronizada.</td>
                                <td style="width: 300px"><center><input name="cincoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="cincocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">6</td>
                                <td style="width: 300px">CAPCHA: Si el propósito del contenido no textual es confirmar que es una persona, y no una computadora, quien accede 
                                al contenido, entonces, se proporciona las alternativas de texto que identifican y describen el propósito del contenido.</td>
                                <td style="width: 300px">Se proporcionan alternativas de CAPTCHA utilizando modos de salida para los distintos tipos de percepciones sensoriales, a fin de dar cabida a distintas discapacidades.</td>
                                <td style="width: 300px"><center><input name="seisce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="seiscec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">7</td>
                                <td style="width: 300px">Los documentos largos usan estilos para proporcionar estructura.</td>
                                <td style="width: 300px">Se usaron títulos o una tabla de contenido en un archivo para ayudar a organizar el contenido.</td>
                                <td style="width: 300px"><center><input name="sietece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="sietecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">8</td>
                                <td style="width: 300px">La secuencia significativa del contenido puede ser determinada.</td>
                                <td style="width: 300px">Cuando la secuencia en la que se presenta el contenido afecta su significado, se puede determinar una 
                                secuencia de lectura correcta. Las páginas son lineales y se leen claramente sin hojas de estilo.</td>
                                <td style="width: 300px"><center><input name="ochoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="ochocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">9</td>
                                <td style="width: 300px">Las instrucciones que se proporcionan para operar el contenido no se basan únicamente en las características sensoriales 
                                de componentes tales como forma, tamaño, ubicación visual, orientación o sonido.</td>
                                <td style="width: 300px">Cualquier concepto sugerido mediante forma, tamaño, ubicación visual, orientación o sonido también se comunica mediante una alternativa textual.</td>
                                <td style="width: 300px"><center><input name="nuevece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="nuevecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">10</td>
                                <td style="width: 300px">Cuando un componente recibe un foco no inicia ningún cambio de contexto.</td>
                                <td style="width: 300px">Los cambios de contexto solo se inician cuando el usuario lo solicita o hay un mecanismo disponible que apaga dichos cambios.</td>
                                <td style="width: 300px"><center><input name="diesce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="diescec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">11</td>
                                <td style="width: 300px">El contenido presenta errores gramaticales.</td>
                                <td style="width: 300px">Los textos, títulos, e cualquier otro tipo de contenido textual presente en el sitio web tienen errores gramaticales.td>
                                <td style="width: 300px"><center><input name="oncece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="oncecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">12</td>
                                <td style="width: 300px">El contenido presenta errores ortográficos.</td>
                                <td style="width: 300px">Los contenidos ofrecidos por la página que contengan texto presentan errores ortográficos.</td>
                                <td style="width: 300px"><center><input name="docece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="docecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">13</td>
                                <td style="width: 300px">Los enlaces presentados en el sitio web son consistentes.</td>
                                <td style="width: 300px">Todos los enlaces presentados en el sitio web están disponibles es decir no existen enlaces rotos.</td>
                                <td style="width: 300px"><center><input name="trecece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="trececec" type="number" min="0" value="0" max="100"></center></td>
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
