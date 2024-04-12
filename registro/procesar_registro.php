<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Puedes realizar validaciones adicionales aquí (por ejemplo, verificar si el correo es válido)

    // Mostrar un mensaje de confirmación
    echo "<div style='text-align: center; margin-top: 50px; font-family: Arial, sans-serif;'>";
    echo "<i class='fas fa-check-circle' style='color: #4caf50; font-size: 48px;'></i><br>";
    echo "<p style='font-size: 24px; color: #4caf50;'>Usuario creado</p>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $correo</p>";
    echo "</div>";
} else {
    // Redirigir si se accede directamente a este archivo sin enviar datos desde el formulario
    header("Location: registro.html"); // Cambia "index.html" al nombre de tu archivo HTML
    exit;
}
?>