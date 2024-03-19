import './bootstrap';

$(document).ready(function() {
    $('#addForm').click(function() {
        // Create a new row for the table
        var newRow = $('<tr>');

        // Add input fields for each column
        newRow.append('<td><input type="text" name="class"></td>');
        newRow.append('<td><input type="text" name="section"></td>');
        newRow.append('<td><input type="text" name="description"></td>');
        newRow.append('<td><button type="button" class="deleteRow">Delete</button></td>');

        // Append the new row to the table
        $('#formTable tbody').append(newRow);
    });

    // Delete row functionality
    $(document).on('click', '.deleteRow', function() {
        $(this).closest('tr').remove();
    });
});

    