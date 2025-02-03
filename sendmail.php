<?php
$to ='portaltecnologyhn@gmail.com';
$subject = 'Prueba';
$message = 'prueba de envio';
$headers = 'From: pruebasenvio@localhost.com\r\n';
if (mail($to, $subject, $message, $headers)){
echo " enviado correctamente";
} else{
echo "ERROR";
}

