// Function to add event listeners to input fields
function addEventListeners() {
    var inputFields = document.querySelectorAll('#headQty, #campingChk, #campParkChk, #exParkingChk, #adminFeeOpt, #discountOpt');
    inputFields.forEach(function(inputField) {
        inputField.addEventListener('input', calculateSubtotal);
        inputField.addEventListener('change', calculateSubtotal);
    });

    document.getElementById("campingChk").addEventListener("change", toggleVisibility);
}

// Function to toggle visibility of elements based on checkbox state
function toggleVisibility() {
    var elementsToToggle = ['campParkChk', 'campParkLbl', 'campParkInp', 'campLengthLbl', 'campLengthInp'];
    elementsToToggle.forEach(function(id) {
        var element = document.getElementById(id);
        if (document.getElementById('campingChk').checked) {
            element.classList.remove('hidden');
        } else {
            element.classList.add('hidden');
        }
    });
}

// Function to calculate subtotal, tax, and total due
function calculateSubtotal() {
    var headFee = parseFloat(document.getElementById('headFeeInp').value || 0);
    var camping = parseFloat(document.getElementById('campingInp').value || 0);
    var campPark = parseFloat(document.getElementById('campParkInp').value || 0);
    var exParking = parseFloat(document.getElementById('exParkingInp').value || 0);
    var adminFee = parseFloat(document.getElementById('adminFeeInp').value || 0);
    var discount = parseFloat(document.getElementById('discountInp').value || 0);

    var subtotal = headFee + camping + campPark + exParking + adminFee + discount;
    var taxRate = 0.10; // Assuming 10% tax rate
    var tax = subtotal * taxRate;
    var totalDue = subtotal + tax;

    document.getElementById('subtotal').innerText = subtotal.toFixed(2);
    document.getElementById('tax').innerText = tax.toFixed(2);
    document.getElementById('totalDue').innerText = totalDue.toFixed(2);
}

// Function to apply discount based on date
function applyDiscountByDate() {
    var currentDate = new Date();
    var endDate = new Date('2024-08-05');

    if (currentDate <= endDate) {
        document.getElementById('discountOpt').checked = true;
    }
}
