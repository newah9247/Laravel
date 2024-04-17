@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="/css/index.css">
@endsection

@section('name')
    <h1 class="mb-4 mt-4 text-4xl text-center">Hi,</h1>
    <h1 class="mb-4 mt-4 text-4xl text-center">I'm Noah Taylor</h1>
    <br>
@endsection

@section('about')
<h1 class="mb-4 mt-4 text-4xl text-center">whoami</h1>
<p class="text-center text-xs text-gray-300">this is a terminal joke</p>
<p>i am a junior web (hopefully full stack) developer that has a passion for learning a plethora of things instead of sticking to one, that's why i chose to develop <b>full stack</b> skills.</p>
<br><br>
<h2 class="mb-4 mt-4 text-xl text-center">currently, i am learning:</h2>
<ul>
    <li class="list-disc">javascript (i should've learned this first off, but there's been very few scenarios where i have needed it in my education)</li>
    <li class="list-disc">typescript</li>
    <li class="list-disc">ruby on rails</li>
    <li class="list-disc">ruby</li>
    <li class="list-disc">a lot of other things...</li>
</ul>
<br>
@endsection

@section('content')
<p class="mb-4 mt-4 text-m text-center">this is me</p>
<div class="gridPhoto">
    <div class="project"><img src="{{ asset('/images/img1.jpg') }}" alt="image 1"></div>
    <div class="project"><img src="{{ asset('/images/img2.jpg') }}" alt="image 1"></div>
    <div class="project"><img src="{{ asset('/images/img3.jpg') }}" alt="image 1"></div>
</div>

<h1 class="mb-4 mt-4 text-2xl text-center">this is my favourite pokemon if you care</h1>
<div class="flex justify-center">
    <poke-dex name="Torchic"></pokedex>
</div>

@endsection

