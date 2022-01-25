<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="fondo3.css">
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
<section class ="form">
<div>
<form action="insertar.php" method ="post">
    <table border ="1" >
<tr >

    <td class="mono">Ingresar Datos</td>
</tr>
<tr >
    <td class="mono">Codigo</td>
    <td><input type="text" name="codigo" id=""></td>
</tr>
<tr>
    <td class="mono">Cedula</td>
    <td><input type="tex" name="cedula" id=""></td>
</tr>
<tr>
    <td class="mono">Nombre</td>
    <td><input type="tex" name="nombre" id=""></td>
</tr>
<tr>
    <td class="mono">Destino</td>
    <td><input type="text" name="destino" id=""></td>
</tr>
<tr>
    <td class="mono">Correo</td>
    <td><input type="text" name="correo" id=""></td>
</tr>
<tr>
    <td class="mono">Dias</td>
    <td><input type="text" name="dias" id=""></td>
</tr>
<tr>
    <td><input class="botons" type="submit" value="Guardar"></td>
    <td><a href="index.php">Regresar</a></td>
</tr>
    </table>

</form>
</section>
</div>    
</body>
</html>