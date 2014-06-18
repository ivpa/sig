<!-- Esta es la plantilla para el usuario Estrategico del sistema gerencial-->
<?php
session_start();
$nombre = $_SESSION['nombre'];

?>



<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta charset="UTF-8">
        <!-- InstanceBeginEditable name="doctitle" -->
        <title>SIG Ventas Spots HOME</title>
        <!-- InstanceEndEditable -->
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../librerias/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../librerias/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../librerias/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="../../librerias/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../../librerias/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../../librerias/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../librerias/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script src="../../librerias/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                //Date range picker fecha
                $('#fecha2').daterangepicker();
				
            });
        </script>	
    </head>
    
	<body class="skin-blue">
        <header class="header">
            <a href="index_estrategico.php" class="logo">SIG Ventas de Spots</a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                       
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $nombre; ?><i class="caret"></i></span>
                            </a>
							<ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../librerias/img/avatar5.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $nombre; ?> - Usuario Estratégico
                                        <small>Director de Ventas</small>
                                    </p>
                                </li>
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../../procesos/logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                    </div>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../librerias/img/avatar5.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Bienvenido</p> 
							<p><?php  echo $nombre; ?></p>
                        </div>
						</br>
						</br>
						</br>
						<div align="center">
						<!--<span>MENU</span>-->
						<span class="label label-success">MENU</span>
						</div>
						
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="reporte2.php">
                                <i class="fa fa-table"></i> <span>Reporte de Ventas Totales por Rubro</span>
                            </a>
                        </li>
                        <li>
                            <a href="reporte1.php">
                                <i class="fa fa-table"></i> <span>Reporte de Ventas Totales por  Agencia </span> 
                            </a>
                        </li>
                        <li>
                            <a href="reporte3.php">
                                <i class="fa fa-table"></i>
                                <span>Reportes de Ventas Totales por Cliente</span>
                            </a>
                                                    </li>
                       
                        <li>
                            <a href="reporte4.php">
                                <i class="fa fa-table"></i> <span>Reporte de Ventas de Agencias por Ventas Totales</span>
                            </a>
                        </li>
                        <li>
                            <a href="reporte5.php">
                                <i class="fa fa-bar-chart-o"></i> <span>Analisis de Paretto</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="../../calendario.php">
                                <i class="fa fa-calendar"></i> <span>Calendario</span>
                                <!--<small class="badge pull-right bg-red">3</small>-->
                            </a>
                        </li>
                      
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
            <!-- InstanceBeginEditable name="EditRegion3" --><!-- Content Header (Page header) -->
                <section class="content-header">
                	
			 
                   <h1>Ventas de Agencias sobre Ventas Totales</h1>
                    <ol class="breadcrumb">
                        <li><a href="index_estrategico.php"><i class="fa fa-home"></i>Inicio</a></li>
                        <li class="active">Ventas de Agencias sobre Ventas Totales</li>
                    </ol>
			</section>
				
                <!-- Main content -->
                <section class="content">
				
				<div id"fechas" align="center">
				<table  cellpadding="5">
					<tr>
						<th>Rango de Fechas: </th> 
						<th><div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" class="form-control pull-right" id="fecha2"/>
							</div><!-- /.input group -->
						</th>
						<th><button class="btn bg-light-blue"><span> Generar Reporte</span></button></th>
					</tr>
				</table>
				</div>
				</br>
				
                <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Ventas de Agencias por Ventas Totales</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0</td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
								</br>
								<div id="botones" align="right">
									<button class="btn btn-danger"><i class="fa fa-download"> </i><span> Generar PDF</span></button>
									<button class="btn btn-success"><i class="fa fa-file-o"> </i><span> Generar Excel</span></button>
								</div>
								
                            </div> <!--Fin del Box-->               
						
				
				</section><!-- /.content -->
			  <!-- InstanceEndEditable -->
                
		  </aside> <!-- /.right-side -->
        </div><!-- ./wrapper -->
		<div id="footer" align="center">
			</br>
			<div class="container">
				<p class="text-muted credit">Sistemas Gerenciales&copy; 2014 / Plantilla por <a href="http://getbootstrap.com/">Bootstraps</a> / Sistema Creado por Estudiantes de la Carrera de Ingeniería de Sistemas Informáticos de la <a href="http://www.ues.edu.sv/">Universidad de El Salvador</a>.</p>
			</div>
			</br>
		</div>
		
        <script src="../../librerias/js/jquery.min.js"></script>
       
        <script src="../../librerias/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../../librerias/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- fullCalendar -->
        <script src="../../librerias/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../librerias/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
		<script src="../../librerias/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../librerias/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../../librerias/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../librerias/js/AdminLTE/app.js" type="text/javascript"></script>
		
    
	</body>
<!-- InstanceEnd --></html>