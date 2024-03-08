@extends('layouts.app')
@section('title',$task->title)
@section('content')
<div>
    @if(isset($task))
    <h1>{{$task->title}}</h1>
     <p>{{$task->description}}</p>
     <div>
        <p>{{$task->created_at}}</p>
        <p>{{$task->updated_at}}</p>
     </div>
     @else
     <div>No task</div>
     @endif
     
</div>
@endsection()