<div id="payModal" class="modal">
    <span class="close">&times;</span>
    <!-- Modal content -->
    <div class="modal-content">
      <div class="container-title-login payment-border">
        <span onclick="closeModal('payModal')" class="btn-arrow-login"><img src="./imgs/back-arrow.webp"
            alt="Btn.back-arrow" /></span>

        <h3>Payment</h3>
      </div>
      <div class="container-login payment-border">
        <form class="form-container" action="procesar_login.php" method="POST">
          <div>
            <label class="form-label" for="card-number">Card Number:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="card-number" name="card-number" required />
          </div>
          <!--  -->
          <div>
            <label class="form-label" for="expiry">Expiry:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="expiry" name="expiry" required />
          </div>
          <!--  -->
          <div>
            <label class="form-label" for="cvc">CVC:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="cvc" name="cvc" required />
          </div>
          <!--  -->
          <div>
            <label class="form-label" for="owners-name">Owner's name:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="owners-name" name="owners-name" required />
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