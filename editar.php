<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="fondo.css">
    <title>Document</title>
</head>
<body>
<nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="logo.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="index.php">Inicio</a></li>
            <li><a href="nuevo.php">Nuevo</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <section></section>
<?php
$codigo=$_GET['codigo'];
$cedula =$_GET['cedula'];
$nombre =$_GET['nombre'];
$destino =$_GET['destino'];
$correo =$_GET['correo'];
$dias =$_GET['dias'];
?>
<section class ="pinta">
<div>
<form action="sp_editar.php" method ="post">
    <table border ="4">
<tr>
    <td class="mono1">Editar Datos</td>
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
    <td><input type="text" name="destino" id="" value="<?=$destino?>"></td>
</tr>
<tr>
    <td class="mono1">Correo</td>
    <td><input type="text" name="correo" id="" value="<?=$correo?>"></td>
</tr>
<tr>
    <td class="mono1">Dias</td>
    <td><input type="text" name="dias" id="" value="<?=$dias?>"></td>
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