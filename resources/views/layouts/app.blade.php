<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tab-title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>
</head>

<body>
    {{-- btn add new task --}}

    <nav class="fixed  top-10 left-10">
        <div
            class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200  shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:bg-amber-200 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
            <a href="{{route('home')}}"
                class="static  flex justify-center items-center w-full h-full text-3xl  text-indigo-700 ease-in-out duration-300 hover:text-amber-500">
                &LeftArrow;
                <span
                    class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-amber-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
                    Back to home page
                </span>
            </a>
        </div>
        <div
            class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
            <a href="{{route('add.task')}}"
                class="relative flex justify-center items-center w-full h-full text-5xl -translate-y-1 text-indigo-500">
                &plus;
                <span
                    class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-indigo-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
                    Add a new task
                </span>
            </a>
        </div>
        @yield('nav')





    </nav>
    @if (session()->has('success') || session()->has('error'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition.duration.300
        class="fixed top-15 left-1/2 -translate-x-1/2">
        @if (session('success'))
        <div class="min-w-[300px] p-2 pl-10 pr-10 bg-green-50 border-1 border-green-200 rounded-lg text-green-500">
            <p class="text-center">Success!</p>
            <p class="text-center">{{session('success')}}</p>
        </div>
        @elseif(session('error'))
        <div class="min-w-[300px] p-2 pl-10 pr-10 bg-amber-200 border-1 border-amber-200 rounded-lg text-amber-500">
            <p class="text-center">Upss...!</p>
            <p class="text-center">{{session('error')}}</p>
        </div>
        @endif



    </div>

    @endif



    {{-- btn add new task --}}
    <div class="w-full min-h-svh flex justify-center items-start mb-10">
        <div class=" w-150 p-10 mt-20 rounded-xl bg-indigo-50">

            <div class="flex items-center flex-col p-2 rounded-xl ">
                <h1
                    class=" w-1/2 mb-10 pb-5 border-b-1 border-indigo-300 text-center text-2xl text-indigo-600 uppercase ">
                    @yield('page-title')
                </h1>
                @yield('content')

            </div>
        </div>

    </div>

</body>

</html>