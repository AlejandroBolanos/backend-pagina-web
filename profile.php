<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
</head>
<body>

<?php
// Datos del usuario
$nombreUsuario = "John Doe";
$correoUsuario = "john.doe@example.com";

// Lista de órdenes del usuario (simulación de datos)
$ordenes = array(
    array("ID" => 1, "Producto" => "Producto A", "Cantidad" => 2, "Total" => 30.00),
    array("ID" => 2, "Producto" => "Producto B", "Cantidad" => 1, "Total" => 15.00),
    array("ID" => 3, "Producto" => "Producto C", "Cantidad" => 3, "Total" => 45.00)
);

// Mostrar datos del usuario
echo "<h1>Perfil de $nombreUsuario</h1>";
echo "<p>Correo Electrónico: $correoUsuario</p>";


session_start();

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