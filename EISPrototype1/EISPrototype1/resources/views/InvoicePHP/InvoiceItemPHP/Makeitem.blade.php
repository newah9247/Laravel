<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
    <script src="/js/InvoiceJS/MakeItem.js"></script>
    <link href="/css/InvoiceCSS/MakeItem.css" rel="stylesheet" />
</head>
    @include("layouts.Header")      
<body>
    <h2 class="Title">Making Item</h2>
    <form>
        <table id="centerTable">
            <tr>
                <td>
                    <label for="name*">Name </label>
                    <input type="text" class="name" placeholder="Name">
                </td>
                <td>
                    <label for="cost*">Cost </label>
                    <input type="text" class="cost" placeholder="$0.00">
                </td>
            </tr>
            <tr>
                <td>
                    <label class="ChacklistLabel" for="HST"><b>Has HST (Harmonized Sales Tax)</b></label>
                    <input type="checkbox" class="CheckList" name="HST">
                </td>
                <td> 
                </td>
            </tr>
            <tr>
                <td>
                    <button type="button" class="btn btn-danger" onclick="BackPage(this)" value="{{ route('Back') }}">Cancel</button>
                </td>
                <td>
                    <button type="button" id="SaveBtn" class="btn btn-primary" onclick="MakeItem()" value="{{ route('Back') }}">Make Item</button>
                </td>
            </tr>
        </table>
    </form>
</body>
    @include("layouts.Footer") 
</html>