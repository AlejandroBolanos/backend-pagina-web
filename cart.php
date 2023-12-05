<?php

require_once './database.php';


$items = $database->select("tb_information_dishes", "*");

// Verificar si el carrito está vacío
if (empty($_SESSION['cart'])) {
    echo "El carrito está vacío.";
} else {
    echo "<table class='order-table'>";
    echo "<tbody>";
    echo "        <h2 class='secondary-title table-title'>Order</h2>    ";

    // Iterar sobre el carrito
    foreach ($_SESSION['cart'] as $dishID => $qty) {
        // Encontrar el índice del platillo en $items usando el ID
        $indicePlatillo = array_search($dishID, array_column($items, 'dish_id'));

        // Verificar si el platillo está en la lista de $items
        if ($indicePlatillo !== false) {
            $platilloNombre = $items[$indicePlatillo]['dish_name'];
            $precioUnitario = $items[$indicePlatillo]['price'];

            $total = $qty * $precioUnitario;

            echo "<tr>";
            echo "<td class='first-td'>$platilloNombre</td>";
            echo "<td>$qty</td>";
            echo "<td>$total</td>";
            echo "<td class='third-td'>";
            echo "<form action='delete-from-cart.php' method='POST'>";
            echo "<input type='hidden' name='dishID' value='$dishID'>";
            echo "<button type='submit'><img src='./imgs/remove-icon.webp' alt='remove' /></button>";
            echo "</form>";
            echo "</td>";            
            echo "</tr>";
        }
    }

    echo "</tbody>";
    echo "</table>";
}


// Puedes agregar estilos adicionales a la tabla según tus preferencias
function getNombrePlatilloPorID($id, $platillosArray) {
    return isset($platillosArray[$id]['nombre']) ? $platillosArray[$id]['nombre'] : 'No encontrado';
}

?>
