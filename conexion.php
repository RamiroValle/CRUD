<?php
session_start();

if(isset($_SESSION['user'])!="")
{
	header("Location: tabla.php");
}

$cnx = mysql_connect('localhost', 'root');

 if( ! $cnx)
	{
		die("Conexion fallida, intente denuevo mas tarde, puede que el servicio no este disponible. ");
	}

$basedatos = mysql_select_db("registros", $cnx);
if (!$basedatos) 
{
    die ('No se pudo conectar, intente denuevo');
}

?>