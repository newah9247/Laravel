<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
    <link href="/css/InvoiceCSS/ConfermInvoice.css" rel="stylesheet" />
</head>
    @include("layouts.Header")
<body>
   <h2 class="Title">Invoice Sample</h2>
   <table id="Invoice">
        <tr>
            <td>
                <h2>INVOICE</h2>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>BILL TO</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>Name</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
                <p>Invoice Number: #</p>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>Business</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td colspan="3">
                <p>Persion ID: #AA</p>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>Address</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td colspan="3">
                <p>Invoice Date: month day, year</p>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>Phone</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td colspan="3">
                <p>Invoice Payment Due: month day, year</p>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr>
            <td>
                <p>Email</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td >
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>
        </tr>
        <tr class="Sec">
            <td>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
                <p><b>Rate</b></p>
            </td>

            <td>
            </td>

            <td>
                <p><b>Ammount</b></p>
            </td>
        </tr>
        <tr class="Sec">
            <td>
                <p>Item Info</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
                <p>$0.00</p>
            </td>

            <td>
            </td>

            <td>
                <p>$0.00</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Subtotal</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
                <p>$0.00</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Discount</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
                <p>$0.00</p>
            </td>
        </tr>
        <tr class="Sec">
            <td>
                <p>HST</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
                <p>$0.00</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Total</p>
            </td>

            <td class="SeberateUserInfo">
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
            </td>

            <td>
                <p>$0.00</p>
            </td>
        </tr>
   </table>
   <table id="ButtonTable">
        <tr>
            <td>
                <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('MakeInvoice') }}'">Back to edit</button>
            </td>
            <td>
                <button type="button" class="btn btn-primary">Print</button>
            </td>
            <td>
                <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('Invoice') }}'">Confirm and Send</button>
            </td>
        </tr>
    </table>
</body>
    @include("layouts.Footer")  
</html>