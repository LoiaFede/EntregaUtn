<?php include('conexion.php'); ?> <!-- //incluyo la conexión -->
<?php $resultado=mysqli_query($conexion, "SELECT idBolsa, tamanio, color, precio, imagen FROM bolsitas ORDER BY idBolsa LIMIT 16") ?>


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
	<?php while($bolsa=mysqli_fetch_array($resultado) ) { ?>
	<div class="Contenedor" data-aos="flip-up"  data-aos-duration="1500">
		<img src="<?php echo $bolsa['imagen'] ?>" alt="" >
		<div class="textos">
			<div>Bolsita de organza <?php echo $bolsa['tamanio'] ?></div>
			<div><?php echo $bolsa['color'] ?></div>
			<div>$<?php echo $bolsa['precio'] ?> c/u</div>
		</div>
	</div>
	<?php } ?>
	
	<?php include('inc/footer.php')?>
	
	<script>
 		 AOS.init();
	</script>
</body>
</html>