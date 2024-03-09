@extends('layouts.app')
@section('title',"Tasks")
@section('content')
<div>
@if(count($tasks))
@foreach ($tasks as $task )
    
<li><a href="{{route('getTask',['task'=>$task->id])}}">{{$task->title}}</div></li>
@endforeach
@if(count($tasks))
<nav>
    {{$tasks->links()}}
</nav> @endif
@else
 <div>No task</div>
 @endif
</div>
@endsection