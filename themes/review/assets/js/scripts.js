"use strict";

// $jQuery("#booking-form").validate({
//   rules: {
//     firstName: "required",
//   },
//   messgaes: {
//     firstName: "Please fill",
//   },
// });

$(document).on("ready", function () {
  initParallax();
  initEvents();
  initMasonry();
  initMap();
  initCollapseMenu();
  initBookingForm();
  initContactForms();

  /* You can disable srollanimation by removing next function */
  checkScrollAnimation();
  $(function () {
    $(".matchHeight").matchHeight();
  });
  $(".accordion").accordion();
  $(".tabs-ui").tabs();

  /* Lightbox plugin */
  $(".swipebox").swipebox();

  $(".navbar-affix").affix({
    offset: {
      top: $("#top-bar").height() + 100,
    },
  });

  initSwiper();
});

$(window)
  .on("scroll", function (event) {
    checkNavbar();
    checkCountUp();
    checkScrollAnimation();
    initProgressBar();
  })
  .scroll();

/* Parallax fix on window resize */
$(window).on("resize", function () {
  initParallax();
});

$(window).on("load", function () {
  initMasonry();
});

/* Collapse menu slide */
function initCollapseMenu() {
  var navbar = $("#navbar"),
    navbar_toggle = $(".navbar-toggle"),
    navbar_wrapper = $("#nav-wrapper");

  navbar_wrapper.on("click", ".navbar-toggle", function (e) {
    console.log("!!!");
    document.querySelector(".mobile-dropdown").classList.remove("active");

    navbar_toggle.toggleClass("collapsed");
    navbar.toggleClass("collapse");
  });

  navbar_wrapper.on("click", ".hasSub > a", function () {
    var el = $(this);

    el.next().toggleClass("show");
    el.parent().toggleClass("show");
    return false;
  });

  var lastWidth;
  $(window).on("resize", function () {
    var winWidth = $(window).width();

    if (winWidth > 1199 && navbar_toggle.is(":hidden")) {
      navbar.addClass("collapse");
      navbar_toggle.addClass("collapsed");
    }

    lastWidth = winWidth;
  });
}

/* All keyboard and mouse events */
function initEvents() {
  $(".menu-types").on("click", "a", function () {
    $(this).addClass("active").siblings(".active").removeClass("active");
    $(this).parent().find(".type-value").val($(this).data("value"));

    return false;
  });

  /* Scrolling to navbar from "go top" button in footer */
  $("footer").on("click", ".go-top", function () {
    $("html, body").animate({ scrollTop: 0 }, 800);
  });
}

/* Parallax initialization */
function initParallax() {
  // Only for desktop
  if (/Mobi/.test(navigator.userAgent)) return false;

  $(".parallax").parallax("50%", 0.1);
}

/* Swiper slider initialization */
function initSwiper() {
  /* Slider for clients on main page */

  var clientsSwiper = new Swiper("#testimonials-slider", {
    direction: "horizontal",

    speed: 1000,
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",

    autoplay: 7000,
    autoplayDisableOnInteraction: false,
  });

  var clientsSwiper2 = new Swiper("#services-slider", {
    direction: "horizontal",

    speed: 1000,
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",

    // autoplay: 7000,
    autoplayDisableOnInteraction: false,
  });

  /* Slider for inner pages */
  var innerSwiper = new Swiper(".slider-inner", {
    direction: "horizontal",
    pagination: ".swiper-pagination",
    paginationClickable: true,
    autoplay: 4000,
    autoplayDisableOnInteraction: false,
  });

  $(window)
    .on("resize", function () {
      var ww = $(window).width();
      if ($("#testimonials-slider").length) {
        if (ww > 1000) {
          clientsSwiper.params.slidesPerView = 3;
        //   clientsSwiper2.params.slidesPerView = 3;

        }
        if (ww <= 1000) {
          clientsSwiper.params.slidesPerView = 2;
        //   clientsSwiper2.params.slidesPerView = 2;

        }
        if (ww <= 479) {
          clientsSwiper.params.slidesPerView = 1;
        //   clientsSwiper2.params.slidesPerView = 1;

        }

        clientsSwiper.update();
        // clientsSwiper2.update();

      }
    })
    .resize();
}

/* Masonry initialization */
function initMasonry() {
  $(".masonry").masonry({
    itemSelector: ".item",
    columnWidth: ".item",
  });
}

/* Animated progress bar */
function initProgressBar() {
  var block = $(".progressItems");

  if (block.length) {
    var scrollTop = block.offset().top - window.innerHeight;

    if (!block.data("counted") && $(window).scrollTop() > scrollTop) {
      /* Initialized once */
      $(".progressBar").each(function (i, el) {
        progressBar(parseInt($(el).find(".value").html(), 10), $(el));
      });

      block.data("counted", 1);
    }
  }
}

function progressBar(percent, $element) {
  var progressBarWidth = (percent * $element.width()) / 100;
  $element.find(".bar div").animate({ width: progressBarWidth }, 1000);
}

/* Scroll animation used for landing page */
function checkScrollAnimation() {
  var scrollBlock = $("#car-block");
  if (scrollBlock.length) {
    var scrollTop = scrollBlock.offset().top - window.innerHeight + 100;

    if (!scrollBlock.data("done") && $(window).scrollTop() > scrollTop) {
      $("#car-block .animation-block img").addClass("slideleft");
      scrollBlock.data("done", 1);
    }
  }
}

/* Starting countUp function on landing page */
function checkCountUp() {
  var countBlock = $(".skills");
  if (countBlock.length) {
    var scrollTop = countBlock.offset().top - window.innerHeight;

    if (!countBlock.data("counted") && $(window).scrollTop() > scrollTop) {
      /* Initialized once */
      for (var x = 1; x <= 4; x++) {
        var numAnim = new CountUp("countUp-" + x, 1, $("#countUp-" + x).html());
        numAnim.start();
      }

      countBlock.data("counted", 1);
    }
  }
}

/* Navbar is set darker on main page on scroll */
function checkNavbar() {
  var scroll = $(window).scrollTop(),
    navBar = $("nav.navbar"),
    slideDiv = $(".slider-full");

  if (scroll > 1) navBar.addClass("dark");
  else navBar.removeClass("dark");
}

/* Ajax Contact Form */
function initBookingForm() {
//   var formEl = $(".form-validate");
  var formEl = $("#booking-form");

  formEl.validate({
    submitHandler: function (form) {
      var queryString = $(formEl).serialize();
      var _token = $(".actionForm").find("input[name=token]").val();
      if (typeof _token == "undefined") {
        queryString = queryString + '&' + $.param({token:token});
      }
      var formAction = formEl.attr('action');
      console.log(formAction);
      console.log(JSON.stringify(queryString));
      console.log("Form submitted");
      jQuery.ajax({
        data: queryString,
        url: formAction,
        // url: "send_email.php",
        type: "POST",
        complete: function () {},
        success: function (data) {
          console.log("Reseted");
          resetBookingForm();
        },
        error: function (data) {
          console.log("Error:", data);
          resetBookingForm();
        },
      });
      //   $.post("_ajax_send.php", queryString, function (answer) {
      //     if (answer) {
      //       formEl.html('<div class="warning">' + answer + "</div>");
      //     }
      //   });
    },
  });
}
function initContactForms() {
  var formEl = $(".form-validated");

  formEl.validate({
    submitHandler: function (form) {
      var queryString = $(formEl).serialize();
      console.log(queryString);
      jQuery.ajax({
        data: queryString,
        url: "send_email.php",
        type: "POST",
        complete: function () {},
        success: function (data) {
          resetContactForm();
        },
        error: function (data) {
          console.log("Error:", data);
          resetContactForm();
        },
      });
      //      $.post("_ajax_send.php", queryString, function (answer) {
      //       if (answer) {
      //          console.log(answer);

      //          formEl.html('<div class="warning">' + answer + "</div>");
      //       }
      //      });

      //   $.post("_ajax_send.php", queryString, function (answer) {
      //      if (answer) {
      //       console.log(answer);

      //       formEl.html('<div class="warning">' + answer + "</div>");
      //      }
      //   });
    },
  });
}

////Reset Forms
function resetContactForm() {
  var civilite = document.getElementById("civilite");
  var name = document.getElementById("firstName");
  var lastname = document.getElementById("lastName");
  var email = document.getElementById("email");
  var number = document.getElementById("number");
  var text = document.getElementById("text");
  civilite.selectedIndex = 0;
  name.value = "";
  lastname.value = "";
  email.value = "";
  number.value = "";
  text.value = "";
}

function resetBookingForm() {
  var serviceType = document.getElementById("c_services");
  var priority = document.getElementById("priority");
//   var trajet = document.getElementById("trajet");
//   var passengers = document.getElementById("mypassengers");
//   var chairs = document.getElementById("chairs");
//   var lugages = document.getElementById("lugages");
//   var aller = document.getElementById("aller");
//   var address = document.getElementById("address");
//   var to = document.getElementById("to");
//   var date = document.getElementById("date");
//   var time = document.getElementById("time");
//   var retourDate = document.getElementById("retourDate");
//   var retourTime = document.getElementById("retourTime");
  var civility = document.getElementById("civility");
  var phone = document.getElementById("phoneNumber");
  var bookemail = document.getElementById("bookemail");
  var firstName = document.getElementById("b_firstName");
  var lastName = document.getElementById("b_lastName");
  var company = document.getElementById("company");
  var orderID = document.getElementById("order_id");
  var Commentaire = document.getElementById("Commentaire");
  var robotAnswer = document.getElementById("robot_answer");
  var success = document.querySelector(".message .send-success");
  var error = document.querySelector(".message .send-error");

  console.log("This is commentainer", Commentaire);

    var retourRow = document.querySelector(".retourRow");
    if (retourRow && retourRow.classList.contains("active"))
        retourRow.classList.remove("active");
    serviceType.selectedIndex = 0;
    priority.selectedIndex = 0;
    // trajet.selectedIndex = 1;
    // passengers.selectedIndex = 0;
    // chairs.selectedIndex = 0;
    // lugages.selectedIndex = 0;
    // aller.selectedIndex = 0;
    civility.selectedIndex = 0;
    // address.value = "";
    // to.value = "";
    phone.value = "";
    bookemail.value = "";
    firstName.value = "";
    lastName.value = "";
    company.value = "";
    orderID.value = "";
    Commentaire.value = "";
    robotAnswer.value = null;
    // date.value = "";
    // time.value = "";
    // retourDate.value = "";
    // retourTime.value = "";
    console.log("Done Bro");
}

/* Google maps init */
function initMap() {
  var mapEl = $("#map");
  if (mapEl.length) {
    var uluru = { lat: mapEl.data("lat"), lng: mapEl.data("lng") };
    var map = new google.maps.Map(document.getElementById("map"), {
      zoom: mapEl.data("zoom"),
      center: uluru,
      scrollwheel: false,
      styles: mapStyles,
    });

    var marker = new google.maps.Marker({
      position: uluru,
      icon: base_href + "assets/images/location-black.png",
      map: map,
    });
  }
}

