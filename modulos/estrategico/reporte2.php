<!-- Esta es la plantilla para el usuario Estrategico del sistema gerencial-->
<?php
header( 'Content-Type: text/html;charset=utf-8' );
require_once('../../conexion/conexion.php');  //se llama al archivo de conexion con server
session_start();
$nombre = $_SESSION['nombre'];
conectar_db();
$ban=1;
if(isset($_POST['btn-fecha']))
{ 
	$fecha1= $_REQUEST['fecha2']; 
	//echo $fecha1;
	$ban=0;
}
?>

<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/plantilla1.dwt.php" codeOutsideHTMLIsLocked="false" -->
   <head>
        <meta charset="UTF-8">
        <title>SIG Ventas Spots HOME</title>
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
		<!-- DATA TABLES -->
        <link href="../../librerias/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
		<!-- jQuery 2.0.2 -->
		<script type="text/javascript" src="../../librerias/js/jquery-1.3.2.min.js"></script>
        <script src="../../librerias/js/jquery.min.js"></script>
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
        <script type="text/javascript">
            $(function() {
                //Date range picker fecha
                $('#fecha2').daterangepicker();
				
            });
			function Limpiar(){
				//invisible('respuesta');
				//visible('tabla');
				document.getElementById('fecha2').value="";
			}
			function invisible(element)
			{
							var elemento = document.getElementById(element);
							elemento.style.visibility = "hidden";
			}
			//Funcion para hacer visible un div
			function visible(element)
			{
							var elemento = document.getElementById(element);
							elemento.style.visibility = "visible";
			}
			
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
                        
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php  echo $nombre; ?><i class="caret"></i></span>
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
                	
			 
                   <h1>Reportes de Venta Totales por Rubro</h1>
                    <ol class="breadcrumb">
                        <li><a href="index_estrategico.php"><i class="fa fa-home"></i>Inicio</a></li>
                        <li class="active">Reportes de Venta Totales por Rubro</li>
                    </ol>
			</section>
				
                <!-- Main content -->
                <section class="content">
					<div id"fechas" align="center">
						<form method="post" id="formulario">
							<table  cellpadding="5">
								<tr>
									<th>Rango de Fechas: </th> 
									<th><div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" name="fecha2" class="form-control pull-right" id="fecha2"/>
										</div><!-- /.input group -->
									</th>
									<th><button id="btn-fecha" class="btn bg-light-blue" name="btn-fecha"><span> Generar Reporte</span></button></th>
									<th><button id="limpiar" class="btn bg-light-blue" onclick="Limpiar()"><span>Limpiar</span></button></th>
								</tr>
							</table>
						</form>
					</div>
					</br>
<?php 
	if($ban==0){	
		if($fecha1 != NULL){	
			list($fechai, $fechaf) = split('[-]', $fecha1);
			$hoy = date("d/m/Y");
			list($diah, $mesh, $añoh) = split('[/]', $hoy);
			list($diai, $mesi, $añoi) = split('[/]', $fechai);
			list($diaf, $mesf, $añof) = split('[/]', $fechaf);
			
			if(($diah == $diaf)&&($mesh==$mesf)&&($añoh<$añof)){
				$res = "La fecha final es mayor a la de hoy";
				$resul = false;
			} else {
				if(($diah == $diaf)&&($mesh<$mesf)&&($añoh==$añof)){
					$res = "La fecha final es mayor a la de hoy";
					$resul = false;
				}else{
					if(($diah<$diaf)&&($mesh==$mesf)&&($añoh==$añof)){
						$res = "La fecha final es mayor a la de hoy";
						$resul = false;
					}else{
						if(($diah<$diaf)&&($mesh<$mesf)&&($añoh==$añof)){
							$res = "La fecha final es mayor a la de hoy";
							$resul = false;
						}else{
							if(($diah==$diaf)&&($mesh<$mesf)&&($añoh<$añof)){
								$res = "La fecha final es mayor a la de hoy";
								$resul = false;
							} else{
								if(($diah<$diaf)&&($mesh==$mesf)&&($añoh<$añof)){
									$res = "La fecha final es mayor a la de hoy";
									$resul = false;
								}else{
									if(($diah<$diaf)&&($mesh<$mesf)&&($añoh<$añof)){
										$res = "La fecha final es mayor a la de hoy";
										$resul = false;
									}else{
										if(($diah>$diaf)&&($mesh<$mesf)&&($añoh==$añof)){
											$res = "La fecha final es mayor a la de hoy";
											$resul = false;
										}else{
											if($añoh<$añof){
												$res = "La fecha final es mayor a la de hoy";
												$resul = false;
											}else{
												if(($diah==$diaf)&&($mesh==$mesf)&&($añoh==$añof)){
													$res = "La fecha final es IGUAL a la de hoy";
													$resul = true;
												}else{
													$res = "AL FIN CLIENTE :P";
													$resul = true;
												}
											}//Fin del primer else.. 
										}
										
									}
								}
							}
						
						}	
					}
				}
			}
		}else{
			$res = "Ingrese el rango de fecha";
			$resul = false;
		}
		
		
				if ($resul == true){
					//si la fecha final es menor o igual que la fecha de hoy entonces, realiza la consulta...
					$fechain ="$mesi/$diai/$añoi";
					$fechafn ="$mesf/$diaf/$añof";
					$fechafn=str_replace(' ', '', $fechafn);
					$fechain=str_replace(' ', '', $fechain); //Quita los espacios en blanco en medio de las fechas.
										
					$flag=1; //Bandera que indica si hay datos en esas fechas. 
					//Consultas sql
					$sql = "{call sp_venta_rubro(@FechaInicio=?,@FechaFin=?)}";
					$result = sqlsrv_prepare($conn,$sql,array( array(&$fechain,SQLSRV_PARAM_IN), array(&$fechafn,SQLSRV_PARAM_IN)));
					$reporte_ventaRubro;
                    $sql_excel;
					// Aca hace algo no se que :S
					for ($i=1; $i <=2 ; $i++) { 
						if (sqlsrv_execute($result)) {							
							// si ejecuta correctamente la consulta
							$reporte_ventaRubro= sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);			
						}else{
							 print_r( sqlsrv_errors(), true);
							}//fin del else de arriba	
					}//FIn del for					
					
					//Si el reporte no es null
							if ($reporte_ventaRubro['ventasTotales']==null) {
								$flag=0;
							}
	
							if ($flag!=0){
                                $sql_excel="SELECT * FROM venta_rubro WHERE FechaInicial='".$fechain."'  AND FechaFinal= ' ".$fechafn."'";
                                //echo $sql_excel;
				?>					
				
						<!--<div class="box">-->
						<div class="box"><!-- panel panel-primary -->
							<div class="box-header"><!-- panel-heading  -->	
                                <h3 class="box-title">Ventas Totales por Rubro</h3> <!--Ventas Totales por Rubro-->                            
                            </div>
                            <div class="box-body table-responsive">
                                <table id="Exportar_a_Excel" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>                                                
                                            <th> Nombre Rubro</th>
											<th>Ventas Totales</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php do { ?>
                                        <tr>
                                            <td align="center"><?php echo $reporte_ventaRubro['nombreRubro']; ?></td>
											<td align="center"><?php echo $reporte_ventaRubro['ventasTotales']; ?></td>
                                        </tr>
                                        <?php } while ($reporte_ventaRubro=sqlsrv_fetch_array($result));?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th align="center">Nombre Rubro</th>
											<th align="center">Ventas Totales</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.box-body -->
						</div> <!--Fin del Box-->               
							
						<div id="botones" align="right" >			
						
                        			<button class="btn btn-danger"><i class="fa fa-download"><a href="javascript:window.open('../../reportes/vista/estrategico_reporte2.php?sql=<?php echo $sql_excel?>','','width=600,height=400,left=50,top=50,toolbar=no');void 0"></i><span> Generar PDF</span></a></button>
           							<form action="../../reportes/Excell/ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
                                    <button class="btn btn-success" id="botonExcel"><i class="fa fa-file-o"> </i><span> Generar Excel</span></button>                                    
                                    <input type="hidden" name="sentencia" value="<?php echo $sql_excel ?>" />
                                    <input type="hidden" name="bandera" value="1" />

                                    </form>
                                    						</div>
				<?php } else{ ?>
					<div class="alert alert-warning">No se encontraron resultados en ese periodo</div>	
						
	<?php
			} //fin del else	
		
		
	}else{?>
					<div class="alert alert-warning"><?php echo $res ; ?></div>
			
		<?php
		}
		}//fin del ban
		?>	
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
		<!-- DATA TABES SCRIPT -->
        <script src="../../librerias/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../librerias/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
		
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
	
	</body>
</html>