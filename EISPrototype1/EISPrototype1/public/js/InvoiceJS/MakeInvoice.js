function MakeNewItem() {
    event.preventDefault();

    // Remove the existing 'MakeNewItem' button row
    var buttonRow = document.querySelector(".MakeNewItem"); 
    buttonRow.parentNode.removeChild(buttonRow);

    // Get the container where the new item will be added
    var newItemContainer = document.querySelectorAll(".newItem");

    // Add the new item content
    newItemContainer[newItemContainer.length -1].innerHTML += `
        <td>
            <label for="Item*">Choose Item</label>
            <select class="Item">
                <option>Item</option>
            </select>
        </td>
        <td>
            <label for="Amount*">Number of item</label>
            <input type="text" class="Amount" placeholder="0">
        </td>
        <td>
            <p class="prices">Item Cost </br > $0.00</p>
        </td>
        <td>
            <button class="RemoveItemBtn" onclick="RemoveItem(this)"><img src="Images/Invoice/RemoveItem.png" alt="Remove Item" /></button>
        </td>`;

    // Add a new 'MakeNewItem' button row
    var newItemButtonRow = `
        <tr class="Sec MakeNewItem">
            <td colspan="3">
                <button onclick="MakeNewItem()"><img src="Images/Invoice/AddBtn.png" alt="select Item" /></button>
            </td>
        </tr>`;
    
    // Insert the new button row after the newItemContainer
    newItemContainer[newItemContainer.length -1].insertAdjacentHTML('afterend', newItemButtonRow);

    // Add a new empty row for the next item
    var newTempItemRow = `<tr class="Sec newItem"></tr>`;
    newItemContainer[newItemContainer.length -1].insertAdjacentHTML('afterend', newTempItemRow);
}

//DD is Dummy Data any text with DD well come from DB
function DisplayPersonInfo(){
    ClosePersonModal();
    document.getElementById("AddPeronButtonDisplay").style.display = "none";
    $('.personInfo').css('display','table-row');
}

function RemoveItem(button){
    event.preventDefault();
    var parent = button.closest('.newItem');
    parent.remove();
}

function ShowPersonModal(){
    event.preventDefault();
    $('#AddPerson').modal('show');
}

function ClosePersonModal(){
    event.preventDefault();
    $('#AddPerson').modal('hide');
}

function DisplayInvoice(){
    event.preventDefault();
    var confirmRoute = document.getElementById('SaveButn').value;
    window.location.href = confirmRoute;
}