@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">Create User Detail</h1>
            <p class="text-gray-600 dark:text-gray-400">Fill in your details</p>
        </div>
        <div class="flex flex-col items-center mt-8">
            <form action="{{ route('user-detail.store') }}" method="POST" class="w-full max-w-lg">
                @csrf
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="full_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Full Name
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-circle-user"></i>
                            </span>
                            <input type="text" name="full_name" id="full_name"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Full Name" required>
                            @error('full_name')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-envelope"></i>
                            </span>
                            <input type="email" name="email" id="email"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Email" required>
                            @error('email')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Phone Number
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-phone"></i>
                            </span>
                            <input type="text" name="phone_number" id="phone_number"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Phone Number" required>
                            @error('phone_number')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Address
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-house"></i>
                            </span>
                            <input type="text" name="address" id="address"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Address">
                            @error('address')
                                <p class="mt-2 text-xs italic text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label for="summary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Summary
                        </label>

                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-gray-300 border-e-0 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                                <i class="fa-solid fa-file"></i>
                            </span>
                            <textarea name="summary" id="summary"
                                class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Summary"></textarea>
                            @error('summary')
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
