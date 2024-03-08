<?php

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use \App\Models\Task;


Route::get('/tasks', function (){
  return view('index', [
    "tasks" => \App\Models\Task::latest()->get()
  ]);
})->name("getTasks");

Route::post('/tasks', function (Request $req)  {
 $data= $req->validate( [
  "title"=>"required|max:255",
  "description"=>"required",
  "long_description"=>"required"
  ]);
  $task = new Task();
  $task->title = $data['title'];
  $task->description = $data['description'];
  $task->long_description = $data['long_description'];
  $task->save();
  return redirect()->route('getTask',['id'=>$task->id]);
})->name("addTasks");

Route::view('/tasks/add','addtask');


Route::get('tasks/{id}', function ($id) {
  $foundTask = \App\Models\Task::find($id);
  if(!$foundTask){
    abort(Response::HTTP_NOT_FOUND);
  }

  return view('task', [
    "task" => $foundTask
  ]);
})->name('getTask');

Route::fallback(function(){
  return redirect()->route('getTasks');
});

require __DIR__ . '/auth.php';
