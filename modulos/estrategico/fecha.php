<?php
	$resultado =addslashes(htmlspecialchars($_POST["fecha2"]));
	
	if($resultado == NULL){
		$res = "Ingrese el rango de fechaaaaa!! ";
		$resul = false;
	}else{	
		list($fechai, $fechaf) = split('[-]', $resultado);
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
											
										}
									}
									
								}
							}
						}
					
					}	
				}
			}
		}
	}
	echo "$resul";
	/*echo "
                <script language=’JavaScript’>
                alert('$res');
                </script>";
	echo "$resul";*/
?>