{{-- page for displaying edication summary --}}
@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Skills</h1>
            <p class="text-gray-600 dark:text-gray-400">Your Skill Summary</p>
        </div>

        @foreach ($skills as $skill)
            {{-- render skill in card --}}
            <div class="flex flex-col items-center mt-8">
                <div class="w-full max -w-lg">
                    <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div class="p-4">
                            <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-100">{{ $skill->name }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $skill->rating }}</p>
                            <ul class="font-bold list-none ext-gray-600 dark:text-gray-400">
                                {{-- edit and delete button --}}
                                <div class="flex mt-4 items center">
                                    <a href="{{ route('skill.edit', $skill->id) }}"
                                        class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">Edit</a>
                                    <form action="{{ route('skill.destroy', $skill->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 ml-4 text-sm text-white bg-red-500 rounded hover:bg-red-600">Delete</button>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- add another skill button --}}
        <div class="flex flex-row items-center gap-2 mt-8">
            <a href="{{ route('skill.create') }}"
                class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">Add Another Skill</a>
            <p class="text-white">Or</p>
            <a href="{{ route('experience.create') }}"
                class="px-4 py-2 text-sm text-white bg-purple-500 rounded hover:bg-purple-600">Add Work Experience</a>
        </div>
    </div>
@endsection
