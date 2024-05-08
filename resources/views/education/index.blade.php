{{-- page for displaying edication summary --}}
@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Education Summary</h1>
            <p class="text-gray-600 dark:text-gray-400">Your Educational Summary</p>
        </div>

        @foreach ($educations as $education)
            <div class="flex flex-col items-center mt-8">
                <div class="w-full max -w-lg">
                    <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div class="p-4">
                            <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-100">{{ $education->school_name }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ $education->start_date }} -
                                {{ $education->end_date }} | {{ $education->degree }}
                            </p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ $education->field_of_study }}
                            </p>
                            <ul class="font-bold list-none ext-gray-600 dark:text-gray-400">
                                <div class="flex mt-4 items center">
                                    <a href="{{ route('education.edit', $education->id) }}"
                                        class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">
                                        Edit
                                    </a>
                                    <form action="{{ route('education.destroy', $education->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 ml-4 text-sm text-white bg-red-500 rounded hover:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- add another education button --}}
        <div class="flex flex-row items-center gap-2 mt-8">
            <a href="{{ route('education.create') }}"
                class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">Add Another Education</a>
            <p class="text-white">Or</p>
            <a href="{{ route('experience.create') }}"
                class="px-4 py-2 text-sm text-white bg-purple-500 rounded hover:bg-purple-600">Add Work Experience</a>
        </div>
    </div>
@endsection
