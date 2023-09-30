<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define las variables
    $destinatario = 'josue.c1095@gmail.com';
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Crea el mensaje de correo electrónico
    $contenido = 'Nombre: ' . $nombre . "\r\n";
    $contenido .= 'Email: ' . $email . "\r\n";
    $contenido .= 'Teléfono: ' . $telefono . "\r\n";
    $contenido .= 'Asunto: ' . $asunto . "\r\n";
    $contenido .= 'Mensaje: ' . $mensaje;

   
     // Formateo el mensaje a UTF-8 para los campos con tildes
     $headers = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
    
    if (mail($destinatario, $asunto, $contenido, $headers)) {
        // Redirige al usuario después de enviar el formulario (puedes personalizar la URL de redirección)
        header('Location: enviado.html');
        exit;
    } else {
        // Captura el error
        $error = error_get_last();
        echo "Error en el envío de correo: " . $error['message'];
    }
}

?>