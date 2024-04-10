@extends('layouts.app')

@section('name')
    <h1>Hi,</h1>
    <h1>I'm Noah Taylor</h1>
@endsection

@section('content')
<h1 class="mb-4 mt-4 text-4xl text-center">whoami</h1>
<p class="text-center text-xs text-gray-300">this is a terminal joke</p>

<div class="gridPhoto">
    <div class="project"><img src="{{ asset('/images/img1.jpg') }}" alt="image 1"></div>
    <div class="photoText">fortnite</div>
    <div class="project"><img src="{{ asset('/images/img2.jpg') }}" alt="image 1"></div>
    <div class="photoText">fortnite</div>
    <div class="project"><img src="{{ asset('/images/img3.jpg') }}" alt="image 1"></div>
</div>

<h1 class="mb-4 mt-4 text-4xl text-center">projects</h1>
<div class="grid1">
    <div class="project">
        <a href="https://github.com/newah9247/SelfStudyProjects/tree/main/LivewirePoll">
            <img src="{{ asset('/images/livewirepoll.png') }}" alt="Livewire Poll">
        </a>
    </div>
    <div class="project">
        <a href="https://github.com/newah9247/SelfStudyProjects/tree/main/BookReviews">
            <img src="{{ asset('/images/bookreview.png') }}">
        </a>    
    </div>
    <div class="project">
        <a href="https://github.com/newah9247/SelfStudyProjects/tree/main/TaskList">
            <img src="{{ asset('/images/tasklist.png') }}">
        </a> 
    </div>
    <div class="project">
        <a href="https://github.com/newah9247/PubliclyAvailable/tree/main/MorseCode">
            <img src="#">
        </a>
    </div>
</div>

<style>
    .gridPhoto > .project > img {
        width: 400px;
        height: 700px;
    }

    .grid1 > .project > a > img {
        width: 500px;
        height: 300px;
    }

    .grid1 {
        height: 100%;
        display: grid;
        grid-template-columns: repeat(2, minmax(500px, 1fr));
        grid-template-rows: repeat(2, minmax(300px, 1fr));
        justify-content: center;
        text-align: center;
    }

    .gridPhoto {
        height: 100%;
        display: grid;
        grid-template-columns: repeat(5, minmax(400px, 1fr));
        grid-template-rows: repeat(1, minmax(700px, 1fr));
        justify-content: center;
    }

    .project {
        border: rgb(245, 112, 64) 5px solid;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease; /* Add transition effect */
        margin: 30px;
    }

    .photoText {
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease; /* Add transition effect */
        margin: 30px;
    }

    .project:hover {
        transform: scale(1.10); /* Increase size by 5% on hover */
    }
</style>
@endsection

