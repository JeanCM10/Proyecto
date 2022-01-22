<?php
$codigo=$_GET['codigo'];

$cnx = mysqli_connect('localhost','prueba','1234','vacunas');
$sql = "DELETE FROM datos_vacunados  where codigo like $codigo";
$rta = mysqli_query($cnx,$sql);
if (!$rta){
echo "no se elimino";

}
else{
    header("location: index.php");
}
?>