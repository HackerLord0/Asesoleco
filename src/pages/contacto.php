<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $correo = $_POST["email"];
    $telefono = $_POST["teléfono"];
    $mensaje = $_POST["mensaje"];
    
    $destinatario = "ventas@asesoleco.com";
    $asunto = "Nuevo mensaje de contacto";
    $cuerpoCorreo = "Nombre: " . $nombre . "\n"
        . "Apellidos: " . $apellidos . "\n"
        . "Correo: " . $correo . "\n"
        . "Telefono: " . $telefono . "\n"
        . "Mensaje: " . $mensaje;
        $cabeceras = "From: Contacto_Sitio_Web_Asesoleco.com <" . $destinatario . ">\r\n";

        // Intenta enviar el correo
        if (mail($destinatario, $asunto, $cuerpoCorreo, $cabeceras)) {
        // Mensaje enviado correctamente, muestra el mensaje y redirige al usuario
        echo '<script>alert("Mensaje enviado correctamente. Pronto te contactaremos.");</script>';
        echo '<script>window.location.href = "/index.html";</script>';
        exit;
    } else {
        // Ha ocurrido un error, muestra un mensaje y redirige al usuario
        echo '<script>alert("Ha ocurrido un error al enviar el mensaje.");</script>';
        echo '<script>window.location.href = "/index.html";</script>';
        exit;
    }
} else {
    // Método no permitido, redirige al usuario
    header('Location: /index.html');
    exit;
}
?>
