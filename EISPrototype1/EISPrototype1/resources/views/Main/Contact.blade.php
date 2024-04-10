<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
    <link href="/css/MainPageCSS/Contact.css" rel="stylesheet" />
</head>
    @include("layouts.Header")
<body>
    <h2 class="Title">Entry Contact Form</h2>
    <p class="centerText">All Fields marked with a <b style="color: red;"> * </b> are Required</p>
    <p class="centerText">If you have already summited a contact entry form this year please enter your id code.</p>
    <p class="centerText">DO NOT fill in the contact form again if you already have.</p>
    <table id="CodeTab">
        <tr>
            <td>
                <label for="Code">ID Code</label>
                <input type="text" id="Code" placeholder="Code">
            </td>
        </tr>
    </table>
    <p class="centerText">If you don't remember your code<br />Please contact the Annapolis valley exhibition office for support<br />info@annapolsvalleyexhibiton.com (902) 584-3339</p>
    <h3 class="centerText" id="alignhead">Add your information here if this is your first time entering.</h3>
    <form>
        <table class="centerTable">
            <tr>
                <td>
                    <label for="BusinessN">Business Name</label>
                    <input type="text" id="BusinessN" placeholder="Business Name">
                </td>
                <td>
                </td>
                <td>
                    <label for="Website">Website</label>
                    <input type="text" id="Website" placeholder="website">
                </td>
            </tr>            
            <tr>
                <td>
                    <label for="ContactFName*">Contacts First Name </label>
                    <input type="text" id="ContactFName*" placeholder="First Name">
                </td>
                <td>
                </td>
                <td>
                    <label for="ContactLName*">Contacts Last Name </label>
                    <input type="text" id="ContactLName*" placeholder="Last Name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="StreetNameAndNum*">Street Name and Number </label>
                    <input type="text" id="StreetNameAndNum*" placeholder="Address">
                </td>
                <td>
                </td>
                <td>
                    <label for="POAndApNum*">PO Box/Apartment Number </label>
                    <input type="text" id="POAndApNum*" placeholder="Address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Town*">Town </label>
                    <input type="text" id="Town*" placeholder="Town">
                </td>
                <td>
                    <label for="Province*">Province </label>
                    <input type="text" id="Province*" placeholder="NS">
                </td>
                <td>
                    <label for="PostalCode*">Postal Code </label>
                    <input type="text" id="PostalCode*" placeholder="A0A 0A0">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Email*">Email </label>
                    <input type="text" id="Email*" placeholder="someone@somewhere.com">
                </td>
                <td>
                </td>
                <td>
                    <label for="Phone*">Phone Number </label>
                    <input type="text" id="Phone*" placeholder="(000) 000 - 0000">
                </td>
            </tr>
        </table>
        <button id="CenterBtn" type="button" class="btn btn-primary">Continue</button>
    </form>
</body>
    @include("layouts.Footer")
</html>