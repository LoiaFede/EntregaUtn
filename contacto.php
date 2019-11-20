<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Analia Joyas</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Roboto+Mono&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>

	<?php include('inc/header.php')?>

<section class="holder" style="margin-top: 2em;">

		<div class="columna " style="text-align: center">
			<h2> Complete el sig. formulario</h2>
			<form action="" method="get" accept-charset="utf-8" class="formulario">
			<p> 
				<label> Nombre </label>
				<input type="text">
			</p>
			<p> 
				<label> Email  </label>
				<input type="text">
			</p>
			<p> 
				<label> Teléfono </label>
				<input type="text">
			</p>
			<p>
				<label> Comentarios </label>
				<textarea id="comentario"></textarea>
			</p>
			<p>
				<input type="submit" value="Enviar">
			</p>
			</form>
		</div>

		<div class="columna " style="text-align: center" >
			<h2>Otras vias de contacto</h2>
			<p> tambien se puede comunicar con nosotros usando los siguientes medios: </p>
			<ul style="list-style:none;">
				<li> Tel: 1234-5678</li>
				<li> Email: info@transportes.com</li>
				<li> Facebook: facebook/transportesx</li>
				<li> Twitter: @transportesx</li>
			</ul>
		</div>

	</section>

	<?php include('inc/footer.php')?>
	
	<script>
 		 AOS.init();
	</script>
</body>
</html>