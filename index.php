 <?php
include 'conexion.php';

if(isset($_POST['btnent']))
 {
 	$nombre = mysql_real_escape_string($_POST['name']);
	$contra = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM registros WHERE Nombre='$nombre'");
	$row=mysql_fetch_array($res);

	if($row['Contra']==$contra)
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: tabla.php");
	}
	else
	{
	    ?>
	    <script>
	    alert("Usuario o contraseña incorrectos");
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
		<a href=index.php>CRUD</a>
	</div>

	<div>
		<h1 align="center">Bienvenido a la pagina principal</h1>
	</div>


	<div class="login" align="center">
		<h3>Entrar para ver el CRUD: </h3>
		<form action="" method="post" align="">
		<p><input type="text" name="name"  placeholder="Nombre" required /></p>
		<p><input type="password" name="pass" placeholder="Contraseña" required/></p>
		<p/>
		<input type="submit" class="btnent" name="btnent" value="Entrar">
		</form>
	</div>

	<div align="center">
		<a class="abtn" href="registrarse.php">O podes registrarte</a>
	</div>

	<div class="pie">
		<p>&reg;Ramiro Valle - Tarea pasantias 2016</p>
	</div>

</body>



