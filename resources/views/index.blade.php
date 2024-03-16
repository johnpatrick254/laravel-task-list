@extends('layouts.app')
@section('title',"Tasks")
@section('content')
<div>
    <div>
        <form action="/tasks/add" class="relative" method="get">
            @csrf
            <button class="absolute top-[-45px] right-2 font-bold text-sm bg-gray-100 p-1 rounded-sm" type="submit"> + Add Task</button>
        </form>

    </div>
@if(count($tasks))
@foreach ($tasks as $task )
    
<li class="mb-5 flex flex-col gap-1">
    <a class='{{$task->completed == 0 ? "":"line-through"}}'href="{{route('getTask',['task'=>$task->id])}}">{{$task->title}}
    </li>
</div>
@endforeach
@if(count($tasks))
<nav>
  <nav>{{$tasks->links()}}</nav>  
</nav> @endif
@else
 <div>No task</div>
 @endif
</div>
@endsection