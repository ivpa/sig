<?php
	//Las variables del formulario se pasan en modo POST al archivo login.php dentro de la carpeta procesos para
	// hacer las respectivas validaciones de los campos y la busqueda de los nombres en la base de datos. 
	session_start();
	$as= 'BIENVENIDO AL SISTEMA';

?>

<!DOCTYPE html>
<!--bg-black esta en bootstrap. css y es el color del tema asi q no se toca :P-->
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $as ?></title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="librerias/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="librerias/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="librerias/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<script src="librerias/js/jquery.min.js"></script>
    </head>
    <body class="bg-black">
		
		
        <div class="form-box" id="login-box">
            <div class="header">Sistema Gerencial de Ventas de Spots Publicitarios</div>
            <form  method="POST" action="validarusuario.php">
                <div class="body bg-gray">
					<div align="center">Ingrese sus credenciales</div>
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder= 'Ingrese su ID' />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Recuerdame
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-light-blue btn-block">Accesar</button>  
                </div>
            </form>

        </div>
		

        <!-- jQuery 2.0.2 -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <!-- Bootstrap -->
        <script src="librerias/js/bootstrap.min.js" type="text/javascript"></script> 
		<!-- jQuery 2.0.2 -->
        <script src="librerias/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="librerias/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>		

    </body>
</html>