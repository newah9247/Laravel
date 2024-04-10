		// Function to calculate subtotal, HST, and total for booth space and advertising packages
        function calculateTotal() {
            var boothPrice = 0;
            var advertisingPrice = 0;
        
            // Get the selected booth space
            var boothSpace = document.getElementById('boothSpace').value;
            // Get the selected advertising package
            var advertisingPackage = document.getElementById('Advertising-Packages').value;
        
            // Calculate booth price based on the selected booth space
            if (boothSpace === 'small') {
                boothPrice = 300;
            } else if (boothSpace === 'medium') {
                boothPrice = 600;
            } else if (boothSpace === 'large') {
                boothPrice = 800;
            }
        
            // Calculate advertising price based on the selected advertising package
            if (advertisingPackage === 'Bronze') {
                advertisingPrice = 200;
            } else if (advertisingPackage === 'Silver') {
                advertisingPrice = 250;
            } else if (advertisingPackage === 'Gold') {
                advertisingPrice = 400;
            } else if (advertisingPackage === 'Platinum') {
                advertisingPrice = 700;
            }
        
        
            // Calculate subtotal, HST, and total
            var subtotal = boothPrice + advertisingPrice;
            var hstAmount = subtotal * 0.15;
            var totalAmount = subtotal + hstAmount;
        
            // Update the subtotal, HST, and total amount fields
            document.getElementById('subtotal_amount').value = subtotal.toFixed(2);
            document.getElementById('hst_amount').value = hstAmount.toFixed(2);
            document.getElementById('total_amount').value = totalAmount.toFixed(2);
        }
        
        // Function to handle input changes and clear
        function handleInputChange(event) {
            if (event.target.matches('input[type="number"][name$="-amount"]')) {
                calculateTotal();
            }
            if (event.target.matches('select[id="boothSpace"]') || event.target.matches('select[id="Advertising-Packages"]')) {
                calculateTotal();
            }
        }
        
        // Add event listeners for input changes and selections
        document.addEventListener('input', handleInputChange);
        
        