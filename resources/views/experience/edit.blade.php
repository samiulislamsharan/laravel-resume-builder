@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Create Experience Detail</h1>
            <p class="text-gray-600 dark:text-gray-400">Fill in your details</p>
        </div>
        <div class="flex flex-col items-center mt-8">
            <form action="{{ route('experience.update', $experience) }}" method="POST" class="w-full max-w-lg">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="job_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Job Title
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <input type="text" name="job_title" id="job_title"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Job Title" value="{{ $experience->job_title }}" required>
                            @error('job_title')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Company
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <input type="text" name="company" id="company"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Company" value="{{ $experience->company }}" required>
                            @error('company')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            City
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </span>
                            <input type="text" name="city" id="city"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="City" value="{{ $experience->city }}" required>
                            @error('city')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Start Date
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-calendar"></i>
                            </span>
                            <input type="date" name="start_date" id="start_date"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $experience->start_date }}" required>
                            @error('start_date')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            End Date
                        </label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-calendar"></i>
                            </span>
                            <input type="date" name="end_date" id="end_date"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                value="{{ $experience->end_date }}" required>
                            @error('end_date')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="px-4 py-2 mt-4 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">Submit</button>
            </form>
        </div>
    </div>
@endsection
