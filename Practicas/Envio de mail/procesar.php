<!--envio form - php se procesa en el servidor, si o si el archivo tiene que ser .php-->

<!--\r\n esto es un salto de línea -->

<?php  
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];

$mansaje = "<h1>".$nombre."</h1>";
$mansaje .= "<p>El usuario es de sexo:".$sexo."</p>";
$mansaje .= "<hr />";
$mensaje .= $_POST['mensaje'];

$para = 'mail@ejemplo.com';
$asunto = 'Mensaje de la web';

$headers = "Mime-version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n"
$headers .= "To: $para";


mail( $para, $asunto, $mensaje, $headers);
header("Location: gracias.html");
?>

