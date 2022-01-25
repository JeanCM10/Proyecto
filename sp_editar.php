<?php
$codigo=$_POST['codigo'];
$cedula =$_POST['cedula'];
$nombre =$_POST['nombre'];
$destino =$_POST['destino'];
$correo =$_POST['correo'];
$dias =$_POST['dias'];


$cnx = mysqli_connect('localhost','prueba','1234','viaje');
$sql = "UPDATE viajes_n set cedula='$cedula',nombre='$nombre',destino='$destino',correo='$correo',dias='$dias' where codigo like $codigo";
$rta = mysqli_query($cnx,$sql);
if (!$rta){
echo "no se actualizo";

}
else{
    header("location: index.php");
}
?>