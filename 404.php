<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Error 404</title>
	<style>
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: sans-serif;
	}
		body{
			background: #1a84d3;
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container-404{
			text-align: center;
			width: 100%;
			max-width: 650px;
			background: #fff;
			padding: 20px;
			box-shadow: 0px 1px 10px rgba(0,0,0,0.3);
			border-radius: 5px;
			line-height: 1.7;
			color: #434343;
		}
		.boton{
			display: inline-block;
			margin-top: 15px;
			text-decoration: none;
			background: #1a84d3;
			color: #fff;
			padding: 10px 15px;
			border-radius: 5px;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div class="container-404">
		<h1>Error 404</h1>
		<p>Esta pàgina no se encuentra disponible en estos momentos. Disculpa las molestias.</p>
		<hr>
		<p>Version: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></p>
		<p>Navegador: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
		<p>Contactar con: <?php echo $_SERVER['SERVER_ADMIN']; ?></p>

		<hr>
		<a href="index.html" class="boton">
			Pàgina Principal
		</a>
	</div>
</body>
</html>