<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
    <script src="/js/InvoiceJS/Payment.js"></script>
</head>
    @include("layouts.Header")      
<body>
    <h2 class="Title"> Making payment for Invoice number # </h2>
    <form>
        <table>
            <tr>
                <td>
                    <label for="Amount*">Amount </label>
                    <input type="text" class="Amount" placeholder="0">
                </td>
                <td>
                    <label for="Date*">Date Recived </label>
                    <input type="Date" id="start" name="Date" value="dd-mm-yyyy" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Type*">Type of Payment </label>
                    <select name="Type">
                        <option>Payment Type</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="Notes">Extra Notes</label>
                    <textarea class="form-control" id="Notes" rows="4"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn btn-danger" onclick="BackPage(this)" value="{{ route('Back') }}">Cancel</button>
                </td>
                <td>
                    <button type="button" id="Savebtn" class="btn btn-primary"onclick="SendPayment()" value="{{ route('Back') }}">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
    @include("layouts.Footer")
</html>