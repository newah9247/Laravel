@extends('layouts.nonlivestock')
@extends('layouts.nav')

@section('title')
    <h1>Non-Livestock Entry Form</h1>
    <h2>Check Prize Book for Due Dates</h2>
    <h3>All Fields marked with a * are Required.</h3>
@endsection

@section('content')
    <form method="POST" id="entryForm" action="{{ route('submission') }}">
        @csrf
        <div id="checkdiv">
            <div >
                <input type="checkbox" id="fruitveg" name="categories[]" value="Fruit/Vegetables">
                <label for="fruitveg" >Fruit & Vegetables</label>
            </div>
            <div >
                <input type="checkbox" id="creativecraft" name="categories[]" value="Creative Crafts">
                <label for="creativecraft" >Creative Crafts</label>
            </div>
            <div >
                <input type="checkbox" id="rughook" name="categories[]" value="Rug Hooking">
                <label for="rughook" >Rug Hooking</label>
            </div>
            <div >
                <input type="checkbox" id="art" name="categories[]" value="Art">
                <label for="art" >Art</label>
            </div>
            <div >
                <input type="checkbox" id="photography" name="categories[]" value="Photography">
                <label for="photography" >Photography</label>
            </div>
            <div >
                <input type="checkbox" id="flowers" name="categories[]" value="Flowers">
                <label for="flowers" >Flowers</label>
            </div>
            <div >
                <input type="checkbox" id="cooking" name="categories[]" value="Cooking">
                <label for="cooking" >Cooking</label>
            </div>
            <div >
                <input type="checkbox" id="woodworking" name="categories[]" value="Woodworking">
                <label for="woodworking" >Woodworking</label>
            </div>

            @error('categories[]')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>

        <div class="mx-auto max-w-lg pt-7">
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <div id="currentSelection">
        
                    <div id="classSelect" class="text-left">
                        <label for="classSelect" class="block text-sm font-medium text-gray-700">Class</label>
                            <select id="classSelect" name="classSelect" class="flex justify-left mt-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ">
                                <option value="option1">Option 1</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                    </div>
        
                    <div id="selectionDetails" class="flex justify-center">
                        <button type="submit" id="addForm" class="rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50">
                            Add Form
                        </button>
                    </div>
        
                    <div id="sectionSelect" class="text-right">
                        <label for="sectionSelect" class="block text-sm font-medium text-gray-700">Section</label>
                        <select id="sectionSelect" name="sectionSelect" class="block mt-1 py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm ml-auto">
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
        
                </div>
            </div>
        </div>
@endsection


@extends('layouts.footer')