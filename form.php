<7php

$nombre = $_POST[' name' ];
$mail = $_POST[' mail' ];
$mensaje = $_POST[' textarea' ];

// como me va a llegar el cuerpo del mail a mi

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es:" .$mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el  " . date('d/m/Y' , time());

$para = 'josue.c1095@gmail.com' ;
$asunto = 'Este mail fue enviado desde el sitio web'


// funcion mail
// a quien le mando el mail

mail($para, $asunto, utf8_decode($mensaje), $header);


// redireccion al haber enviado el form

header('Location:exito.html');
?>