@extends('layouts/app')

@section('tab-title')
Add Task
@endsection
{{-- @section('btn')

@endsection --}}
@section('page-title')
Add a new ask
@endsection

@section('content')
<div>
    <form action="{{route('store.task')}}" method="POST">
        @csrf
        <div>
            <div
                class="min-w-120 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-l-3 linear duration-300 border-[transparent]  hover:border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200 hover:scale-102">
                <label for="task_title" class=" pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Task
                    Title <span class="text-red-300"> * </span>
                    @error('task_title')
                    <span class="ml-2 text-red-300 text-sm lowercase"> * {{$message}}</span>
                    @enderror
                </label>
                <input type="text" name="task_title" id="task_title" placeholder="Add task Title"
                    class="p-3 pl-5 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-indigo-600 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400 ">
            </div>
            <div
                class="min-w-120 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-l-3 linear duration-300 border-[transparent]  hover:border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200 hover:scale-102">
                <label for="author" class="pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Author <span
                        class="text-red-300"> * </span>
                    @error('author')
                    <span class="ml-2 text-red-300 text-sm lowercase"> * {{$message}}</span>
                    @enderror</label>
                <input type="text" name="author" id="author" placeholder="Author"
                    class="p-3 pl-5 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-indigo-600 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400 ">
            </div>

            <div
                class="min-w-120 flex justify-center flex-col mb-4 p-5  pb-7 border-l-3 border-l-3 linear duration-300 border-[transparent]  hover:border-indigo-200 rounded-bl-xl rounded-br-xl shadow-xl shadow-indigo-200 hover:scale-102">
                <label for="task_description" class="pl-5 mb-2 p-2 uppercase text-indigo-600  text-md">Task
                    Description <span class="text-red-300"> * </span>
                    @error('task_description')
                    <span class="ml-2 text-red-300 text-sm lowercase"> * {{$message}}</span>
                    @enderror</label>
                <textarea type="text" name="task_description" id="task_description" placeholder="Task Description"
                    rows="5"
                    class="p-4 pl-8 pt-10 pr-5 bg-indigo-100 outline-none rounded-[50px]  shadow-lg shadow-indigo-300 text-indigo-600 placeholder-indigo-300 focus:scale-102 focus:bg-indigo-200 linear duration-400"></textarea>
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