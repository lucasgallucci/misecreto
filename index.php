
 <?php 
     
  // coge la librería recaptcha
require_once "recaptchalib.php";

// tu clave secreta
$secret = "6LdVLQoTAAAAAL4uPbMbB0UFbJMmuRJAKVO0kSaw";
 
// respuesta vacía
$response = null;
 
// comprueba la clave secreta
$reCaptcha = new ReCaptcha($secret);

// si se detecta la respuesta como enviada
if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

 
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
	<title>secreto</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body>

	<nav></nav>
	<section class="contar">
	<?php
      if ($response != null && $response->success) {
        echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
      } else {
      	
    ?>
<?php if($_POST['envio']==true){
	echo "poné el captcha";
	$_POST['envio']==false;
}
    
    ?>
		<form method="POST"  action="guardar_secreto.php">
			<h1>Este es el título</h1>
			<textarea name="secreto" placerholder="ingresa tu secreto"></textarea>
			<input type="text" name="nombre" required placeholder="nombre">
			<span>,</span>
			<input type="number" name="edad" required placerholder="edad">
			<input type="email" name="email" required placerholder="email">
			<div class="g-recaptcha" data-sitekey="6LdVLQoTAAAAAEONRyzG4C8fn1FeBaZ9RcD_Yg5v" data-callback="enableBtn"></div>
			<input type="submit" value="enviar" id="enviar" class="btn">	

		</form>
		<?php } ?>
	</section>

</body>
<script type="text/javascript">
document.getElementById("enviar").disabled = true;
function enableBtn(){
	document.getElementById("enviar").disabled = false;
}

</script>
</html>