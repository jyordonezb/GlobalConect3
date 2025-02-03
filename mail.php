<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Asegúrate de incluir el autoload de Composer si usaste Composer
require 'libs/vendor/autoload.php';

// Verifica si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibir los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);
    $comentarios = htmlspecialchars(trim($_POST['comentarios']));

    // Validación básica
    if (empty($nombre) || empty($correo) || empty($comentarios)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "Por favor, ingresa un correo electrónico válido.";
        exit;
    }

    // Crear una instancia de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';        // Servidor SMTP de Hostinger
        $mail->SMTPAuth   = true;                        // Habilitar autenticación SMTP
        $mail->Username   = 'contactanos@global-conect.com';     // correo de Hostinger
        $mail->Password   = 'Globalcontactanos.25';             // Contraseña de  cuenta de correo
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Cifrado TLS
        $mail->Port       = 587;                         // Puerto SMTP para TLS

        // Remitente y destinatarios
        $mail->setFrom('contactanos@global-conect.com', 'global-conect.com');
        $mail->addAddress('globalconecthn@gmail.com');    // Destinatario

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = 'Nuevo mensaje de contacto';
        $mail->Body    = "<h4>Nombre de Contácto:</h4>$nombre<br><h4>Correo de Contácto:</h4>$correo<br><h4>Comentarios:</h4><br>$comentarios";

        // Enviar el correo
        if ($mail->send()) {
            echo '<h3 style="color: green;">¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto. </h3>';
        } else {
            echo '<h3 style="color: red;">Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</h3>';
        }
    } catch (Exception $e) {
        echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
    }
}
