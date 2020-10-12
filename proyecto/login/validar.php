<?php
	$usuario=$_POST['usuario'];
	$clave=$_POST['clave'];

	
	$conexion=mysqli_connect("localhost","root","","proyecto");
	$conexion->set_charset("utf8");
	$consulta="SELECT * FROM registro WHERE usuario='$usuario' and clave='$clave'";

	
	$resultado=mysqli_query($conexion, $consulta);

	$filas=mysqli_num_rows($resultado);
	if ($filas>0) {
		header("location:bienvenidos.html");
	}else{
		echo "Error en la autentificación";
	}

	mysqli_free_result($resultado);
	mysql_close($conexion);
?>

	