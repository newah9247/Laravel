<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsorship form</title>
    <link rel="stylesheet" href="/css/sponsorship.css">
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
    
<h1><center>Sponsorship Entry form</center></h1>
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
<input type="text" style="height:30px; width:230px;" id="website" name="website" class="form-input" placeholder="website" required><br><br>
<br>

<span style="margin-left: 200px;">
	<!-- <span style="margin-left: 100px;">-->
				<label for="registered_business"  style="font-size:20px;">Is this a registered business?<span class="required">*</span>&nbsp; &nbsp;</label>
<input type="radio" id="registered_business_yes" name="registered_business" value="yes" onclick="showAmountInput('yes')">
<label for="registered_business_yes">Yes</label>
<input type="radio" id="registered_business_no" name="registered_business" value="no" onclick="showAmountInput('no')">
<label for="registered_business_no">No</label><br><br><br>

<span style="margin-left: 200px;">

              


                <span style="margin-left: 390px; ">

               <label for="sponsorshipLevel" class="form-label" style="font-size:20px; margin-left: 405px;">Sponsorship Level<span class="required">*</span></label>&nbsp;&nbsp;

<!-- Dropdown menu -->
<select id="sponsorshipLevel" name="sponsorshipLevel" class="form-select" style="height:43px; width:260px; margin-top:-70px; margin-left: 20px;" required>
  <option value="1">Star 1 &nbsp; &#9733</option>
  <option value="2">Star 2 &nbsp;  &#9733 &#9733 </option>
  <option value="3">Star 3 &nbsp; &#9733 &#9733  &#9733</option>
  <option value="4">Star 4 &nbsp; &#9733 &#9733 &#9733 &#9733</option>
  <option value="5">Star 5 &nbsp; &#9733 &#9733 &#9733 &#9733 &#9733</option>
</select>

<span id="starRating"></span>
</span>

				
<h2 id="categories-heading"><center>Categories</center></h2>
<table style="font-size: 21px;">
    <tr>
        <td>
            <div>
                <!-- Checkbox for Entertainment -->
                <input type="checkbox" id="entertainment-checkbox" onchange="showAmountInput('entertainment-checkbox', 'entertainment-section')">
                <label for="entertainment-checkbox">Entertainment</label>&nbsp;
                <div class="hidden-section" id="entertainment-section" style="display: none;">
                    <input type="number" name="entertainment-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
		
		<td>
      <div>
	  <!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="steer-show-and-sale-checkbox" onchange="showAmountInput('steer-show-and-sale-checkbox', 'steer-show-and-sale-section')">
    <label for="steer-show-and-sale-checkbox">Steer Show and Sale</label>&nbsp;
    <div class="hidden-section" id="steer-show-and-sale-section" style="display: none;">
        <input type="number" name="steer-show-and-sale-amount" placeholder="Enter amount">
    </div>
	</div>
	</td>
	
	
	<td><div>
		
		 <!-- Checkbox for Parade -->
    <input type="checkbox" id="parade-checkbox" onchange="showAmountInput('parade-checkbox', 'parade-section')">
    <label for="parade-checkbox">Parade</label>&nbsp;
    <div class="hidden-section" id="parade-section" style="display: none;">
        <input type="number" name="parade-amount" placeholder="Enter amount">
    </div>
		
		
		</div></td>
		</tr>
		<br><br>
		
		
		<tr>
        <td>
            <div>
                <!-- Checkbox for ATV Competitor -->
                <input type="checkbox" id="ATV-checkbox" onchange="showAmountInput('ATV-checkbox', 'ATV-section')">
                <label for="ATV-checkbox">ATV Competitor</label>&nbsp;
                <div class="hidden-section" id="ATV-section" style="display: none;">
                    <input type="number" name="ATV-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
        
		<td><div>
		<!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="modified-truck-and-tractor-checkbox" onchange="showAmountInput('modified-truck-and-tractor-checkbox', 'modified-truck-and-tractor-section')">
    <label for="modified-truck-and-tractor-checkbox">Modified Truck and Tractor</label>&nbsp;
    <div class="hidden-section" id="modified-truck-and-tractor-section" style="display: none;">
        <input type="number" name="modified-truck-and-tractor-amount" placeholder="Enter amount">
    </div>
		</td></div>
		
		<td><div>
		<!-- Checkbox for Parade -->
    <input type="checkbox" id="redneck-checkbox" onchange="showAmountInput('redneck-checkbox', 'redneck-section')">
    <label for="redneck-checkbox">Redneck Rodeo</label>&nbsp;
    <div class="hidden-section" id="redneck-section" style="display: none;">
        <input type="number" name="redneck-amount" placeholder="Enter amount">
    </div>
	</td></div>
		</tr><br><br>
		
        <td>
            <div>
                <!-- Checkbox for Children's Contest -->
                <input type="checkbox" id="children-checkbox" onchange="showAmountInput('children-checkbox', 'children-section')">
                <label for="children-checkbox">Children's Contest</label>&nbsp;
                <div class="hidden-section" id="children-section" style="display: none;">
                    <input type="number" name="children-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
        <td><div>
		<!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="teddy-checkbox" onchange="showAmountInput('teddy-checkbox', 'teddy-section')">
    <label for="teddy-checkbox">Teddy Bear Picnic</label>&nbsp;
    <div class="hidden-section" id="teddy-section" style="display: none;">
        <input type="number" name="teddy-amount" placeholder="Enter amount">
    </div>
		</td></div>
		
		
		<td><div>
		 <!-- Checkbox for Parade -->
    <input type="checkbox" id="dairy-checkbox" onchange="showAmountInput('dairy-checkbox', 'dairy-section')">
    <label for="dairy-checkbox">Dairy</label>&nbsp;
    <div class="hidden-section" id="dairy-section" style="display: none;">
        <input type="number" name="dairy-amount" placeholder="Enter amount">
    </div>
	</td></div>
	
	</tr>
	<br><br>
	
	<tr>
        <td>
            <div>
                <!-- Checkbox for Haflinger -->
                <input type="checkbox" id="haflinger-checkbox" onchange="showAmountInput('haflinger-checkbox', 'haflinger-section')">
                <label for="haflinger-checkbox">Haflinger</label>&nbsp;
                <div class="hidden-section" id="haflinger-section" style="display: none;">
                    <input type="number" name="haflinger-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
		
		
        <td><div>
		<!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="mini-checkbox" onchange="showAmountInput('mini-checkbox', 'mini-section')">
    <label for="mini-checkbox">Mini / Pleasure Driving</label>&nbsp;
    <div class="hidden-section" id="mini-section" style="display: none;">
        <input type="number" name="mini-amount" placeholder="Enter amount">
    </div>
		</td></div>
		
		
		
        <td>
            <div>
              <!-- Checkbox for Parade -->
    <input type="checkbox" id="light-checkbox" onchange="showAmountInput('light-checkbox', 'light-section')">
    <label for="parade-checkbox">Light Horse</label>&nbsp;
    <div class="hidden-section" id="light-section" style="display: none;">
        <input type="number" name="light-amount" placeholder="Enter amount">
    </div>
            </div>
        </td>
		
		</tr>
		<br><br>
		
		<tr>
        <td><div>
		<!-- Checkbox for ATV Competitor -->
    <input type="checkbox" id="horse-checkbox" onchange="showAmountInput('horse-checkbox', 'horse-section')">
    <label for="horse-checkbox">Horse Pulls</label>&nbsp;
    <div class="hidden-section" id="horse-section" style="display: none;">
        <input type="number" name="horse-amount" placeholder="Enter amount">
    </div>
		</td></div>
		
		<td><div>
		<!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="oxen-checkbox" onchange="showAmountInput('oxen-checkbox', 'oxen-section')">
    <label for="oxen-checkbox">Oxen Pulls</label>&nbsp;
    <div class="hidden-section" id="oxen-section" style="display: none;">
        <input type="number" name="oxen-amount" placeholder="Enter amount">
    </div>
		</td></div>
		
		
		<td><div>
		 <!-- Checkbox for Parade -->
    <input type="checkbox" id="beef-checkbox" onchange="showAmountInput('beef-checkbox', 'beef-section')">
    <label for="beef-checkbox">Beef</label>&nbsp;
    <div class="hidden-section" id="beef-section" style="display: none;">
        <input type="number" name="beef-amount" placeholder="Enter amount">
    </div>
		</td></div>
		</tr>
		<br><br>
		
		<tr>
        <td>
            <div>
                <!-- Checkbox for Fruit and Vegetables -->
                <input type="checkbox" id="fruit-checkbox" onchange="showAmountInput('fruit-checkbox', 'fruit-section')">
                <label for="fruit-checkbox">Fruit and Vegetables</label>&nbsp;
                <div class="hidden-section" id="fruit-section" style="display: none;">
                    <input type="number" name="fruit-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
        
		
		
		<td><div>
		 <!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="creative-checkbox" onchange="showAmountInput('creative-checkbox', 'creative-section')">
    <label for="creative-checkbox">Creative Crafts</label>&nbsp;
    <div class="hidden-section" id="creative-section" style="display: none;">
        <input type="number" name="creative-amount" placeholder="Enter amount">
    </div>
		</td></div>
		
		
		<td><div>
		 <!-- Checkbox for Parade -->
    <input type="checkbox" id="rug-checkbox" onchange="showAmountInput('rug-checkbox', 'rug-section')">
    <label for="rug-checkbox">Rug Hooking</label>&nbsp;
    <div class="hidden-section" id="rug-section" style="display: none;">
        <input type="number" name="rug-amount" placeholder="Enter amount">
    </div>
	</td></div>
		</tr>
		<br><br>
		
		<tr>
        <td>
            <div>
                <!-- Checkbox for Art -->
                <input type="checkbox" id="Art-checkbox" onchange="showAmountInput('Art-checkbox', 'Art-section')">
                <label for="Art-checkbox">Art</label>&nbsp;
                <div class="hidden-section" id="Art-section" style="display: none;">
                    <input type="number" name="Art-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
       
	   
	   <td><div>
	   <!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="photography-checkbox" onchange="showAmountInput('photography-checkbox', 'photography-section')">
    <label for="photography-checkbox">Photography</label>&nbsp;
    <div class="hidden-section" id="photography-section" style="display: none;">
        <input type="number" name="photography-amount" placeholder="Enter amount">
    </div>
	   </td></div>
	   
	   <td><div>
	   <!-- Checkbox for Parade -->
    <input type="checkbox" id="flowers-checkbox" onchange="showAmountInput('flowers-checkbox', 'flowers-section')">
    <label for="flowers-checkbox">Flowers</label>&nbsp;
    <div class="hidden-section" id="flowers-section" style="display: none;">
        <input type="number" name="flowers-amount" placeholder="Enter amount">
    </div>
	   </td></div>
	   </tr>
	   
	   <br><br>
	   
	   
	   <tr>
        <td>
            <div>
                <!-- Checkbox for Cooking -->
                <input type="checkbox" id="cooking-checkbox" onchange="showAmountInput('cooking-checkbox', 'cooking-section')">
                <label for="cooking-checkbox">Cooking</label>&nbsp;
                <div class="hidden-section" id="cooking-section" style="display: none;">
                    <input type="number" name="cooking-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
       
	   
	   <td><div>
	    <!-- Checkbox for Parade -->
    <input type="checkbox" id="wood-checkbox" onchange="showAmountInput('wood-checkbox', 'wood-section')">
    <label for="wood-checkbox">Wood Working</label>&nbsp;
    <div class="hidden-section" id="wood-section" style="display: none;">
        <input type="number" name="wood-amount" placeholder="Enter amount">
    </div>
	</td></div>
	   
	   </tr>
	   <br><br>
	   
	   <tr>
        <td>
            <div>
                <!-- Checkbox for Any Livestock -->
                <input type="checkbox" id="Any-checkbox" onchange="showAmountInput('Any-checkbox', 'Any-section')">
                <label for="Any-checkbox">Any Livestock</label>&nbsp;
                <div class="hidden-section" id="Any-section" style="display: none;">
                    <input type="number" name="Any-amount" placeholder="Enter amount">
                </div>
            </div>
        </td>
		
		
		
		<td><div><!-- Checkbox for Steer Show and Sale -->
    <input type="checkbox" id="any-checkbox" onchange="showAmountInput('any-checkbox', 'any-section')">
    <label for="any-checkbox">Any Notorized Comp.</label>&nbsp;
    <div class="hidden-section" id="any-section" style="display: none;">
        <input type="number" name="any-amount" placeholder="Enter amount">
    </div></td></div>
		
		
		
		<td><div> <!-- Checkbox for Parade -->
    <input type="checkbox" id="ny-checkbox" onchange="showAmountInput('ny-checkbox', 'ny-section')">
    <label for="ny-checkbox">Any Non-Livestock</label>&nbsp;
    <div class="hidden-section" id="ny-section" style="display: none;">
        <input type="number" name="ny-amount" placeholder="Enter amount">
    </div>
	</td></div>
		<br><br>
		
		
    </tr>
   
</table>

<center>  <label for="numParticipants" class="form-label" style="font-size:20px;">Total Sponsorship cash amount<span class="required">*</span></label>&nbsp;&nbsp;
    <input type="number" style="height:30px; width:260px;" id="numParticipants" name="numParticipants-amount" class="form-input" placeholder="$0.00" readonly></center>
<script src="js/sponsorship.js"></script>


<div class="container">

    <div class="left-half">
	<span style="margin-left: 100px;">
        <p>If there is another event you would like to sponsor, or if you
            would like to sponsor <br>a particular class in one of the above
			categories please make a note here.<br>
        </p>
        <textarea name="event_sponsorship" rows="7" cols="100" placeholder="entrant information"></textarea><br><br><br>
		
		<label for="event_amount" style="margin-left: 40px;">Total sponsorship amount in product:</label>
        <input type="number" style="height:30px; width:220px;" id="event_amount" name="event_amount" placeholder="$45.75"><br><br>
		
		<label for="event_amount" style="margin-left: 40px;">Subtotal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" style="height:30px; width:220px;" id="subtotal_amount" name="subtotal_amount" readonly><br><br>
		
		<label for="event_amount" style="margin-left: 40px;">HST 15% (817700000RT0001)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input type="number" style="height:30px; width:220px;" id="hst_amount" name="hst_amount" readonly><br><br>
		
		<label for="event_amount" style="margin-left: 40px;">Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
       <input type="number" style="height:30px; width:220px;" id="total_amount" name="total_amount" placeholder="Total amount" readonly><br><br>
<br><br>
	
<script src="js/sponsorship.js"></script>






    </div>

    <div class="right-half"><br>
        <p>If your Sponsorship will be in Gift Cards, Products or services
            please provide the information here<br><br>
        </p>
        <textarea name="sponsorship_info" rows="7" cols="100" placeholder="giftSponsorships"></textarea><br>



                    <p style="margin-left:100px;;"><br>e-transfers ONLY accepted at:<br>
<b>manager@annapolisvalleyexhibition.com</b><br>
Please include Owner/Rider Name in Notes for identification.<br>
If you are asked for a security question, please check for errors.<br>
This email auto deposits.<br><br>
Cheques payable to: (no post-dated cheques)<br>
Annapolis Valley Exhibition, 570 Main St, Box 100,<br>
Lawrencetown, NS B0S 1M0, Phone: (902)584-3339<br><br>


         

</div>
</div>
           
<center>

  <button action="{{ route('main') }}" class="submit-btn">Submit</button>
 </center>


</body>
</html>
