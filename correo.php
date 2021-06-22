<?php

$destinatario = 'sevaelcaiman467@gmail.com';
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$header = "Este es un mail de prueba. El primero ";

$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);

echo " <script>alert ('correo enviado exitosamente ')</script>";
echo " <script> setTimeout(\"location.href='index.html'\",100</script>";
?>