<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Simulación de envío exitoso sin conexión a base de datos
    echo "<script>
        alert('Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.');
        window.location.href = 'index.php'; // Redirige a la página principal después de enviar
    </script>";
}
?>
