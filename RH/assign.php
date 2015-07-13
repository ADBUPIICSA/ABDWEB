<?php
 include("../db/db.php");
$id1= $_POST['idcapa'];
$id2=$_POST['idempl1'];

$sql="INSERT into capacita_empleado VALUES ('$id2',$id1)";

$st=executeQuery($sql);

echo "Guardado Exitoso";
?>
