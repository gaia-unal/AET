<?php include('archivos/head.html'); ?>
    <div class="container">
        <div class="row" style="margin-top: -30px">
                <center><div style="width: 70%; height:100%; background-color: #fff; padding: 10px;border-radius: 4px;border: 1px solid #ddd;">
                <center><h4 style="margin-left: 10px;">Registro</h4></center>
                    <div class="mailchimp">
                        <form action="registrar.php" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" enctype="multipart/form-data">
                            <center><input type="text" value="" name="nombre" id="mce-FNAME" placeholder="Nombre" autocomplete="off" required></center>
                            <center><input type="text" value="" name="apellido" id="mce-SNAME" placeholder="Apellido" autocomplete="off" required></center>
                            <center><input type="text" value="" name="nombreUser" id="mce-SNAME" placeholder="Nombre de usuario" autocomplete="off" required></center>
                            <center><input type="text" value="" name="email" id="mce-SNAME" placeholder="E-mail" autocomplete="off" required></center>
                            <center><input type="password" value="" name="contrasena" id="mce-SNAME" placeholder="Contraseña" autocomplete="off" required></center>
                            <center><input type="password" value="" name="contrasena2" id="mce-SNAME" placeholder="Confirma tu contraseña" autocomplete="off" required></center>
                            <center><input type="submit" value="Confirmar registro" name="subscribe" id="mc-embedded-subscribe" class="myButton"></center>
                        </form><br>
                        <a href="index.php"><button type="button" class="myButtom" style="width: 300px; height: 35px; float: center">Regresar</button></a> <br> 
                    </div><br>
                </div>   </center>   

        </div>
    </div><br>
    

   
<?php include('archivos/pie.html'); ?>