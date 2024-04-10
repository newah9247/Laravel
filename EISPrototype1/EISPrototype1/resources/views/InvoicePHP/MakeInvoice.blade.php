<!DOCTYPE html>
<!-- TODO:
make dropdown item searchable
make dropdown person searchable
auto fill person form when person selected with DB data
make functions to calculate costs
make function to display person info after submission with DB data
connect to other pages
error checking
-->
<html lang="en">
<head>
    @include("layouts.Head")
    <script src="/js/InvoiceJS/MakeInvoice.js"></script>
    <link href="/css/InvoiceCSS/MakeInvoice.css" rel="stylesheet" />
</head>
<body>
    @include("layouts.Header")
    <h2 class="Title">Make New Invoice</h2>
    <form>
        <table id="FormTable">
            <tr class="Sec" id="AddPeronButtonDisplay">
                <td colspan="3">
                    <label id="personAst" for="Person*"></label>
                    <button class="Person" onclick="ShowPersonModal()" id="ApButn"><img src="Images/Invoice/selectPerson.png" alt="select Person" /></button>
                </td>
            </tr>
            <tr class="personInfo">
                <td>
                    <h2>Person Info</h2>
                </td>
            </tr>
            <tr class="personInfo">
                <td id="NameInfo"> 
                    <p><b>Name:</b> FNameDD LNameDD </p>
                </td>
                <td id="BusinessInfo">
                    <p><b>Business:</b> NameDD</p>
                    <!--Only Display if has Business-->
                    <p><b>Registered:</b> YesDD/NoDD</p>
                </td>
            </tr>
            <tr class="personInfo">
                <td>
                    <p><b>Address:</b> AddressDD </p>
                    <p><b>Email:</b> MailDD </p>
                </td>
                <td>
                    <p><b>Postal Code:</b> PODD </p>
                    <p><b>Phone:</b> NumberDD </p>
                </td>
            </tr>
            <tr class="Sec personInfo">
                <td>
                    <button onclick="ShowPersonModal()" id="ChangePersonButn" class="btn btn-primary butn">Edit/Change</button>
                </td>
            </tr>
            <tr class="Sec">
                <td>
                    <label for="Item*">Choose Item </label>

                    <select class="Item">
                        <option>Item</option>
                    </select>
                </td>
                <td>
                    <label for="Amount*">Number of item </label>
                    <input type="text" class="Amount" placeholder="0">
                </td>
                <td>
                    <p class="prices">Item Cost </br > $0.00</p>
                </td>
            </tr>
            <tr class="Sec MakeNewItem">
                <td colspan="3">
                    <button onclick="MakeNewItem()"><img src="Images/Invoice/AddBtn.png" alt="select Item" /></button>
                </td>
            </tr>
            <tr class="Sec newItem">
            </tr>
            <tr>
                <td>
                    <label for="Discount*">Add Discount </label>
                    <input type="text" class="Discount" placeholder="0.00">
                </td>
                <td colspan="2">
                    <p class="prices">Sub Total </br > $0.00</p>
                </td>
            </tr>
            <tr class="Sec">
                <td colspan="3">
                    <p class="prices">Total </br > $0.00</p>
                </td>
            </tr>
            <tr>
                <td>
                    <button id="CancelButn" class="btn btn-danger butn" onclick="BackPage(this)" value="{{ route('Back') }}">Cancel</button>
                </td>
                <td>
                    <button id="SaveButn" class="btn btn-primary butn" onclick="DisplayInvoice()" value="{{ route('Confirm') }}">Make Invoice</button>
                </td>
            </tr>
        </table>
    </form>
</body>
@include("layouts.Footer")
</html>

<div class="modal fade" id="AddPerson" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="ModalSize">
      <div class="modal-header">
        <h2 class="modal-title" id="ModalHeadText">Add Person to Invoice</h2>
      </div>
      <div id="ModalBody" class="modal-body">
        <form>
            <table>
                <tr>
                    <td>
                        <label for="Person*">Find Person </label>

                        <select class="Person">
                            <option>Person</option>
                            <option>Add New</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><h2>Person Info</h2></td>
                </tr>
                <tr id="InfoSec">
                    <td>
                        <label for="FName*">First Name </label>
                        <input type="text" class="FName" placeholder="Fist Name">
                    </td>
                    <td>
                        <label for="LName*">Last Name </label>
                        <input type="text" class="LName" placeholder="Last Name">
                    </td>
                    <td id="BusinessCol">
                        <label for="Business">Business</label>
                        <input type="text" class="Business" placeholder="Business Name">
                        <label class="ChacklistLabel" for="IsRegistered">Are they a <b>Registered Business</b></label>
                        <input type="checkbox" class="CheckList" name="IsRegistered">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Address*">Address </label>
                        <input type="text" class="Address" placeholder="Address">
                    </td>
                    <td>
                        <label for="PO*">Postal Code </label>
                        <input type="text" class="PO" placeholder="PO">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Email*">Email Address </label>
                        <input type="text" class="Email" placeholder="Mail">
                    </td>
                    <td>
                        <label for="Phone*">Phone Number </label>
                        <input type="text" class="Phone" placeholder="(000) - 000 - 0000">
                    </td>
                </tr>
            </table>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="ClosePersonModal()">Close</button>
        <button type="button" class="btn btn-primary" onclick="DisplayPersonInfo()">Add Person</button>
      </div>
    </div>
  </div>
</div>