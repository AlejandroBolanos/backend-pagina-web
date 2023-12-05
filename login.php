<!---Modal de Login -->
<div id="loginModal" class="modal">
  <span class="close">&times;</span>
  <!-- Modal content -->
  <div class="modal-content">
    <div class="container-title-login">
      <span class="btn-arrow-login" onclick="closeModal('loginModal')"><img src="./imgs/back-arrow.webp"
          alt="Btn.back-arrow" /></span>


      <h3>Login</h3>
    </div>
    <div class="container-login">
      <form class="form-container" action="./admin/process-login.php" method="POST">
        <div>
          <label class="form-label" for="username">Username:</label>
        </div>
        <div class="container-input">
          <input class="form-input" type="text" id="username" name="username" required />
        </div>
        <div>
          <label class="form-label" for="password">Password:</label>
        </div>
        <div class="container-input">
          <input class="form-input" type="password" id="password" name="password" required />
        </div>
        <input type="hidden" name="login" value="1">
        <button href="home.html" class="login-container-button" type="submit">
          <img src="./imgs/login.webp" alt="" />
        </button>
      </form>
      <form action="admin/process-password-recovery.php" method="POST" id="recoveryForm">
        <input type="hidden" name="recoveryUsername" id="recoveryUsername" value="">

        <button type="submit">Recover my password</button>

      </form>
    </div>
  </div>
</div>



<script>
  document.getElementById('recoveryForm').addEventListener('submit', function (event) {
    document.getElementById('recoveryUsername').value = document.getElementById('username').value;
    return confirm('Do you really want to recover your password?');
  });
</script>