{{-- Include necessary JavaScript files --}}
@section('head')
    <script src="{{ asset('/js/addToDropdown.js') }}"></script>
    <script src="{{ asset('/js/signature.js') }}"></script>
@endsection

{{-- Extend base layouts --}}
@extends('layouts.nonlivestockLayout')
@extends('layouts.nav')

{{-- Page title and instructions --}}
@section('title')
    <h1>Non-Livestock Entry Form</h1>
    <h2>Check Prize Book for Due Dates</h2>
    <h3>All Fields marked with a <span class="red">*</span>are Required.</h3>
@endsection

{{-- Main content section with form and dynamic elements --}}
@section('content')
    <form id="entryForm" action="{{ route('nonlivestockSubmission') }}">
        @csrf
        {{-- Radio buttons for category selection --}}
        <div id="radioBox">
            <div id="radioDiv">
                {{-- Iteratively add radio options for categories --}}
                @foreach (['Fruit/Vegetables', 'Creative Crafts', 'Rug Hooking', 'Art', 'Photography', 'Flowers', 'Cooking', 'Woodworking'] as $category)
                    <div>
                        <input type="radio" id="{{ strtolower(str_replace(' ', '', $category)) }}" name="categories[]" value="{{ $category }}">
                        <label for="{{ strtolower(str_replace(' ', '', $category)) }}" class="{{ strtolower(str_replace(' ', '', $category)) }}Label">{{ $category }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Dropdowns for class and section --}}
        <div id="addFormBox">
            <div id="dropdownBox">
                <div id="currentSelection">
                    {{-- Class selection dropdown --}}
                    <div id="classSelectDiv">
                        <label id="classDropdownLabel" for="classSelect">CLASS<span class="red">*</span></label>
                        <select id="classSelect" name="classSelect">
                            <option value="" disabled selected>Select an option above</option>
                        </select>
                    </div>
                    {{-- Section selection dropdown --}}
                    <div id="sectionSelectDiv">
                        <label id="sectionDropdownLabel" for="sectionSelect">SECTION<span class="red">*</span></label>
                        <select id="sectionSelect" name="sectionSelect">
                            <option value="" disabled selected>Please select a class first</option>
                        </select>
                    </div>
                    {{-- Button to add the selected class to a list (presumably managed by JavaScript) --}}
                    <div id="selectionDetails" class="flex justify-center">
                        <button class="button-submit" type="submit" id="addForm">
                            Add Class
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

{{-- Section for dynamically added forms/entries --}}
@section('addedForms')
    <div class="container">
        <table id="formTable">
            <thead>
                <tr>
                    <th>CLASS</th>
                    <th>SECTION</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                {{-- Entries are added here dynamically --}}
            </tbody>
        </table>
    </div>
@endsection

{{-- Signature collection section --}}
@section('signature')
    <h2>Please Sign Here<span class="red">*</span></h2>
    <div class="flex justify-center">
        <div class="wrapper">
            <button id="clear" class="text-center"><b>CLEAR SIGNATURE</b></button>
            <canvas id="signature-pad" width="600" height="200" ></canvas>
        </div>
    </div>
@endsection

{{-- E-transfer and payment information --}}
@section('etransfer')
    <p id="etransferP">E-transfers <b>ONLY</b> accepted at: <b>manager@annapolisvalleyexhibition.com</b>
        </br>
    Please include Exhibitor name in notes for identification.
        </br>
    If you are asked for a security question, please check for errors.
        </br>
    This email auto deposits.
        </br>
        </br>
    Cheques payable to: <i><b>(NO POST-DATED CHEQUES)</i></b>
        </br>
    <b>Annapolis Valley Exhibition, 570 Main St, Box 100,</b> 
    </br>
    <b>Lawrencetown, NS  B0S 1M0, Phone: (902)584-3339</b></p>
@endsection

{{-- Comment section for user feedback --}}
@section('comments')
    <form class="flex justify-center flex-col items-center">
        <label for="comments">Leave Us a Comment!</label>
        <textarea id="comments" rows="10" cols="80"></textarea>
    </form>
@endsection

{{-- Submission section --}}
@section('submit')
    <div id="submitDiv" class="flex justify-center">
        <form method="POST">
            <button class="button-submit" type="submit" id="submitForm">
                Submit
            </button>
        </form>
    </div>
@endsection

{{-- Footer section with contact information --}}
@section('footer')
    <footer>
        <p id="phone">Call: (902) 584-3339</p>
        <p id="email">Email: <a href="mailto:info@annapolisvalleyexhibition.com">info@annapolisvalleyexhibition.com</a></p>
        <address>Annapolis Valley Exhibition, 570 Main St, Box 100, Lawrencetown, NS, B0S 1M0</address>
    </footer>
    <style>
        footer {
            padding: 8px;
            background: #7A7A7A;
            border-color: #000000;
            border-width: 1px;
            border-style: solid;
        }

        #phone, #email, address {
            text-align: center;
            color: black;
            font-family: "Helvetica";
            font-weight: 400;
            font-size: 20px;
        }
    </style>
@endsection
