@extends('layouts.beefLayout')

@extends('layouts.nav')

@section('head')
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beef Entry Form</title>
    </head>
@endsection

@section('title')
    <h1>Beef Entry Form</h1>
    <h2>Entries Due by July 22nd</h2>
    <h3>All Fields marked with a <span class="red">*</span>are Required.</h3>
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
                    <label for="premiseIdInp" class="col-sm-2 col-form-label textFieldLbl">Premise ID<bold class="star">*</bold></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control textFieldInp" id="premiseIdInp" placeholder="Premise Id Number">
                  </div>
                </td>
                <td>
                  <div class="row mb-3">
                    <label for="numCattleInp" class="col-sm-2 col-form-label numFieldLbl">Number of Cattle <bold class="star">*</bold></label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control numFieldInp" id="numCattleInp" placeholder="#">
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
    
    <table class="priceRow">
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>

      <tr>  
        <td class="col1">
          <label for="headFee" class="col-sm-5 col-form-label priceLbl">Number of Cattle<bold class="star">*</bold></label></td>

        <td class="col2">
          <input type="number" class="form-control Qty" id="headQty" min="2" value="" oninput="calculateHeadFee()">
        </td>

        <td rowspan="20" class="col4">
          <h5 class="text-center"><bold>Includes One Free Exhibitor Pass with Registration</bold></h5>
          <br>

          <h5 class="text-center"><bold> 1 to 3 Aminals -  may purchase 1 attendants pass
          <br><br>
            4 Animals & Over - may purchase up to 3 attendants passes</bold></h5>
          <br><br>
        
          <h5><bold> E-transfers ONLY accepted at: manager@annapolisvalleyexhibition.com <br>
              Please include Entry Name in Notes for identification.<bold></h5>
          <br><br>
    
          <h5><bold>Cheques payable to: (no post-dated cheques) <br>
              Annapolis Valley Exhibition, 570 Main St, Box 100,<br> 
              Lawrencetown, NS  B0S 1M0, Phone: (902)584-3339<bold></h5>
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
</body>
@endsection
