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

// Mostrar tabla de órdenes
echo "<h2>Órdenes del Usuario</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Total</th>
        </tr>";

// Llenar la tabla con órdenes del usuario
foreach ($ordenes as $orden) {
    echo "<tr>
            <td>{$orden['ID']}</td>
            <td>{$orden['Producto']}</td>
            <td>{$orden['Cantidad']}</td>
            <td>{$orden['Total']}</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>