
<?php 

    //require_once('../../conexion/conexion.php');
	//include
	//require "../../conexion/conexion.php";
	//conectar_db();
    class consulta{
	    var $conexion;
		var $conn;
    function consulta(){
      

		$this->conexion = "DELL-PC"; 

		$connectionInfo = array("Database"=>"DDsinfoG");
		$this->conn = sqlsrv_connect($this->conexion,$connectionInfo);
	}

    function consulta2(){
			
			$html="";
			$sql = "SELECT * FROM venta_vendedor";
			$rs = sqlsrv_query($this->conn,$sql);
			$i=0;
			
			$html=$html.'<div align="center">
			EMPRESA TELEVISIVA
			<br><br />
			DEPARTAMENTO DE VENTAS DE SPOT PUBLICITARIOS
			<br><br />
			REPORTE DE VENTAS POR VENDEDOR.
			<br /><br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';	
			
			$html=$html.'<tr bgcolor="#FF0000">
			     <td><font color="#FFFFFF">Nombres</font></td>
				 <td><font color="#FFFFFF">Montos</font></td>
				 </tr>';
				 
			while ($row = sqlsrv_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				
				$date=$row['fechaInicial'];  //this returns the current date time
                $fechai = $date->format('d-m-Y-H-i-s');
                $date=$row['fechaFinal'];  //this returns the current date time
                $fechaf = $date->format('d-m-Y-H-i-s');
				
				$html = $html.'<td>';
				$html = $html. $row["nombre_vendedor"];
				$html = $html.'</td><td>';
				$html = $html. $row["monto_ventas"];
				$html = $html.'</td>
				</tr>';		
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
	}
?>

