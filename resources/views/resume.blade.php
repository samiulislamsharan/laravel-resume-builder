<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Resume</title>
</head>
<!-- Body ----------------------------------------------------------------------- -->

<body>
    <main class="font-jost hyphens-manual">
        <!-- Page -------------------------------------------------------------------------------------------------------->
        <section
            class="max-w-3xl p-10 mx-auto my-auto bg-gray-100 border-4 border-gray-700 rounded-2xl sm:p-9 md:p-16 lg:mt-6 print:border-0 page print:max-w-letter print:max-h-letter print:mx-0 print:my-o xsm:p-8 print:bg-white md:max-w-letter md:h-letter lg:h-letter">
            <!-- Name ---------------------------------------------------------------------------------------------------->
            <header class="inline-flex items-baseline justify-between w-full mb-2 align-top border-b-4 border-gray-300">
                <section class="block">
                    <h1 class="mb-0 text-5xl font-bold text-gray-700">
                        {{ ucfirst($user->userDetail->full_name) }}
                    </h1>
                    <!--Job Title--------------------------------------------------------------------------------------------------------->
                    <h2 class="m-0 ml-2 text-2xl font-semibold text-gray-700 leading-snugish">
                        Full Stack Web Development
                    </h2>
                    <!--Location --------------------------------------------------------------------------------------------------------->

                    <h3 class="m-0 mt-2 ml-2 text-xl font-semibold text-gray-500 leading-snugish">
                        {{ $user->userDetail->address }}
                    </h3>
                </section>
                <!--   Initials Block         -->
                <section
                    class="justify-between px-3 mt-0 mb-5 text-4xl font-black leading-none text-white bg-gray-700 initials-container print:bg-black"
                    style="padding-bottom: 1.5rem; padding-top: 1.5rem;">
                    <section class="text-center initial">S</section>
                    <section class="text-center initial">I</section>
                </section>
            </header>

            <!-- Column -------------------------------------------------------------------------------------------------->
            <section
                class="col-gap-8 print:col-count-2 print:h-letter-col-full col-fill-balance md:col-count-2 md:h-letter-col-full">
                <section class="flex-col">
                    <!-- Contact Information ------------------------------------------------------------------------------------->
                    <section class="pb-2 mt-4 mb-0 first:mt-0">
                        <!-- To keep in the same column -------------------------------------------------------------------------->
                        <section class="break-inside-avoid">
                            <section class="pb-4 mb-2 border-b-4 border-gray-300 break-inside-avoid">
                                <ul class="list-inside pr-7">
                                    <li
                                        class="mt-1 leading-normal text-black text-gray-500 transition duration-100 ease-in hover:text-gray-700 text-md print:">
                                        <a href="		    https://veilmail.io/e/J-td7W
            " class="group">
                                            <span class="mr-2 text-lg font-semibold text-gray-700 leading-snugish">
                                                Portfolio:
                                            </span>
                                            https://veilmail.io/e/J-td7W

                                            <span
                                                class="inline-block font-normal text-black text-gray-500 transition duration-100 ease-in group-hover:text-gray-700 print:text-black print:">
                                                ↗
                                            </span>
                                        </a>
                                    </li>
                                    <li
                                        class="mt-1 leading-normal text-gray-500 transition duration-100 ease-in hover:text-gray-700 text-md">
                                        <a href="https://github.com/Thomashighbaugh" class="group">
                                            <span class="mr-5 text-lg font-semibold text-gray-700 leading-snugish">
                                                Github:
                                            </span>
                                            Thomashighbaugh
                                            <span
                                                class="inline-block font-normal text-black text-gray-500 transition duration-100 ease-in group-hover:text-gray-700 print:text-black print:">
                                                ↗
                                            </span>
                                        </a>
                                    </li>

                                    <li
                                        class="mt-1 leading-normal text-gray-500 transition duration-100 ease-in hover:text-gray-700 text-md">
                                        <a href="#">
                                            <span class="mr-8 text-lg font-semibold text-gray-700 leading-snugish">
                                                Email:
                                            </span>
                                            {{ $user->userDetail->email }}

                                            <span
                                                class="inline-block font-normal text-gray-500 transition duration-100 ease-in group-hover:text-gray-700 print:text-black">
                                                ↗
                                            </span>
                                        </a>
                                    </li>
                                    <li
                                        class="mt-1 leading-normal text-gray-500 transition duration-100 ease-in hover:text-gray-700 text-md">
                                        <a href="tel:+15109070654">
                                            <span class="mr-5 text-lg font-semibold text-gray-700 leading-snugish">
                                                Phone:
                                            </span>
                                            {{ $user->userDetail->phone_number }}
                                        </a>
                                    </li>
                                </ul>
                            </section>
                        </section>
                    </section>
                    <!--Summary ---------------------------------------------------------------------------------------------------------->
                    <section class="pb-2 pb-4 mt-0 border-b-4 border-gray-300 first:mt-0">
                        <!-- To keep in the same column -->
                        <section class="break-inside-avoid">
                            <h2 class="mb-2 text-xl font-bold tracking-widest text-gray-700 print:font-normal">
                                SUMMARY
                            </h2>

                            <section class="mb-2 break-inside-avoid">
                                <p class="mt-2 leading-normal text-gray-700 text-md">
                                    {{ $user->userDetail->summary }}
                                </p>
                            </section>
                        </section>
                    </section>
                    <!--Education -------------------------------------------------------------------------------------------------------->
                    <section class="pb-0 mt-2 border-b-4 border-gray-300 first:mt-0 break-inside-avoid">
                        <!-- To keep in the same column -->
                        <section class="break-inside-avoid">
                            <h2 class="mb-2 text-lg font-bold tracking-widest text-gray-700 print:font-normal">
                                EDUCATION
                            </h2>
                            <!-- school --------------------------------------------------------------------------->
                            @foreach ($user->education as $e)
                                <section class="mt-2 border-b-2 break-inside-avoid">
                                    <header>
                                        <h3 class="text-lg font-semibold text-gray-700 leading-snugish">
                                            {{ $e->school_name }}
                                        </h3>
                                        <p class="leading-normal text-gray-500 text-md">
                                            {{ $e->start_date }} to {{ $e->end_date }} | {{ $e->degree }}
                                        </p>
                                    </header>
                                    <ul class="mt-2 text-gray-800 list-disc list-inside text-md">
                                        <li>
                                            <span class="font-semibold text-md">
                                                Major:
                                            </span>
                                            {{ $e->field_of_study }}
                                        </li>
                                        <li>
                                            <span class="font-semibold text-md">
                                                GPA:
                                            </span>
                                            3.9
                                        </li>
                                        <li>
                                            <span class="font-semibold text-md">
                                                Skills:
                                            </span>
                                            Research, Analysis, Critical Thinking, Communication
                                        </li>
                                    </ul>
                                </section>
                        </section>
                    </section>
                    @endforeach

                    <!--Begin Skills ----------------------------------------------------------------------------------------------------->
                    <section class="pb-6 mt-0 mb-4 border-b-4 border-gray-300 first:mt-0 break-inside-avoid">
                        <!-- To keep in the same column -->
                        <section class="break-inside-avoid">
                            <h2 class="mb-2 text-lg font-bold tracking-widest text-gray-700 print:font-normal">
                                SKILLS
                            </h2>
                            <section class="mb-0 break-inside-avoid">
                                <section class="mt-1 last:pb-1">
                                    <ul class="flex flex-wrap -mb-1 font-bold leading-relaxed text-md -mr-1.6">
                                        @foreach ($user->skills as $skill)
                                            <li
                                                class="p-1.5 mb-1 leading-relaxed text-white bg-gray-800 mr-1.6 print:bg-white print:border-inset">
                                                {{ $skill->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </section>
                            </section>
                        </section>
                    </section>

                    <!--Experience ------------------------------------------------------------------------------------------------------>
                    <section class="pb-2 mt-4 border-b-4 border-gray-300 first:mt-0">
                        <!-- To keep in the same column ------------------------------------------------------------------------->
                        <section class="break-inside-avoid">
                            <h2 class="mb-2 text-xl font-black tracking-widest text-gray-800 print:font-normal">
                                EXPERIENCE
                            </h2>
                            <!--Job 1-->
                            @foreach ($user->experiences as $work)
                                <section class="mb-2 border-b-2 border-gray-300 break-inside-avoid">
                                    <header>
                                        <h3 class="font-semibold text-gray-800 text-md leading-snugish">
                                            {{ $work->job_title }}
                                        </h3>
                                        <p class="text-sm leading-normal text-gray-500">
                                            {{ $work->start_date }} &ndash; {{ $work->end_date }} | {{ $work->company }}
                                        </p>
                                    </header>
                                    <ul class="pl-3 mt-2 font-normal text-gray-700 text-md leading-snugish">
                                        <li>
                                            <span class="text-gray-500 transform -translate-y-px select-none">
                                                &rsaquo;
                                            </span>
                                            Created high-quality, customized web applications from scratch, employing a
                                            diverse set of programming languages, including HTML, CSS, JavaScript, PHP, and
                                            Python, to fulfill unique client requirements.
                                        </li>
                                    </ul>
                                </section>
                            @endforeach
                        </section>
                    </section>
                    <!-- end Column -->
                </section>
                <!-- end Page -->
    </main>
</body>

</html>
