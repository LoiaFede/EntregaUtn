<?php include('conexion.php') ?>

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
	
	<section class="Destacados">
	<h2>Destacados</h2>
	<div class="Destacado" data-aos="fade-left" data-aos-duration="1500">
		<a href="accesorio.php"> <img src="img/Accesorios/Anillo2.png" alt="" > </a>
	</div>
		
	<div class="Destacado" data-aos="fade-left" data-aos-duration="1500">
		<a href=""> <img src="img/Bolsitas/Bolsita2.png" alt=""> </a>
	</div>

	<div class="Destacado" data-aos="fade-left" data-aos-duration="1500">
		<a href=""> <img src="img/Accesorios/Relojes4.png" alt=""> </a>
	</div>
	
	</section>

	<section class="Destacados" data-aos="fade-up">
		<h2>Bolsas más vendidas </h2>
		<div class="galeria" >
			<div class="foto">
				<a href=""> <img src="img/Bolsitas/Bolsita13.png" alt="" > </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Bolsitas/Bolsita9.png" alt="" > </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Bolsitas/Bolsita11.png" alt="" > </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Bolsitas/Bolsita2.png" alt="" > </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Bolsitas/Bolsita5.png" alt="" > </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Bolsitas/Bolsita7.png" alt="" > </a>
			</div>
		</div>
	</section>
	
	<section class="Destacados" data-aos="fade-up" >
		<h2>Collares más vendidos </h2>
		<div class="galeria" style="margin-left: 17em;">
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Collar4.png"  alt="foto01"> </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Collar3.png" alt="foto02"> </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Collar2.png" alt="foto03"> </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Collar6.png" alt="foto03"> </a>
			</div>
			</div>
		</div>
	</section>

	

	<section class="Destacados fondo" data-aos="fade-up">
		<h2>Anillos más vendidos</h2>
		<div class="galeria" style="margin-left: 17em;">
			<div class="foto" >
				<a href=""> <img src="img/Accesorios/Anillo2.png"  alt="foto01"> </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Anillo4.png" alt="foto02"> </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Anillo6.png" alt="foto03"> </a>
			</div>
			<div class="foto">
				<a href=""> <img src="img/Accesorios/Anillo3.png" alt="foto03"> </a>
			</div>
		</div>
	</section>

	<?php include('inc/footer.php')?>

	<script>
 		 AOS.init();
	</script>
	
	
</body>
</html>