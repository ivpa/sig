<?php 

    class consulta{
	    var $conexion;
		var $conn;
    function consulta(){
      
		$this->conexion = "SALVADOR\SQLEXPRESS"; 
		$connectionInfo = array("Database"=>"DDsinfoG");
		$this->conn = sqlsrv_connect($this->conexion,$connectionInfo);
	}

    function consulta2($sql){
			
			$html="";
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
			     <td><font color="#FFFFFF">Nombre Agencia</font></td>
				 <td><font color="#FFFFFF">Ventas totales</font></td>
				 <td><font color="#FFFFFF">Porcentaje</font></td>
				 </tr>';
				 
			while ($row = sqlsrv_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				
				$html = $html.'<td>';
				$html = $html. $row["nombreAgencia"];
				$html = $html.'</td><td>';
				$html = $html. $row["ventasTotales"];
				$html = $html.'</td><td>';
				$html = $html.$row["porcentajeVentasTotales"];
				$html = $html.'</td></tr>';
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
	}
?>