<?php

 $serverName = "EDWIN-PC\SQLEXPRESS"; //serverName\instanceName
 $connectionInfo = array( "Database"=>"ABD_GMODELO", "UID"=>"abdupiicsa", "PWD"=>"base");//Datos de inicio



$user=	$_POST['email'];
	$psw = $_POST['password'];
echo $user;
echo $psw;

	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$query = "Select TOP 1 * from usuarios 
	WHERE usuario='$user' OR correo='$user' AND contrasena='$psw'";
echo $query;
	$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt = sqlsrv_query( $conn, $query , $params, $options );
	echo $stmt;
	$row_count = sqlsrv_num_rows( $stmt );
	echo $row_count;
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
echo $row['correo'];
	if ($row_count === 1 ){
		$keys = array('result' => "true" , 'id' => $row['id'],
			'nombre' => $row['nombre'],
			'correo' => $row['correo'],
			'usuario' => $row['usuario'],
			'pass' => $row['contrasena']
			);
		echo "estoy aqui";
	} 
	if( $stmt === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

	if( $row_count === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}


if( $row === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}


if( $conn === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}


sqlsrv_close($conn);










?>