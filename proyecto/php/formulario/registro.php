<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="estilos/estilo.css">
	
	<title>Formulario3</title>
</head>
<body>
	<div id="contenedor">
		<div id="cont_form">
			<form action="verifica.php" method="post">
				<h1>Registro</h1>
					
					<div class="grupo">
						<label>Nombres :</label>
						<input type="text" name="nombre"><br>
					</div>
								
					<div class="grupo">
						<label>Apellidos :</label>
						<input type="text" name="apel"><br>
					</div>

					
													
					<div class="grupo">
						<label>C.I.:</label>
						<input type="text" name="ci"><br>
					</div>

					<div class="grupo">
						<label>Usuario :</label>
						<input type="text" name="usuario"><br>
					</div>

					<div class="grupo">
						<label>Contraseña :</label>
						<input type="password" name="clave"><br>
					</div>

					<div class="grupo">
						<label> Fecha de Nacimento :</label>
						<input type="date" name="fecha">
					</div>
					
					<div class="grupo">
						<label>e-mail :</label>
						<input type="text" name="correo">
					</div>
					
					<div class="grupo">
						<label>Teléfono/Celular:</label>
						<input type="text" name="tel">	
					</div>
					
					<div class="grupo">
						<label>Modo de Pago</label>
						<select name="pag">
							<option value="">----</option>
							<option value="Tarjeta">Tarjeta</option>
							<option value="Contado">Contado</option>
							<option value="Deposito">Deposito</option>
							<option value="Otros">Otros..</option>
						</select>
					</div>
					
					<div class="grupo">
						<label>Comentario :</label>
						<textarea name="mensaje" id="" cols="22" rows="5"></textarea>
					</div> <br>

					<div class="grupo">
						<input type="checkbox" name="acep"> Acepto los terminos y condiciones
					</div> <br>
					
					<div class="grupo">
						<p>Los datos personales facilitadas solo son de uso administrativo y es preciso para tramitar su <br>contestación y aceptación </p>
					</div> <br>
					
					<div class="grupo">
						<input type="submit" name="enviar" value="Registrarse">
					</div> <br>

			</form>
		</div>
		<div id="imagen">
			<div class="imag">
				<img src="img/1m.jpg" alt="">
			</div>
			<div class="imag">
				<img src="img/2m.jpg" alt="">
			</div>
			<div class="imag">
				<img src="img/3m.jpg" alt="">
			</div>
			
		</div>
	</div>
</body>
</html>