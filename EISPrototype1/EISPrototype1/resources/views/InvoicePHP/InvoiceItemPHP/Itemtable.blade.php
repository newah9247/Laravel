<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
    <link href="/css/InvoiceCSS/ItemTable.css" rel="stylesheet" />
</head>
    @include("layouts.Header")
<body>
    <h2 class="Title">Item Table</h2>
    <table>
        <form>
            <tr>
                <td id="alginForm">
                    <label for="ID">ID</label>
                    <input type="text" id="InvoiceIDInput" placeholder="ID">
                </td>
                <td>
                    <label for="Name">Item Name</label>
                    <input type="text" name="Name" placeholder="Item">
                </td>
                <td>
                    <button type="button" class="btn btn-primary">Search</button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('MakeItem') }}'">Make New Item</button>
                </td>
            </tr>
    </table>
    <table id="DisplayTable">
        <tr>
            <th>
                <p><b>ID</b></p>
            </th>
            <th>
                <p><b>Item</b></p>
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
                <p>Hey</p>
            </td>
            <td>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('MakeItem') }}'">Edit</button>
            </td>
        </tr>
    </table>
</body>
    @include("layouts.Footer")
</html>