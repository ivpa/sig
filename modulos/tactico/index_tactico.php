<?php
session_start();
$nombre = $_SESSION['nombre'];

?>

<!-- Esta es la plantilla para el usuario Estrategico del sistema gerencial-->
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
        <!-- Morris chart -->
        <link href="../../librerias/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../../librerias/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="../../librerias/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../../librerias/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../../librerias/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../librerias/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- InstanceBeginEditable name="head" -->
        <!-- InstanceEndEditable -->
    </head>
    
	<body class="skin-blue">
        <header class="header">
            <a href="index_tactico.php" class="logo">SIG Ventas de Spots</a>
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
                                    <img src="../../librerias/img/avatar.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <?php echo $nombre; ?> - Usuario Táctico
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
                            <img src="../../librerias/img/avatar.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Bienvenido</p>
							<p><?php echo $nombre; ?></p>
                        </div>
						</br>
						</br>
						</br>
						<div align="center">
						<!--<span>MENU</span>-->
						<span class="label label-success">MENU</span>
						</div>
						
					</div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="reporte2.php">
                                <i class="fa fa-table"></i> <span>Reporte de Ventas por Vendedor</span>
                            </a>
                        </li>
                        <li>
                            <a href="reporte1.php">
                                <i class="fa fa-table"></i> <span>Reporte de Ventas por Programa Televisivo </span> 
                            </a>
                        </li>
                        <li>
                            <a href="reporte3.php">
                                <i class="fa fa-table"></i>
                                <span>Totales de Comisión por Venta</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="reporte4.php">
                                <i class="fa fa-table"></i> <span>Reporte de Tiempo/Spot de Programas</span>
                            </a>
                        </li>
                        <li>
                            <a href="reporte5.php">
                                <i class="fa fa-bar-chart-o"></i> <span>Reporte Ventas por Programa sobre Ventas Totales</span>
                            </a>
                        </li>
                        <li>
                            <a href="reporte5.php">
                                <i class="fa fa-bar-chart-o"></i> <span>Reporte Ventas por Agencia</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendario.php">
                                <i class="fa fa-calendar"></i> <span>Calendario</span>
                            </a>
                        </li>
						<li>
                            <a href="">
                                <i class="fa fa-cog"></i> <span>Mi Perfil</span>
                            </a>
                        </li>
						<li>
                            <a href="../../procesos/logout.php">
                                <i class="fa fa-power-off"></i> <span>Cerrar Sesión</span>
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
                	
			 
                   <h1>
                        Módulo Usuario Táctico
                        <!--<small>Control panel</small>-->
                  </h1>
                    <ol class="breadcrumb">
                        <li><a href="index_tactico.php"><i class="fa fa-home"></i>Inicio</a></li>
                        <!--<li class="active">Blank page</li>-->
                    </ol>
			</section>
				
                <!-- Main content -->
                <section class="content">
				</br>
				</br>
				<div align="center">
                <h2>Bienvenid@ al Sistema Gerencial de Ventas de Spots Publicitarios, <?php echo $nombre;?>!!</h2>
				</div>
				
				</br>
				<!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        Ventas 
                                    </h3>
                                    <p>
                                        por Vendedor
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person"></i>
                                </div>
                                <a href="reporte2.php" class="small-box-footer">
                                    Ver Reporte <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        Ventas
                                    </h3>
                                    <p>
                                        por Programa Televisivo
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-videocam"></i>
                                </div>
                                <a href="reporte5.php" class="small-box-footer">
                                    Ver Reporte <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
						<div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>
                                       Totales
                                    </h3>
                                    <p>
                                       Comisiones por Venta
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-briefcase-outline"></i>
                                </div>
                                <a href="reporte1.php" class="small-box-footer">
                                    Ver Reporte <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                    </div><!-- /.row -->
					<!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        Reporte
                                    </h3>
                                    <p>
                                        Tiempo/Spot por Programa
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-clock"></i>
                                </div>
                                <a href="reporte3.php" class="small-box-footer">
                                    Ver Reporte <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>
                                        Calendario
                                    </h3>
                                    <p>
                                        Widget
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-calendar"></i>
                                </div>
                                <a href="calendario.php" class="small-box-footer">
                                    Ver Calendario <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3>
                                        Ventas por Programa
                                    </h3>
                                    <p>
                                        por Ventas Totales 
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-monitor"></i>
                                </div>
                                <a href="reporte4.php" class="small-box-footer">
                                    Ver Reporte <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
					<div class="row">
						<div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-orange">
                                <div class="inner">
                                    <h3>
                                        Ventas 
                                    </h3>
                                    <p>
                                        por Agencia
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-pricetag-outline"></i>
                                </div>
                                <a href="reporte4.php" class="small-box-footer">
                                    Ver Reporte <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
					</div><!-- /.row -->
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
		
		
        <!-- jQuery 2.0.2 -->
        <script src="../../librerias/js/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../../librerias/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../../librerias/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="../../librerias/js/raphael-min.js"></script>
        <script src="../../librerias/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../../librerias/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../../librerias/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../../librerias/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="../../librerias/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../librerias/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../../librerias/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../librerias/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../../librerias/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../../librerias/js/AdminLTE/app.js" type="text/javascript"></script>

    
	</body>
<!-- InstanceEnd --></html>