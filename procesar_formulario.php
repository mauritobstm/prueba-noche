<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "thenochecaribena@gmail.com";
    $asunto = "Nuevo mensaje de formulario de contacto";

    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n";
    $cuerpoMensaje .= "Mensaje: $mensaje";

    mail($destinatario, $asunto, $cuerpoMensaje);

    // Redirigir o mostrar un mensaje de éxito
    header("Location: index.html");
    exit();
}
?>
