

@extends('layouts.livestockLayout')

@extends('layouts.nav')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxen Pulls Entry Form</title>
   
</head>
<body>
  <?php 
    $headFee = 10;
    $camping = 80;
    $campPark = 20;
    $exPark = 10;
    $adminFee = 20;
    $discount = 20;
    $passes = 15;
  ?>
  <div class="wholeForm">
    <form action="" method="post">
    <table class="formTable text-center">
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div><br></div>
            <h1 class="heading1">Oxen Pulls Entry Form</h1>
            <div><br></div>
            <div><br></div>
            <h3 class="heading3">Entries Due by August 5th</h3>
            <div><br></div>
            <h3 class="heading3">All fields marked with a <b class="star">*</b> are required.</h3>
            <div><br></div>
          </td>
        </tr>
        
      </tbody>
    </table>
    
    <table class="formTable text-center entryInfo">
      <thead>
        <tr>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr> 
          <td>
            <div class="row mb-3">
              <label for="OwnerFirstName" class="col-sm-2 col-form-label textFieldLbl">Owner's First Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control textFieldInp" id="OwnersFirstName" placeholder="First Name">
              </div>
            </div>
          </td>
          
          <td>
            <div class="row mb-3">
              <label for="OwnerLNameInp" class="col-sm-2 col-form-label textFieldLbl">Owner's Last Name</label>
              <div class="col-sm-4">
                <input type="text" class="form-control textFieldInp" id="OwnersLNameInp" placeholder="Last Name">
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td>
            <div><br></div>   
            <div class="row mb-3">
                <label for="ExhibitorsInsurance" class="col-sm-2 col-form-label numFieldLbl">Exhibitor's Insurance</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control numFieldInp" id="ExhibitorsInsurance" placeholder="Membership Number">
            </div>
          </td>
          
          <td>
            <div class="row mb-3">
              <label for="OwnerInsurance" class="col-sm-2 col-form-label numFieldLbl">Owner's Insurance</label>
              <div class="col-sm-4">
                <input type="text" class="form-control numFieldInp" id="OwnersInsurance" placeholder="Membership Number">
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    </form>
    
    <div><br></div>

    <div class="container text-center">
      <h3 class="heading3"><bold>REGISTRATION NOT COMPLETE WITHOUT PROOF OF INSURANCE</bold></h3>
    </div>

    <div><br></div>
    <form action="" method="post">

    <table class="pricerow">
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>

      <tr>  
        <td class="col1">
          <label for="headQty" class="col-sm-5 col-form-label priceLbl">Number of Oxen<bold class="star">*</bold></label></td>

        <td class="col2">
          <input type="number" class="form-control Qty" id="headQty" min="2" value="" oninput="calculateHeadFee()">
        </td>

        <td rowspan="25" class="col4">
          <h5 class="text-center"><bold>Includes One Free Exhibitor Pass with Registration</bold></h5>
          <br>

          <h5 class="text-center"><bold> 1 Team -  may purchase 1 attendants pass
          <br><br>
            2 or more Teams - may purchase up to 3 attendants passes</bold></h5>
          <br>
        
          <h7> E-transfers ONLY accepted at: manager@annapolisvalleyexhibition.com <br>
              Please include Entry Name in Notes for identification.</h7>
          <br><br>
    
          <h8>Cheques payable to: (no post-dated cheques) <br>
              Annapolis Valley Exhibition, 570 Main St, Box 100,<br> 
              Lawrencetown, NS  B0S 1M0, Phone: (902)584-3339</h8>
          <br><br>
    
          <h8>Exhibitor Declaration: <br>
            I hereby certify that every animal is eligible as entered and agree for myself and my representatives to be bound by the rules of this Exhibition. It is hereby recognized that competition and displays of livestock involve inherent risk. I hereby accept that risk and hold harmless the Annapolis Valley Exhibition, the Annapolis County Federation of Agriculture, this competition, their officials, organizers, employees and their representatives from and against all claims including injury or loss resulted, directly or indirectly, from negligent acts or omissions of said officials, directors, employees or agents of the Annapolis Valley Exhibition Society. I certify that I have read the rules and regulations and agree to abide by them.</h8>
            <br><br>
                  
            <input class="form-check-input " type="checkbox" value="" id="readAndAgreeChk">
            
            <label class="form-check-label " for="campingChk" id="readAndAgreeLbl"><bold class="star">*</bold> I have read and agree to the exhibitor declaration.</label>

            <br><br>

            <label for="signature" class="col-sm-5 col-form-label priceLbl text-centre" id="signatureLbl">Signature (Parent/Guardian if Minor)</label>
         
        </td>
      </tr>

      <tr>
        <td class="col1">
          <label for="headFeeInp" class="col-sm-5 col-form-label priceLbl">Head Fee: $<?= $headFee ?></label>
        </td>

        <td class="col2">
          <input type="text" class="form-control price" id="headFeeInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr> 
        <td class="col1">
          <input class="form-check-input " type="checkbox" value="" id="campingChk">
        
          <label class="form-check-label priceLbl" for="campingChk" id="campingLbl">Camping $<?= $camping ?></label>
        </td>
        
        <td class="col2">
          <input type="text" class="form-control price" id="campingInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <label for="campLengthInp" class="col-sm-5 col-form-label priceLbl hidden" id="campLengthLbl">Camper Length (including hitch)</label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price hidden" id="campLengthInp" placeholder="25 feet" >
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <label for="campWidthInp" class="col-sm-5 col-form-label priceLbl hidden" id="campWidthLbl">Camper Width (including slide outs)</label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price hidden" id="campWidthInp" placeholder="10 feet" >
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <input class="form-check-input hidden" type="checkbox" value="" id="campParkChk">

          <label class="form-check-label priceLbl" for="campParkChk" id="campParkLbl">Camping Parking $<?= $campPark ?></label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price" id="campParkInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <input class="form-check-input " type="checkbox" value="" id="exParkingChk">
          <label class="form-check-label priceLbl" for="defaultCheck1 ExPark">Exhibitor Parking $<?= $exPark ?></label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price" id="exParkingInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class=" col1">
          <input class="form-check-input entriesRadio" id="adminFeeOpt" type="radio" name="adminFee" value="true" checked>

          <label class="form-check-label priceLbl" for="adminFee" id="adminFeeLbl">Administration Fee $<?= $adminFee ?></label>
        </td>
        
        <td class="col2">
          <input type="text" class="form-control price" id="adminFeeInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <input class="form-check-input entriesRadio" id="discountOpt" type="radio" name="discount" value="true">

          <label class="form-check-label priceLbl" id="discountLbl" for="discount">Discount (Until August 5th) <bold>-</bold>$<?= $discount ?></label>
        </td>
                    
        <td class="col2">
          <input type="text" class="form-control price" id="discountInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <label for="subtotal" class="col-sm-5 col-form-label priceLbl " id="subLbl">Subtotal</label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price " id="subInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <label for="hst" class="col-sm-5 col-form-label priceLbl " id="hstLbl">Tax 15% HST#817711682RT0001</label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price " id="hstInp" placeholder="$0.00" readonly>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <label for="passes" class="col-sm-5 col-form-label priceLbl " id="passLbl">Attendants Passes $<?= $passes ?> each</label>
        </td>
          
        <td class="col2">
          <select class="form-select dropdown" id="passLst" aria-label="Default select example">
            <option selected>Passes</option>
            <option value="<?= $passes ?>">One $<?= $passes ?></option>
            <option value="<?= $passes * 2 ?>">Two $<?= $passes * 2 ?></option>
            <option value="<?= $passes * 3 ?>">Three $<?= $passes * 3 ?></option>
          </select>
        </td>
      </tr>

      <tr>  
        <td class="col1">
          <label for="total" class="col-sm-5 col-form-label priceLbl " id="totalLbl">Total Due</label>
        </td>
          
        <td class="col2">
          <input type="text" class="form-control price " id="totalInp" placeholder="$0.00" readonly>
        </td>
      </tr>
  
    </table>
    <br>
    <div class="Button">
    <button type="button" class="btn btn-primary btn-lg submitBtn">Submit</button>
    <div>
      <br>
    </form>
    
    <script>

      // Call the function to add event listeners when the page loads
      document.addEventListener('DOMContentLoaded', addEventListeners);
    
      function calculateHeadFee(){
            var headFeeQty = document.getElementById("headQty").value;       
            
            var CalcHeadFee = headFeeQty * <?= $headFee ?>;
            //display total price with 2 decimal places
            document.getElementById("headFeeInp").value = CalcHeadFee.toFixed(2); 
            calculateSubtotal(); // Trigger subtotal calculation
    
          }
       
       function AddCampingFee() {
          var campingCheckbox = document.getElementById("campingChk");
          var campingInput = document.getElementById("campingInp");
          var campingFee = <?= $camping ?>;
    
          if (campingCheckbox.checked) {
            campingInput.value = (campingFee).toFixed(2);
          } else {
            campingInput.value = ""; // Clear the input field if the checkbox is unchecked
            campingFee = 0; //set campingFee to 0 if the checkbox is unchecked
          }
           // Recalculate subtotal
            calculateSubtotal();
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
          const campWidthLbl = document.getElementById('campWidthLbl');
          const campWidthInp = document.getElementById('campWidthInp');
          
      
          // Define elements to toggle visibility
          const elementsToToggle = [campParkChk, campParkLbl, campParkInp, campLengthLbl, campLengthInp, campWidthLbl, campWidthInp];
    
        // Hide elements initially
        elementsToToggle.forEach(element => {
            element.classList.add('hidden');
        });
    
        // Call the toggleVisibility function with the camping checkbox and elements
        toggleVisibility(campingChk, elementsToToggle);
    
        function AddCampParkingFee() {
          var campParkCheckbox = document.getElementById("campParkChk");
          var campParkInput = document.getElementById("campParkInp");
          var campParkFee = <?= $campPark ?>;
    
          if (campParkCheckbox.checked) {
            campParkInput.value = (campParkFee).toFixed(2);
          } else {
            campParkInput.value = ""; // Clear the input field if the checkbox is unchecked
            campParkFee = 0;
          }
            // Recalculate subtotal
            calculateSubtotal();
        }
        // Call handleCampingFee function when the camping checkbox state changes
        document.getElementById("campParkChk").addEventListener("change", AddCampParkingFee);
    
        // Call handleCampingFee initially to ensure correct initial state
        AddCampParkingFee();
    
        function AddExParkingFee() {
          var exParkCheckbox = document.getElementById("exParkingChk");
          var exParkInput = document.getElementById("exParkingInp");
          var exParkFee = <?= $exPark ?>;
    
          if (exParkCheckbox.checked) {
            exParkInput.value = (exParkFee).toFixed(2);
          } else {
            exParkInput.value = ""; // Clear the input field if the checkbox is unchecked
            exParkFee = 0;
          }
          // Recalculate subtotal
          calculateSubtotal();
        }
        // Call handleCampingFee function when the camping checkbox state changes
        document.getElementById("exParkingChk").addEventListener("change", AddExParkingFee);
    
        // Call handleCampingFee initially to ensure correct initial state
        AddExParkingFee();
    
        function AddAdminFee() {
          var adminFeeOption = document.getElementById("adminFeeOpt");
          var adminFeeInput = document.getElementById("adminFeeInp");
          var adminFee = <?= $adminFee ?>;
    
          if (adminFeeOption.checked) {
           adminFeeInput.value = (adminFee).toFixed(2);
          } else {
            adminFeeInput.value = ""; // Clear the input field if the checkbox is unchecked
            adminFee = 0;
          }
          // Recalculate subtotal
          calculateSubtotal();
        }
        // Call handleCampingFee function when the camping checkbox state changes
        document.getElementById("adminFeeOpt").addEventListener("change", AddAdminFee);
    
        // Call handleCampingFee initially to ensure correct initial state
        AddAdminFee();
    
        function applyDiscountByDate() {
          // Get the current date
          var currentDate = new Date();
    
          // Set the date when you want to stop checking the radio button 
          var endDate = new Date('2024-07-22');
    
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
          var discount = - <?= $discount ?>;
    
          if (discountOption.checked) {
            discountInput.value = (discount).toFixed(2);
          } else {
            discountInput.value = ""; // Clear the input field if the checkbox is unchecked
            discount = 0;
          }
          // Recalculate subtotal
          calculateSubtotal();
        }
        // Call handleCampingFee function when the camping checkbox state changes
        document.getElementById("discountOpt").addEventListener("change", AddDiscount);
    
        // Call handleCampingFee initially to ensure correct initial state
        AddDiscount();
    
        
         // Calculate subtotal
         function calculateSubtotal()
        {
            var headFee = parseFloat(document.getElementById('headFeeInp').value) || 0;
            var camping = parseFloat(document.getElementById('campingInp').value) || 0;
            var campPark = parseFloat(document.getElementById('campParkInp').value) || 0;
            var exParking = parseFloat(document.getElementById('exParkingInp').value) || 0;
            var adminFee = parseFloat(document.getElementById('adminFeeInp').value) || 0;
            var discount = parseFloat(document.getElementById('discountInp').value) || 0;
    
            var subtotal = headFee + camping + campPark + exParking + adminFee + discount;
           
            //display subtotal in subtotal input field
            document.getElementById('subInp').value = subtotal.toFixed(2);
    
            // Calculate HST whenever the subtotal changes
            calculateHST();
        }
    
      
    
          //Calculate tax on subtotal
        function calculateHST() {
             // Get the subtotal value
            var subtotal = parseFloat(document.getElementById('subInp').value);
            
            // Calculate HST (tax)
            var hst = subtotal * 0.15; // Assuming HST is 15%
            
            // Display HST in the hstInp field
            document.getElementById('hstInp').value = hst.toFixed(2);
        }
    
        
    
          //Calculate total due
          function calculateTotal() {
            // Get values from input fields
            var subtotal = parseFloat(document.getElementById('subInp').value);
            var hst = parseFloat(document.getElementById('hstInp').value);
            var passesCost = parseFloat(document.getElementById('passLst').value) || 0;
    
            // Calculate total
            var total = subtotal + hst + passesCost;
    
            // Display total
            document.getElementById('totalInp').value = total.toFixed(2);
    
            // console.log('calculateTotal function called'); // Add this line for debugging
        }   
    
        // Add event listeners to input fields that affect the total
        function addTotalEventListeners() {
            var inputFields = document.querySelectorAll('#subInp, #hstInp, #passLst');
    
            inputFields.forEach(function(inputField) {
                inputField.addEventListener('input', calculateTotal);
                inputField.addEventListener('change', calculateTotal);
            });
        }
    
        // Call the calculateTotal function initially to ensure correct total on page load
        calculateTotal();
        // Add event listeners to input fields affecting total
        addTotalEventListeners();   
    
          // Call the calculateHST function whenever the subtotal changes
        function addEventListeners() {
        // Get all input fields that affect the subtotal
        var inputFields = document.querySelectorAll('#headQty, #campingChk, #campParkChk, #exParkingChk, #adminFeeOpt, #discountOpt');
    
        // Add event listener to each input field
        inputFields.forEach(function(inputField) {
            inputField.addEventListener('input', function() {
                calculateSubtotal();
                calculateHST(); // Calculate HST whenever subtotal changes
                calculateTotal(); // Calculate total whenever subtotal changes
            });
        });
        }
    
      </script>
</body>
@endsection

