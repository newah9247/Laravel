@extends('layouts.app')

@section('content')
<div class="contact-container">
    <form action="POST">

    <label for="fname">first name</label>
    <input type="text" id="fname" name="firstname" placeholder="first name">

    <label for="lname">last name</label>
    <input type="text" id="lname" name="lastname" placeholder="last name">

    <label for="subject">subject</label>
    <textarea id="subject" name="subject" placeholder="write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

    </form>
</div>

<style>
input[type=text], select, textarea {
    width: 100%; 
    padding: 12px; 
    border: 1px solid #ccc;
    border-radius: 10px; 
    box-sizing: border-box; 
    margin-top: 6px; 
    margin-bottom: 16px; 
    resize: vertical; 
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: orangered;
}

/* Add a background color and some padding around the form */
.contact-container {
    border-radius: 10px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
@endsection