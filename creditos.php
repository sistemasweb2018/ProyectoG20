<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
      		<span class="right"><input type="button" id="logout" name="logout" value="Logout"></span>
      	<?php 
include "ParametrosBD.php";

		$email= $_GET['mail'];
 $conexion=mysqli_connect($servidor,$usuario,$password,$basededatos);
$sql= "SELECT imagen,nombre FROM usuarios WHERE email='$email'";
$resultado= mysqli_query($conexion,$sql);

while($imprimir=mysqli_fetch_array($resultado)){

echo $imprimir['nombre'];
?> &nbsp;&nbsp;

<?php
echo $imprimir['imagen'];
}
?>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
   
	<nav class='main' id='n1' role='navigation'>
	
<?php
				
				echo"
				<span><a href='layout.php?mail=$email'>Inicio</a></spam>";
				?>
			<?php
				
				echo"
				<span><a href='preguntas.php?mail=$email'>Insertar Pregunta</a></spam>";
				?>
				<?php
				
				echo"
				<span><a href='VerPreguntasConFoto.php?mail=$email'>Ver Preguntas</a></spam>";
				?>
<?php
				
				echo"
				<span><a href='creditos.php?mail=$email'>Creditos</a></spam>";
				?>
			
	</nav>
    <section class="main" id="s1">
    
    <h3> Creditos</h3>
	<div>
		Los autores de esta página son Asier Blázquez y Issur Sánchez, estudiantes de Grado en Ingenieria Informatica en la Facultad de San Sebastian UPV/EHU. <br><br>		

					<img src="img/Usuario-Icono.jpg" alt="Asier Blázquez" width="200">
					<img src="img/Usuario-Icono.jpg" alt="Issur Sanchez" width="200">



	</div>



	  </section>
	<footer class='main' id='f1'>
		Licencia: <a href="https://creativecommons.org/"><img src="img/by-nc-sa.png" height="56" ></a><br>
		<a href=''>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
