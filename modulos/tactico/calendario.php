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
        <link href="../../librerias/css/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />
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
                        Calendario
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index_tactico.php"><i class="fa fa-home"></i> Inicio</a></li>
                        <li class="active">Calendario</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">


                    <div class="row">
                        <div class="col-md-3">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h4 class="box-title">Draggable Events</h4>
                                </div>
                                <div class="box-body">
                                    <!-- the events -->
                                    <div id='external-events'>                                        
                                        <div class='external-event bg-green'>Lunch</div>
                                        <div class='external-event bg-red'>Go home</div>
                                        <div class='external-event bg-aqua'>Do homework</div>
                                        <div class='external-event bg-yellow'>Work on UI design</div>
                                        <div class='external-event bg-navy'>Sleep tight</div>
                                        <p>
                                            <input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
                                        </p>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Create Event</h3>
                                </div>
                                <div class="box-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
                                        <ul class="dropdown-menu" id="color-chooser">
                                            <li><a class="text-green" href="#"><i class="fa fa-square"></i> Green</a></li>
                                            <li><a class="text-blue" href="#"><i class="fa fa-square"></i> Blue</a></li>                                            
                                            <li><a class="text-navy" href="#"><i class="fa fa-square"></i> Navy</a></li>                                            
                                            <li><a class="text-yellow" href="#"><i class="fa fa-square"></i> Yellow</a></li>
                                            <li><a class="text-orange" href="#"><i class="fa fa-square"></i> Orange</a></li>
                                            <li><a class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a></li>
                                            <li><a class="text-red" href="#"><i class="fa fa-square"></i> Red</a></li>
                                            <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fuchsia</a></li>
                                            <li><a class="text-purple" href="#"><i class="fa fa-square"></i> Purple</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="input-group">                                          
                                        <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                                        <div class="input-group-btn">
                                            <button id="add-new-event" type="button" class="btn btn-default btn-flat">Add</button>
                                        </div><!-- /btn-group -->
                                    </div><!-- /input-group -->
                                </div>
                            </div>
                        </div><!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">                                
                                <div class="box-body no-padding">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div><!-- /.box-body -->
                            </div><!-- /. box -->
                        </div><!-- /.col -->
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
		<!-- fullCalendar -->
        <script src="../../librerias/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- Page specific script -->
        <script type="text/javascript">
            $(function() {

                /* initialize the external events
                 -----------------------------------------------------------------*/
                function ini_events(ele) {
                    ele.each(function() {

                        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                        // it doesn't need to have a start or end
                        var eventObject = {
                            title: $.trim($(this).text()) // use the element's text as the event title
                        };

                        // store the Event Object in the DOM element so we can get to it later
                        $(this).data('eventObject', eventObject);

                        // make the event draggable using jQuery UI
                        $(this).draggable({
                            zIndex: 1070,
                            revert: true, // will cause the event to go back to its
                            revertDuration: 0  //  original position after the drag
                        });

                    });
                }
                ini_events($('#external-events div.external-event'));

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    buttonText: {//This is to add icons to the visible buttons
                        prev: "<span class='fa fa-caret-left'></span>",
                        next: "<span class='fa fa-caret-right'></span>",
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day'
                    },
                    //Random default events
                    events: [
                        {
                            title: 'All Day Event',
                            start: new Date(y, m, 1),
                            backgroundColor: "#f56954", //red 
                            borderColor: "#f56954" //red
                        },
                        {
                            title: 'Long Event',
                            start: new Date(y, m, d - 5),
                            end: new Date(y, m, d - 2),
                            backgroundColor: "#f39c12", //yellow
                            borderColor: "#f39c12" //yellow
                        },
                        {
                            title: 'Meeting',
                            start: new Date(y, m, d, 10, 30),
                            allDay: false,
                            backgroundColor: "#0073b7", //Blue
                            borderColor: "#0073b7" //Blue
                        },
                        {
                            title: 'Click for Google',
                            start: new Date(y, m, 28),
                            end: new Date(y, m, 29),
                            url: 'http://google.com/',
                            backgroundColor: "#3c8dbc", //Primary (light-blue)
                            borderColor: "#3c8dbc" //Primary (light-blue)
                        }
                    ],
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                /* ADDING EVENTS */
                var currColor = "#f56954"; //Red by default
                //Color chooser button
                var colorChooser = $("#color-chooser-btn");
                $("#color-chooser > li > a").click(function(e) {
                    e.preventDefault();
                    //Save color
                    currColor = $(this).css("color");
                    //Add color effect to button
                    colorChooser
                            .css({"background-color": currColor, "border-color": currColor})
                            .html($(this).text()+' <span class="caret"></span>');
                });
                $("#add-new-event").click(function(e) {
                    e.preventDefault();
                    //Get value and make sure it is not null
                    var val = $("#new-event").val();
                    if (val.length == 0) {
                        return;
                    }

                    //Create event
                    var event = $("<div />");
                    event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("external-event");
                    event.html(val);
                    $('#external-events').prepend(event);

                    //Add draggable funtionality
                    ini_events(event);

                    //Remove event from text input
                    $("#new-event").val("");
                });
            });
        </script>
    
	</body>
<!-- InstanceEnd --></html>