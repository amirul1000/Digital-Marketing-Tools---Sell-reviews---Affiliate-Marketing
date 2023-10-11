function customFunc(cID){
    // values to keep track of the number of letters typed, which quote to use. etc. Don't change these values.
var i = 0,
a = 0,
isBackspacing = false,
isParagraph = false;

// Typerwrite text content. Use a pipe to indicate the start of the second line "|".
var textArray = [
"DEMANDER UN DEVIS GRATUIT"
];

// Speed (in milliseconds) of typing.
var speedForward = 100, //Typing Speed
speedWait = 2000, // Wait between typing and backspacing
speedBetweenLines = 1000, //Wait between first and second lines
speedBackspace = 25; //Backspace Speed

//Run the loop
let count = 0;
typeWriter("output", textArray);

function typeWriter(id, ar) {
var element = $("#" + id),
  aString = ar[a],
  eHeader = $(`#${cID}`), //Header element
  eParagraph = $("#p2"); //Subheader element

// Determine if animation should be typing or backspacing
if (!isBackspacing) {
  // If full string hasn't yet been typed out, continue typing
  if (i < aString.length) {
    // If character about to be typed is a pipe, switch to second line and continue.
    if (aString.charAt(i) == "|") {
      isParagraph = true;
      eHeader.removeClass("cursor");
      eParagraph.addClass("cursor");
      eHeader.html(eHeader.text() + "<br>");
      i++;
      count++;
      setTimeout(function () {
        typeWriter(id, ar);
      }, speedBetweenLines);

      // If character isn't a pipe, continue typing.
    } else {
      // Type header or subheader depending on whether pipe has been detected
      if (!isParagraph) {
        eHeader.text(eHeader.text() + aString.charAt(i));
      } else {
        eParagraph.text(eParagraph.text() + aString.charAt(i));
      }
      i++;
      setTimeout(function () {
        typeWriter(id, ar);
      }, speedForward);
    }

    // If full string has been typed, switch to backspace mode.
  } else if (i == aString.length) {
    isBackspacing = true;
    setTimeout(function () {
      typeWriter(id, ar);
    }, speedWait);
  }

  // If backspacing is enabled
} else {
  // If either the header or the paragraph still has text, continue backspacing
  if (eHeader.text().length > 0 || eParagraph.text().length > 0) {
    // If paragraph still has text, continue erasing, otherwise switch to the header.
    if (eParagraph.text().length > 0) {
      eParagraph.text(
        eParagraph.text().substring(0, eParagraph.text().length - 1)
      );
    } else if (eHeader.text().length > 0) {
      eParagraph.removeClass("cursor");
      eHeader.addClass("cursor");
      eHeader.text(eHeader.text().substring(0, eHeader.text().length - 1));
    }
    setTimeout(function () {
      typeWriter(id, ar);
    }, speedBackspace);

    // If neither head or paragraph still has text, switch to next quote in array and start typing.
  } else {
    isBackspacing = false;
    i = 0;
    isParagraph = false;
    a = (a + 1) % ar.length; //Moves to next position in array, always looping back to 0
    setTimeout(function () {
      typeWriter(id, ar);
    }, 50);
  }
}
}


}


setTimeout(()=>{
    customFunc('typing_button');
    customFunc('typing_button_testimonials');
    customFunc('typing_button_faq');
    customFunc('typing_button_zones');
    customFunc('typing_button_chauffeurs');
    customFunc('typing_button_vehicules');
},1000)

// function customFunc() {
//     // values to keep track of the number of letters typed, which quote to use, etc. Don't change these values.
//     var i = 0,
//       a = 0,
//       isBackspacing = false,
//       isParagraph = false;
  
//     // Typewriter text content. Use a pipe to indicate the start of the second line "|".
//     var textArray = [    "DEMANDER UN DEVIS GRATUIT"  ];
  
//     // Speed (in milliseconds) of typing.
//     var speedForward = 100, //Typing Speed
//       speedWait = 2000, // Wait between typing and backspacing
//       speedBetweenLines = 1000, //Wait between first and second lines
//       speedBackspace = 25; //Backspace Speed
  
//     // Run the loop
//     let count = 0;
//     typeWriter("output");
  
//     function typeWriter(className) {
//       var elements = document.getElementsByClassName(className),
//         aString = textArray[a],
//         eHeader = elements[count].querySelector(".typing_button"), //Header element
//         eParagraph = elements[count].querySelector(".p2"); //Subheader element
  
//       // Determine if animation should be typing or backspacing
//       if (!isBackspacing) {
//         // If full string hasn't yet been typed out, continue typing
//         if (i < aString.length) {
//           // If character about to be typed is a pipe, switch to second line and continue.
//           if (aString.charAt(i) == "|") {
//             isParagraph = true;
//             eHeader.classList.remove("cursor");
//             eParagraph.classList.add("cursor");
//             eHeader.innerHTML += "<br>";
//             i++;
//             count++;
//             setTimeout(function () {
//               typeWriter(className);
//             }, speedBetweenLines);
  
//             // If character isn't a pipe, continue typing.
//           } else {
//             // Type header or subheader depending on whether pipe has been detected
//             if (!isParagraph) {
//               eHeader.textContent += aString.charAt(i);
//             } else {
//               eParagraph.textContent += aString.charAt(i);
//             }
//             i++;
//             setTimeout(function () {
//               typeWriter(className);
//             }, speedForward);
//           }
  
//           // If full string has been typed, switch to backspace mode.
//         } else if (i == aString.length) {
//           isBackspacing = true;
//           setTimeout(function () {
//             typeWriter(className);
//           }, speedWait);
//         }
  
//         // If backspacing is enabled
//       } else {
//         // If either the header or the paragraph still has text, continue backspacing
//         if (eHeader.textContent.length > 0 || eParagraph.textContent.length > 0) {
//           // If paragraph still has text, continue erasing, otherwise switch to the header.
//           if (eParagraph.textContent.length > 0) {
//             eParagraph.textContent = eParagraph.textContent.substring(0, eParagraph.textContent.length - 1);
//           } else if (eHeader.textContent.length > 0) {
//             eParagraph.classList.remove("cursor");
//             eHeader.classList.add("cursor");
//             eHeader.textContent = eHeader.textContent.substring(0, eHeader.textContent.length - 1);
//           }
//           setTimeout(function () {
//             typeWriter(className);
//           }, speedBackspace);
  
//           // If neither head or paragraph still has text, switch to next quote in array and start typing.
//         } else {
//           isBackspacing = false;
//           i = 0;
//           isParagraph = false;
//           a = (a + 1) % textArray.length; //Moves to next position in array, always looping back to 0
//           setTimeout(function () {
//             typeWriter(id, ar);
//           }, 50);
//         }
//       }
//     }
// }  

// setTimeout(()=>{
//     customFunc();
// },1000)