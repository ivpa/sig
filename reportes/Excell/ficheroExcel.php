<?php

$conn;
$serverName = "DELL-PC"; 
$connectionInfo = array("Database"=>"DDsinfoG");
$conn = sqlsrv_connect($serverName,$connectionInfo);

/** Incluir la libreria PHPExcel */
require_once '/Classes/PHPExcel.php';

$sql = $_REQUEST['sentencia'];
$result = sqlsrv_query($conn,$sql);


 
// Crea un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();
 
// Establecer propiedades
$objPHPExcel->getProperties()
->setCreator("Cattivo")
->setLastModifiedBy("Cattivo")
->setTitle("Documento Excel de Prueba")
->setSubject("Documento Excel de Prueba")
->setDescription("Demostracion sobre como crear archivos de Excel desde PHP.")
->setKeywords("Excel Office 2007 openxml php")
->setCategory("Pruebas de Excel");


$rowCount = 4; 
$bandera = $_REQUEST['bandera'];

if($bandera==1){
	$estiloTituloReporte = array(
    'font' => array(
        'name'      => 'Verdana',
        'bold'      => true,
        'italic'    => false,
        'strike'    => false,
        'size' =>12,
        'color'     => array(
            'rgb' => '000000'
        )
    ));
	
	
     $objPHPExcel->getActiveSheet()->mergeCells('B2:F2');
     $objPHPExcel->getActiveSheet()->SetCellValue('B2','VENTAS TOTALES POR RUBRO');
	 
	 $objPHPExcel->getActiveSheet()->getStyle('B2:E2')->applyFromArray($estiloTituloReporte);	
	
	 $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,'Rubro');
     $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,'Venta Total');

     while($row = sqlsrv_fetch_array($result)){ 
	 $rowCount++;
	 $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['nombreRubro']);
	 $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['ventasTotales']);
    }
}

// Renombrar Hoja
$objPHPExcel->getActiveSheet()->setTitle('Tecnologia Simple');
 
// Establecer la hoja activa, para que cuando se abra el documento se muestre primero.
$objPHPExcel->setActiveSheetIndex(0);
 
// Se modifican los encabezados del HTTP para indicar que se envia un archivo de Excel.
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="SISTEMA_REPORTE.xlsx"');
header('Cache-Control: max-age=0');
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;



?>