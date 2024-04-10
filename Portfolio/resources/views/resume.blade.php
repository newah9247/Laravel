@extends('layouts.app')

@section('scripts')
    <link rel="stylesheet" href="{{ asset('/css/resume.css') }}">
@endsection

@section('content')
    <h1 class="mb-4 mt-4 text-4xl text-center text-orange-400">work experience</h1>
        <br>
    <h2 class="mb-4 mt-4 text-2xl text-center">Klahanie Campground</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">front desk attendant/maintenance</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(august 2023 - october 2023)</h4>
        <ul>
            <li class="flex justify-center">managed front desk operations efficiently</li>
            <li class="flex justify-center">maintained campground facilities through yardwork and cleaning</li>
            <li class="flex justify-center">dedsigned promotional posters for events</li>
            <li class="flex justify-center">organized and hosted events for children</li>
        </ul>

    <h2 class="mb-4 mt-4 text-2xl text-center">NSCC/CORAH</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">administrative assistant</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(april 2023 - august 2023)</h4>
        <ul>
            <li class="flex justify-center">handled confidential information with discretion</li>
            <li class="flex justify-center">utilized excel to create comprehensive event master sheets</li>
            <li class="flex justify-center">developed mock-ups for an interactive website</li>
            <li class="flex justify-center">ensured website accessibility compliance for users with disabilities</li>
        </ul>

    <h2 class="mb-4 mt-4 text-2xl text-center">Wal-Mart</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">retail associate</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(september 2020 - october 2022)</h4>
        <ul>
            <li class="flex justify-center">maintained stocked shelves and performed regular facing duties</li>
            <li class="flex justify-center">ensured cleanliness by promptly attending to spills and dropped items</li>
            <li class="flex justify-center">provided excellent customer service at cash registers</li>
            <li class="flex justify-center">collaborated effectively within a team environment</li>
        </ul>

    <h1 class="mb-4 mt-4 text-4xl text-center text-orange-400">education</h1>
        <br>
    <h2 class="mb-4 mt-4 text-2xl text-center">Nova Scotia Community College</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">it programming (two year course)</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(expected graduation: june 2024)</h4>   

    <h1 class="mb-4 mt-4 text-4xl text-center text-orange-400">volunteer & extracurricular activities</h1>
        <br>
    <h2 class="mb-4 mt-4 text-2xl text-center">Challenge Nova Scotia</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">team member</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(2023)</h4> 
        <ul>
            <li class="flex justify-center">developed a solution to a problem presented by Premier Tim Houston</li>
            <li class="flex justify-center">worked with a strict and short deadline</li>
            <li class="flex justify-center">collaborated with team members to refine the proposed solution</li>
            <li class="flex justify-center">conducted risk analysis and prepared necessary documentation</li>
        </ul>

    <h2 class="mb-4 mt-4 text-2xl text-center">West Kings Student Council</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">graduation representative</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(2021-2022)</h4> 
        <ul>
            <li class="flex justify-center">advocated for student ideas and implemented initiatives</li>
            <li class="flex justify-center">represented the graduating class in various school activities</li>
            <li class="flex justify-center">assisted in planning and organizing school events</li>
        </ul>

    <h2 class="mb-4 mt-4 text-2xl text-center">The Mysterious Coast TV Show</h2>
    <h3 class="mb-4 mt-4 text-xl text-center">crew assistant</h3>
    <h4 class="mb-4 mt-4 text-s text-center">(2019-2020)</h4> 
        <ul>
            <li class="flex justify-center">assisted with sound and video setup for television productions</li>
            <li class="flex justify-center">operated video recording equipment</li>
            <li class="flex justify-center">provided support with drone usage for aerial shots</li>
            <li class="flex justify-center">aided in investigative activities conducted by the production crew</li>
        </ul>


    <h1 class="mb-4 mt-4 text-4xl text-center text-orange-400">programming skills & strengths</h1>
    <p class="text-center">HTML/CSS</p>
        <div id="container">
            <div class="skills html">100%</div>
        </div>

    <p class="text-center">Python</p>
        <div id="container">
            <div class="skills python">85%</div>
        </div>

    <p class="text-center">PHP</p>
        <div id="container">
            <div class="skills php">75%</div>
        </div>

    <p class="text-center">JavaScript</p>
        <div id="container">
            <div class="skills js">65%</div>
        </div>

    <p class="text-center">Java</p>
        <div id="container">
            <div class="skills java">60%</div>
        </div>

    <p class="text-center">C++</p>
        <div id="container">
            <div class="skills cp">55%</div>
        </div>

    <p class="text-center">C#</p>
        <div id="container">
            <div class="skills csharp">45%</div>
        </div>

    <p class="text-center">C (my least favourite language)</p>
        <div id="container">
            <div class="skills c">35%</div>
        </div>

    <p class="text-center">Ruby</p>
        <div id="container">
            <div class="skills rubyonrails">10%</div>
        </div>

    <h2 class="mb-4 mt-4 text-2xl text-center">Frameworks</h2>

    <p class="text-center">Laravel</p>
        <div id="container">
            <div class="skills laravel">80%</div>
        </div>

    <p class="text-center">Ruby on Rails</p>
        <div id="container">
            <div class="skills rubyonrails">30%</div>
        </div>

        

<style>

</style>
@endsection