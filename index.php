<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="stylesheet" href="color.css">
    <link rel="stylesheet" href="fondo2.css">
  
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
            <li><a class="active" href="index1.php">Inicio</a></li>
            <li><a href="nuevo.php">Nuevo</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <section></section>

    <section class="inicio">
    <div>
<form action="buscar.php" method ="post" class="jk">
 <input type="text" name="buscar" id="">
  <input class="hu" type="submit" value="Buscar">
</form>
    </div>

    <div>
        
<table border = "1">
<tr>
<td>Codigo</td>
<td>Cedula</td>
<td>Nombre</td>
<td>Destino</td>
<td>Correo</td>
<td>Dias</td>
<td>Opciones</td>
</tr>
</section>
<?php
$cnx = mysqli_connect('localhost','prueba','1234','viaje');
$sql = "Select codigo,cedula,nombre,destino,correo,dias From viajes_n order by codigo desc";
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
destino=<?php echo $mostrar ['3'] ?> &
correo=<?php echo $mostrar ['4'] ?> &
dias=<?php echo $mostrar ['5'] ?> 
">Editar</a>
<a href="eliminar.php? codigo=<?php echo $mostrar ['0']?>  ">Eliminar</a>

</td>



</tr>

<?php
}
?>
</table>
</section>

    </div>
</body>
</html>