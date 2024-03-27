@extends('layouts.indexLayout')
@extends('layouts.nav')

@section('title')
    <h1>Non-Livestock Entry Form</h1>
    <h2>Check Prize Book for Due Dates</h2>
    <h3>All Fields marked with a <span class="red">*</span>are Required.</h3>
@endsection

@section('content')
    <form id="entryForm" action="{{ route('submission') }}">
        @csrf
        <div id="checkdiv">
            <div>
                <input type="radio" id="fruitveg" name="categories[]" value="Fruit/Vegetables">
                <label for="fruitveg">Fruit & Vegetables</label>
            </div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                var classSelect = document.getElementById('classSelect');
                var originalOptions = classSelect.innerHTML;

                document.getElementById('fruitveg').addEventListener('change', function() {
                    if (this.checked) {
                        // Remove existing options
                        while (classSelect.firstChild) {
                            classSelect.removeChild(classSelect.firstChild);
                        }
                        // Add new options
                        var classOptions = ['37A - Apples - Plate of 5', 
                                            '37B - Apples - 3LB Bag', 
                                            '37C - Grapes, Peaches, Raspberries, Blueberries',
                                            '37D - Plums', 
                                            '37E - Blackberries', 
                                            '38A - Pears',
                                            '38B - Arrangement of Fruit - Senior',
                                            '39A - Apples - Plate of 5 - Junior',
                                            '39B - Apples - 3LB Bag - Junior',
                                            '39C - Arrangement of Fruit - Junior',
                                            '39D - Blueberries - Junior',
                                            '39E - Vegetables - Junior',
                                            '39F - Vegetable Display - Junior',
                                            '39G - Scarecrow - Junior',
                                            '40A - Roots & Potatoes',
                                            '40B - Vegetables',
                                            '40C - Vegetable Display - Senior',
                                            '40D - Heaviest Pumpkin or Squash',
                                            '40E - Herbs',
                                            '41A - Grains - Sheaf & Seed',
                                            '41B - Grassland',
                                            '42 - Artistic Display'];
                        classOptions.forEach(function(option) {
                            var opt = document.createElement('option');
                            opt.value = option;
                            opt.text = option;
                            classSelect.appendChild(opt);
                        });
                    }
                });
            });
            </script>


            <div>
                <input type="radio" id="creativecraft" name="categories[]" value="Creative Crafts">
                <label for="creativecraft">Creative Crafts</label>
            </div>
            <div>
                <input type="radio" id="rughook" name="categories[]" value="Rug Hooking">
                <label for="rughook">Rug Hooking</label>
            </div>
            <div>
                <input type="radio" id="art" name="categories[]" value="Art">
                <label for="art">Art</label>
            </div>
            <div>
                <input type="radio" id="photography" name="categories[]" value="Photography">
                <label for="photography">Photography</label>
            </div>
            <div>
                <input type="radio" id="flowers" name="categories[]" value="Flowers">
                <label for="flowers">Flowers</label>
            </div>
            <div>
                <input type="radio" id="cooking" name="categories[]" value="Cooking">
                <label for="cooking">Cooking</label>
            </div>

            <div>
                <input type="radio" id="woodworking" name="categories[]" value="Woodworking">
                <label for="woodworking">Woodworking</label>
            </div>
        </div>
        <div id="addFormBox" >
            <div class="bg-white p-3 rounded-lg shadow-lg">
                <div id="currentSelection">
        
                    <div id="classSelectDiv" class="text-left">
                        <label for="classSelect" class="block text-sm font-medium text-gray-700">Class</label>
                            <select id="classSelect" name="classSelect" class="flex justify-left mt-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                    </div>
        
                    <div id="selectionDetails" class="flex justify-center">
                        <button type="submit" id="addForm" class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                            Add Form
                        </button>
                    </div>
        
                    <div id="sectionSelectDiv" class="text-right">
                        <label for="sectionSelect" class="block text-sm font-medium text-gray-700">Section</label>
                        <select id="sectionSelect" name="sectionSelect" class="block mt-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ml-auto">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('addedForms')
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            margin: 50px auto;
            width: 60%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        td {
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .item-list {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table id="formTable">
            <thead>
                <tr>
                    <th>CLASS</th>
                    <th>SECTION</th>
                    <th>DESCRIPTION</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
        $('#addForm').click(function(event) {
        event.preventDefault();
        // Get the selected values from the dropdowns
        var selectedClass = $('#classSelect').val();
        var selectedSection = $('#sectionSelect').val();

        // Create a new row for the table
        var newRow = $('<tr>');

        // Add input fields for each column with the selected values
        newRow.append('<td>' + selectedClass + '</td>');
        newRow.append('<td>' + selectedSection + '</td>');
        newRow.append('<td></td>'); // Since there's no value for description initially
        newRow.append('<td><button type="button" class="deleteRow">Delete</button></td>');

        // Append the new row to the table
        $('#formTable tbody').append(newRow);
    });

        // Delete row functionality
        $(document).on('click', '.deleteRow', function() {
            $(this).closest('tr').remove();
        });
    });
    </script>
@endsection

@section('signature')
<h2 class="">Please Sign Here<span class="red">*</span></h2>
    <div class="flex justify-center">
        <div class="wrapper">
            <button id="clear" class="text-center">Clear</button>
            <canvas id="signature-pad" width="600" height="200" ></canvas>
        </div>
    </div>

    <script>
        var canvas = document.getElementById("signature-pad");

        function resizeCanvas() {
            var ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }
        window.onresize = resizeCanvas;
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(250,250,250)'
        });

        document.getElementById("clear").addEventListener('click', function(){
            signaturePad.clear();
        });

    </script>
@endsection

    @section('etransfer')
    <p style="text-align:center">E-transfers <b>ONLY</b> accepted at: <b>manager@annapolisvalleyexhibition.com</b>
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
    <form class="flex justify-center">
        <textarea id="comments" name="w3review" rows="10" cols="80">
            Leave us a note or comment!
        </textarea>
    </form>
    @endsection

    @section('submit')
    <div class="flex justify-center">
        <form method="POST">
            <button type="submit" id="submitForm" class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                Submit
            </button>
        </form>
    </div>
    @endsection

    @extends('layouts.footer')
    




