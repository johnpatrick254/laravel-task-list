@extends('layouts.app')
@section('title',"Tasks")
@section('content')
<div>
@if(count($tasks))
@foreach ($tasks as $task )
    
<li><a href="{{route('getTask',['id'=>$task->id])}}">{{$task->title}}</div></li>
@endforeach
@else
 <div>No task</div>
 @endif
</div>
@endsection