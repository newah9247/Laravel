<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Office-MainMenu</title>
        <link rel="stylesheet" href="/css/office.css"/>
        <script src="{{ asset('js/dropdown_script.js') }}" defer></script>
        @include("layouts.Head")
    </head>
    <body>
        @include("layouts.Header")
        <h1 id="office-livestock" class="Title center-text margin-top-bottom" >Livestock Entry Search</h1>


        <section class="DropdownSection">
            <label for="CategoryDropdown">Category: </label>
            <select name="category" class="CategoryDropdown Dropdown">
                <option value="Light Horse" > Light Horse </option>
                <option value="Cattle"> Cattle </option>
                <option value="Haflinger"> Haflinger </option>
                <option value="Mini Pleasure Livestock"> Mini Pleasure Livestock </option>
                <option value="Pulling Oxen"> Pulling Oxen </option>
                <option value="Pulling Horse"> Pulling Horse </option>
            </select>

            <label for="ClassDropdown">Class: </label>
                <select name="class" class="ClassDropdown Dropdown">
                    <option value="Racing"> Racing </option>
                    <option value="Barrels"> Barrels </option>
                    <option value="Hoops"> Hoops </option>
                </select>
        </section>

 
        <br><br>

        <a href="{{url('/officeSearchLivestock')}}"  style="display: flex; justify-content: center;"> <button class="btn btn-primary margin-top-bottom" >Search</button> </a>

        <!-- all caps are to be replaced by variables, from the drop down menu, and hidden if the value is empty -->

        {{-- <p id="Quantity-Search-Result" class="center-text"> There are <b>XXXX</b> Entrants for CATEGORY, and CLASS</p> --}}


        <table class="search-table">
            <tr class="search-table-header">
                <th class="Category"> <h3><b>Category</b></h3> </th>
                <th class="Class"> <h3><b>Class</b></h3> </th>
                <th class="Description"> <h3><b>Description</b></h3> </th>
                <th class="Print"> <h3><b>Print Entrants</b></h3> </th>
            </tr>

            <!-- This will be the result of some php and database querys, which will fill out the sections below, all tr below this is filler for showcase -->
            <!-- 
                Demonstration of Layout
            <tr>
                <td class="Category"> NAME of Category </td>
                <td class="Class"> NAME of Category  </td>
                <td class="Description">  NAME of Category </td>
                <td class="Print"> Button to print list of all entraints for that category</td>

                Button to use
                <a href="{{url('/PRINTPAGEVIEWHERE')}}" > <button type="Print" class="btn btn-primary margin-top-bottom">Print Entrant List</button>
            </tr> 
        -->
            <tr class="search-table-row" >
                <td class="Category"> <p>Light Horse </p> </td>
                <td class="Class"> <p> Racing </p> </td>
                <td class="Description"> <p>Race light Horses</p> </td>
                <td class="Print"> <a href="{{url('/officeFakePrint')}}" > <buttonclass="btn btn-primary margin-top-bottom">Print Entrant List</button> </a> </td>
            </tr>

            <tr class="search-table-row" >
                <td class="Category"> <p>Light Horse </p> </td>
                <td class="Class"> <p> Hoops</p> </td>
                <td class="Description"> <p> Jump through hoops? </p> </td>
                <td class="Print"> <a href="{{('/officeFakePrint')}}" > <button class="btn btn-primary margin-top-bottom">Print Entrant List</button> </a> </td>
            </tr>
        </table>
    </body>

    @include("layouts.Footer");
</html>
