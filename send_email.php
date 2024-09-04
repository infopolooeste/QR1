<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $document = htmlspecialchars($_POST['document']);
    $fullName = htmlspecialchars($_POST['fullName']);

    $to = "jfialho@polooeste.com.uy"; // Reemplaza con tu dirección de correo
    $subject = "Aceptación de comprensión normas de seguridad integra";
    $message = "Formulario enviado:\n\nDocumento: $document\nNombre: $fullName";
    $headers = "From: jfialho@polooeste.com.uy"; // Reemplaza con el dominio de tu servidor

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
