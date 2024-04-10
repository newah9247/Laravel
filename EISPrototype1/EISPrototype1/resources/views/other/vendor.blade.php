<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor form</title>
    <link rel="stylesheet" href="/css/vendor.css">
</head>
<body>
  <nav>
    <img id="logo" src="{{ asset('/images/EISLogo.png') }}" >
    <ul>
        <li><a href="{{ route('entrySelect') }}">Entry Form</a></li>
        <li><a href="{{ route('parade') }}">Parade Form</a></li>
        <li><a href="{{ route('vendor') }}">Vendor Form</a></li>
        <li><a href="{{ route('sponsorship') }}">Sponsor Form</a></li>
    </ul>
</nav>

<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    #logo {
        width: 100px;
        height: 100px;
        vertical-align: middle; /* Align the image vertically */
        margin-right: 20px; /* Add some space to the right of the image */
    }

    nav {
        background-color: #B70F0A;
        color: white;
        display: flex; /* Use flexbox for layout */
        align-items: center; /* Align items vertically in the center */
        justify-content: space-between; /* Add space between logo and menu */
        padding: 2rem;    
    }

    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    nav li {
        display: inline-block;
        padding: 20px;
        position: relative;
    }

    nav a {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 30px;
    }

    nav a:hover {
        color: rgb(187, 162, 116);
    }

    nav a::before {
        content: '';
        display: block;
        height: 5px;
        width: 100%;
        background-color: #EBEBEB;
        position: absolute;
        bottom: 0;
        width: 0%;
        transition: all ease-in-out 300ms;
    }

    nav a:hover::before {
        width: 85%;
    }
</style>

<h1><center>Vendor Entry form</center></h1>
<h3><center>All Fields marked with a <span class="required">*</span> are Required</center></h3><br><br>
<span style="margin-left: 200px;">
<label for="business-name" class="form-label"  style="font-size:20px;">Business Name<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width:220px;" id="business-name" name="business-name" class="form-input" placeholder="businessName" required>

<span style="margin-left: 500px;">

<label for="First-name" class="form-label" style="font-size:20px;"> Contact's First Name<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width:260px;" id="First-name" name="First-name" class="form-input" placeholder="firstName" required><br><br>

<span style="margin-left: 200px;">

<label for="Last-name" class="form-label" style="font-size:20px;">Contact's Last Name<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text"  style="height:30px; width:220px;"id="Last-name" name="Last-name" class="form-input" placeholder="lastName" required>

<span style="margin-left: 500px;">

<label for="address" class="form-label" style="font-size:20px;">Street Name & Number<span class="required">*</span>:</label>
<input type="text" style="height:30px; width:250px;" id="address" name="address" class="form-input" placeholder="address" required><br><br>

<span style="margin-left: 200px;">

<label for="address" class="form-label" style="font-size:20px;">PO Box/Apartment Number<span class="required">*</span>:</label>
<input type="text" style="height:30px; width:220px;" id="address" name="address" class="form-input" placeholder="address" required>

<span style="margin-left: 500px;">

<label for="town" class="form-label" style="font-size:20px;">Town<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width:260px;" id="town" name="town" class="form-input" placeholder="town" required><br><br>

<span style="margin-left: 200px;">

<label for="province" class="form-label" style="font-size:20px;">Province<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text"  style="height:30px; width:225px;" id="province" name="province" class="form-input" placeholder="NS" required>

<span style="margin-left: 500px;">

<label for="Postal Code" class="form-label" style="font-size:20px;">Postal Code<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width: 260px;" id="Postal Code" name="Postal Code" class="form-input" placeholder="A0A A0A" required><br><br>

<span style="margin-left: 200px;">

<label for="email" class="form-label" style="font-size:20px;">Email<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width:230px;" id="email" name="email" class="form-input" placeholder="entryName" required>

<span style="margin-left: 500px;">

<label for="phone" class="form-label" style="font-size:20px;">Phone Number<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width:250px;" id="phone" name="phone" class="form-input" placeholder="(902) 555-5555" required><br><br>

<span style="margin-left: 200px;">

<label for="website" class="form-label" style="font-size:20px;">Website<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
<input type="text" style="height:30px; width:230px;" id="website" name="website" class="form-input" placeholder="website" required><br><br><br><br>


	
	
<div style="position: relative;">
    <label for="Entry Description" class="form-label" style="font-size:20px; position: absolute; left: 200px; top: 30px;">Product Displayed<span class="required">*</span>:</label>
    <textarea id="Entry Description" name="Entry Description" class="textarea-input" style="margin-left: 425px; width: 70%; height:90px;;" placeholder="Enter description of all products"></textarea><br><br>
</div>


				
<center><h1>Booth Request</h1></center>

<div class="center">
    <center><img src="images/image1.png" style="width:auto; height:170px;" alt="Your Image Description"></center>
</div><br><br>

<center>
<label for="boothSpace" style="font-size:20px;">Booth Space:<span class="required">*</span>&nbsp;</label>
<select id="boothSpace" name="boothSpace" style="height:35px; width:120px;">
  <option value="small">Small</option>
  <option value="medium">Medium</option>
  <option value="large">Large</option>
</select></center><br>


<center><h1>Advertising/Sponsorship Options</h1></center>

<div class="center">
  <center>  <img src="images/image2.png" style="width:auto; height:280px;" alt="Your Image Description"></center>
</div><br>

<center>
<label for="Advertising-Packages" style="font-size:20px;">Advertising Packages:<span class="required">*</span>&nbsp;</label>
<select id="Advertising-Packages" name="Advertising-Packages" style="height:35px; width:120px;">
  <option value="Bronze">Bronze</option>
  <option value="Silver">Silver</option>
  <option value="Gold">Gold</option>
  <option value="Platinum">Platinum</option>
</select></center>
<br><br>

<center>
<p style="font-size:20px;">Digital logos for advertising need to be submitted to the office by May 6, 2024 to be included in<br>
promotional material. You may upload them now or email them to<br>
manager@annapolisvalleyexhibition.com</p></center>

<center>
<label for="certificate"  style="font-size:20px;">Upload the Digital Logo&nbsp;</label>
<div class="upload-btn-wrapper">
  <button class="btn">Upload</button>
  <input type="file" id="certificate" name="certificate">
</div></center><br><br>


<p style="font-size:20px;">DEPOSIT<br>
The completed contract and deposit of $150 per booth is required to reserve your space by May 31,2024 Balance is due July
31,2024. Pay in full by May 31,2024 and receive 15% discount. There will be NO REFUNDS for cancellations received after
August 1, 2024.
</p>


<center>
<p style="font-size:30px; color:blue; text-decoration: none;"><a href="{{ asset('images/VendorConditions_1.png') }}" target="_blank" style="text-decoration: none;">Vendor Terms and Conditions<p></a>
<input type="checkbox" id="Livestock" name="Livestock">
                        <label for="Livestock">I have read and agree to the exhibitor declaration <span class="required">*</span></label>
						</center>
<br><br>





<div class="container">

    <div class="left-half" style="font-size:20px;  margin-left: 100px;">
        
        
		
	<label for="event_amount">Total sponsorship amount in product:</label>
        <input type="number"   style="height:30px; width:220px;" id="event_amount" name="event_amount" placeholder="amount"><br><br>
		
		<label for="subtotal_amount">Subtotal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number"  style="height:30px; width:220px;" id="subtotal_amount" name="event_amount" placeholder="$45.75"><br><br>
		
		<label for="hst_amount">HST 15% (817700000RT0001)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number"  style="height:30px; width:220px;" id="hst_amount" name="hst_amount"><br><br>
		
		<label for="total_amount">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number"  style="height:30px; width:220px;" id="total_amount" name="total_amount" placeholder="$45.75"><br><br>
		
		
        <script src="js/vendor.js"></script>


    </div>

    <div class="right-half" style="font-size:20px; margin-left: 300px;">
  <p>e-transfers ONLY accepted at:<br>
<b>manager@annapolisvalleyexhibition.com</b><br>
Please include Owner/Rider Name in Notes for identification.<br>
If you are asked for a security question, please check for errors.<br>
This email auto deposits.<br><br>
Cheques payable to: (no post-dated cheques)<br>
Annapolis Valley Exhibition, 570 Main St, Box 100,<br>
Lawrencetown, NS B0S 1M0, Phone: (902)584-3339<br><br>


         

</div><br>
      </div>
<p style="font-size:22px;"><b>Vendor Declaration</b><br><br>
Vendor hereby agrees to the terms and conditions of this contract and agrees to hold Annapolis Valley Exhibition free from liability due to<br>
personal injury or damage to his/her property, agents, employees or third persons while in or on the premises of the Annapolis<br>
ValleExhibition/Annapolis County Federation of Agriculture.
</p>	  
<input type="checkbox" id="Livestock" name="Livestock">
                        <label for="Livestock" style="font-size:20px;">I have read and agree to the exhibitor declaration <span class="required">*</span><br></label>
<br><br>
<div class="canvas-container">
                    <label for="signature" style="font-size:20px;">Vendor Signature<span class="required">*</span></label><br>
                    <canvas id="signature-pad" width="400" height="200"></canvas>
                    <button id="clear-button">Clear</button>
                </div>


                <script src="https://cdn.jsdelivr.net/npm/signature_pad"></script>
                <script>
                    var canvas = document.getElementById('signature-pad');
                    var signaturePad = new SignaturePad(canvas);

                    document.getElementById('clear-button').addEventListener('click', function() {
                        signaturePad.clear();
                    });
                </script>
				<br>
				
				

<label for="date" style="font-size:20px; size:50px;">Date&nbsp;</label>
<input type="date" id="date" name="date" style="height:35px; width:120px;"><br><br><br>









<center>

  <button action="{{ route('main') }}" class="btn">Submit</button>
 </center>


</body>
</html>
