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
    <li
        class="flex justify-start items-center rounded-lg mb-6 pl-5 pt-5 pb-5 border-r-6 border-emerald-400 bg-indigo-200 shadow-xl linear duration-300 hover:scale-103">
        <span
            class=" flex justify-center items-center  w-13 h-13 p-5 mr-5 rounded-[50px] bg-indigo-500 text-2xl font-semibold text-amber-100">{{
            $task->id }}</span>
        <a href="{{ route('show.task', ['task'=>$task->id]) }}"
            class="font-semibold text-indigo-700">{{$task->task_title}}
        </a>

    </li>
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