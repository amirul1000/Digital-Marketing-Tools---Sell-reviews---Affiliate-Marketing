//Return Date and time to Aller Retour input
const date = document.getElementById("date");
const time = document.getElementById("time");
const retourDate = document.getElementById("retourDate");
const d_t = document.getElementById("showDate-Time");

$(document).ready(function () {
  $("#date").change(function () {
    d_t.innerHTML = `${date.value} ${time.value}`;
  });
});

//FAQ SECTION
const questions = document.querySelectorAll(".question_heading");
questions.forEach((que) => {
  que.addEventListener("click", () => {
    console.log("brooo", que.dataset.value);

    const ans = document.querySelector(`.answer-${que.dataset.value}`);
    ans.classList.toggle("active");
    if (ans.classList.contains("active")) {
      document.querySelector(`.sign-${que.dataset.value}`).innerHTML = "-";
    } else {
      document.querySelector(`.sign-${que.dataset.value}`).innerHTML = "+";
    }
  });
});

////Nav Scroll Animation

// const sec = document.querySelectorAll(".scroll-section");
// const li = document.querySelectorAll(".navitem");
// console.log(li);

// console.log(sec);

// function activeMenu() {
//   let len = sec.length;
//   while (--len && window.scrollY + 199 < sec[len].offsetTop) {}

//   li.forEach((tx) => tx.classList.remove("active"));
//   li[len].classList.add("active");
// }
// activeMenu();
// window.addEventListener("scroll", activeMenu);

//////////////////

// const red = document.querySelector(".reditem");
// const res = document.getElementById("res");
// red.addEventListener("click", () => {
//   const item = document.querySelectorAll(".navitem");
//   item.forEach((item) => {
//     item.classList.remove("active");
//   });
//   res.classList.add("active");
//   res.classList.add("active");
//   console.log("hogai");
// });

///////////////////////////Booking Form Field Manipulation//////////////////////////////////
const retourRow = document.querySelector(".retourRow");
const popup_container = document.querySelector('#contact_popup_container');
const service = document.getElementById("c_services");
const trajet = document.getElementById("trajet");
service?.addEventListener("change", (e) => {
  if (
    e.target.value === "Transport Prive" ||
    e.target.value === "Transport Shuttle"
  ) {
    trajet.selectedIndex = 1;
    date.value = "Date de I'Aller";
    retourDate.value = "Date du Retour";
    const aller = document.getElementById("aller");
    if (aller.selectedIndex === 0) {
      retourRow.classList.remove("active");
    }
    document.querySelector(".retourTimeBox").style.display = "block";
  }
  if (
    e.target.value === "Transport Professionnel" ||
    e.target.value === "Transport Scoliare"
  ) {
    trajet.selectedIndex = 0;
    date.value = "Date du Début";
    retourDate.value = "Date de Fin";
    retourRow.classList.add("active");

    if (aller.selectedIndex === 0) {
      document.querySelector(".retourTimeBox").style.display = "none";
    }
  }
});

trajet?.addEventListener("change", (e) => {
  if (e.target.value === "Ocassionnel") {
    date.value = "Date de I'Aller";
    retourDate.value = "Date du Retour";
    const aller = document.getElementById("aller");
    if (aller.selectedIndex === 0) {
      retourRow.classList.remove("active");
    }
  }
  if (e.target.value === "Reguiler") {
    date.value = "Date du Début";
    retourDate.value = "Date de Fin";
    retourRow.classList.add("active");
    if (aller.selectedIndex === 0) {
      document.querySelector(".retourTimeBox").style.display = "none";
    }
  }
});

//Booking Form

function bookMessage() {
  var serviceType =
    document.getElementById("c_services").options[
      document.getElementById("c_services").selectedIndex
    ];
  var trajet =
    document.getElementById("trajet").options[
      document.getElementById("trajet").selectedIndex
    ];
  var passengers =
    document.getElementById("mypassengers").options[
      document.getElementById("mypassengers").selectedIndex
    ];

  var chairs =
    document.getElementById("chairs").options[
      document.getElementById("chairs").selectedIndex
    ];
  var lugages =
    document.getElementById("lugages").options[
      document.getElementById("lugages").selectedIndex
    ];

  var address = document.getElementById("address");
  var to = document.getElementById("to");
  var date = document.getElementById("date");
  var time = document.getElementById("time");
  var retourDate = document.getElementById("retourDate");
  var retourDate = document.getElementById("retourTime");
  var phone = document.getElementById("phone");
  var bookemail = document.getElementById("bookemail");
  var firstName = document.getElementById("b_firstName");
  var lastName = document.getElementById("b_lastName");
  var success = document.querySelector(".message .send-success");
  var error = document.querySelector(".message .send-error");

  if (
    serviceType.value === "" ||
    trajet.value === "" ||
    passengers.value === "" ||
    // lugages.value === "" ||
    // chairs.value === "" ||
    address.value === "" ||
    date.value === "" ||
    time.value === "" ||
    to.value === "" ||
    phone.value === "" ||
    bookemail.value === "" ||
    firstName.value === "" ||
    lastName.value === ""
  ) {
    success.style.display = "none";
    error.style.display = "block";
    popup_container.style.top = '0px';
  } else {
    success.style.display = "block";
    error.style.display = "none";
    popup_container.style.top = '165px';

  }
}

//Contact Form

function sendMessage() {
  var name = document.getElementById("firstName");
  var lastname = document.getElementById("lastName");
  var email = document.getElementById("email");
  var number = document.getElementById("number");
  var text = document.getElementById("text");
  var success = document.querySelector(".sendmessage .send-success");
  var error = document.querySelector(".sendmessage .send-error");
  if (
    name.value === "" ||
    lastname.value === "" ||
    text.value === "" ||
    email.value === "" ||
    number.value === ""
  ) {
    error.style.display = "block";
    success.style.display = "none";
  } else {
    error.style.display = "none";
    success.style.display = "block";
    // setTimeout(() => {
    //   contactForm.classList.remove("active");
    // }, 3000);
  }
}

//Floating Button for home page

const trigger = document.querySelector(".contact-form-trigger");
const contactForm = document.querySelector("#contact_popup_container");
const closeForm = document.querySelector(".close_form_btn");

// window.addEventListener("load", () => {
//   setTimeout(() => {
//     contactForm.classList.add("active");
//     contactBtn.classList.add("hidden");
//   }, 11000);
// });

const contactBtn = document.querySelector("#contact_popup_btn");
contactBtn?.addEventListener("click", () => {
  contactForm.classList.add("active");
  contactBtn.classList.add("hidden");
  // window.scrollTo(0, 0);
});
closeForm?.addEventListener("click", () => {
  contactForm.classList.remove("active");
  contactBtn.classList.remove("hidden");
});

//Opening bookin form on all booking buttons
const openBooking = document.querySelectorAll(".open-booking");
openBooking.forEach((item) => {
  item.addEventListener("click", () => {
    contactForm.classList.add("active");
    contactBtn.classList.add("hidden");
    window.scrollTo(0, 0);
    console.log("done");
  });
});

// //////////////////////

function myFunction(x) {
  if (x.matches) {
    console.log("hurray");
    const btn = document.getElementById("floating_btn");
    btn.setAttribute("href", "#");
    console.log(btn);
  } else {
    const btn = document.getElementById("floating_btn");
    btn?.removeAttribute("href");
  }
}

// Create a MediaQueryList object
const mmObj = window.matchMedia("(max-width: 990px)");

// Call the match function at run time:
myFunction(mmObj);

// Add the match function as a listener for state changes:
mmObj.addListener(myFunction);

const redB = document.querySelectorAll(".navitem");
const nav = document.querySelector(".navbar-toggle");
const navBar = document.querySelector("#navbar");
redB.forEach((item) => {
  item.addEventListener("click", () => {
    if (item.dataset.value != 1) {
      nav.classList.add("collapsed");
      navBar.classList.add("collapse");
    }
  });
});

///////////Custom slider
function initSlider() {
  const clientSlides = document.querySelectorAll(".client-testimonial-box");
  const dots = document.querySelectorAll(".dot");
  function removeActiveSlide() {
    clientSlides.forEach((item) => {
      item.classList.remove("active");
    });
  }

  function removeActiveDots() {
    dots.forEach((item) => {
      item.classList.remove("active");
    });
  }

  let index = 1;

  dots.forEach((item) => {
    item.addEventListener("click", (e) => {
      removeActiveSlide();
      removeActiveDots();
      index = e.target.dataset.value;
      const activeSlide = document.querySelector(
        `.client-testimonial-box-${e.target.dataset.value}`
      );
      activeSlide.classList.add("active");
      item.classList.add("active");
    });
  });

  setInterval(loop, 5000);

  function loop() {
    index++;
    if (index > 4) index = 1;
    removeActiveDots();
    removeActiveSlide();
    document
      ?.querySelector(`.client-testimonial-box-${index}`)
      .classList?.add("active");
    document?.querySelector(`.dot-${index}`).classList.add("active");
  }
}

initSlider();

///Car animate
function carAnimate() {
  const car = document.querySelector(".car");
  car.classList.add("active");
}

const serv = document.querySelector(".dropdownContainer");

serv?.addEventListener("click", () => {
  console.log('Bro called');
  if (window.innerWidth > 1200) {
    document.querySelector(".dropdownMenu").classList.toggle("active");
  }
  if (window.innerWidth < 1200) {
    document.querySelector(".mobile-dropdown").classList.toggle("active");
  }
});

// const d = document.querySelector(".dropdownMenu");

// d.addEventListener("mouseleave", () => {
//   d.classList.remove("active");
// });

const button = document.getElementById("myButton");
      const texts = document.querySelectorAll(".myText");

      // button?.addEventListener("click", () => {
      //   text.classList.add("animate__slideInUp");
      //   text.style.opacity = 1;
      // });

      window.addEventListener("scroll", () => {
      const scrollPosition = window.scrollY;
      texts.forEach((text) => {
        const elementPosition = text.offsetTop - window.innerHeight;
        if (scrollPosition > elementPosition) {
          text.classList.add("animate__backInRight");
          text.style.opacity = 1;
        }
      });
    });


//Language flags
const lang = document.querySelector('.langContainer');
const langDropdown = document.querySelector('.langDropdown');
const eng = document.querySelector('.english');
const french = document.querySelector('.francias');
const enSelect = document.querySelector('.enSelect');
const frSelect = document.querySelector('.frSelect');

function removeLang(){
  eng.classList.remove('active');
  french.classList.remove('active');
  langDropdown.classList.remove('active');

}

lang.addEventListener('click',()=>{
  langDropdown.classList.add('active');
})

enSelect.addEventListener('click',()=>{
  removeLang()
  eng.classList.add('active');
})

frSelect.addEventListener('click',()=>{
  removeLang()
  french.classList.add('active');
})
