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

<?php
$codigo=$_GET['codigo'];
$cedula =$_GET['cedula'];
$nombre =$_GET['nombre'];
$ciudad =$_GET['ciudad'];
$edad =$_GET['edad'];
$num_dosis =$_GET['num_dosis'];
?>
<section class ="pinta">
<div>
<form action="sp_editar.php" method ="post">
    <table border ="1">
<tr>
    <td class="mono1">Ingresar Datos</td>
</tr>
<tr>
    <td class="mono1">Codigo</td>
    <td ><input type="text" name="codigo" id="" value="<?=$codigo?>"></td>
</tr>
<tr>
    <td class="mono1">Cedula</td>
    <td><input type="tex" name="cedula" id="" value="<?=$cedula?>"></td>
</tr>
<tr>
    <td class="mono1">Nombre</td>
    <td><input type="tex" name="nombre" id="" value="<?=$nombre?>"></td>
</tr>
<tr>
    <td class="mono1">Destino</td>
    <td><input type="text" name="ciudad" id="" value="<?=$ciudad?>"></td>
</tr>
<tr>
    <td class="mono1">Edad</td>
    <td><input type="text" name="edad" id="" value="<?=$edad?>"></td>
</tr>
<tr>
    <td class="mono1">Dias</td>
    <td><input type="text" name="num_dosis" id="" value="<?=$num_dosis?>"></td>
</tr>
<tr>
    <td><input type="submit" value="Actualizar"></td>
    <td><a href="index.php">Cancelar</a></td>
</tr>
    </table>

</form>
</section>
</div>    
</body>
</html>