var modalLogin = document.getElementById("loginModal");
var modalSignUp = document.getElementById("signUpModal");
var modalAppetizer = document.getElementById("appetizerModal");
var modalMainCourse = document.getElementById("mainCourseModal");
var modalDessert = document.getElementById("dessertModal");
var modalBeverages = document.getElementById("beveragesModal");
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
  modalAppetizer.style.display = "block";
};
mainCourseBtn.onclick = function () {
  modalMainCourse.style.display = "block";
};
dessertBtn.onclick = function () {
  modalDessert.style.display = "block";
};
beveragesBtn.onclick = function () {
  modalBeverages.style.display = "block";
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
  if (event.target == modalMainCourse) {
    modalMainCourse.style.display = "none";
  }
  if (event.target == modalDessert) {
    modalDessert.style.display = "none";
  }
  if (event.target == modalBeverages) {
    modalBeverages.style.display = "none";
  }
  if (event.target == modalPay) {
    modalPay.style.display = "none";
  }
};
