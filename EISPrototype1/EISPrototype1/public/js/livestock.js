
// Function to add event listeners to input fields
function addEventListeners() {
    // Get all input fields that affect the subtotal
    var inputFields = document.querySelectorAll('#headQty, #campingChk, #campParkChk, #exParkingChk, #adminFeeOpt, #discountOpt');

    // Add event listener to each input field
    inputFields.forEach(function(inputField) {
        inputField.addEventListener('input', calculateSubtotal);
        inputField.addEventListener('change', calculateSubtotal);
    });
}

// Call the function to add event listeners when the page loads
document.addEventListener('DOMContentLoaded', addEventListeners);

  function calculateHeadFee(){
        var headFeeQty = document.getElementById("headQty").value;       
        
        var CalcHeadFee = headFeeQty * headFee;
        //display total price with 2 decimal places
        document.getElementById("headFeeInp").value = CalcHeadFee.toFixed(2); 
      }
   
   function AddCampingFee() {
      var campingCheckbox = document.getElementById("campingChk");
      var campingInput = document.getElementById("campingInp");
      var campingFee = camping;

      if (campingCheckbox.checked) {
        campingInput.value = (campingFee).toFixed(2);
      } else {
        campingInput.value = ""; // Clear the input field if the checkbox is unchecked
      }
    }

    // Call handleCampingFee function when the camping checkbox state changes
    document.getElementById("campingChk").addEventListener("change", AddCampingFee);

    // Call handleCampingFee initially to ensure correct initial state
    AddCampingFee();
    
       // Function to toggle visibility of elements based on checkbox state
       function toggleVisibility(checkbox, elements) {
        checkbox.addEventListener('change', function() {
            elements.forEach(element => {
                if (checkbox.checked) {
                    element.classList.remove('hidden');
                } else {
                    element.classList.add('hidden');
                }
            });
        });
    }

    // Get checkbox and elements
    const campingChk = document.getElementById('campingChk');
    const campParkChk = document.getElementById('campParkChk');
    const campParkLbl = document.getElementById('campParkLbl');
    const campParkInp = document.getElementById('campParkInp');
    const campLengthLbl = document.getElementById('campLengthLbl');
    const campLengthInp = document.getElementById('campLengthInp');
    

    // Define elements to toggle visibility
    const elementsToToggle = [campParkChk, campParkLbl, campParkInp, campLengthLbl, campLengthInp];

    // Hide elements initially
    elementsToToggle.forEach(element => {
        element.classList.add('hidden');
    });

    // Call the toggleVisibility function with the camping checkbox and elements
    toggleVisibility(campingChk, elementsToToggle);

    function AddCampParkingFee() {
      var campParkCheckbox = document.getElementById("campParkChk");
      var campParkInput = document.getElementById("campParkInp");
      var campParkFee = campPark;

      if (campParkCheckbox.checked) {
        campParkInput.value = (campParkFee).toFixed(2);
      } else {
        campParkInput.value = ""; // Clear the input field if the checkbox is unchecked
      }
    }
    // Call handleCampingFee function when the camping checkbox state changes
    document.getElementById("campParkChk").addEventListener("change", AddCampParkingFee);

    // Call handleCampingFee initially to ensure correct initial state
    AddCampParkingFee();

    function AddExParkingFee() {
      var exParkCheckbox = document.getElementById("exParkingChk");
      var exParkInput = document.getElementById("exParkingInp");
      var exParkFee = exPark;

      if (exParkCheckbox.checked) {
        exParkInput.value = (exParkFee).toFixed(2);
      } else {
        exParkInput.value = ""; // Clear the input field if the checkbox is unchecked
      }
    }
    // Call handleCampingFee function when the camping checkbox state changes
    document.getElementById("exParkingChk").addEventListener("change", AddExParkingFee);

    // Call handleCampingFee initially to ensure correct initial state
    AddExParkingFee();

    function AddAdminFee() {
      var adminFeeOption = document.getElementById("adminFeeOpt");
      var adminFeeInput = document.getElementById("adminFeeInp");
      var adminFee = OPadminFee;

      if (adminFeeOption.checked) {
       adminFeeInput.value = (adminFee).toFixed(2);
      } else {
        adminFeeInput.value = ""; // Clear the input field if the checkbox is unchecked
      }
    }
    // Call handleCampingFee function when the camping checkbox state changes
    document.getElementById("adminFeeOpt").addEventListener("change", AddAdminFee);

    // Call handleCampingFee initially to ensure correct initial state
    AddAdminFee();

    function applyDiscountByDate() {
      // Get the current date
      var currentDate = new Date();

      // Set the date when you want to stop checking the radio button 
      var endDate = new Date('2024-08-05');

      // Check the radio button if the current date is before the end date
      if (currentDate <= endDate) {
        // Access the radio button element
        var discountOpt = document.getElementById('discountOpt');

        // Check the radio button
        discountOpt.checked = true;
      }
    }
    // Call the function when the page loads
    applyDiscountByDate();

    function AddDiscount() {
      var discountOption = document.getElementById("discountOpt");
      var discountInput = document.getElementById("discountInp");
      var discount = - OPdiscount;

      if (discountOption.checked) {
        discountInput.value = (discount).toFixed(2);
      } else {
        discountInput.value = ""; // Clear the input field if the checkbox is unchecked
      }
    }
    // Call handleCampingFee function when the camping checkbox state changes
    document.getElementById("discountOpt").addEventListener("change", AddDiscount);

    // Call handleCampingFee initially to ensure correct initial state
    AddDiscount();

    function calculateSubtotal() {
        // Get values from input fields
      var headFee = parseFloat(document.getElementById('headFeeInp').value);
      var camping = parseFloat(document.getElementById('campingInp').value);
      var campPark = parseFloat(document.getElementById('campParkInp').value);
      var exParking = parseFloat(document.getElementById('exParkingInp').value);
      var adminFee = parseFloat(document.getElementById('adminFeeInp').value);
      var discount = parseFloat(document.getElementById('discountInp').value);

      // Calculate subtotal
      var subtotal = headFee + camping + campPark + exParking + adminFee - discount;

        // Display subtotal
    document.getElementById('subInp').textContent = subtotal.toFixed(2); 
    }

  // Call the function when the page loads
  calculateSubtotal();