@extends('layouts/app')

@section('tab-title')
Show task
@endsection
{{-- btn add new task --}}

@section('nav')
<div
    class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
    <a href="{{route('edit.task')}}"
        class="static  flex justify-center items-center w-full h-full text-3xl  text-indigo-500">
        &#128393;
        <span
            class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-indigo-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
            Edit this task
        </span>
    </a>
</div>
<div
    class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 hover:bg-green-100 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
    <form action="">
        <button href="{{route('add.task')}}"
            class="relative flex justify-center items-center w-full h-full text-2xl  text-indigo-700 hover:text-green-700">
            &#10003;
            <span
                class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-green-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
                Mark as completed or not.
            </span>
        </button>
    </form>
</div>
<div
    class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 hover:bg-red-100 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
    <form action="">
        <button href="{{route('add.task')}}"
            class="relative flex justify-center items-center w-full h-full text-2xl  text-indigo-700 hover:text-red-700">
            &#10005;
            <span
                class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-red-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
                Delete this task!
            </span>
        </button>
    </form>
</div>
@endsection


{{-- btn add new task --}}

@section('page-title','Show task')


@section('content')
<div class="w-100 mb-10 bg-indigo-300 rounded-md">
    <h2 class="p-3 text-center text-indigo-600 uppercase">{{$task->task_title}}</h2>
</div>
<div class="w-105 p-5 border-1 border-indigo-600 rounded-md">
    <p class="text-indigo-500"> {{$task->task_description}}</p>
</div>
@endsection
</body>

</html>