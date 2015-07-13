<?php
include("../db/db.php");

 $id=$_POST['id'];


$nombre =$_POST['nombre'];
$edad= $_POST['edad'];
$telefono= $_POST['telefono'];
$rfc= $_POST['rfc'];
$curp= $_POST['curp'];
    
    

    $query = "UPDATE aspirante  SET nombre= '$nombre', edad='$edad', telefono='$telefono', rfc='$rfc', 
     curp='$curp' where id_aspirante='$id'";
    $flag=true;
    $stmt=executeQuery($query);
   if ($stmt){ 
    header("Location:view_applicant.php?confirmation=".$flag);
}

?>