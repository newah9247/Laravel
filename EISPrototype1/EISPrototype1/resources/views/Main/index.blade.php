<!DOCTYPE html>
<html lang="en">
<head>
    @include("layouts.Head")
    <link href="/css/MainPageCSS/index.css" rel="stylesheet" />
</head>
<nav>
    <table>
        <tr>
            <td><img id="EISLogo" src="Images/EISLogo.png" /></td>
            <td><nav>
            </nav></td>     
        </tr>
    </table>
</nav>
<body>
    <a href="#"><button class="login">Admin Login</button></a>
    <a href="{{ route('officelogin') }}"><button class="login">Office Login</button></a>
    <h2><b>ANNAPOLIS VALLEY EXHIBITION FORMS</b></h2>
    <style>
        h2 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            padding-top: 20px;
            padding-left: 15%;
            font-size: 45px;
        }
    </style>
    <table id="BtnTable">
        <tr>
            <td>
                <a href="{{ route('entrySelect') }}"><button class="FormBtn">Entry Forms</button></a>
            </td>
            <td>
                <a href="{{ route('sponsorship') }}"><button class="FormBtn">Sponsor Form</button></a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="{{ route('parade') }}"><button class="FormBtn">Parade Form</button></a>
            </td>
            <td>
                <a href="{{ route('vendor') }}"><button class="FormBtn">Vendor Form</button></a>
            </td>
        </tr>
    </table>
</body>
    @include("layouts.Footer")
</html>