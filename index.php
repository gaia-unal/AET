<?php include('archivos/head.html'); ?>

<div class="container">
        <div class="row" style="margin-top: -30px">
            <div class="col-md-6">
                <h4>Descripción de la herramienta AET</h4>
                <br>
                <p style="font-size: 14px; font-weight: 600; color:#797979; text-align: justify">
                    La presente herramienta tiene como objetivo ser un apoyo al momento de realizar evaluaciones de 
                    accesibilidad a sitios web de forma manual. Además, ésta también permite integrar resultados 
                    obtenidos de la evaluación automática arrojada con eXaminator y así integrar ambos resultados 
                    para finalmente generar un reporte del nivel de accesibilidad en el que se encuentra el sitio, 
                    el cual podrá ser consultado cada que el experto considere y de esta forma realizar seguimiento 
                    a los sitios evaluados.
                </p>
                <br>
                <br>
                <h4>Manual de usuario de la herramienta AET</h4>
                <br>
                <p>
                   <a href="manual_usuario.docx" download="Manual de usuario">
                        Descargar Archivo en formato .doc
                    </a>
                </p>
                <p>
                   <a href="manual_usuario1.pdf" download="Manual de usuario pdf">
                        Descargar Archivo en formato pdf
                    </a>
                </p>
            </div>
            <div class="col-md-6">
                <div style="margin-left:4em; width: 100%; height:200px; background-color: #fff; padding: 10px;border-radius: 4px;border: 1px solid #ddd;">
                <h4 style="margin-left: 10px">Iniciar sesión</h4>
                <br>
                    <div class="mailchimp">
                        <form action="script_acceso_usuario.php" method="post" name="frm_ingreso" id="frm_ingreso">
                            <center><input name="usuario" type="text" id="usuario" placeholder="Nombre de usuario" autocomplete="off" required></center>
                            <center><input name="contrasena" type="password" id="contrasena" placeholder="Contraseña" autocomplete="off" required></center>
                            <center><input type="submit" value="Iniciar" name="Submit" id="mc-embedded-subscribe" class="myButton"></center>
                        </form>
                    </div>

                    
                    <div>
                        <a href="registro.php"><p style="font-size: 14px; font-weight: 500; color:#797979; float:left">Regístrese <strong>aquí</strong></p></a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div><br>
    <!-- -------------------------------------------------------------------------------------------------------------------------- -->
    <div class="container">
        <div style="margin-top: 20px">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                        
                        <div class="caption">
                            <center><h3 style="font-weight: 600;">Accesibilidad web</h3></center>
                            <p style="font-size: 14px; font-weight: 500; color:#797979;">
                            Denota que personas con algún tipo de discapacidad o sin ella, podrán hacer uso de 
                    la web percibiendo, entendiendo, navegando e interactuando con el contenido de la misma. El objetivo principal 
                    es eliminar las barreras de accesibilidad para así posibilitar y facilitar la utilización y apropiación de la web, 
                    mediante la satisfacción de  diferentes necesidades, situaciones y preferencias, sin 
                    dejar a un lado la posibilidad de generar aportes a los contenidos.<br><br><br>

                            </p>
                        </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                       
                        <div class="caption">
                        <center><h3 style="font-weight: 600;">Evaluación automática</h3></center>
                            <p style="font-size: 14px; font-weight: 500; color:#797979;">
                            Se realiza a través de validadores automáticos. 
                    El objetivo de estas es hacer una revisión automática de la accesibilidad, comprobando si el sitio que 
                    está siendo evaluado cumple con determinadas pautas de accesibilidad. La mayoría de las herramientas de 
                    validación automática se encuentran disponibles de formas gratuitas en la web o 
                    pueden ser descargadas y ejecutadas de manera local.<br><br><br><br><br>

                            </p>
                        </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                        
                        <div class="caption">
                        <center><h3 style="font-weight: 600;">Evaluación manual</h3></center>
                            <p style="font-size: 14px; font-weight: 500; color:#797979;">
                            Realizado por un experto, que ofrece un análisis completo del nivel 
                    de accesibilidad del sitio. Usualmente este tipo de evaluación se hace mediante 
                    cuestionarios o test de accesibilidad referente a pautas de accesibilidad o criterios que los validadores 
                    automáticos no pueden reconocer. A cada criterio se le otorga un valor y una 
                    ponderación por categoría para así obtener un resultado numérico y ajustarlo a 
                    una escala, que nos permita clasificar en qué nivel de accesibilidad se encuentra el sitio web.

                            </p>
                        </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                        
                        <div class="caption">
                        <center><h3 style="font-weight: 600;">Experto evaluador</h3></center>
                            <p style="font-size: 14px; font-weight: 500; color:#797979;">Persona, la cual tiene conocimientos solidos sobre las pautas de accesibilidad web y que además analiza el nivel de accesibilidad de un 
                    sitio en base a unos criterios dados.</p><br><br><br><br><br><br><br><br><br><br><br>
                        </div>
                </div>
            </div>
        </div>
    </div>
<br><br>

    <!----------------------------------------------------------------------------------------------------------------------------- -->
   
 
<?php include('archivos/pie.html'); ?>