@extends('layouts.app')

{{-- mane the main page of the Resume Builder --}}

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Resume Builder</h1>
            <p class="text-gray-600 dark:text-gray-400">Create your resume in minutes</p>
        </div>
        <div class="flex flex-col items-center mt-8">
            <a href="#"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create a new resume</a>
        </div>
    </div>
@endsection
