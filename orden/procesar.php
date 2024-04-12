<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST["email"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $empresa = $_POST["empresa"];
    $direccion1 = $_POST["direccion1"];
    $direccion2 = $_POST["direccion2"];
    $codigo = $_POST["codigo"];

    // Mostrar los datos recopilados
    echo "<!DOCTYPE html>";
    echo "<html lang=\"es\">";
    echo "<head>";
    echo "<meta charset=\"UTF-8\">";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
    echo "<title>Confirmación de Compra</title>";
    echo "<style>";
    echo "    body { font-family: Arial, sans-serif; }";
    echo "    h1 { color: #333; }";
    echo "    p { margin: 10px 0; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<h1>Gracias por su compra</h1>";
    echo "<p>Correo electrónico: $email</p>";
    echo "<p>Nombre: $nombre $apellido</p>";
    echo "<p>Empresa: $empresa</p>";
    echo "<p>Calle: $direccion1</p>";
    echo "<p>Numero de domicilio: $direccion2</p>";
    echo "<p>Código postal/Colonia: $codigo</p>";
    echo "</body>";
    echo "</html>";
} else {
    // Redirigir al formulario si no se envió por POST
    header("Location: formulario.html");
    exit;
}
?>
