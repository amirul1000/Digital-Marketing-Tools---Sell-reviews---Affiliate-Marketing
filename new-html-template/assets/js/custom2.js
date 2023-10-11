//navbar active
// $(document).on("click", "ul li", function () {
//   $(this).addClass("nav-active").siblings().removeClass("nav-active");
// });

const sec = document.querySelectorAll("section");
const li = document.querySelectorAll(".nav_items ul li a");

function activeMenu() {
  let len = sec.length;
  while (--len && window.scrollY + 199 < sec[len].offsetTop) {}
  li.forEach((tx) => tx.classList.remove("active"));
  li[len].classList.add("active");
}
activeMenu();
window.addEventListener("scroll", activeMenu);

const bg = document.querySelector(".lgs");
window.addEventListener("scroll", () => {
  if (window.scrollY >= 250) {
    bg.classList.add("lgs");
  } else {
    bg.classList.remove("lgs");
  }
});

function bookMessage(e) {
  var passengers = document.getElementById("passengers");
  var lugages = document.getElementById("lugages");
  var chairs = document.getElementById("chairs");
  var address = document.getElementById("address");
  var to = document.getElementById("to");
  var phone = document.getElementById("phone");
  var bookemail = document.getElementById("bookemail");
  var firstName = document.getElementById("firstName");
  var lastName = document.getElementById("lastName");
  var success = document.querySelector(".message .send-success");
  var error = document.querySelector(".message .send-error");

  if (
    passengers.value === "" ||
    lugages.value === "" ||
    chairs.value === "" ||
    address.value === "" ||
    to.value === "" ||
    phone.value === "" ||
    bookemail.value === "" ||
    firstName.value === "" ||
    lastName.value === ""
  ) {
    // alert("hello");
    error.style.display = "block";
  } else {
    success.style.display = "block";
  }
}

function message() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var text = document.getElementById("text");
  var success = document.querySelector(".message .send-success");
  var error = document.querySelector(".message .send-error");

  if (name.value === "" || email.value === "" || text.value == "") {
    error.style.display = "block";
  } else {
    success.style.display = "block";
  }
}
