<?php session_start(); 
$id= $_POST['id'];

 include("../db/db.php");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);
    $query="delete from aspirante where id_aspirante ='$id'";
    $stmt = sqlsrv_query( $conn, $query);

    
if($stmt){

	echo "Borrado exitoso";
}else{

	if( $stmt === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

}



?>
