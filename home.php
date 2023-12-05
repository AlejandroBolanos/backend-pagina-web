<?php

session_start();

require_once './database.php';
// Reference: https://medoo.in/api/select
$items = $database->select("tb_information_dishes", "*");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Le Gourmet Parisien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&family=Playfair+Display:ital,wght@0,500;1,500&display=swap"
    rel="stylesheet" />
  <!-- google fonts -->
  <link rel="stylesheet" href="css/main.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>

  <?php
  require_once './login.php';
  ?>

  <?php
  require_once './singup.php';
  ?>

  <?php
  require_once './pay.php';
  ?>


  <div id="modalContainer"></div>

  <header>
    <div id="header-container">
      <div class="header-left">
        <h1 class="header-title">Le Gourmet Parisien</h1>
        <div class="header-text-container">
          <p class="header-text">Where Passion Is Served in Every Dish</p>
        </div>
        <div class="dish-searcher-container">
          <input class="dish" type="text" placeholder="Find your favorite dish" />
          <div class="dish-submit-container">
            <button class="dish-submit-btn">Search</button>
          </div>
        </div>
      </div>
      <div class="header-right">
        <div class="header-right-upper">

          <?php

          if (isset($_SESSION["isLoggedIn"])) {
            echo "<div class='header-buttons-container'>";
            echo " <a href='profile.php?id=".$_SESSION["id_user"]."'> <button class='header-buttons'> " . $_SESSION["fullname"] . "</button></a>";
            echo " <a href='logout.php'><button class='header-buttons' >Log Out</button><a/>";
            echo "</div>";
          } else {
            echo "<div class='header-buttons-container'>";
            echo " <button id='signup-btn' class='header-buttons'>Sign Up</button>";
            echo " <button id='login-btn' class='header-buttons'>Login</button>";
            echo "</div>";

          }

          ?>

          <img src="imgs/logo.webp" alt="Logo" />
        </div>
        <div class="header-image-container">
          <img class="header-image" src="imgs/header.webp" alt="Foto del header" />
        </div>
      </div>
    </div>
  </header>

  <main>
    <h2 class="secondary-title">Menu</h2>

    <section class="categories-container">
      <div class="category">
        <div>
          <img class="category-img" src="./imgs/Salad.webp" alt="Salad" />
        </div>
        <h1 class="category-title">Appetizers/ Salads</h1>
        <button id="appetizersBtn" class="category-btn">View More</button>
      </div>
      <div class="category">
        <div>
          <img class="category-img" src="./imgs/Restaurant.webp" alt="Salad" />
        </div>
        <h1 class="category-title">Main Course</h1>
        <button id="mainCourseBtn" class="category-btn" value="1">View More</button>
      </div>
      <div class="category">
        <div>
          <img class="category-img" src="./imgs/Dessert.webp" alt="Salad" />
        </div>
        <h1 class="category-title">Dessert</h1>
        <button id="dessertBtn" class="category-btn" value="3">View More</button>
      </div>
      <div class="category">
        <div>
          <img class="category-img" src="./imgs/Cheers.webp" alt="Salad" />
        </div>

        <h1 class="category-title">Beverages</h1>
        <button id="beveragesBtn" class="category-btn" value="4">View More</button>
      </div>
    </section>

    <h2 class="secondary-title">Recommended</h2>

    <section class="recommended-container menu-items">
      <?php
      foreach ($items as $item) {
        if ($item["dish_featured"] == 1) {
          # code...
          echo "<div class='card menu-items top-border'>";
          echo "<div class='half'>";
          echo "  <div class='content-img'>";
          echo "    <img class='img-menu' src='imgs/" . $item["dish_image"] . "' alt='" . $item["dish_name"] . " />";
          echo "    <button class='star-btn'>";
          echo "      <img src='./imgs/like.webp' alt='Btn-Star' />";
          echo "    </button>";
          // <!-- Contenido para la mitad izquierda -->
          echo "  </div>";
          echo "</div>";

          echo "<div class='half'>";
          echo "  <div class='content-text'>";
          echo "    <h5 class='name-dish'> " . $item["dish_name"] . "</h5>";
          echo "    <p>" . substr($item["dish_description"], 0, 70) . "...</p>";
          echo "    <p>-Couples ou famille.</p>";
          echo "    <div class='down-content'>";
          echo "      <p>$" . $item["price"] . "</p>";
          echo "      <button class='cart-btn'>";
          echo "        <img src='./imgs/cart.webp' alt='Btn-Cart' />";
          echo "      </button>";
          echo "    </div>";
          // <!-- Contenido para la mitad derecha -->
          echo "  </div>";
          echo "</div>";
          echo "</div>";
        }
      }
      ?>
      <!--  -->

      <!--  -->
    </section>

    <table class="order-table">
      <tbody>
        <h2 class="secondary-title table-title">Order</h2>
        <tr>
          <td class="first-td">Onion Soup au gratin</td>
          <td>Price $8</td>
          <td class="third-td">
            <img src="./imgs/remove-icon.webp" alt="remove" />
          </td>
        </tr>
        <tr>
          <td class="first-td">Onion Soup au gratin</td>
          <td>Price $8</td>
          <td class="third-td">
            <img src="./imgs/remove-icon.webp" alt="remove" />
          </td>
        </tr>
        <tr>
          <td class="first-td">Onion Soup au gratin</td>
          <td>Price $8</td>
          <td class="third-td">
            <img src="./imgs/remove-icon.webp" alt="remove" />
          </td>
        </tr>
        <tr>
          <td class="first-td">Onion Soup au gratin</td>
          <td>Price $8</td>
          <td class="third-td">
            <img src="./imgs/remove-icon.webp" alt="remove" />
          </td>
        </tr>
        <tr>
          <td class="first-td">Onion Soup au gratin</td>
          <td>Price $8</td>
          <td class="third-td">
            <img src="./imgs/remove-icon.webp" alt="remove" />
          </td>
        </tr>
      </tbody>
    </table>

    <button id="payBtn" class="secondary-title">Pay Order</button>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-up">
        <div class="footer-icons">
          <img src="./imgs/cc-visa.webp" alt="visa" />
          <img src="./imgs/cc-mastercard.webp" alt="mastercard" />
          <img src="./imgs/cc-apple-pay.webp" alt="applepay" />
        </div>
        <div class="footer-politics">
          <div>Términos y condiciones</div>
          <div>Privacidad</div>
        </div>
      </div>
      <div class="footer-down">© 2022 Gourmet</div>
    </div>
  </footer>
</body>
<script type="text/javascript" src="./js/main.js"></script>

</html>