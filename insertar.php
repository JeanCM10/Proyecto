<?php
$codigo=$_POST['codigo'];
$cedula =$_POST['cedula'];
$nombre =$_POST['nombre'];
$ciudad =$_POST['ciudad'];
$edad =$_POST['edad'];
$num_dosis =$_POST['num_dosis'];


$cnx = mysqli_connect('localhost','prueba','1234','vacunas');
$sql = "INSERT INTO datos_vacunados(codigo, cedula, nombre, ciudad, edad, num_dosis) values('$codigo', '$cedula', '$nombre', '$ciudad', '$edad', '$num_dosis')";
$rta = mysqli_query($cnx,$sql);
if (!$rta){
echo "no se inserto";

}
else{
    header("location: index.php");
}
?>