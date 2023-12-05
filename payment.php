<?php
require_once './database.php';

session_start();

// Verificar si el carrito no está vacío
if (empty($_SESSION['cart'])) {
    echo "El carrito está vacío. Agregue productos antes de proceder al pago.";
    exit;
}


$usuarioID = $_SESSION["id_user"];




$prices = $database->get('tb_information_dishes', ["dish_id","price"]); 

var_dump($prices);
if (empty($_SESSION['cart'])) {
    echo "El carrito está vacío. Agregue productos antes de calcular el total.";
} else {
    $total = 0;

    // Iterar sobre el carrito
    foreach ($_SESSION['cart'] as $dishID => $qty) {
        // Verificar si el ID del platillo existe en el array de precios
        if (isset($prices[$dishID])) {
            // Sumar al total el precio del platillo multiplicado por la cantidad
            $total += $prices[$dishID] * $qty;
        } else {
            echo "No se encontró el precio para el platillo con ID $dishID.";
        }
    }

}


// Crear una nueva orden en la tabla 'orders'
$orderData = [
    'id_user' => $usuarioID,
    'order_date' => date('Y-m-d H:i:s'),    
    'total' => $total,    
    'order_type' => $_POST["order_type"]
];
$database->insert('tb_orders', $orderData);

$orderID =  $database->id();
var_dump($orderID);

// Recorrer el carrito y guardar los detalles de la orden en la tabla 'order_details'
foreach ($_SESSION['cart'] as $dishID => $qty) {
    $orderDetailsData = [
        'id_order' => $orderID,
        'dish_id' => $dishID,
        'quantity' => $qty,
    ];

    var_dump($orderDetailsData);
    $database->insert('tb_order_details', $orderDetailsData);
}

// Limpiar el carrito después de procesar el pedido
unset($_SESSION['cart']);

echo "<script> 
window.alert('Order Completed'); 
window.location.href = './home.php';
</script>";

?>
