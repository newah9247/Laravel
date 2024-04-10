// Function to show/hide amount input section based on checkbox state
function showAmountInput(checkboxId, sectionId) {
    var checkbox = document.getElementById(checkboxId);
    var hiddenSection = document.getElementById(sectionId);
    
    if (checkbox.checked) {
        hiddenSection.style.display = "inline-block"; // Display the hidden section
    } else {
        hiddenSection.style.display = "none"; // Hide the hidden section
    }
}

// Function to show/hide amount input section based on checkbox state
function showAmountInput(checkboxId, sectionId) {
    var checkbox = document.getElementById(checkboxId);
    var hiddenSection = document.getElementById(sectionId);
    
    if (checkbox.checked) {
        hiddenSection.style.display = "inline-block"; // Display the hidden section
    } else {
        hiddenSection.style.display = "none"; // Hide the hidden section
    }
}

// Function to calculate subtotal and total with HST
function calculateTotal() {
    var subtotal = 0;
    var amountInputs = document.querySelectorAll('input[type="number"][name$="-amount"]');
    
    // Loop through each input and sum up the amounts for subtotal
    amountInputs.forEach(function(input) {
        var amount = parseFloat(input.value); // Parse the input value to a float
        if (!isNaN(amount)) { // Check if the parsed value is a valid number
            subtotal += amount;
        }
    });
    
    // Calculate HST amount
    var hstAmount = subtotal * 0.15;

    // Calculate total amount including subtotal and HST
    var totalAmount = subtotal + hstAmount;

    // Update the subtotal, HST, and total amount fields
    document.getElementById('subtotal_amount').value = subtotal.toFixed(2);
    document.getElementById('hst_amount').value = hstAmount.toFixed(2);
    document.getElementById('total_amount').value = totalAmount.toFixed(2);
    
    // Update the total sponsorship cash amount field
    updateTotalSponsorshipAmount(totalAmount);
    
    // Update sponsorship level dropdown and star rating
    updateSponsorshipLevel(totalAmount);
}

// Function to handle input changes
function handleInputChange(event) {
    if (event.target.matches('input[type="number"][name$="-amount"]')) {
        calculateTotal();
    }
}

// Function to handle input clear
function handleInputClear(event) {
    if (event.target.matches('input[type="number"][name$="-amount"]')) {
        if (event.target.value === "") { // Check if the input field is cleared
            calculateTotal(); // Recalculate the total amount
        }
    }
}

// Function to update total sponsorship cash amount
function updateTotalSponsorshipAmount(totalAmount) {
    document.getElementById('numParticipants').textContent = totalAmount.toFixed(2);
}

// Function to update sponsorship level dropdown and star rating
function updateSponsorshipLevel(totalAmount) {
    var sponsorshipLevel = document.getElementById('sponsorshipLevel');
    var starRating = document.getElementById('starRating');

    if (totalAmount >= 100 && totalAmount < 300) {
        sponsorshipLevel.value = 1;
    } else if (totalAmount >= 300 && totalAmount < 1000) {
        sponsorshipLevel.value = 2;
    } else if (totalAmount >= 1000 && totalAmount < 1500) {
        sponsorshipLevel.value = 3;
    } else if (totalAmount >= 1500 && totalAmount < 3000) {
        sponsorshipLevel.value = 4;
    } else if (totalAmount >= 3000) {
        sponsorshipLevel.value = 5;
    }
    
    // Update star rating display
    starRating.innerHTML = ''.repeat(parseInt(sponsorshipLevel.value));
}

// Add event listeners for input changes and clears
document.addEventListener('input', handleInputChange);
document.addEventListener('input', handleInputClear);
