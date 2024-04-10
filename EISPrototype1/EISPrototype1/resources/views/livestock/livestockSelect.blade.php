@extends('layouts.livestockSelectLayout')

@section('content')
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
    <h2><b>SELECT A CATEGORY:</b></h2>
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
                <a href="{{ route('horsepulls') }}"><button class="FormBtn">Horse Pulls</button></a>
            </td>
            <td>
                <a href="{{ route('oxenpulls') }}"><button class="FormBtn">Oxen Pulls</button></a>
            </td>
            <td>
                <a href="{{ route('lighthorse') }}"><button class="FormBtn">Light Horse</button></a>
            </td>
        </table>
        <table id="tableTwo">
            <td>
                <a href="{{ route('haflinger') }}"><button class="FormBtn">Hafligner</button></a>
            </td>
            <td>
                <a href="{{ route('mini') }}"><button class="FormBtn">Mini</button></a>
            </td>
            <td>
                <a href="{{ route('beef') }}"><button class="FormBtn">Beef</button></a>
            </td>
            <td>
                <a href="{{ route('dairy') }}"><button class="FormBtn">Dairy</button></a>
            </td>
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



@endsection



