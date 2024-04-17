@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('content')
<h1 class="mb-4 mt-4 text-xl text-center">all of my public projects can be found on my github!</h1>
<a class="flex justify-center text-blue-500" href="https://github.com/newah9247"><b>github</b></a>

<h1 class="mb-4 mt-4 text-4xl text-center">some projects i've done</h1>
<p class="mb-4 mt-4 text-m text-center text-gray-500">most of these are from a laravel udemy course i did during school</p>
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

@endsection
