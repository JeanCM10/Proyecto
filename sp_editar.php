<?php
$codigo=$_POST['codigo'];
$cedula =$_POST['cedula'];
$nombre =$_POST['nombre'];
$ciudad =$_POST['ciudad'];
$edad =$_POST['edad'];
$num_dosis =$_POST['num_dosis'];


$cnx = mysqli_connect('localhost','prueba','1234','vacunas');
$sql = "UPDATE datos_vacunados set cedula='$cedula',nombre='$nombre',ciudad='$ciudad',edad='$edad',num_dosis='$num_dosis' where codigo like $codigo";
$rta = mysqli_query($cnx,$sql);
if (!$rta){
echo "no se actualizo";

}
else{
    header("location: index.php");
}
?>