@extends('layouts/app')

@section('tab-title')
Edit Task
@endsection
@section('nav')
<div
    class="group w-15 h-15 rounded-[50px] mb-5 bg-indigo-200 shadow-xl shadow-gray-300 ease-in-out duration-300 opacity-75 hover:opacity-100 hover:scale-105 hover:shadow-gray-400">
    <a href="{{route('show.task')}}"
        class="static  flex justify-center items-center w-full h-full text-3xl  text-indigo-500">
        &#10007;
        <span
            class="absolute left-full w-50 ml-2 p-2 pl-3 pr-3 bg-indigo-100 text-sm opacity-0 scale-0 text-center group-hover:opacity-50 group-hover:scale-100 transition-all duration-300 rounded">
            Cancel and back to the task
        </span>
    </a>
</div>
@endsection
@section('page-title')
Edit this task
@endsection

@section('content')
<div>
    <form action="">
        <div>
            <div
                class="min-w-120 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-l-3 linear duration-300 border-[transparent]  hover:border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200 hover:scale-102">
                <label for="task_title" class="w-60 pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Edit title</label>
                <input type="text" name="task_title" value="{{old('task_title')}}"
                    class="p-3 pl-5 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-indigo-600 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400 ">
            </div>

            <div
                class="min-w-120 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-l-3 linear duration-300 border-[transparent]  hover:border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200 hover:scale-102">
                <label for="task_title" class="w-60 pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Edit
                    Description</label>
                <textarea type="text" name="task_description" rows="5" value="{{old('task_description')}}"
                    class="p-4 pl-8 pt-10 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-indigo-600 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400"></textarea>
            </div>


        </div>
        <div class=" w-full flex justify-center p-5 ">
            <button type=" submit"
                class="p-2 pl-4 pr-4 rounded-[50px] bg-indigo-300 shadow-lg shadow-indigo-300 text-indigo-100 linear duration-350 cursor-pointer hover:bg-indigo-400 hover:shadow-md hover:scale-95">Submit</button>
        </div>
    </form>
</div>
@endsection
</body>

</html>