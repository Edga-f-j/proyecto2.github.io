<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $vehiculo = $_POST['vehiculo'];
    $color = $_POST['color'];
    $comentarios = $_POST['comentarios'];

    // Aquí podrías enviar los datos a una base de datos o enviarlos por correo, por ejemplo:
    // mail("tu-email@example.com", "Solicitud de Cotización", $mensaje);

    echo "¡Gracias, $nombre! Hemos recibido tu solicitud de cotización para un $vehiculo. Nos pondremos en contacto contigo pronto.";
}
?>