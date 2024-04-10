<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Office-MainMenu</title>
        <link rel="stylesheet" href="/css/office.css"/>
        @include("layouts.Head")
    </head>
    <body>
        @include("layouts.Header")
        <h1 id="office-entrant" class="center-text margin-top-bottom" >Entrant Search</h1>


        <section class="DropdownSection">
            <label for="FirstName">First Name: </label>
            <input type="text" id="FirstName" name="FirstName" class="Dropdown">

            <label for="LastName">Last Name</label>
            <input type="text" id="LastName" name="LastName" class="Dropdown">

            <label for="email">Email: </label>
            <input type="text" id="Email" name="Email" class="Dropdown">

            <label for="Address">Last Name</label>
            <input type="text" id="Address" name="Address" class="Dropdown">


        </section>

 
        <br><br>

        <a href="{{url('/officeSearchLivestock')}}"  style="display: flex; justify-content: center;"> <button id="Search" class="btn btn-primary margin-top-bottom" >Search</button> </a>


        <table class="search-table">
            <tr class="search-table-header">
                <th class="Category"> <h3>Category</h3> </th>
                <th class="Class"> <h3>Class</h3> </th>
                <th class="Description"> <h3>Description</h3> </th>
                <th class="Print"> <h3>Print Entrants</h3> </th>
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
                <td class="Category"> <p> <b> Light Horse </b> </p> </td>
                <td class="Class"> <p> Racing </p> </td>
                <td class="Description"> <p>Race light Horses</p> </td>
                <td class="Print"> <a href="{{url('/officeFakePrint')}}" > <button class="btn btn-primary margin-top-bottom">Print Entrant List</button> </a> </td>
            </tr>

            <tr class="search-table-row" >
                <td class="Category"> <p> <b> Light Horse</b> </p> </td>
                <td class="Class"> <p> Hoops</p> </td>
                <td class="Description"> <p> Jump through hoops? </p> </td>
                <td class="Print"> <a href="{{url('/officeFakePrint')}}" > <button class="btn btn-primary margin-top-bottom">Print Entrant List</button> </a> </td>
            </tr>

        </table>
    </body>
    @include("layouts.Footer");
</html>
