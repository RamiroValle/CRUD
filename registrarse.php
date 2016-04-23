<?php
include 'conexion.php';

if(isset($_POST['btnreg']))
{
	$nombre = mysql_real_escape_string($_POST['name']);
	$email = mysql_real_escape_string($_POST['email']);
	$contra = mysql_real_escape_string($_POST['pass']);
	
	if(mysql_query("INSERT INTO usuarios(Nombre,Email,Contra) VALUES('$nombre','$email','$contra')"))
	{
	    ?>
	    <script>
	    alert("Registrado correctamente");
	    </script>
		<?php
		header("Location: tabla.php");
	}
	else
	{
	    ?>
	    <script>
	    alert("Error al registrarse. Email en uso.");

	    </script>
		<?php
	}
}
?>

<!DOCTYPE HTML>
<html!>

<head>
	<Title>CRUD</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/main.css">
<head>

<body>
	<div class="encab">
		<a href="index.php">CRUD</a>
	</div>

	<div>
		<h1 align="center">Bienvenido a la pagina de registro</h1>
	</div>

	<div class="registro" align="center">
		<form action="" method="post">
		<p><input type="text" name="name"  placeholder="Nombre" required ></p>
		<p><input type="text" name="email"  placeholder="Email" required ></p>
		<p><input type="password" name="pass" placeholder="Contraseña" required></p>
		<p/>
		<input type="submit" class="btnent" name="btnreg" value="Registrarse">
		</form>
	</div>

	<div class="pie">
		<p>&reg;Ramiro Valle - Tarea pasantias 2016</p>
	</div>

</body>