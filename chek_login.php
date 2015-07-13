<?php

session_start();

	include("/db/db.php");

	$email=	$_POST['email'];
	$pass = $_POST['password'];

	$keys = loginQuery($email,$pass);
	echo $keys['result'];

	if ($keys['result']==="true"){

		$_SESSION['nombre']= $keys['nombre'];
		$_SESSION['id']= $keys['id'];
		$_SESSION['correo']= $keys['correo'];
		$_SESSION['usuario']= $keys['usuario'];
		if($keys['puesto']===1){
		header("Location:RH/dash.php");
		}
		else{header("Location:PRO/dash.php");}
	}
	else { echo "Erro en su usuaro o contraeña"; header('refresh 5; url=login.html'); }





?>