<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use \App\Models\Task;


Route::get('/tasks', function () {
  return view('index', [
    "tasks" => \App\Models\Task::latest()->paginate(5)
  ]);
})->name("getTasks");

Route::post('/tasks', function (Request $req) {
  $data = $req->validate([
    "title" => "required|max:255",
    "description" => "required",
    "long_description" => "required"
  ]);
  $task = Task::create($data);

  return redirect()->route('getTask', ['id' => $task->id])->with('success', "Task added successfully");
})->name("addTasks");

Route::put('/tasks/{task}', function (Task $task, Request $req) {
  $data = $req->validate([
    "title" => "required|max:255",
    "description" => "required",
    "long_description" => "required"
  ]);
  $task::create($data);
  return redirect()->route('getTask', ['task' => $task->id])->with('success', "Task edited successfully");
})->name("editTasks");

Route::view('/tasks/add', 'addtask');


Route::get('tasks/{task}', function (Task $task) {;
  return view('task', [
    "task" => $task
  ]);
})->name('getTask');

Route::get('/tasks/{task}/edit', function (Task $task) {
  return view('editTask', ['task' => $task]);
})->name("editTask");

Route::delete('/tasks/{task}', function (Task $task) {
  $task->delete();
  return redirect()->route('getTasks')->with("success", "Tasks deleted successfully");
})->name('deleteTask');

Route::fallback(function () {
  return redirect()->route('getTasks');
});

require __DIR__ . '/auth.php';
