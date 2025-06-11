<?php
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // dd(Task::latest());
    return view('list', ['tasks' => Task::latest()->paginate(5)]);
})->name('home');

Route::get('/tasks/{task}', function (Task $task) {
    return view('show-task', [
        'task' => $task,
    ]);
})->name('show.task');

Route::get('/add-new-task', function () {

    return view('add-task');

})->name('add.task');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.task');

Route::post('/tasks', function (TaskRequest $request) {

    $task = Task::create($request->validated());
    // $task->save();
    return redirect()
        ->route('show.task', ['task' => $task->id])
        ->with('success', 'Task has been successfully created');
})->name('store.task');
