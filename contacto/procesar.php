<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados del Formulario</title>
    <style>
        /* Estilos CSS para la presentación de resultados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }

        h1 {
            display: flex;
            justify-content: center;
            color: #444;
        }

        .resultados {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
            font-size: 16px;
        }

        strong {
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Resultados del Formulario</h1>
    <div class="resultados">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST["nombre"]);
            $apellido = htmlspecialchars($_POST["apellido"]);
            $email = htmlspecialchars($_POST["email"]);
            $mensaje = htmlspecialchars($_POST["mensaje"]);

            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Apellido:</strong> $apellido</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Mensaje:</strong> $mensaje</p>";
        } else {
            echo "<p>No se han recibido datos del formulario.</p>";
        }
        ?>
    </div>
</body>
</html>
