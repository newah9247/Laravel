<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parade form</title>
    <link rel="stylesheet" href="/css/parade.css">
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
    
<h1><center>Parade Entry form</center></h1>
<h3><center>All Fields marked with a <span class="required">*</span> are Required</center></h3><br><br>

<span style="margin-left: 200px;">
<label for="business-name" class="form-label"  style="font-size:20px;">Name of Entry<span class="required">*</span>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
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





<!-- FLOAT INFO-->


<h2><center>Float Entry Information</center></h2>

<div class="checkbox-container">
    <center>
        <input type="checkbox" id="commercial" name="commercial">
        <label for="Commercial">Commercial</label>

        <span style="margin-left: 100px;">

        <input type="checkbox" id="Community Group" name="Community Group">
        <label for="Community Group">Community Group / Club / School</label>

        <span style="margin-left: 100px;">

        <input type="checkbox" id="Tractor" name="Tractor">
        <label for="Tractor">Antique Tractor</label>

        <span style="margin-left: 100px;">

        <input type="checkbox" id="Vehicle" name="Vehicle">
        <label for="Vehicle">Antique Vehicle</label> </center><br><br>

        <!--Entery Cetgory Information-->

        <h2><center>Entry Category Information</center></h2>

        <div class="checkbox-container">
            <center>
                <input type="checkbox" id="band" name="band">
                <label for="band">Band</label>

                <span style="margin-left: 100px;">

                <input type="checkbox" id="Float" name="Float">
                <label for="Float">Float</label>

                <span style="margin-left: 100px;">

                <input type="checkbox" id="Livestock" name="Livestock">
                <label for="Livestock">Livestock</label>

                <span style="margin-left: 100px;">

                <input type="checkbox" id="Junior Walking Activities" name="Junior Walking Activities">
                <label for="Junior Walking Activities">Junior Walking Activities</label>

                <span style="margin-left: 100px;">

                <input type="checkbox" id="Walking" name="Walking">
                <label for="Walking">Walking</label></center><br><br>

                <!--Additional Information-->

                <h2><center>Additional Information</center></h2>

                <div>
                    <label for="Entry Description" class="form-label"  style="font-size:20px; position: relative; left: 5px; top: -40px;">Brief Entry Description:&nbsp;&nbsp;</label>
                    <textarea style="height:90px; width:1600px;" id="Entry Description" name="Entry Description" class="textarea-input" placeholder="Enter your comments here"></textarea><br><br>
                </div>
                <br>
                <label for="numParticipants" class="form-label">Number of Participants</label>&nbsp;&nbsp;
                <input type="text"  style="height:30px; width:320px;" id="numParticipants" name="numParticipants" class="form-input" placeholder="numParticipants" required>

                <span style="margin-left: 700px;">

                <label for="totalLength" class="form-label">Entry Total Length</label>&nbsp;&nbsp;
                <input type="text" style="height:30px; width:320px;" id="totalLength" name="totalLength" class="form-input" placeholder="totalLength" required> <br><br>

                <div class="text-container">

                    <p>Certificate of Insurance:<br><br>Certificate of Insurance must be provided by August 7, 2024.
                        You may upload your certificate below.<br><br>
                        Or email to info@annapolisvalleyexhibition.com.<br><br>
                        Or drop it off at the Exhibition office Monday to Friday from 8am
                        to 4pm.
                    </p>

                    <p>Entrant Declaration:<br><br>The Entrant herby agrees to the above rules and regulations of this
                        application and agrees to hold Annapolis Valley Exhibition / Annapolis
                        County Federation of Agriculture, agents, employees, or third person in
                        connection with the parade howsoever caused (including negligence)
                        and agree to release such parties from any claims for such injury or
                        damage. I certify that I have read the rules and regulations and agree to
                        abide by them.<br><br>
                        <input type="checkbox" id="Livestock" name="Livestock">
                        <label for="Livestock">I have read and agree to the he exhibitor declaration <span class="required">*</span></label>
                    </p></div><br><br>

                <div class="canvas-container">
                    <label for="signature">Signature<span class="required">*</span>:</label>
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
				
			<label for="certificate" style="font-size:20px; position: relative; left: 5px; top: -10px;">Upload Certificate of Insurance&nbsp;&nbsp;</label>
<div class="upload-btn-wrapper">
  <button class="btn">Upload</button>
  <input type="file" id="certificate" name="certificate">
</div><br><br>

<label for="date">Date</label>
<input type="date" style="height:30px; width:220px;" id="date" name="date"><br><br>
<center>
<div class="upload-btn-wrapper">
  <button action="{{ route('main') }}" class="btn">Submit</button>
  <input type="file" id="submit" name="submit">

</div>
</body>
</html>
