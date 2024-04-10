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
        </tr>
    </table>
</nav>
<body>
    <h2 style="text-align: center; font-family: Arial, Helvetica, sans-serif;"><b>PLEASE SELECT ONE OF THE FOLLOWING:</b></h2>
    <style>
        h2 {
            text-align: center; 
            font-family: Arial, Helvetica, sans-serif;
            padding-top: 20px;
            font-size: 45px;
        }
    </style>
    <table id="BtnTable">
        <tr>
            <td>
                <a href="{{ route('livestockSelect') }}"><button class="FormBtn">Livestock</button></a>
            </td>
            <td>
                <a href="{{ route('nonlivestock') }}"><button class="FormBtn">Non Livestock</button></a>
            </td>
        </tr>
    </tr>
</table>
<style>
    .FormBtn {
        width: 320px;
        height: 203px;
        padding: 0px 10px 0px 10px;
        background: #B70F0A;
        color: #FFFFFF;
        border-color: #FFFFFF;
        border-width: 1px;
        border-style: solid;
        border-radius: 3px 3px 3px 3px;
        font-family: "Helvetica";
        font-weight: 700;
        font-size: 36px;
        text-align: center;
    }
</style>
</body>
@include("layouts.Footer")
</html>

