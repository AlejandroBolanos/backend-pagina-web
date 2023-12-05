<?php
require_once './database.php';
// Reference: https://medoo.in/api/select


if ($_POST) {
    if (isset($_POST["category"])) {
        $items = $database->select("tb_information_dishes", "*", [

            "AND" => [

                "category_id" => $_POST["category"]

            ]

        ]);
        $category = $database->select("tb_category_dishes", "*", [

            "category_id" => $_POST["category"]

        ]);
    }
}

?>



<div id="modalMenu" class="modal_menu">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="header-menu">
            <div class="container-btns-title">
                <span onclick="closeModal('modalMenu')"><img class="btn-back-arrow" src="  imgs/back-arrow.webp"
                        alt="Btn Back Arrow" /></span>

                <a href="#"><img class="btn-translate" src="imgs/translate.webp" alt="Btn-Translate" /></a>
            </div>
            <div class="title-menu">

                <?php echo "<h4>" . $category[0]["category_name"] . "</h4>" ?>

            </div>
        </div>

        <div class="container-menu">

            <?php
            foreach ($items as $item) {
                # code...
                echo "<div class='card menu-items top-border'>";
                echo "<div class='half'>";
                echo "  <div class='content-img'>";
                echo "    <img class='img-menu' src='imgs/" . $item["dish_image"] . "' alt='" . $item["dish_name"] . " />";
                echo "    <button class='star-btn'>";
                //echo "      <img src='./imgs/like.webp' alt='Btn-Star' />";
                echo "    </button>";
                // <!-- Contenido para la mitad izquierda -->
                echo "  </div>";
                echo "</div>";

                echo "<div class='half'>";
                echo "  <div class='content-text'>";
                echo "    <h5 class='name-dish'> " . $item["dish_name"] . "</h5>";
                echo "    <p>" . substr($item["dish_description"], 0, 70) . "...</p>";
                echo "    <p>-Couples ou famille.</p>";
                echo "      <p>$" . $item["price"] . "</p>";
                echo "    <form method='post' action='add-to-cart.php''>";
                echo "        <input type='hidden' name='dish_id' value='".$item["dish_id"]."' />";
                echo "        <input type='number' class='cart-qty' name='qty' value='1' />";
                echo "        <label class='cart-label' for='submit'></label>";
                echo "        <input type='submit'class='cart-btn' id='submit'>";
                echo "    </form>";
                // <!-- Contenido para la mitad derecha -->
                echo "  </div>";
                echo "</div>";
                echo "</div>";
            }
            ?>


        </div>

    </div>
</div>