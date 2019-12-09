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

	<section>
		<div class=contacto1>
		<div class="contactolel">
			<h1>Llene el formulario para 	contactarnos!</h1>

			<form action="procesador_formulario.php" method="POST" accept-charset="utf-8" class="formulario">
			<p> 
				<label> Nombre </label>
				<input type="text" id="nombre" name="nombre" required>
			</p>
			<p> 
				<label> Email  </label>
				<input type="text" id="email" name="email" required>
			</p>
			<p> 
				<label> Teléfono </label>
				<input type="text" id="telefono" name="telefono" required>
			</p>
			<p>
				<label> Comentarios </label>
				<textarea id="comentario" id="comentario" name="comentario" required></textarea>
			</p>
			<p>
				<input type="submit" value="Enviar">
			</p>
			</form>
		</div>
		<?php 
		if (isset($_GET['envio']) && $_GET['envio']=='ok'){ ?>
			
			<div class="msg"> El mensaje se envio correctamente </div>
		
		<?php } ?>

			
		</div>
		<div class="contacto2">
			<div class="contactolol">
				
		
			<h4>Maneras mas rápidas de contacto!</h4>
			<ul>
				<li>Instagram: "Instagram.com/Analiajoyas.com.ar                 <a href="https://www.instagram.com/analia.joyas/" target="_blank" class="icon-instagram"></a></li>
				<li>Facebook: "Facebook.com/Analiajoyas   <a href="https://www.facebook.com/analia.farina.967" target="_blank" class="icon-facebook2"></a></li>
				<li>Whatsapp: +5469810738   <a href="https://wa.me/+5469810738" target="_blank" class="icon-whatsapp"></a></li>
				<li> Mails: <a class="icon-inbox"></a>
					<ul>
						<li>Consultas: info@analiajoyas.com </li>
						<li>Pedidos: pedidos@analiajoyas.com</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	</section>


	<?php include('inc/footer.php')?>
	
	<script>
 		 AOS.init();
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/validation/jquery.validate.js"></script>
	<script src="js/validation/messages_es_AR.js"></script>
	<script src="js/contacto.js"></script>
</body>
</html>



<!-- <section class="holder" style="margin-top: 2em;">

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
				<li> Email: info@analiajoyas.com.ar</li>
				<li> Facebook: facebook/Analiajoyas</li>
				<li> Twitter: @Analiajoyas</li>
			</ul>
		</div>

	</section> -->