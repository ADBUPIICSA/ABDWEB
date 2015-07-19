<?php
 include("../db/db.php");
$id1= $_POST['idcomp'];
$id2=$_POST['idempl1'];

$sql="proc_asignar_compensacion_empleado '$id2','$id1' ";

$st=executeQuery($sql);
if ($st){
echo "Guardado Exitoso";
}
else {
echo "hubo un problema";

}

?>
