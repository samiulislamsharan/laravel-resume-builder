@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Create Skill</h1>
            <p class="text-gray-600 dark:text-gray-400">Fill in your details</p>
        </div>
        <div class="flex flex-col items-center mt-8">
            <form action="{{ route('skill.store') }}" method="POST" class="w-full max-w-lg">
                @csrf
                @method('POST')
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Skill Name
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-briefcase"></i>
                            </span>
                            <input type="text" name="name" id="name"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Skill Name" required>
                            @error('name')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="rating" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Skill Rating (Optional)
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                            <input type="number" name="rating" id="rating" min="1" max="5"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Rate your skill between 1-5" required>
                            @error('rating')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-row items-center gap-2 mt-8">
                    <button type="submit"
                        class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">Submit</button>
                    <p class="text-white">Or</p>
                    <a href="{{ route('skill.index') }}"
                        class="px-4 py-2 text-sm text-white bg-purple-500 rounded hover:bg-purple-600">See already
                        added skills</a>
                </div>
            </form>
        </div>
    </div>
@endsection
