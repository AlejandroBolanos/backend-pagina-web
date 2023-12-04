<div id="signUpModal" class="modal">
    <span class="close">&times;</span>
    <!-- Modal content -->
    <div class="modal-content">
      <div class="container-title-login">
        <span  class="btn-arrow-login"  onclick="closeModal('signUpModal')"><img src="./imgs/back-arrow.webp" alt="Btn.back-arrow" /></span>

        <h3>Sign Up</h3>
      </div>
      <div class="container-login">
        <form class="form-container" action="./admin/process-register.php" method="POST">
          <div>
            <label class="form-label" for="username">Full name:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="fullname" name="fullname" required />
          </div>
          <!--  -->
          <div>
            <label class="form-label" for="email">Email:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="email" name="email" required />
          </div>
          <!--  -->
          <div>
            <label class="form-label" for="usernameSignUp">Username:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="text" id="usernameSignUp" name="username" required />
          </div>
          <!--  -->
          <div>
            <label class="form-label" for="passwordSignUp">Password:</label>
          </div>
          <div class="container-input">
            <input class="form-input" type="password" id="passwordSignUp" name="password" required />
          </div>
          <!--  -->
          <input type="hidden" name="register" value="1">
          <button class="login-container-button" type="submit">
            <img src="./imgs/sign-up.webp" alt="" />
          </button>
        </form>
      </div>
    </div>
  </div>