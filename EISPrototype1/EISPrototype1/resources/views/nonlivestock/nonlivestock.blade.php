@section('head')
    <script src="{{ asset('/js/addToDropdown.js') }}"></script>
    <script src="{{ asset('/js/signature.js') }}"></script>
@endsection

@extends('layouts.nonlivestockLayout')
@extends('layouts.nav')

@section('title')
    <h1>Non-Livestock Entry Form</h1>
    <h2>Check Prize Book for Due Dates</h2>
    <h3>All Fields marked with a <span class="red">*</span>are Required.</h3>
@endsection

@section('content')
    <form id="entryForm" action="{{ route('submission') }}">
        @csrf
        <div id="radioBox">
            <div id="radioDiv">
                <div>
                    <input type="radio" id="fruitveg" name="categories[]" value="Fruit/Vegetables">
                    <label for="fruitveg" class="fruitvegLabel">Fruit & Vegetables</label>
                </div>
                <div>
                    <input type="radio" id="creativecraft" name="categories[]" value="Creative Crafts">
                    <label for="creativecraft" class="creativecraftLabel">Creative Crafts</label>
                </div>
                <div>
                    <input type="radio" id="rughook" name="categories[]" value="Rug Hooking">
                    <label for="rughook" class="rughookLabel">Rug Hooking</label>
                </div>
                <div>
                    <input type="radio" id="art" name="categories[]" value="Art">
                    <label for="art" class="artLabel">Art</label>
                </div>
                <div>
                    <input type="radio" id="photography" name="categories[]" value="Photography">
                    <label for="photography" class="photographyLabel">Photography</label>
                </div>
                <div>
                    <input type="radio" id="flowers" name="categories[]" value="Flowers">
                    <label for="flowers" class="flowersLabel">Flowers</label>
                </div>
                <div>
                    <input type="radio" id="cooking" name="categories[]" value="Cooking">
                    <label for="cooking" class="cookingLabel">Cooking</label>
                </div>
                <div>
                    <input type="radio" id="woodworking" name="categories[]" value="Woodworking">
                    <label for="woodworking" class="woodworkingLabel">Woodworking</label>
                </div>
            </div>
        </div>
        <div id="addFormBox" >
            <div id="dropdownBox">
                <div id="currentSelection">
                    <div id="classSelectDiv">
                        <label id="classDropdownLabel" for="classSelect">CLASS<span class="red">*</span></label>
                            <select id="classSelect" name="classSelect">
                                <option value="" disabled selected>Select an option above</option>
                            </select>
                    </div>
        
                    <div id="sectionSelectDiv">
                        <label id="sectionDropdownLabel" for="sectionSelect">SECTION<span class="red">*</span></label>
                        <select id="sectionSelect" name="sectionSelect">
                            <option value="" disabled selected>Please select a class first</option>
                        </select>
                    </div>

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

@section('addedForms')
</head>
<body>
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
                
            </tbody>
        </table>
    </div>
@endsection

@section('signature')
<h2>Please Sign Here<span class="red">*</span></h2>
    <div class="flex justify-center">
        <div class="wrapper">
            <button id="clear" class="text-center"><b>CLEAR SIGNATURE</b></button>
            <canvas id="signature-pad" width="600" height="200" ></canvas>
        </div>
    </div>
@endsection

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

@section('comments')
<form class="flex justify-center flex-col items-center">
    <label for="comments">Leave Us a Comment!</label>
    <textarea id="comments" rows="10" cols="80"></textarea>
</form>
@endsection

@section('submit')
<div id="submitDiv" class="flex justify-center">
    <form method="POST">
        <button class="button-submit" type="submit" id="submitForm" action="{{ route('submission') }}">
            Submit
        </button>
    </form>
</div>
@endsection

@section('footer')
    <footer>
    <p id="phone">Call: (902) 584-3339</p>
    <p id="email">Email: <a href="mailto:info@annapolisvalleyexhibiton.com">info@annapolisvalleyexhibition.com</a></p>
    <address>Annapolis Valley Exhibition, 570 Main St, Box 100, Lawrencetown, NS, B0S 1M0</address>
    </footer>

    <style>
    footer {
        padding: 8px 8px 8px 8px;
        background: #7A7A7A;
        border-color: #000000;
        border-width: 1px;
        border-style: solid;
    }

    #phone {
        text-align: center;
        color: black;
        font-family: "Helvetica";
        font-weight: 400;
        font-size: 20px;
    }

    address {
        text-align: center;
        color: black;
        font-family: "Helvetica";
        font-weight: 400;
        font-size: 20px;
    }

    #email {
        text-align: center;
        color: black;
        font-family: "Helvetica";
        font-weight: 400;
        font-size: 20px;
    }
    </style>

@endsection