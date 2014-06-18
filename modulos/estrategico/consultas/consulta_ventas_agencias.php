
    <?php
    require_once('../../../conexion/conexion.php');  //se llama al archivo de conexion con server
	conectar_db();

    $fechai = $_GET['fechainicial'];
    $fechaf = $_GET['fechafinal'];
    $fechaf=str_replace(' ', '', $fechaf);
    $fechai=str_replace(' ', '', $fechai);
    $flag=1;

	$sql = "{call sp_venta_agencia(@FechaInicio=?,@FechaFin=?)}";

	$result = sqlsrv_prepare($conn,$sql,array(
        array(&$fechai,SQLSRV_PARAM_IN),
        array(&$fechaf,SQLSRV_PARAM_IN)
        ));

    for ($i=1; $i <=2 ; $i++) { 

         if (!sqlsrv_execute($result)) {
      // sino ejecuta la consulta
     print_r( sqlsrv_errors(), true);
     
    } else {
      // si ejecuta correctamente la consulta
         
    $reporte_ventaAgencia= sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)  ;
    if ($reporte_ventaAgencia['nombreAgencia']==null) {
        # code...
        $flag=0;
    }
      
        }
    }

if ($flag==0) {
    # code...
    echo "<div class=\"alert alert-warning\">No se encontraron resultados en ese periodo</div>";
}
   

	
	?>
	<html>
    <head>
	   <link href="../../librerias/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<table id="example1" class="table table-bordered table-striped table-hover" >
            <thead>
                <tr>
                    <th>Agencia</th>
                    <th>Monto de Ventas</th>
					<th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php do { ?>
                <tr>
                    <td><?php echo $reporte_ventaAgencia['nombreAgencia']; ?></td>
                    <td><?php echo $reporte_ventaAgencia['ventasTotales']; ?></td>
					<td><?php echo $reporte_ventaAgencia['Direccion']; ?></td>
                </tr>
                <?php } while ($reporte_ventaAgencia=sqlsrv_fetch_array($result));?>
            </tbody>
            <tfoot>
                <tr>
					<th>Agencia</th>
                    <th>Monto de Ventas</th>
					<th>Direccion</th>
                </tr>
            </tfoot>
		</table>
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