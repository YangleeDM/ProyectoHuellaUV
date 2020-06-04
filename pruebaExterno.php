<?php


include("correoExterno.php");

$destinatario = $correoExterno;
$asunto = "Confirmación UV";
$mensaje = "Para continuar con tu registro entra a: https://bit.ly/FormularioUV";


$header = "From: noreply.uv.mx" . "\r\n";
$header .= "Reply-To: noreply.uv.mx" . "\r\n";

@mail($destinatario, $asunto, $mensaje, $header);

?>