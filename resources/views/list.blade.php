@extends('layouts/app')

@section('tab-title')
All tasks
@endsection
@section('btn')

@endsection
@section('page-title')
All Tasks
@endsection

@section('content')
<ul class="w-100  ">

    @forelse ($tasks as $task )
    {{-- {{dd($task->id)}} --}}


    @if ($task->status == 0)
    <li
        class="relative flex justify-start items-center rounded-lg mb-6 pl-5 pt-5 pb-5 border-r-6 border-green-400 bg-indigo-200 shadow-xl linear duration-300 hover:scale-103">

        <span
            class=" flex justify-center items-center  w-13 h-13 p-5 mr-5 rounded-[50px] bg-indigo-500 text-2xl font-semibold text-amber-100">
            <span class="absolute inline-flex w-8 h-8 animate-ping rounded-full bg-green-400 opacity-75"></span></span>
        <a href="{{ route('show.task', ['task'=>$task->id]) }}" class="font-semibold text-indigo-700">
            <span class="absolute inset-0"></span>
            {{$task->task_title}}
        </a>

    </li>
    @else

    <li
        class="relative flex justify-start items-center rounded-lg mb-6 pl-5 pt-5 pb-5 border-r-4 border-red-300 bg-indigo-100 shadow-xl text-gray-600 linear duration-300 scale-90 hover:scale-103 ">

        <span
            class=" flex justify-center items-center  w-13 h-13 p-5 mr-5 rounded-[50px] bg-indigo-300  text-2xl font-semibold text-amber-100 ">
            &#10003;</span>
        <a href="{{ route('show.task', ['task'=>$task->id]) }}" class="line-through text-indigo-300"> <span
                class="absolute inset-0"></span>{{$task->task_title}}</a>

    </li>
    @endif

    @empty
    <li
        class="flex justify-start items-center rounded-lg mb-6 pl-5 pt-5 pb-5 border-r-6 border-emerald-400 bg-indigo-200 shadow-xl linear duration-300 hover:scale-103">
        <span
            class=" flex justify-center items-center  w-13 h-13 p-5 mr-5 rounded-[50px] bg-indigo-500 text-2xl font-semibold text-amber-100">-</span>
        <p class="font-semibold text-indigo-700">There is no task to do!
        </p>

    </li>




    @endforelse
</ul>
@endsection
</body>

</html>