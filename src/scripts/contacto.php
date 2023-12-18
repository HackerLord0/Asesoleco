<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    
    $destinatario = "nobleteamxd@gmail.com";
    $asunto = "Formulario de contacto desde el sitio web";

    
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Apellidos: $apellidos\n";
    $contenido .= "Correo: $email\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Mensaje: $mensaje\n";

    
    $cabeceras = "From: $email\r\n";

    
    mail($destinatario, $asunto, $contenido, $cabeceras);

   
    header("Location: index");
}
?>
