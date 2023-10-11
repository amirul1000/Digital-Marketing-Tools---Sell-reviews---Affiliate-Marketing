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

function bookMessage() {
  var passengers = document.getElementById("passengers");
  var lugages = document.getElementById("lugages");
  var chairs = document.getElementById("chairs");
  var address = document.getElementById("address");
  var to = document.getElementById("to");
  var phone = document.getElementById("phone");
  var bookemail = document.getElementById("bookemail");
  var firstName = document.getElementById("firstName");
  var lastName = document.getElementById("lastName");

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
  } else {
    alert("Book a cab successfully");
  }
}

function message() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var text = document.getElementById("text");

  if (name.value === "" || email.value === "" || text.value == "") {
  } else {
    alert("Message send successfully");
  }
}
