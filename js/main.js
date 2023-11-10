var modalLogin = document.getElementById("loginModal");
var modalSignUp = document.getElementById("signUpModal");
var modalAppetizer = document.getElementById("appetizerModal");
var modalPay = document.getElementById("payModal");

var loginBtn = document.getElementById("login-btn");
var signUpBtn = document.getElementById("signup-btn");
var appetizersBtn = document.getElementById("appetizersBtn");
var payBtn = document.getElementById("payBtn");

var span = document.getElementsByClassName("close")[0];

loginBtn.onclick = function () {
  modalLogin.style.display = "block";
};

signUpBtn.onclick = function () {
  modalSignUp.style.display = "block";
};
appetizersBtn.onclick = function () {
  modalAppetizer.style.display = "block";
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
  if (event.target == modalAppetizer) {
    modalAppetizer.style.display = "none";
  }
  if (event.target == modalPay) {
    modalPay.style.display = "none";
  }
};
