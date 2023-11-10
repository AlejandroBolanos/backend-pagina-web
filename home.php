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
      rel="stylesheet"
    />
    <!-- google fonts -->
    <link rel="stylesheet" href="css/main.css" />
  </head>
  <body>
    <!---Modal de Login -->
    <div id="loginModal" class="modal">
      <span class="close">&times;</span>
      <!-- Modal content -->
      <div class="modal-content">
        <div class="container-title-login">
          <a href="home.html" class="btn-arrow-login"
            ><img src="./imgs/back-arrow.webp" alt="Btn.back-arrow"
          /></a>

          <h3>Login</h3>
        </div>
        <div class="container-login">
          <form
            class="form-container"
            action="procesar_login.php"
            method="POST"
          >
            <div>
              <label class="form-label" for="username">Username:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="username"
                name="username"
                required
              />
            </div>
            <div>
              <label class="form-label" for="password">Password:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="password"
                id="password"
                name="password"
                required
              />
            </div>
            <button
              href="home.html"
              class="login-container-button"
              type="submit"
            >
              <img src="./imgs/login.webp" alt="" />
            </button>
            <a href="home.html">Recover my password</a>
          </form>
        </div>
      </div>
    </div>

    <div id="signUpModal" class="modal">
      <span class="close">&times;</span>
      <!-- Modal content -->
      <div class="modal-content">
        <div class="container-title-login">
          <a href="home.html" class="btn-arrow-login"
            ><img src="./imgs/back-arrow.webp" alt="Btn.back-arrow"
          /></a>

          <h3>Sign Up</h3>
        </div>
        <div class="container-login">
          <form
            class="form-container"
            action="procesar_login.php"
            method="POST"
          >
            <div>
              <label class="form-label" for="username">Full name:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="fullname"
                name="fullname"
                required
              />
            </div>
            <!--  -->
            <div>
              <label class="form-label" for="email">Email:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="email"
                name="email"
                required
              />
            </div>
            <!--  -->
            <div>
              <label class="form-label" for="usernameSignUp">Username:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="usernameSignUp"
                name="username"
                required
              />
            </div>
            <!--  -->
            <div>
              <label class="form-label" for="passwordSignUp">Password:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="password"
                id="passwordSignUp"
                name="password"
                required
              />
            </div>
            <!--  -->
            <button class="login-container-button" type="submit">
              <img src="./imgs/sign-up.webp" alt="" />
            </button>
          </form>
        </div>
      </div>
    </div>

    <div id="appetizerModal" class="modal">
      <span class="close">&times;</span>
      <!-- Modal content -->
      <div class="modal-content">
        <div class="header-menu">
          <div class="container-btns-title">
            <a href="#"
              ><img
                class="btn-back-arrow"
                src="./imgs/back-arrow.webp"
                alt="Btn Back Arrow"
            /></a>

            <a href="#"
              ><img
                class="btn-translate"
                src="./imgs/translate.webp"
                alt="Btn-Translate"
            /></a>
          </div>
          <div class="title-menu">
            <h4>Appetizers/ Salads</h4>
          </div>
        </div>

        <div class="container-menu">
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
          <div class="card menu-items top-border">
            <div class="half">
              <div class="content-img">
                <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
                <button class="star-btn">
                  <img src="./imgs/like.webp" alt="Btn-Star" />
                </button>
                <!-- Contenido para la mitad izquierda -->
              </div>
            </div>

            <div class="half">
              <div class="content-text">
                <h5 class="name-dish">Tarte au Citron</h5>
                <p>
                  -Gâteau au citron avec une couche de crème moelleuse au citron
                  et une meringue dorée et croustillante.
                </p>
                <p>-Couples ou famille.</p>
                <div class="down-content">
                  <p>-Prix $18</p>
                  <button class="cart-btn">
                    <img src="./imgs/cart.webp" alt="Btn-Cart" />
                  </button>
                </div>

                <!-- Contenido para la mitad derecha -->
              </div>
            </div>
          </div>
          <!--  -->
        </div>
      </div>
    </div>

    <div id="payModal" class="modal">
      <span class="close">&times;</span>
      <!-- Modal content -->
      <div class="modal-content">
        <div class="container-title-login payment-border">
          <a href="home.html" class="btn-arrow-login"
            ><img src="./imgs/back-arrow.webp" alt="Btn.back-arrow"
          /></a>

          <h3>Payment</h3>
        </div>
        <div class="container-login payment-border">
          <form
            class="form-container"
            action="procesar_login.php"
            method="POST"
          >
            <div>
              <label class="form-label" for="card-number">Card Number:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="card-number"
                name="card-number"
                required
              />
            </div>
            <!--  -->
            <div>
              <label class="form-label" for="expiry">Expiry:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="expiry"
                name="expiry"
                required
              />
            </div>
            <!--  -->
            <div>
              <label class="form-label" for="cvc">CVC:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="cvc"
                name="cvc"
                required
              />
            </div>
            <!--  -->
            <div>
              <label class="form-label" for="owners-name">Owner's name:</label>
            </div>
            <div class="container-input">
              <input
                class="form-input"
                type="text"
                id="owners-name"
                name="owners-name"
                required
              />
            </div>
            <!--  -->
            <div class="buttons-payment-container">
              <button class="buttons-payment">Go to carry</button>
              <button class="buttons-payment">Delivery</button>
              <button class="buttons-payment">Eat here</button>
            </div>
            <button class="login-container-button" type="submit">
              <img src="./imgs/credit-card.webp" alt="" />
            </button>
          </form>
        </div>
      </div>
    </div>

    <header>
      <div id="header-container">
        <div class="header-left">
          <h1 class="header-title">Le Gourmet Parisien</h1>
          <div class="header-text-container">
            <p class="header-text">Where Passion Is Served in Every Dish</p>
          </div>
          <div class="dish-searcher-container">
            <input
              class="dish"
              type="text"
              placeholder="Find your favorite dish"
            />
            <div class="dish-submit-container">
              <button class="dish-submit-btn">Search</button>
            </div>
          </div>
        </div>
        <div class="header-right">
          <div class="header-right-upper">
            <div class="header-buttons-container">
              <button id="signup-btn" class="header-buttons">Sign Up</button>
              <button id="login-btn" class="header-buttons">Login</button>
            </div>
            <img src="imgs/logo.webp" alt="Logo" />
          </div>
          <div class="header-image-container">
            <img
              class="header-image"
              src="imgs/header.webp"
              alt="Foto del header"
            />
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
            <img
              class="category-img"
              src="./imgs/Restaurant.webp"
              alt="Salad"
            />
          </div>
          <h1 class="category-title">Main Course</h1>
          <div class="category-btn">View More</div>
        </div>
        <div class="category">
          <div>
            <img class="category-img" src="./imgs/Dessert.webp" alt="Salad" />
          </div>
          <h1 class="category-title">Dessert</h1>
          <div class="category-btn">View More</div>
        </div>
        <div class="category">
          <div>
            <img class="category-img" src="./imgs/Cheers.webp" alt="Salad" />
          </div>

          <h1 class="category-title">Beverages</h1>
          <div class="category-btn">View More</div>
        </div>
      </section>

      <h2 class="secondary-title">Recommended</h2>

      <section class="recommended-container menu-items">
        <div class="card menu-items top-border">
          <div class="half">
            <div class="content-img">
              <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
              <button class="star-btn">
                <img src="./imgs/like.webp" alt="Btn-Star" />
              </button>
              <!-- Contenido para la mitad izquierda -->
            </div>
          </div>

          <div class="half">
            <div class="content-text">
              <h5 class="name-dish">Tarte au Citron</h5>
              <p>
                -Gâteau au citron avec une couche de crème moelleuse au citron
                et une meringue dorée et croustillante.
              </p>
              <p>-Couples ou famille.</p>
              <div class="down-content">
                <p>-Prix $18</p>
                <button class="cart-btn">
                  <img src="./imgs/cart.webp" alt="Btn-Cart" />
                </button>
              </div>

              <!-- Contenido para la mitad derecha -->
            </div>
          </div>
        </div>
        <!--  -->
        <div class="card menu-items top-border">
          <div class="half">
            <div class="content-img">
              <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
              <button class="star-btn">
                <img src="./imgs/like.webp" alt="Btn-Star" />
              </button>
              <!-- Contenido para la mitad izquierda -->
            </div>
          </div>

          <div class="half">
            <div class="content-text">
              <h5 class="name-dish">Tarte au Citron</h5>
              <p>
                -Gâteau au citron avec une couche de crème moelleuse au citron
                et une meringue dorée et croustillante.
              </p>
              <p>-Couples ou famille.</p>
              <div class="down-content">
                <p>-Prix $18</p>
                <button class="cart-btn">
                  <img src="./imgs/cart.webp" alt="Btn-Cart" />
                </button>
              </div>

              <!-- Contenido para la mitad derecha -->
            </div>
          </div>
        </div>
        <!--  -->
        <div class="card menu-items top-border">
          <div class="half">
            <div class="content-img">
              <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
              <button class="star-btn">
                <img src="./imgs/like.webp" alt="Btn-Star" />
              </button>
              <!-- Contenido para la mitad izquierda -->
            </div>
          </div>

          <div class="half">
            <div class="content-text">
              <h5 class="name-dish">Tarte au Citron</h5>
              <p>
                -Gâteau au citron avec une couche de crème moelleuse au citron
                et une meringue dorée et croustillante.
              </p>
              <p>-Couples ou famille.</p>
              <div class="down-content">
                <p>-Prix $18</p>
                <button class="cart-btn">
                  <img src="./imgs/cart.webp" alt="Btn-Cart" />
                </button>
              </div>

              <!-- Contenido para la mitad derecha -->
            </div>
          </div>
        </div>
        <!--  -->
        <div class="card menu-items top-border">
          <div class="half">
            <div class="content-img">
              <img class="img-menu" src="imgs/torta-citron.webp" alt="Img" />
              <button class="star-btn">
                <img src="./imgs/like.webp" alt="Btn-Star" />
              </button>
              <!-- Contenido para la mitad izquierda -->
            </div>
          </div>

          <div class="half">
            <div class="content-text">
              <h5 class="name-dish">Tarte au Citron</h5>
              <p>
                -Gâteau au citron avec une couche de crème moelleuse au citron
                et une meringue dorée et croustillante.
              </p>
              <p>-Couples ou famille.</p>
              <div class="down-content">
                <p>-Prix $18</p>
                <button class="cart-btn">
                  <img src="./imgs/cart.webp" alt="Btn-Cart" />
                </button>
              </div>

              <!-- Contenido para la mitad derecha -->
            </div>
          </div>
        </div>
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
            <img src="/imgs/cc-visa.webp" alt="visa" />
            <img src="/imgs/cc-mastercard.webp" alt="mastercard" />
            <img src="/imgs/cc-apple-pay.webp" alt="applepay" />
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
