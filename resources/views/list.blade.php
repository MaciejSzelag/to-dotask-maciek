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
    <li
        class="flex justify-start items-center rounded-lg mb-6 pl-5 pt-5 pb-5 border-r-6 border-emerald-400 bg-indigo-200 shadow-xl text-gray-600 linear duration-300 hover:scale-103">
        <span
            class=" flex justify-center items-center  w-13 h-13 p-5 mr-5 rounded-[50px] bg-indigo-500 text-2xl font-semibold text-amber-100">1</span>
        <a href="{{route('show.task')}}" class="font-semibold">Unfinished task </a>

    </li>
    <li
        class="flex justify-start items-center rounded-lg mb-6 pl-5 pt-5 pb-5 border-r-6 border-red-200 bg-indigo-100 shadow-xl text-gray-600 linear duration-300 hover:scale-103">
        <span
            class=" flex justify-center items-center  w-13 h-13 p-5 mr-5 rounded-[50px] bg-indigo-300  text-2xl font-semibold text-amber-100">2</span>
        <a href="{{route('show.task')}}" class="line-through text-indigo-300">Finished task</a>

    </li>
</ul>
@endsection
</body>

</html>