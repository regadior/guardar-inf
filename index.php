
	</html>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Register</title>
		<script defer src="./js/login.js"></script>
		<link rel="stylesheet" href="./style/login.css">


	</head>
	<body>
		<!-- CONTENIDO DONDE SE SITUA EL LOGIN -->
		<div class="total">
			<!-- LOGIN EN SI -->
			<div class="log-container">
				<!-- BOTONES DE ARRIVA -->
				<div class="botones-container">
					<div id="boton-absoluto"></div> <!--COLOR QUE DICE DONDE ESTAS -->
					<button type="button" class="botones" onclick="login()">iniciar sesión</button>
					<button type="button" class="botones" onclick="register()">registrarse</button>
				</div>
				<!-- CONTENIDO LOGIN -->
				<form id="login" class="login-register" method="post" action="./php/usuario/processLogin.php">
					<input type="text" class="input-texto" placeholder="Nombre Usuario / E-mail" required>
					<input type="password" class="input-texto" placeholder="Introduce Contraseña" autocomplete="new-password" required>
					<input type="checkbox" class="check-box"><span>Recordar Contraseña</span>
					<button type="submit" class="submit-boton">INICIAR SESIÓN</button>
				</form>
				<!-- CONTENIDO REGISTER -->
				<form id="register" class="login-register" method="post" action="./php/usuario/processRegister.php">
					<input type="text" class="input-texto" name="username" placeholder="Nombre Usuario" required>
					<input type="email" class="input-texto" name="email" placeholder="Introduce E-mail" required>
					<input type="password" class="input-texto" name="pass1" placeholder="Introduce Contraseña" autocomplete="new-password" required>
					<input type="password" class="input-texto" name="pass2" placeholder="Confirma Contraseña" required>
					<!-- <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span> -->
					<button type="submit" class="submit-boton" name="register">Register</button>
				</form>
			</div>
		</div>
	</body>
	</html>