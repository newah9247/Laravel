{{--  *INSTALL BETTER COMMENTS EXTENSION ON VSCODE TO DISPLAY COMMENTS BETTER*
  *Beef Entry Form
  *By: Michele Roosje & Noah Taylor
  *Date: 3/29/24
  *Filename: beef.blade.php
  ? Purpose: This is the beef entry form page for the Annapolis Valley Exhibition. This page is used to enter beef (cattle) into the competition.

  *Changes by Noah*
  *- Added the extends for the beefLayout and nav
    ? I added the extends for the beefLayout and nav so that the page would have the same layout as the other pages
  *- Added the section for the head
    ? Included JS Script in head (beef.js) 
  *- Added the section for the title
  *- Added the section for the farm
  *- Added the section for the animal
    ? Added extra sections to better organize the page, as well as get rid of some of the <div><br><br></div> tags as @yield sections are auto spaced

  *More Important Things*
    ! - Moved JavaScript to beef.js
    ! - Edited the content section
    ! - Changed "star" to "red" for my CSS and my own sanity (ctrl + f -> red and then click the arrow, drop down type "star" click replace all if you want to change it back)
    ! - Edits have been made in the original CSS file as well
    ! - Changed some things due to my file structure/names of folders/files 

  *TODO List*
    TODO: 
    - PHP Connection to JavaScript
        ? I was unsure how to do that completely, but I made a few edits to the JavaScript file so it may or may not work
    TODO:
--}}

@extends('layouts.beefLayout')
@extends('layouts.nav')

@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/js/beef.js"></script>

        <title>Beef Entry Form</title>
    </head>
@endsection

@section('title')
    <h1>Beef Entry Form</h1>
    <h2>Entries Due by July 22nd</h2>
    <h3>All Fields marked with a <span class="red">*</span>are Required.</h3>
@endsection

@section ('farm')
<div class="wholeForm">
    <table class="formTable text-center">
    </table>    
    <form action="" method="post">
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
                            <label for="insurance" class="col-sm-2 col-form-label textFieldLbl">Insurance</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control textFieldInp" id="insurance" placeholder="insurance #">
                        </div>
                    </div>
                    </td>
        <td>
            <div class="row mb-3">
                    <label for="farmNameInp" class="col-sm-2 col-form-label textFieldLbl">Farm Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control textFieldInp" id="farmNameInp" placeholder="Farm Name">
                </div>
            </div>
        </td>
            </tr>
  
            <tr>
              <td>
                <div><br></div>   
                <div class="row mb-3">
                  <label for="premiseIdInp" class="col-sm-2 col-form-label textFieldLbl">Premise ID<b class="red">*</b></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control textFieldInp" id="premiseIdInp" placeholder="Premise Id Number">
                </div>
              </td>
              <td>
                <div class="row mb-3">
                  <label for="numCattleInp" class="col-sm-2 col-form-label numFieldLbl">Number of Cattle <b class="red">*</b></label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control numFieldInp" id="numCattleInp" placeholder="#">
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
  </form>
@endsection

@section('animal')
  <div class="grid-container">
    <div class="container text-center">
      <h3 class="heading3"><b>REGISTRATION NOT COMPLETE WITHOUT PROOF OF INSURANCE</b></h3>
    </div>

    <h1>Animal 1</h1>

    {{--Animal Name--}}
    <label for="animalName">Name of Animal<span class="red">*</span></label>
    <input type="text" id="animalName" placeholder="Animal Name">

    {{--Registration Number--}}
    <label for="registrationNum">Registration Number</label>
    <input type="text" id="registrationNum" placeholder="Insurance Number Layout Here">

    {{--Ear Tag--}}
    <label for="earTag">Ear Tag<span class="red">*</span></label>
    <input type="text" id="earTag" placeholder="#">

    {{--Animal Date of Birth--}}
    <label for="animalBirth">Animal Date of Birth <span class="red">*</span></label>
    <input type="date" id="animalbirth">

    {{--Sire Name--}}
    <label for="sireName">Name of Sire</label>
    <input type="text" id="sireName" placeholder="Name of Sire">

    {{--Dame Name--}}
    <label for="dameName">Name of Dame</label>
    <input type="text" id="dameName" placeholder="Name of Dame">
  </div>

  <div id="animalCheckbox">
    <div class="checkbox-column">
        <input type="checkbox" id="bullCalf">
        <label for="bullCalf">1 Bull Calf - Born in 2023</label>
        <br><br>

        <input type="checkbox" id="steerCalf">
        <label for="steerCalf">Prospect Steer Calf - Born in 2023</label>
        <br><br>

        <input type="checkbox" id="femaleIYearling">
        <label for="femaleIYearling">Female Intermediate Yearling</label>
        <p class="checkDesc">Born April 1/22 - December 31/22</p>

        <input type="checkbox" id="twoYear">
        <label for="twoYear">2 Year Cow / Calf</label>
        <p class="checkDesc">Born January 1/21 - December 31/21, with her 2022 purebred, tattooed calf at foot</p>

        <input type="checkbox" id="breedersHerd">
        <label for="breedersHerd">Breeders Herd Group of 4</label>
        <p class="checkDesc">(Male & Female) Bred by Exhibitor</p>

        <input type="checkbox" id="showmanship">
        <label for="showmanship">Open Beef Showmanship</label>
    </div>
    
    <div class="checkbox-column">
        <input type="checkbox" id="bullYearling">
        <label for="bullYearling">Bull Yearling - Born in 2022</label>
        <br><br>

        <input type="checkbox" id="femaleCalf">
        <label for="femaleCalf">Female Calf - Born in 2023</label>
        <br><br>

        <input type="checkbox" id="femaleSYearling">
        <label for="femaleSYearling">Female Senior Yearling</label>
        <p class="checkDesc">Born January 1/22 - March 31/22</p>
        
        <input type="checkbox" id="female">
        <label for="female">Female</label>
        <p class="checkDesc">Born prior to January 1/21 with 2023 purebred, tattooed calf at foot</p>

        <input type="checkbox" id="sireGroup">
        <label for="sireGroup">Get of Sire Group of 3</label>
        <p>By same Sire (Male & Female)</p>
    </div>
</div>
@endsection

@section('content')
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

    <table class="priceRow">
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>

      <tr>  
        <td class="col1">
          <label for="headFee" class="col-sm-5 col-form-label priceLbl">Number of Cattle<b class="red">*</b></label></td>

        <td class="col2">
          <input type="number" class="form-control Qty" id="headQty" min="2" value="" oninput="calculateHeadFee()">
        </td>

        <td rowspan="20" class="col4">
          <h5 class="text-center"><b>Includes One Free Exhibitor Pass with Registration</b></h5>
          <br>

          <h5 class="text-center"><b> 1 to 3 Animals -  may purchase 1 attendants pass
          <br><br>
            4 Animals & Over - may purchase up to 3 attendants passes</b></h5>
          <br><br>
        
          <h5><b> E-transfers ONLY accepted at: manager@annapolisvalleyexhibition.com <br>
              Please include Entry Name in Notes for identification.<b></h5>
          <br><br>
    
          <h5><b>Cheques payable to: (no post-dated cheques) <br>
              Annapolis Valley Exhibition, 570 Main St, Box 100,<br> 
              Lawrencetown, NS  B0S 1M0, Phone: (902)584-3339<b></h5>
          <br><br>
    
          <h8>Exhibitor Declaration: <br>
            I hereby certify that every animal is eligible as entered and agree for myself and my representatives to be bound by the rules of this Exhibition. It is hereby recognized that competition and displays of livestock involve inherent risk. I hereby accept that risk and hold harmless the Annapolis Valley Exhibition, the Annapolis County Federation of Agriculture, this competition, their officials, organizers, employees and their representatives from and against all claims including injury or loss resulted, directly or indirectly, from negligent acts or omissions of said officials, directors, employees or agents of the Annapolis Valley Exhibition Society. I certify that I have read the rules and regulations and agree to abide by them.</h8>
            <br><br>
                  
            <input class="form-check-input " type="checkbox" value="" id="readAndAgreeChk">
            
            <label class="form-check-label " for="campingChk" id="readAndAgreeLbl"><b class="red">*</b> I have read and agree to the exhibitor declaration.</label>

            <br><br>

            <label for="signature" class="col-sm-5 col-form-label priceLbl text-centre" id="signatureLbl">Signature (Parent/Guardian if Minor)</label>
          </td>
        </tr>

        <tr>
          <td class="col1">
            <label for="headFee" class="col-sm-5 col-form-label priceLbl">Head Fee: $<?= $headFee ?></label>
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

            <label class="form-check-label priceLbl" id="discountLbl" for="discount">Discount (Until August 5th) <b>-</b>$<?= $discount ?></label>
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
</body>
@endsection

@extends('layouts.footer')