@extends('layouts/app')

@section('tab-title')
Show task
@endsection
{{-- btn add new task --}}

@section('nav')
<div
    class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
    <a href="#" class="static  flex justify-center items-center w-full h-full text-3xl  text-indigo-500">
        &#128393;
        <span
            class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-indigo-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
            Edit this task
        </span>
    </a>
</div>
@endsection


{{-- btn add new task --}}

@section('page-title','Show task')


@section('content')
show task
@endsection
</body>

</html>