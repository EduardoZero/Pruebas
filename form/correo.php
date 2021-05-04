<?php

    $destinatario = 'mix19942321@gmail.com';  //correo al q se enviara el formulario

    $nombre = $_POST['fullnombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $header = "enviado desde la pagina de Conecta";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>Alert('correo enviado')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>