<?php
session_start();

// Obtener información del producto
$dish = $_POST['dish_id'];
$qty = $_POST['qty'];

// Inicializar el carrito si no existe
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Agregar el producto al carrito
if (isset($_SESSION['cart'][$dish])) {
    // Si ya existe, suma la cantidad
    $_SESSION['cart'][$dish] += $qty;
} else {
    // Si no existe, agrega el producto al carrito
    $_SESSION['cart'][$dish] = $qty;
}

// Redirigir a la página de productos o a donde sea apropiado

echo "<script> 

window.alert('Product added to the cart'); 
window.alert('". json_encode($_SESSION['cart'])."');     
window.location.href = './home.php';
</script>";

exit;
?>