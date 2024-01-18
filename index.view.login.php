<!DOCTYPE html>
<!-- Página que ve el usuario -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Board form</title>
	<style type="text/css">
		H1 {Text-align:center} /*H1 alineado al centro de la página*/
	</style>
		<link rel="stylesheet" href=estilos4.css> <!--  link a los estilos css de todas las webs-->
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> <!-- fuente de texto de google font -->
</head>
<body>
	<H1> INICIO DE SESIÓN</H1> <!-- Titulo de la web -->
	<div class="wrap"> 
		<!-- contenedor --> 
	<form action=" " name="formulario" method="post"> <!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->

<!-- Placeholder es lo que le aparece al usuario en la web, name es como se llama la variable que recogeremos con post y type el tipo de datos que introduce el usuario -->
        <!-- El email es tipo email -->
        <input type="email" placeholder="Email:" name="email" id="email">
		<br>
		<!-- El password es un tipo password -->
		<input type="password" placeholder="Contraseña:" name="password" id="pass">
		<br>
		<br>
		
		<input type="submit" name="submit" class="btn btn-primary" value="Send"> <!-- boton para enviar los datos -->
        <!--BOTON DE VOLVER A PAGUINA PRINCIPAL-->
        <input type="button" onclick="window.location='index.php'" class="Redirect" value="Registrarse"/>
	</form>
	<!-- Poner imagen en la web -->
	<!--<img src="logo.jpg" alt="logo" alt="Logo" />-->
    
    
	</div>


</body>