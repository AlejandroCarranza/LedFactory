<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>LedFactory</title>
	<link rel="shortcut icon" href="imagenes/logo_led.ico">
	<link rel="stylesheet" href="cssindex/csscontacto.css" type="text/css">
	<link rel="stylesheet" href="cssindex/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Carme" type="text/css">
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="logo">
				<img src="imagenes/logo.png" alt="Logo-Led-Factory" id="logo" width="230" height="110">
			</div>
			<div class="sociales">
				<span class="FB">
					<a href="https://www.facebook.com/pages/Led-Factory/650053065054257?fref=ts"  target="_blank" class="icon-facebook3"></a>
				</span>

				<span class="GPlus">
					<a href="https://plus.google.com/u/0/104666933886187082189/posts" target="_blank" class="icon-googleplus2"></a>
				</span>
			</div>
			<div class="visita">
				<strong>Siguenos en: </strong>
			</div>
			<nav>
            	<ul id="menu">
	            	<li>
	            		<a href="index.html" class="transicion">INICIO</a>
	            	</li>

	            	<li>
	            		<a href="galeria.html" class="transicion">GALERIA</a>
	            	</li>

	            	<li>
	            		<a href="noticias.html" class="transicion">NOVEDADES</a>
	            	</li>

	            	<li class="li_submenu">
	            		<a href="javascript:void(0);">PRODUCTOS</a>
	                	<!--<div class="sub">
		                    <ul class="ul_submenu transicion">

		                        <li>
		                        	<a href="#" class="transicion submnu">Comercial</a>
		                        </li>

		                        <li>
		                        	<a href="#" class="transicion submnu">Residencial</a>
		                        </li>
		                        <li>
		                        	<a href="#" class="transicion submnu">Industrial</a>
		                        </li>
		                        <li>
		                        	<a href="#" class="transicion submnu">Publico</a>
		                        </li>

		                    </ul>
	                    </div>-->
	                </li>

	            	<li>
	            		<a href="promociones.html" class="transicion">PROMOCIONES</a>
	            	</li>
	            	
	            	<li>
	            		<a href="documentacion.html" class="transicion">TIPS Y CONCEPTOS</a>
	            	</li>
	            	
	            	<li>
	            		<a href="contacto.php" class="transicion">CONTACTO</a>
	            	</li>

            	</ul> 
			</nav>
		</header>
		<section class="contenido">
			<div class="ledfac">
<?php
if (!isset($_POST['email'])) {
?>
  <form class="form" action="<?=$_SERVER['PHP_SELF']?>" method="post">
  	<p class="mensaje">Dejanos tu información de contacto al igual que la información que esperas recibir de nuestra parte.</p>
    <div class="contlbl"><label class="etiqueta">Nombre:</label></div>
    <input name="nombre" class="informacion" type="text" size="70" placeholder="Led Factory"/> <br>
    <div class="contlbl"><label class="etiqueta">Teléfono:</label></div>
    <input name="telefono" class="informacion" type="text" placeholder="(618) 814 15 17" /> <br>
    <div class="contlbl"><label class="etiqueta">Email:</label></div>
    <input name="email" class="informacion" type="text" placeholder="algo@correo.com.mx"/><br>
    <div class="contlbl"><label class="etiqueta">Mensaje:</label></div>
    <textarea name="mensaje" rows="6" cols="50" placeholder="Escriba su mensaje..."></textarea><br>  
    <input class="botones" type="reset" value="Borrar" />
    <input class="botones" type="submit" value="Enviar" />
  </form>
<?php
}else{
  $mensaje="Mensaje del formulario de contacto de nnatali.com";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "ventas@ledfactory.com.mx";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p class="verif"><strong class="etiqueta" >Mensaje enviado, espere nuestra respuesta</strong></p>
<?php
}
?>
			</div>
		</section>
		<footer>
			<div class="wrap">
				<div class="info2">
					<p class="">
						Direccion: Av. 20 de Noviembre 1040 Ote Col.Guillermina, Durango.</br>
						Email: ventas@ledfactory.com.mx</br>
						Telefono: (618) 810 14 09</br>
						Lunes a Viernes: 10:00 a.m. a 8:00 p.m.</br>
						Sabados: 10:00 a.m. a 4:00 p.m.
					</p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>