<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
</head>
<body>

<?php

session_start();


// Datos del usuario
$user = $database->get('tb_users', ["id" => $_SESSION["id_user"]]);

$nombreUsuario = $user[0]["fullname"];
$correoUsuario = $user[0]["email"];

// Lista de órdenes del usuario (simulación de datos)


// Mostrar datos del usuario
echo "<h1>Perfil de $nombreUsuario</h1>";
echo "<p>Correo Electrónico: $correoUsuario</p>";



// Verificar si el carrito está vacío
if (empty($_SESSION['cart'])) {
    echo "El carrito está vacío.";
} else {
    echo "<table border='1'>";
    echo "<tr><th>Producto</th><th>Cantidad</th></tr>";

    // Iterar sobre el carrito
    foreach ($_SESSION['cart'] as $dish => $qty) {
        echo "<tr>";
        echo "<td>$dish</td>";
        echo "<td>$qty</td>";
        echo "</tr>";
    }

    echo "</table>";
}

// Puedes agregar estilos adicionales a la tabla según tus preferencias
?>

</body>
</html>