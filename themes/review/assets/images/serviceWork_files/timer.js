$(document).ready(function () {
  $("#date").datepicker({
    dateFormat: "dd/mm/yy",
    setDate: "today",
    orientation: "bottom",
    monthNames: [
      "Janvier",
      "Fevrier",
      "Mars",
      "Avril",
      "Mai",
      "Juin",
      "Juillet",
      "Aout",
      "Septembre",
      "Octobre",
      "Novembre",
      "Decembre",
    ],
    monthNamesShort: [
      "Jan",
      "Fev",
      "Mar",
      "Avr",
      "Mai",
      "Jun",
      "Jul",
      "Aou",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    dayNames: [
      "Dimanche",
      "Lundi",
      "Mardi",
      "Mercredi",
      "Jeudi",
      "Vendredi",
      "Samedi",
    ],
    dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
    dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
    beforeShow: function (input, inst) {
      var rect = input.getBoundingClientRect();
      setTimeout(function () {
        inst.dpDiv.css({ top: rect.top + 40, left: rect.left + 0 });
      }, 0);
    },
  });
});

$(document).ready(function () {
  $("#retourDate").datepicker({
    dateFormat: "dd/mm/yy",
    setDate: "today",
    orientation: "bottom",
    monthNames: [
      "Janvier",
      "Fevrier",
      "Mars",
      "Avril",
      "Mai",
      "Juin",
      "Juillet",
      "Aout",
      "Septembre",
      "Octobre",
      "Novembre",
      "Decembre",
    ],
    monthNamesShort: [
      "Jan",
      "Fev",
      "Mar",
      "Avr",
      "Mai",
      "Jun",
      "Jul",
      "Aou",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    dayNames: [
      "Dimanche",
      "Lundi",
      "Mardi",
      "Mercredi",
      "Jeudi",
      "Vendredi",
      "Samedi",
    ],
    dayNamesShort: ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"],
    dayNamesMin: ["Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa"],
    beforeShow: function (input, inst) {
      var rect = input.getBoundingClientRect();
      setTimeout(function () {
        inst.dpDiv.css({ top: rect.top + 40, left: rect.left + 0 });
      }, 0);
    },
  });
});

// $(document).ready(function () {
//   $("#date").datepicker("setDate", "today");
// });

// $(document).ready(function () {
//   $("#retourDate").datepicker("setDate", "today");
// });

const el = document.querySelector("#trajet");
el?.addEventListener("change", function (e) {
  console.log("executed", e.target.value);
});

$(document).ready(function () {
  $("#time").timepicker({
    // defaultTime: "now",
    timeFormat: "HH:mm",
    interval: 5,
  });
});

$(document).ready(function () {
  $("#retourTime").timepicker({
    // defaultTime: "now",
    timeFormat: "HH:mm",
    interval: 5,
  });
});

//For Hiding and Showing RetourRow

document.getElementById("aller").addEventListener("change", function (e) {
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
