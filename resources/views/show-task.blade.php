@extends('layouts/app')

@section('tab-title')
{{$task->task_title}}
@endsection
{{-- btn add new task --}}

@section('nav')
<div
    class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
    <a href="{{route('edit.task', ['task'=>$task->id])}}"
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
    <form action="{{route('toggle.status', ['task'=>$task->id])}}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit"
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
    <form action="{{route('delete.task', ['task'=>$task->id])}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit"
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

@section('page-title')

{{$task->task_title}}

@endsection


@section('content')
<div class="w-105 p-5 border-1 border-indigo-600 rounded-md">
    <p class="text-indigo-500"> {{$task->task_description}}</p>
</div>
<div class="w-105 mt-3 mb-3 pl-4 italic text-left">

    @if ($task->created_at == $task->updated_at)
    <h3 class="text-indigo-400">- The task has been created by {{$task->author}} <br> - Date and time:
        {{$task->created_at}}
    </h3>
    @elseif($task->created_at != $task->updated_at)
    <h3 class="text-indigo-400">- The task has been updated by {{$task->author}} <br> - Date and time:
        {{$task->updated_at}}
    </h3>
    @endif

</div>
<div class="w-100 mb-10 mt-10 flex justify-center">

    @if ($task->status==0)
    <h2
        class="w-1/2 p-3 pt-2 pb-2 bg-red-100 border-1 border-red-500 rounded-md text-center text-sm text-red-600 uppercase ">
        Not Completed
    </h2>
    @else
    <h2
        class="w-1/2 p-3 pt-2 pb-2 bg-green-50 border-1 border-green-500 rounded-md text-center text-sm text-green-600 uppercase ">
        Completed
    </h2>
    @endif

</div>

@endsection
</body>

</html>