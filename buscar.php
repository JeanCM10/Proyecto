<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <title>Document</title>
</head>
<body>
<section class ="form3">  
<?php
$buscar = $_POST['buscar'];
?>
    <div>
<form action="" method ="post">
 <input type="text" name="buscar" id="" value="<?=$buscar?>">
  <input type="submit" value="Buscar">
  <a href="nuevo.php">Nuevo</a> 
</form>
    </div>

    <div>
         
<table border = "1">
<tr>
<td>Codigo</td>
<td >Cedula</td>
<td>Nombre</td>
<td>Ciudad</td>
<td>Edad</td>
<td>Num_dosis</td>
<td>Opciones</td>
  
    <td><a href="index.php">Regresar</a></td>

</tr>
</section>
<?php
$cnx = mysqli_connect('localhost','prueba','1234','vacunas');
$sql = "SELECT codigo,cedula,nombre,ciudad,edad,num_dosis From datos_vacunados where codigo like '$buscar' '%' or cedula like '$buscar' '%' or nombre like '$buscar' '%' or cedula like '$buscar' '%' order by codigo desc" ;
$rta = mysqli_query($cnx,$sql);
while ($mostrar = mysqli_fetch_row($rta)){
?>
<tr>
<td><?php echo $mostrar ['0']?></td>
<td><?php echo $mostrar ['1']?></td>
<td><?php echo $mostrar ['2']?></td>
<td><?php echo $mostrar ['3']?></td>
<td><?php echo $mostrar ['4']?></td>
<td><?php echo $mostrar ['5']?></td>
<td>
<a href="editar.php?
codigo=<?php echo $mostrar ['0'] ?> &
cedula=<?php echo $mostrar ['1'] ?> &
nombre=<?php echo $mostrar ['2'] ?> &
ciudad=<?php echo $mostrar ['3'] ?> &
edad=<?php echo $mostrar ['4'] ?> &
num_dosis=<?php echo $mostrar ['5'] ?> 
">Editar</a>
<a href="eliminar.php? codigo=<?php echo $mostrar ['0']?>  ">Eliminar</a>

</td>

</tr>
<?php
}
?>
</table>
    </div>

</body>
</html>