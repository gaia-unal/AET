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
            <center><h4 style="margin-left: 10px;">Aplicación completa de la metodología de evaluación de accesibilidad de sitios web.</h4></center><br>
                    <form action="verificar.php" method="post" name="frm_ingreso" id="frm_ingreso">
                        <div class="table-responsive" style="width: 800px;">
                            <table class="table">
                                <thead style="background-color:#0f436f; color:#fff">
                                    <th><center>Ingresar la URL o el nombre del sitio que se va a evaluar.</center></th>
                                </thead>
                            </table>
                        <center><input name="url" id="url" type="text" placeholder="Ingrese la dirección url del sitio a evaluar" autocomplete="off" required style="width:45%;"></center>
						<div class="table-responsive" style="width: 400px;">
							<table class="table">
								<thead style="background-color:#0f436f; color:#fff">
									<th><center>Resultado evaluación automática</center></th>
								</thead>
								<tbody>
									<tr>
										<td><center><strong>Resultado Parcial (RP)</strong></center></td>
									</tr>

									<tr>
										<td><center>
                                                <p><center>A contiuación ingrese el valor que resulto de realizar la evaluación sel sitio web con el validador de accesibilidad AccessMonitor</center></p>

												<center><input name="valor" id="valor" type="number" min="0" max="10" step="0.1"  placeholder="Ingrese el Valor (1 a 10)" autocomplete="off" required style="width:90%;"></center>
                                                <span>
                                                    <a class="link" target="blank" href="http://www.acessibilidade.gov.pt/accessmonitor/" alt="Este enlace lo dirige a la herramienta de validación de accesibilidad AccessMonitor"> Ir a AccessMonitor </a>
                                                </span>
												<center><input type="submit" value="Continuar" name="Submit" id="mc-embedded-subscribe" class="myButton"></center>
										</center></td>
									</tr>
								</tbody>
							</table>
						</div>
                    </form>
            </div></center>
        </div>
    </div>
 <?php include('archivos/pie.html'); ?>
