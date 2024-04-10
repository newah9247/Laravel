@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('name')
    <h1>Hi,</h1>
    <h1>I'm Noah Taylor</h1>
@endsection

@section('content')
<h1 class="mb-4 mt-4 text-4xl text-center">whoami</h1>
<p class="text-center text-xs text-gray-300">this is a terminal joke</p>

<div class="gridPhoto">
    <div class="project"><img src="{{ asset('/images/img1.jpg') }}" alt="image 1"></div>
    <div class="project"><img src="{{ asset('/images/img2.jpg') }}" alt="image 1"></div>
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
    
</style>
@endsection

