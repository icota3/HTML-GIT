$(document).ready(function() {
    // Function to add shake effect and red border to invalid inputs
    function shakeAndRedBorder(input) {
      if (input.id !== 'exampleFormControlInput3') {
        $(input).effect('shake', { times: 3, distance: 5 }, 500);
      }
      $(input).addClass('invalid-input');
    }
    
  
    // Function to remove shake effect and red border from valid inputs
    function removeRedBorder(input) {
      $(input).removeClass('invalid-input');
    }
  
    // Function to add green border to valid inputs
    function addGreenBorder(input) {
      $(input).addClass('valid-input');
    }
  
    // Function to remove green border from invalid inputs
    function removeGreenBorder(input) {
      $(input).removeClass('valid-input');
    }
  
    // Add event listeners to input fields
    $('#exampleFormControlInput1, #exampleFormControlInput2, #exampleFormControlInput3').on('input', function() {
      if (this.validity.valid) {
        removeRedBorder(this);
        addGreenBorder(this);
      } else {
        removeGreenBorder(this);
        shakeAndRedBorder(this);
      }
    });
  
    // Add event listener to form submission
    $('#job_form').on('submit', function(e) {
      e.preventDefault();
  
      let invalidInput = false;
  
      // Check each input for validity
      $('#exampleFormControlInput1, #exampleFormControlInput2, #exampleFormControlInput3').each(function() {
        if (!this.validity.valid) {
          shakeAndRedBorder(this);
          invalidInput = true;
        }
      });
  
      // If all inputs are valid, submit the form
      if (!invalidInput) {
        this.submit();
      }
    });
  
    // Allow only numbers and hyphens in Offerer number input
    $('#exampleFormControlInput3').on('keypress', function(e) {
      var key = e.key;
  
      // Check if the key is not a number or a hyphen
      if (!(/[0-9-]/.test(key))) {
        e.preventDefault();
      }
    });
    $('#exampleFormControlInput3').attr('maxlength', 11);
  
    // Set up the datepicker for the birthdate input
    $("#birthdate").datepicker({
      maxDate: "-1d",
      minDate: "-90y",
      yearRange: "-90:+0",
      changeMonth: true,
      changeYear: true,
      showOtherMonths: true,
      selectOtherMonths: true
    });
  });
  