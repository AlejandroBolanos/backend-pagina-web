var modalLogin = document.getElementById("loginModal");
var modalSignUp = document.getElementById("signUpModal");
var modalMenu = document.getElementById("modalMenu");
var modalMenuContainer = document.getElementById("modalContainer");
var modalPay = document.getElementById("payModal");

var loginBtn = document.getElementById("login-btn");
var signUpBtn = document.getElementById("signup-btn");
var appetizersBtn = document.getElementById("appetizersBtn");
var mainCourseBtnBtn = document.getElementById("mainCourseBtn");
var payBtn = document.getElementById("payBtn");

var span = document.getElementsByClassName("close")[0];

loginBtn.onclick = function () {
  modalLogin.style.display = "block";
};

signUpBtn.onclick = function () {
  modalSignUp.style.display = "block";
};
appetizersBtn.onclick = function () {
  $("#modalContainer").load("./menu.php", { category: 2 });

};
mainCourseBtn.onclick = function () {
  $("#modalContainer").load("./menu.php", { category: 1 });


};
beveragesBtn.onclick = function () {
  $("#modalContainer").load("./menu.php", { category: 4 });


};
dessertBtn.onclick = function () {
  $("#modalContainer").load("./menu.php", { category: 3 });


};

payBtn.onclick = function () {
  modalPay.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modalLogin.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modalLogin) {
    modalLogin.style.display = "none";
  }
  if (event.target == modalSignUp) {
    modalSignUp.style.display = "none";
  }
  

  if (event.target == modalPay) {
    modalPay.style.display = "none";
  }
};

// Función para cerrar un modal por su ID
function closeModal(modalId) {
  // Obtén la referencia al modal por su ID
  var modal = document.getElementById(modalId);

  // Oculta el modal
  if (modal) {
    modal.style.display = 'none';
  }
}
