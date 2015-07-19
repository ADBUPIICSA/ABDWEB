<?php
include("../db/db.php"); 
if(!isset($_POST['nombre'])){

}
else{
$id=$_POST['id'];
$nombre =$_POST['nombre'];
$ap= $_POST['ap'];
$am= $_POST['am'];
$tel= $_POST['tel'];
$dir= $_POST['dir'];
$correo= $_POST['email'];    
$salario= $_POST['salario'];    
$puesto= $_POST['puesto'];  
$ingreso= $_POST['ingreso'];  
    

    $query1 = "UPDATE empleados SET nombre='$nombre',aPaterno='$ap',aMaterno='$am',
    telefono='$tel',direccion='$dir',email='$correo',salario='$salario', fecha_ingreso='$ingreso', id_puesto='$puesto'";

    $stmt1=executeQuery( $query1);
    if($stmt1){

    	header("location:view_employee.php");

    }
    if( $stmt1 === false ) {
	     die( print_r( sqlsrv_errors(), true));
	}

}
?>