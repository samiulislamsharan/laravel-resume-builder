@extends('layouts.app')

@section('content')
    <div class="container px-4 py-8 mx-auto">
        {{-- add user details button --}}
        <div class="flex flex-col items-center gap-2 mt-8">
            <a href="{{ route('user-detail.create') }}"
                class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">Add User Details</a>
        </div>
        {{-- render the user details like above card. there will be full name and email. buttons: edit, resume and delete --}}
        @foreach ($userDetails as $userDetail)
            <div class="flex flex-col items-center mt-8">
                <div class="w-full max -w-lg">
                    <div class="overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                        <div class="p-4">
                            <h3 class="mb-2 text-xl font-bold text-gray-800 dark:text-gray-100">
                                {{ $userDetail->full_name }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $userDetail->summary }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $userDetail->email }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $userDetail->phone_number }}</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ $userDetail->address }}</p>
                            <ul class="font-bold list-none ext-gray-600 dark:text-gray-400">
                                {{-- edit and delete button --}}
                                <div class="flex mt-4 items center">
                                    <a href="{{ route('user-detail.edit', $userDetail->id) }}"
                                        class="px-4 py-2 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">
                                        Edit
                                    </a>
                                    {{-- <a href="{{ route('resume.index', $userDetail->id) }}"
                                        class="px-4 py-2 ml-4 text-sm text-white bg-green-500 rounded hover:bg-green-600">
                                        Resume
                                    </a> --}}
                                    <a onclick="resume_modal.showModal()"
                                        class="px-4 py-2 ml-4 text-sm text-white bg-green-500 rounded hover:bg-green-600">
                                        Resume
                                    </a>
                                    <form action="{{ route('user-detail.destroy', $userDetail->id) }}" method="POST">
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

        <!-- create a dialog element -->
        <dialog id="resume_modal"
            class="w-full p-10 text-black transition-all duration-300 rounded-md dark:bg-gray-800 dark:text-white backdrop-blur-sm">

            <div class="flex flex-col gap-4">
                {{-- add the resume view in iframe --}}
                <iframe src="{{ route('resume.index', $userDetail->id) }}" class="w-full bg-white h-[600px]"></iframe>

                <div class="flex flex-row gap-4">
                    {{-- add download button --}}
                    <a href="{{ route('resume.download') }}"
                        class="px-4 py-2 my-4 text-white transition-all duration-300 bg-blue-500 rounded-md hover:bg-gray-700 dark:bg-blue-600">
                        Download
                    </a>

                    <button
                        class="px-4 py-2 my-4 text-white transition-all duration-300 bg-blue-500 rounded-md hover:bg-blue-600 dark:bg-gray-700"
                        onclick="resume_modal.close()">
                        Close
                    </button>
                </div>
            </div>
        </dialog>
    </div>
@endsection
