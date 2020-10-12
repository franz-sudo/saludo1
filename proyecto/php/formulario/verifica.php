<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilo.css">
	<title>Verificación</title>
</head>
<body>
	<?php
		$nom=$_REQUEST['nombre'];
		$ape=$_REQUEST['apel'];
		$car=$_REQUEST['ci'];
		$usuario=$_REQUEST['usuario'];
		$contra=$_REQUEST['clave'];
		$fec=$_REQUEST['fecha'];
		$cor=$_REQUEST['correo'];
		$tel=$_REQUEST['tel'];
		$pago=$_REQUEST['pag'];
		$com=$_REQUEST['mensaje'];
		

		$conexion=mysqli_connect("localhost","root","","proyecto") or die("Problemas en la conexion");
		mysqli_query($conexion,"insert into registro(nombre, apellido, carnet, usuario, clave, fecha_nacimiento, correo, telefono, modo_pago, comentario) values('".$nom."','".$ape."','".$car."','".$usuario."','".$contra."','".$fec."','".$cor."','".$tel."','".$pago."','".$com."')") or die("problemas al insertar sus datos".mysqli_error($conexion));

		echo "Sus datos se insertaron correctamente";

		
	?>
</body>
</html>