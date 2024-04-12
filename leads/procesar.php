<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $empresa = $_POST["empresa"];
    $sitio = $_POST["sitio"];
    $personas = $_POST["personas"];
    $blog = isset($_POST["blog"]) ? "Sí" : "No"; // Verificar si se suscribió al blog

    // Guardar los datos en una base de datos o enviar por correo electrónico (implementación real requerida)

    // Mostrar mensaje de agradecimiento
    echo "<!DOCTYPE html>";
    echo "<html lang=\"es\">";
    echo "<head>";
    echo "    <meta charset=\"UTF-8\">";
    echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "    <title>Gracias por su descarga</title>";
    echo "    <style>";
    echo "        body {";
    echo "            font-family: Arial, sans-serif;";
    echo "            background-color: #f9f9f9;";
    echo "            margin: 0;";
    echo "            padding: 0;";
    echo "            display: flex;";
    echo "            justify-content: center;";
    echo "            align-items: center;";
    echo "            height: 100vh;";
    echo "        }";
    echo "        .message {";
    echo "            text-align: center;";
    echo "        }";
    echo "    </style>";
    echo "</head>";
    echo "<body>";
    echo "    <div class=\"message\">";
    echo "        <h1>¡Gracias por su descarga!</h1>";
    echo "        <p>Hemos recibido sus datos:</p>";
    echo "        <p>Nombre: $nombre $apellido</p>";
    echo "        <p>Email: $email</p>";
    echo "        <p>Teléfono: $telefono</p>";
    echo "        <p>Empresa: $empresa</p>";
    echo "        <p>Sitio web: $sitio</p>";
    echo "        <p>¿Cuántas personas trabajan?: $personas</p>";
    echo "        <p>¿Subscrito al blog?: $blog</p>";
    echo "    </div>";
    echo "</body>";
    echo "</html>";
} else {
    // Redirigir al formulario si no se envió por POST (implementación real requerida)
    header("Location: formulario.html");
    exit;
}
?>
