<?php
$conn = mysqli_connect('localhost','prueba','1234','vacunas');
if(!$conn){
echo 'nose conecto';

}

else {
echo 'se conecto correcto';

}
?>