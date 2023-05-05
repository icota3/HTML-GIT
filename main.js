//Client-side form validation

//function for invalid input field
function shakeAndRedBorder(input) {
  if (input.id !== 'exampleFormControlInput3') {
    $(input).effect('shake', { times: 3, distance: 5 }, 500);
  }
  input.classList.add('invalid-input');
}
//remove red border if the input is valid
function removeRedBorder(input) {
  input.classList.remove('invalid-input');
}
//add green border if the input is valid
function addGreenBorder(input) {
  input.classList.add('valid-input');
}
//remove green border if the input is invalid
function removeGreenBorder(input) {
  input.classList.remove('valid-input');
}
//defining event handlers

$(document).ready(function() {
  //HTML5 constraint validation - ValidityState
  $('#exampleFormControlInput1, #exampleFormControlInput2, #exampleFormControlInput3').on('input', function() {
    if (this.validity.valid) {
      //calling the appropriate functions
      removeRedBorder(this);
      addGreenBorder(this);
    } else {
      removeGreenBorder(this);
      shakeAndRedBorder(this);
    }
  });
//event handler before submit
  $('#job_form').on('submit', function(e) {
    e.preventDefault();

    let invalidInput = false;
//for each input field- check validity
    $('#exampleFormControlInput1, #exampleFormControlInput2, #exampleFormControlInput3').each(function() {
      if (!this.validity.valid) {
        shakeAndRedBorder(this);
        invalidInput = true;
      }
    });
//if not invalid, submit the form
    if (!invalidInput) {
      this.submit();
    }
  });
//keypress event handler
  // Allow only numbers and - in Offerer number input
  $('#exampleFormControlInput3').on('keypress', function(e) {
    var key = e.key;

    // Check if the key is not a number or a -
    if (!(/[0-9-]/.test(key))) {
      e.preventDefault();
    }
  });
  $('#exampleFormControlInput3').attr('maxlength', 11);

  // Allow only lowercase letters in the exampleFormControlInput4 input
  $('#exampleFormControlInput4').on('keypress', function(e) {
    var key = e.key;

    // Check if the key is not a lowercase letter
    if (!(/[a-z]/.test(key))) {
      e.preventDefault();
    }
  });
});
//datepicker widget
$(document).ready(function() {
  function setupDatepicker() {
    $("#birthdate").datepicker({
      maxDate: "-19y",
      minDate: "-90y",
      yearRange: "-90:+0",
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true
    });
  }

  setupDatepicker();
});
