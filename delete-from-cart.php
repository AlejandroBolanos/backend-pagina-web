<?php
session_start();

// Verificar si se envió un ID de platillo válido
if (isset($_POST['dishID'])) {
    $idPlatilloEliminar = $_POST['dishID'];

    // Verificar si el carrito no está vacío y el platillo existe en el carrito
    if (!empty($_SESSION['cart']) && isset($_SESSION['cart'][$_POST['dishID']])) {
        // Restar una unidad del platillo en el carrito
        $_SESSION['cart'][$_POST['dishID']]--;

        // Eliminar el platillo del carrito si la cantidad es 0 o menos
        if ($_SESSION['cart'][$_POST['dishID']] <= 0) {
            unset($_SESSION['cart'][$_POST['dishID']]);
        }

        // Redirigir de nuevo a la página del carrito o a donde sea apropiado
        header("Location: home.php");
        exit;
    }
}

?>
