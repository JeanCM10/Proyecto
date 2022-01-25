<?php
$codigo=$_POST['codigo'];
$cedula =$_POST['cedula'];
$nombre =$_POST['nombre'];
$destino =$_POST['destino'];
$correo =$_POST['correo'];
$dias =$_POST['dias'];


$cnx = mysqli_connect('localhost','prueba','1234','viaje');
$sql = "INSERT INTO viajes_n(codigo, cedula, nombre, destino, correo, dias) values('$codigo', '$cedula', '$nombre', '$destino', '$correo', '$dias')";
$rta = mysqli_query($cnx,$sql);
if (!$rta){
echo "no se inserto";

}
else{
    header("location: index.php");
}
?>