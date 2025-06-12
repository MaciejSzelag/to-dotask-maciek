<?php
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('list', ['tasks' => Task::latest()->paginate(5)]);
})->name('home');

Route::get('/tasks/{task}/edit', function (Task $task) {

    if ($task->status === 1) {
        return redirect()
            ->route('show.task', ['task' => $task->id])
            ->with('error', 'You cannot update task already completed');
    } else {

        return view('edit', [
            'task' => $task,
        ]);
    }
})->name('edit.task');

Route::get('/tasks/{task}', function (Task $task) {
    return view('show-task', [
        'task' => $task,
    ]);
})->name('show.task');

Route::get('/add-new-task', function () {

    return view('add-task');

})->name('add.task');

Route::post('/tasks', function (TaskRequest $request) {

    $task = Task::create($request->validated());
    // $task->save();
    return redirect()
        ->route('show.task', ['task' => $task->id])
        ->with('success', 'Task has been successfully created');
})->name('store.task');

Route::put('/tasks/{task}/toggle-status', function (Task $task) {

    $task->toggleStatus();
    return redirect()->back()->with('success', 'Status has been changed successfully!');

})->name('toggle.status');

Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {

    $task->update($request->validated());
    return redirect()
        ->route('show.task', ['task' => $task->id])
        ->with('success', 'The task ahs been updated');

})->name('update.task');

Route::delete('tasks/{task}', function (Task $task) {
    $task->delete();
    return redirect()->route('home')->with('success', 'The task has been deleted');

})->name('delete.task');
