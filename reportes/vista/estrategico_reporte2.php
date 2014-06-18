<?php
	require_once('../tcpdf/config/lang/eng.php');
	require_once('../tcpdf/tcpdf.php');
	require_once('../modelo/estrategico_consulta_r2.php');
	
	$sql=$_GET['sql'];
	
	$objConsulta= new consulta();
	$perfil2="";
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Grupo 20 SIG');
$pdf->SetTitle('Empresa televisiva');
$pdf->SetSubject('Reporte de ventas por Rubro');
$pdf->SetKeywords('Reporte, ventas por Rubro, php, SQLserver');



$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

//set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

//set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

//set some language-dependent strings
$pdf->setLanguageArray($l);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

$pdf->SetFont('helvetica', '', 9, '', true);

// Add a page 
// This method has several options, check the source code documentation for more information.
$pdf->setPrintHeader(true); //no imprime la cabecera ni la linea
//$pdf->Image('leon.jpg',10,10,40,20,'JPG','http://www.google.es','T'); ; 
$pdf->setPrintFooter(true); // imprime el pie ni la linea 
$pdf->AddPage();

//*************
  ob_end_clean();//rompimiento de pagina
//************* 

$html = $objConsulta->consulta2($sql);
$pdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);

$pdf->Output('Reporte ventasAgencia.pdf', 'I');
?>