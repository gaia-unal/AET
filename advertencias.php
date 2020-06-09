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
            <center><h4 style="margin-left: 10px;">Tipo de criterio: Advertencias (Ponderación 30%)</h4></center>
                <div class="table-responsive">
                     <form action="tabla2.php" method="post" name="frm_ingreso" id="frm_ingreso">
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
                                <td style="width: 300px">La presentación visual de texto y el fondo de texto tienen una relación de contraste.</td>
                                <td style="width: 300px">Se proporciona un color de fondo acorde al color del contenido.</td>
                                <td style="width: 300px"><center><input name="unoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="unocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">2</td>
                                <td style="width: 300px">Para los elementos textuales se puede cambiar el tamaño de la letra.</td>
                                <td style="width: 300px">Se proporcionan alternativas para cambiar de tamaño de la letra sin necesidad de tecnología de asistencia hasta un 200% sin que se pierda contenido o funcionalidad.</td>
                                <td style="width: 300px"><center><input name="dosce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="doscec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">3</td>
                                <td style="width: 300px">El texto del hipervínculo es significativo.</td>
                                <td style="width: 300px">El texto de vínculo tiene información en pantalla Y coincide con el destino de vínculo.</td>
                                <td style="width: 300px"><center><input name="tresce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="trescec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">4</td>
                                <td style="width: 300px">Los títulos no contienen demasiada información.</td>
                                <td style="width: 300px">Los títulos no son demasiado largos.</td>
                                <td style="width: 300px"><center><input name="cuatroce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="cuatrocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">5</td>
                                <td style="width: 300px">Para cada límite de tiempo que establece el contenido, se cuenta con mecanismos establecidos por el usuario.</td>
                                <td style="width: 300px">El usuario puede a pagar el límite de tiempo antes de llegar a él.<br>
                                El usuario puede ajustar el límite de tiempo antes de llegar a él en un amplio rango que tiene al menos diez veces la longitud de la configuración predeterminada</td>
                                <td style="width: 300px"><center><input name="cincoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="cincocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>  
                                <td style="width: 300px">6</td>
                                <td style="width: 300px">Los enlaces son únicos y contextuales.</td>
                                <td style="width: 300px">El propósito de cada enlace se puede determinar a partir del texto del enlace únicamente.</td>
                                <td style="width: 300px"><center><input name="seisce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="seiscec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">7</td>
                                <td style="width: 300px">Cada página tiene un orden lógico de las pestañas y tabulaciones visibles.</td>
                                <td style="width: 300px">Cualquier interfaz de usuario que sea operable desde el teclado, tiene un modo de operación donde el foco del teclado es
                                visible.</td>
                                <td style="width: 300px"><center><input name="sietece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="sietecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">8</td>
                                <td style="width: 300px">Los nombres y los iconos para las acciones son coherentes entre todas las herramientas.</td>
                                <td style="width: 300px">Los componentes que tienen la misma funcionalidad dentro de un conjunto de páginas web se identifican de manera coherente.</td>
                                <td style="width: 300px"><center><input name="ochoce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="ochocec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">9</td>
                                <td style="width: 300px">El sitio proporciona instrucciones para guiar al usuario.</td>
                                <td style="width: 300px">Se proporcionan instrucciones comprensibles para el usuario que le ayuden a desarrollar las actividades que tiene el sitio web sin tener ningún problema</td>
                                <td style="width: 300px"><center><input name="nuevece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="nuevecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">10</td>
                                <td style="width: 300px">Los textos presentes en el sitio contienen jergas o modismos.</td>
                                <td style="width: 300px">Los textos sitio son coherentes y usan expresiones entendibles para cualquier usuario.</td>
                                <td style="width: 300px"><center><input name="diezce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="diezcec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">11</td>
                                <td style="width: 300px">Los enlaces y botones son visualmente identificables</td>
                                <td style="width: 300px">Los enlaces y botones del sitio web tienen características que los hacen resaltar, para que el usuario pueda hacer uso de estos sin ningún problema.</td>
                                <td style="width: 300px"><center><input name="oncece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="oncecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">12</td>
                                <td style="width: 300px">La tipografía usada para el texto es legible y permite una adecuada velocidad de lectura.</td>
                                <td style="width: 300px">El tipo de letra usada en los textos permite facilidad de lectura para el usuario. </td>
                                <td style="width: 300px"><center><input name="docece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="docecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">13</td>
                                <td style="width: 300px">Se utiliza el elemento HTML correcto para el contenido </td>
                                <td style="width: 300px">Los contenidos del sitio web están dentro de etiquetas HTML que permita que un lector de pantalla reconocer los pueda contenidos ofrecidos por el sitio web.</td>
                                <td style="width: 300px"><center><input name="trecece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="trececec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">14</td>
                                <td style="width: 300px">El sitio contiene enlaces de enrutamiento a la página principal.</td>
                                <td style="width: 300px">El sitio web ofrece la opción de navegar a la página principal desde cualquier punto de la navegación.</td>
                                <td style="width: 300px"><center><input name="catorcece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="catorcecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">15</td>
                                <td style="width: 300px">El sitio web funciona en diferentes navegadores.</td>
                                <td style="width: 300px">El sitio web presenta un funcionamiento óptimo en los navegadores más comunes, especialmente aquellos que tienen más accesibilidad (Internet Explorer y Mozilla Firefox).</td>
                                <td style="width: 300px"><center><input name="quincece" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="quincecec" type="number" min="0" value="0" max="100"></center></td>
                            </tr>
                            <tr>
                                <td style="width: 300px">16</td>
                                <td style="width: 300px">El sitio web tiene listas desplegables bien estructuradas.</td>
                                <td style="width: 300px">Cuando se hace uso de listas desplegables, el lector de pantalla reconoce la posibilidad de seleccionar otros elementos.</td>
                                <td style="width: 300px"><center><input name="diezseisce" type="number" min="0" value="0" max="100"></center></td>
                                <td style="width: 300px"><center><input name="diezseiscec" type="number" min="0" value="0" max="100"></center></td>
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
