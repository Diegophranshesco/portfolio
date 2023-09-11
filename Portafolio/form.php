<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "phrandiego7@gmail.com";
    $subject ="Nuevo mensaje de contacto desde mi portafolio";

    $messg = "Name:" . $name . "\n";
    $messg .= "Email:" . $email . "\n";
    $messg .= "Message:\n" . $message;
    $messg .= "Enviado" . date('d/m/Y', time()); 

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To:" . $email ."\r\n";

    mail($to, $subject, $messg, $headers);

    header('Location:exito.html');

    exit;
}

?>