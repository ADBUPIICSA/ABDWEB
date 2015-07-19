<?php

 $serverName = "EDWIN-PC\SQLEXPRESS"; //serverName\instanceName
 $connectionInfo = array( "Database"=>"ABD_GMODELO", "UID"=>"abdupiicsa", "PWD"=>"base");//Datos de inicio






/*if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
} */


 function executeQuery($query){
global $serverName, $connectionInfo; 

	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$stmt = sqlsrv_query( $conn, $query);
		return $stmt;

sqlsrv_close($conn);
}



function executeSelect($query){
global $serverName, $connectionInfo; 

	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$stmt = sqlsrv_query( $conn, $query);
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
		return $row;
sqlsrv_close($conn);
}


 function loginQuery($user,$psw){
global $serverName, $connectionInfo; 

	$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$query = "Select TOP 1 * from usuario 
	WHERE usuario='$user' OR correo='$user' AND contrasena='$psw'";

	$params = array();
	$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
	$stmt = sqlsrv_query( $conn, $query , $params, $options );
	
	$row_count = sqlsrv_num_rows( $stmt );
	
	$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
	if ($row_count === 1 ){
		$keys = array('result' => "true" , 'id' => $row['id'],
			'nombre' => $row['nombre'],
			'correo' => $row['correo'],
			'usuario' => $row['usuario'],
			'pass' => $row['contrasena'],
			'puesto' => $row['puesto']
			);
		return  $keys;
	} 
	if( $stmt === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

sqlsrv_close($conn);

}








?>