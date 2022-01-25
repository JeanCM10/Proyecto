<?php
$codigo=$_GET['codigo'];

$cnx = mysqli_connect('localhost','prueba','1234','viaje');
$sql = "DELETE FROM viajes_n  where codigo like $codigo";
$rta = mysqli_query($cnx,$sql);
if (!$rta){
echo "no se elimino";

}
else{
    header("location: index.php");
}
?>