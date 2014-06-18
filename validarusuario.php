<?php
    
    //conectar BD usarndo el archivo php para conectar
    include("conexion/conexion.php");  
    conectar_db();
     
    $usr = $_POST['userid'];
    $pw = $_POST['password'];
    //Obtengo la version encriptada del password (por el momento se desabilito)
    //$pw_enc = md5($pw);
     

    $sql = "SELECT * FROM ddsinfog_usuarios
           WHERE idusuario = '".$usr."'
           AND  password = '".$pw."' ";  
    
	/*luego de realizar el query se usa el metodo para llamarlo desde SQlserver usando la variable conn definida
	* en conexion.php (revisar la variable para comprobar)*/
	$result = sqlsrv_query($conn,$sql); 
    
	 
	
    $uid = "";
      
    //Si existe al menos una fila
    if($fila=sqlsrv_fetch_array($result) )
    {    
        //Obtener el Id del usuario en la BD        
        $uid = $fila['idusuario'];
		$nombre = $fila['nombre']; //Para visualizar el nombre del usuario en las pantallas
		$nivel = $fila['nivel']; //para direccionar el index el del nivel en el que esta :P
		//Iniciar una sesion de PHP
		
		if ($nivel == 1){
			$pagina= "modulos/estrategico/index_estrategico.php";
		}else {
			if ($nivel == 2){
				$pagina= "modulos/tactico/index_tactico.php";
			}else{
			     if($nivel == 3){
					$pagina= "modulos/administrador/index_admin.php";
				 }
			}
		}
		
		
        session_start();
        //Crear una variable para indicar que se ha autenticado
        $_SESSION['autenticado']    = 'SI';
        //Crear una variable para guardar el ID del usuario para tenerlo siempre disponible
        $_SESSION['uid']            = $uid;
		$_SESSION['nombre']         = $nombre;
		
        //CODIGO DE SESION
         
        //Crear un formulario para redireccionar al usuario y enviar oculto su Id si la conexion fue exitosa
?>
        <form name="formulario" method="post" action='<?php echo $pagina ?>' >
            <input type="hidden" name="idUsr" value='<?php echo $uid ?>' />
        </form>
<?php
    }
    else {
        //En caso de que no exista una fila... el usuario no existe 

?>

        <form name="formulario" method="post" action="index.php" >
            <input type="hidden" name="msg_error" value="1">
        </form>
<?php
    }
?>
                     
<script type="text/javascript"> 
    //Redireccionar con el formulario creado
    document.formulario.submit();
</script>
