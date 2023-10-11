const trigger = document.querySelector(".contact-form-trigger");
const contactForm = document.querySelector("#contact_popup_container");
const closeForm = document.querySelector(".close_form_btn");

const contactBtn = document.querySelector("#contact_popup_btn");
contactBtn?.addEventListener("click", () => {
  contactForm.classList.add("active");
  contactBtn.classList.add("hidden");
});
closeForm.addEventListener("click", () => {
  contactForm.classList.remove("active");
  contactBtn.classList.remove("hidden");
});

function sendMessage() {
  var name = document.getElementById("firstName");
  var lastname = document.getElementById("lastName");
  var email = document.getElementById("email");
  var number = document.getElementById("number");
  var text = document.getElementById("text");
  var success = document.querySelector(".sendmessage .send-success");
  var error = document.querySelector(".sendmessage .send-error");
  if (name.value === "" || lastname.value === "" || text.value == "") {
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
//Manipulation
const retourRow = document.querySelector(".retourRow");

const service = document.getElementById("c_services");
const trajet = document.getElementById("trajet");
service.addEventListener("change", (e) => {
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

document?.getElementById("aller").addEventListener("change", function (e) {
  const retourRow = document.querySelector(".retourRow");
  console.log(e.target.value);
  const service = document.getElementById("c_services");
  const trajet = document.getElementById("trajet");
  if (e.target.value === "Aller-Simple" && trajet.selectedIndex === 1) {
    console.log("fone");
    document.querySelector("#retourTime").style.display = "block";
    retourRow.classList.remove("active");
  }
  if (e.target.value === "Aller-Simple" && trajet.selectedIndex === 0) {
    console.log("done");
    document.querySelector(".retourTimeBox").style.display = "none";
  }
  if (e.target.value === "Aller-Retour") {
    // console.log("bro");

    retourRow.classList.add("active");
    console.log("bhaiiiii");

    document.querySelector(".retourTimeBox").style.display = "block";
  }
  // if(trajet.selectedIndex === 1)

  // retourRow.classList.toggle("active");
  // const retourDate = document.getElementById("retourDate");
  // const retourTime = document.getElementById("retourTime");
  // retourDate.innerHTML = `${date.value}`;
  // retourTime.innerHTML = `${time.value}`;

  // d_t.classList.toggle("active");
});

//Open Booking on
const openBooking = document.querySelectorAll(".open-booking");
openBooking.forEach((item) => {
  item.addEventListener("click", () => {
    contactForm.classList.add("active");
    contactBtn.classList.add("hidden");
    window.scrollTo(0, 0);
  });
});

const serv = document.querySelector(".dropdownContainer");

serv.addEventListener("click", () => {
  if (window.innerWidth > 1200) {
    document.querySelector(".dropdownMenu").classList.toggle("active");
  }
  if (window.innerWidth < 1200) {
    document.querySelector(".mobile-dropdown").classList.toggle("active");
  }
});
