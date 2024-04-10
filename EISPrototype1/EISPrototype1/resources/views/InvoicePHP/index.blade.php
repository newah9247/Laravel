<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
</head>
    @include("layouts.Header")
    <link href="/css/InvoiceCSS/Index.css" rel="stylesheet" />
<body>
    <h2 class="Title">Invoice</h2>
    <table>
        <form>
            <tr>
                <td id="alginForm">
                    <label for="ID">ID</label>
                    <input type="text" id="InvoiceIDInput" placeholder="ID">
                </td>
                <td>
                    <label for="FName">First Name</label>
                    <input type="text" name="FName" placeholder="First">
                </td>
                <td>
                    <label for="LName">Last Name</label>
                    <input type="text" name="LName" placeholder="Last">
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
    </table>
    <table>
            <tr>
                <td>
                    <label for="BName">Business</label>
                    <input type="text" name="BName" placeholder="Business">
                </td>
                <td>
                    <label for="Email">Email</label>
                    <input type="text" name="Email" placeholder="Email">
                </td>
                <td>
                </td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <label class="ChacklistLabel" for="IsOverPaidLookUp"><b>Show all overpaid invoices</b></label>
                    <input type="checkbox" class="CheckList" name="IsOverPaidLookUp">
                </td>
                <td>
                    <label class="ChacklistLabel" for="IsPaidLookUp"><b>Show all paid invoices</b></label>
                    <input type="checkbox" class="CheckList" name="IsPaidLookUp">
                </td> 
                <td>
                    <label class="ChacklistLabel" for="IsNotPaid"><b>Show non-paid invoices</b></label>
                    <input type="checkbox" class="CheckList" name="IsNotPaid">
                </td>
                <td>
                </td> 
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn btn-primary">Search</button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('ItemTable') }}'">View Item List</button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('MakeInvoice') }}'">Make New Invoice</button>
                </td>
                <td>
                </td>
            </tr>
        </form>
    </table>
    <table id="DisplayTable">
        <tr>
            <th>
                <p><b>ID</b></p>
            </th>
            <th>
                <p><b>Recipient</b></p>
            </th>
            <th>
                <p><b>Email Address</b></p>
            </th>
            <th>
                <p><b>Resend</b></p>
            </th>
            <th>
                <p><b>Make Payment</b></p>
            </th>
            <th>
                <p><b>Print</b></p>
            </th>
            <th>
                <p><b>Fully Paid</b></p>
            </th>
            <th>
                <p><b>Overpaid</b></p>
            </th>
            <th>
                <p><b>Edit</b></p>
            </th>
        </tr>
        <tr>
            <td>
                <p>0</p>
            </td>
            <td>
                <p>Billy Bob</p>
            </td>
            <td>
                <p>BillyBob@gmail.com</p>
            </td>
            <td>
                <button type="button" class="btn btn-secondary">Resend</button>
            </td>
            <td>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('MakePayment') }}'">Make Payment</button>
            </td>
            <td>
                <button type="button" class="btn btn-secondary">Print</button>
            </td>
            <td>
                <label class="ChacklistLabel" for="IsPaid"><b>Fully Paid</b></label>
                <input type="checkbox" class="CheckList" name="IsPaid">
            </td>
            <td>
                <label class="ChacklistLabel" for="IsOverpaid"><b>Overpaid</b></label>
                <input type="checkbox" class="CheckList" name="IsOverpaid">
            </td>
            <td>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('MakeInvoice') }}'">Edit</button>
            </td>
        </tr>
    </table>
</body>
    @include("layouts.Footer")
</html>