<?php
include("../db/db.php");
if(!isset($curso =$_POST['nombre'])){

}
else{ $id=$_POST['id'];


$curso =$_POST['nombre'];
$tipo= $_POST['tipo'];
$comp= $_POST['comp'];
$duracion= $_POST['duracion'];
    
    

    $query = "UPDATE capacitaciones  SET nombre_cap= '$curso', tipo='$tipo', duracion='$duracion', 
    id_compensacion='$comp' where id_capacitacion='$id'";
    $flag=true;
    $stmt=executeQuery($query);
   if ($stmt){ 
    header("Location:view_course.php?confirmation=".$flag);
}

}

?>