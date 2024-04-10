<!DOCTYPE  html>
<html lang="en">
    <head>
        @include("layouts.Head")
        <title>Office-MainMenu</title>
        <link rel="stylesheet" href="/css/office.css"/>
        <script src="{{ asset('js/DropdownScript.js') }}" defer></script>
    </head>
    <body>
        @include("layouts.Header")

        <h2 id="office-nonlivestock" class="Title center-text margin-top-bottom" >Non-Livestock Entry Search</h2>
        </br></br>

            <section class="DropdownSection">
                <label for="CategoryDropdown">Category: </label>
                <select name="category" class="CategoryDropdown Dropdown">
                    <option value="Fruit and Vegetable"> Fruit and Vegetable </option>
                    <option value="Creative Crafts"> Creative Crafts </option>
                    <option value="Cooking"> Cooking </option>
                    <option value="Wood Working"> Wood Working </option>
                    <option value="Photography"> Photography </option>
                    <option value="Flowers"> Flowers </option>
                    <option value="Art"> Art </option>
                    <option value="Rug Hooking" > Rug Hooking </option>
                </select>

                <label for="ClassDropdown">Class: </label>
                <select name="class" class="ClassDropdown Dropdown">
                    <option value="Fruit and Vegetable"> Fruit and Vegetable </option>
                    <option value="Creative Crafts"> Creative Crafts </option>
                    <option value="Cooking"> Cooking </option>
                    <option value="Wood Working"> Wood Working </option>
                    <option value="Photography"> Photography </option>
                    <option value="Flowers"> Flowers </option>
                    <option value="Art"> Art </option>
                    <option value="Rug Hooking" > Rug Hooking </option>
                </select>

                <label for="SectionNameDropdown">Section Name: </label>
                <select name="section" class="SectionNameDropdown Dropdown">
                    <option value="123"> 123 </option>
                    <option value="456"> 456 </option>
                    <option value="789"> 789 </option>
                </select>
            </section>


        <br><br>

        <a href="{{ url('/officeSearchNonLivestock') }}"  style="display: flex; justify-content: center;"> <button type="submit" class="btn btn-primary margin-top-bottom" >Search</button> </a>
        <!-- all caps are to be replaced by variables, from the drop down menu, and hidden if the value is empty -->
        {{-- <p id="Quantity-Search-Result" class="center-text"> There are <b>XXXX</b> Entrants for CATEGORY, and CLASS and SECTION</p> --}}


        <table class="search-table">
            <tr class="search-table-header">
                <th class="Category"> <h3><b>Category</b></h3> </th>
                <th class="Class"> <h3><b>Class</b></h3> </th>
                <th class="Section"> <h3><b>Section</b></h3> </th>
                <th class="Description"> <h3><b>Description</b></h3> </th>
                <th class="Print"> <h3><b>Print Entrants</b></h3> </th>
            </tr>

            <!-- This will be the result of some php and database querys, which will fill out the sections below, all tr below this is filler for showcase -->
            <!-- 
                Demonstration of Layout
            <tr>
                <td class="Category"> NAME of Category </td>
                <td class="Class"> NAME of Category  </td>
                <td class="Section">  NAME of Category </td>
                <td class="Description">  NAME of Category </td>
                <td class="Print"> Button to print list of all entraints for that category</td>

                Button to use
                <a href="{{url('/PRINTPAGEVIEWHERE')}}" > <button type="Print" class="btn btn-primary margin-top-bottom">Print Entrant List</button>
            </tr> 
        -->
            <tr class="search-table-row" >
                <td class="Category"> <p> Fruit and Vegtables </p> </td>
                <td class="Class"> <p>Potato</p> </td>
                <td class="Section"> <p>Sweet Potato</p> </td>
                <td class="Description"> <p>Grow the Best Sweet Potato</p> </td>
                <td class="Print"> <a href="{{url('/officeFakePrint')}}" > <button class="btn btn-primary margin-top-bottom">Print Entrant List</button> </a> </td>
            </tr>

            <tr class="search-table-row" >
                <td class="Category"> <p> Fruit and Vegtables </p> </td>
                <td class="Class"> <p>Potato</p> </td>
                <td class="Section"> <p>Sweet Potato</p> </td>
                <td class="Description"> <p>Grow the Best Sweet Potato</p> </td>
                <td class="Print"> <a href="{{url('/officeFakePrint')}}" > <button class="btn btn-primary margin-top-bottom">Print Entrant List</button> </a> </td>
            </tr>

        </table>
    </body>

    @include("layouts.Footer");
</html>
