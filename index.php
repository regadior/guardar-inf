<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/log.css">
    <script defer type="text/javascript" src="./js/login.js"></script>
    <title>INICIO</title>
</head>

<body>

<div class="login" id="container">
	<div class="contenedor-form sign-up-container">
		<form action="../php/processRegister.php" method="post">
			<h1>Crea tu cuenta</h1>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>REGISTRARSE</button>
		</form>
	</div>

	<div class="contenedor-form  sign-in-container">
		<form action="#">
			<h1>Iniciar Sesión</h1>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Contraseña" name="password"/>
            <input type="password" placeholder="Contraseña" name="password2"/>
			<a href="#">Has olvidado tu contraseña?</a>
			<button>Iniciar Sesión</button>
		</form>
	</div>

    
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenido de nuevo!</h1>
				<p>Para estar conectado inicia sesión, con tus datos</p>
				<button class="button2" id="signIn">iniciar sesion</button>
			</div>

            
			<div class="overlay-panel overlay-right">
				<h1>Hola, Buenas!</h1>
				<p>Introduce tus datos personales para iniciar sesion</p>
				<button class="button2" id="signUp">registrarse</button>
			</div>
		</div>
	</div>
</div>



</body>

</html>