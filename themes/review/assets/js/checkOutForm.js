$( document ).ready(function() {
  $( "#o_expiryDate" ).datepicker();
});

$.validator.setDefaults({
    submitHandler: function() {
      alert("submitted!");
    }
  });

  $().ready(function() {
    // validate the comment form when it is submitted
    $("#checkoutForm").validate();
    $("#loginForm").validate();
  });


  $(document).ready(function() {
    $('#reviewType').change(function() {
      if ($(this).val() == 'Custom') {
        $('#customReview').show();
      } else {
        $('#customReview').hide();
      }
    });
  });

  function startTimer(duration, display) {
    var timer = duration, hours, minutes, seconds;
    setInterval(function () {
      hours = parseInt(timer / 3600, 10);
      minutes = parseInt((timer % 3600) / 60, 10);
      seconds = parseInt(timer % 60, 10);
  
      hours = hours < 10 ? "0" + hours : hours;
      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;
  
      display.querySelector('.hours').textContent = hours;
      display.querySelector('.minutes').textContent = minutes;
      display.querySelector('.seconds').textContent = seconds;
  
      if (--timer < 0) {
        timer = duration;
      }
    }, 1000);
  }
  
  window.onload = function () {
    var display = document.querySelector('.countdown');
    if(display)
        startTimer(24 * 60 * 60, display);
  };




  var totalSeconds = 24 * 60 * 60;
    
    function pad(number) {
      // add a leading zero if the number is less than 10
      return (number < 10 ? '0' : '') + number;
    }
    
    function updateTimer() {
      // calculate the remaining hours, minutes, and seconds
      var days = 00;
      var hours = Math.floor(totalSeconds / 3600);
      var minutes = Math.floor((totalSeconds % 3600) / 60);
      var seconds = Math.floor(totalSeconds % 60);
      
      // display the remaining time in the format hh:mm:ss
      if (document.getElementById('whiteTimer')) {
        document.getElementById('whiteTimer').innerHTML = pad(days) + ':' + pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);
      }
      
      // decrease the total seconds by 1 every second
      totalSeconds--;
      
      // stop the timer when it reaches 0
      if (totalSeconds < 0) {
        clearInterval(timer);
        if (document.getElementById('whiteTimer')) {
            document.getElementById('whiteTimer').innerHTML = '00:00:00:00';
        }
      }
    }
    
    // update the timer every second
    var timer = setInterval(updateTimer, 1000);
  


    // Get the timer elements from the DOM
    const daysElement = document.querySelector(".flip-countdown-timer__days");
    const hoursElement = document.querySelector(".flip-countdown-timer__hours");
    const minutesElement = document.querySelector(".flip-countdown-timer__minutes");
    const secondsElement = document.querySelector(".flip-countdown-timer__seconds");
    
    const daysElement2 = document.querySelector(".flip-countdown-timer__days2");
    const hoursElement2 = document.querySelector(".flip-countdown-timer__hours2");
    const minutesElement2 = document.querySelector(".flip-countdown-timer__minutes2");
    const secondsElement2 = document.querySelector(".flip-countdown-timer__seconds2");


    // Timers for Package section



    // Set the end time to 24 hours from now
    const endTime = new Date().getTime() + 24 * 60 * 60 * 1000;

    // Update the timer every seconds
    setInterval(() => {
      // Get the current time
      const currentTime = new Date().getTime();
    
      // Calculate the remaining time
      const remainingTime = endTime - currentTime;
    
      // Calculate the number of days, hours, minutes, and seconds
      const days = Math.floor(remainingTime / (24 * 60 * 60 * 1000));
      const hours = Math.floor((remainingTime % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
      const minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
      const seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
    
      // Update the timer elements
      if(daysElement)
          daysElement.textContent = days < 10 ? `0${days}` : days;
      if(hoursElement)
          hoursElement.textContent = hours < 10 ? `0${hours}` : hours;
      if(minutesElement)
          minutesElement.textContent = minutes < 10 ? `0${minutes}` : minutes;
      if(secondsElement)
          secondsElement.textContent = seconds < 10 ? `0${seconds}` : seconds;
    
      if(daysElement2)
          daysElement2.textContent = days < 10 ? `0${days}` : days;
      if(hoursElement2)
          hoursElement2.textContent = hours < 10 ? `0${hours}` : hours;
      if(minutesElement2)
          minutesElement2.textContent = minutes < 10 ? `0${minutes}` : minutes;
      if(secondsElement2)
          secondsElement2.textContent = seconds < 10 ? `0${seconds}` : seconds;
    
    
    
      // Check if the timer has reached 00
      if (remainingTime <= 0) {
        daysElement.textContent = "00";
        hoursElement.textContent = "00";
        minutesElement.textContent = "00";
        secondsElement.textContent = "00";
    
        daysElement2.textContent = "00";
        hoursElement2.textContent = "00";
        minutesElement2.textContent = "00";
        secondsElement2.textContent = "00";
    
      }
    }, 1000);


    var seconds = 600; // 10 minutes in seconds

    function countdown() {
        var timer = document.getElementById("countdown2");
        var minutes = Math.floor(seconds / 60);
        var remainingSeconds = seconds % 60;

        if (remainingSeconds < 10) {
          remainingSeconds = "0" + remainingSeconds;
        }

        if (timer) 
            timer.textContent = minutes + ":" + remainingSeconds;

        if (seconds === 0) {
          clearInterval(interval);
          timer.textContent = "Time's up!";
        } else {
          seconds--;
        }
    }

    var interval = setInterval(countdown, 1000);



    const timerElements = document.querySelectorAll(".packageTimer");

    // Loop through each timer element and set the end time and update the timer every second
    timerElements.forEach((timer) => {
      // Get the timer elements
      const daysElement = timer.querySelector(".flip-countdown-timer__days3");
      const hoursElement = timer.querySelector(".flip-countdown-timer__hours3");
      const minutesElement = timer.querySelector(".flip-countdown-timer__minutes3");
      const secondsElement = timer.querySelector(".flip-countdown-timer__seconds3");
    
      // Set the end time to 24 hours from now
      const endTime = new Date().getTime() + 24 * 60 * 60 * 1000;
    
      // Update the timer every second
      setInterval(() => {
        // Get the current time
        const currentTime = new Date().getTime();
    
        // Calculate the remaining time
        const remainingTime = endTime - currentTime;
    
        // Calculate the number of days, hours, minutes, and seconds
        const days = Math.floor(remainingTime / (24 * 60 * 60 * 1000));
        const hours = Math.floor((remainingTime % (24 * 60 * 60 * 1000)) / (60 * 60 * 1000));
        const minutes = Math.floor((remainingTime % (60 * 60 * 1000)) / (60 * 1000));
        const seconds = Math.floor((remainingTime % (60 * 1000)) / 1000);
    
        // Update the timer elements
        daysElement.textContent = days < 10 ? `0${days}` : days;
        hoursElement.textContent = hours < 10 ? `0${hours}` : hours;
        minutesElement.textContent = minutes < 10 ? `0${minutes}` : minutes;
        secondsElement.textContent = seconds < 10 ? `0${seconds}` : seconds;
    
        // Check if the timer has reached 00
        if (remainingTime <= 0) {
          daysElement.textContent = "00";
          hoursElement.textContent = "00";
          minutesElement.textContent = "00";
          secondsElement.textContent = "00";
        }
      }, 1000);
    });
    
    
    // Show price on package slect
    function displayPrice(){
      document.querySelector('#priceRowForm').classList.add('active');
    }