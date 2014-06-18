<?php 
	// Dentro de este archivo se declaran las variables de sesion, las cuales se ocuparan dentro de todo el sistema.
	
	$user=$_POST['userid'];
	$error;
	$num=0;
	
	//Aca poner la consulta a la base de el username :P..
	
	if($user =='estrategico'){
		session_start();
		$_SESSION['userid'] = $user;
		$_SESSION['nombre'] = "Mayra Zavala"; //se envia el nombre para mostrarlo el modulo y se vea personalizado
		header("Location: ../modulos/estrategico/index_estrategico.php"); //Direcciona al menu del estratégico.
	}else {
		if ($user =='admin'){
			session_start();
			$_SESSION['userid'] = $user;
			$_SESSION['nombre'] = "Ary Zavala"; //se envia el nombre para mostrarlo el modulo y se vea personalizado
			header("Location: ../modulos/administrador/index_admin.php"); //Direcciona al menu del administrador.	
		}else{
			if($user =='tactico'){
				session_start();
				$_SESSION['userid'] = $user;
				$_SESSION['nombre'] = "Aryam Najarro"; //se envia el nombre para mostrarlo el modulo y se vea personalizado
				header("Location: ../modulos/tactico/index_tactico.php"); //Direcciona al menu del administrador.	
			}else{	
				header("Location: ../index.php");	
				$error = "No se encuentra el usuario";
				echo $error;
			}
		
		}
		
	}
	
	
	
	
	
	
	
?>