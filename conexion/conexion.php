
<?php
$conn;

function conectar_db()
{
	global $conn;
/*aqui escriben el nombre del servidor de SQLserver 
 * si no lo conocen solo escriben es Management select @@servername as nombre_servidor;*/

$serverName = "DELL-PC"; 


/* La conexi�n se intentar� utilizando la autenticaci�n Windows.
 * para este punto solo es de definir el nombre de la base de datos*/
$connectionInfo = array("Database"=>"DDsinfoG");
$conn = sqlsrv_connect($serverName,$connectionInfo);
}

?>

