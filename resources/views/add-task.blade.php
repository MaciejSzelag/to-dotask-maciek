@extends('layouts/app')

@section('tab-title')
Add Task
@endsection
@section('btn')

@endsection
@section('page-title')
Add Task
@endsection

@section('content')
<div>
    <form action="">
        <div>
            <div
                class="min-w-150 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200">
                <label for="task_title" class="w-60 pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Task
                    Title</label>
                <input type="text" name="task_title" placeholder="Add task Title"
                    class="p-3 pl-5 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-gray-100 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400">
            </div>
            <div
                class="min-w-150 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200">
                <label for="task_title" class="w-60 pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Task
                    Title</label>
                <input type="text" name="task_title" placeholder="Add task Title"
                    class="p-3 pl-5 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-gray-100 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400">
            </div>
            <div
                class="min-w-150 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200">
                <label for="task_title" class="w-60 pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Task
                    Title</label>
                <input type="text" name="task_title" placeholder="Add task Title"
                    class="p-3 pl-5 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-gray-100 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400">
            </div>
        </div>
        <div class=" w-full p-5 ">
            <button type=" submit"
                class="p-2 pl-4 pr-4 rounded-[50px] bg-indigo-300 shadow-lg shadow-indigo-300 text-indigo-100 linear duration-350 cursor-pointer hover:bg-indigo-400 hover:shadow-md hover:scale-95">Submit</button>
        </div>
    </form>
</div>
@endsection
</body>

</html>