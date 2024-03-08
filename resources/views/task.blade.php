@extends('layouts.app')
@section('title',$task->title)
@section('script')
      <script>

 function update(){
       
         return "{{route('editTasks',['task'=>$task->id])}}"
      }
     </script>
     @endsection
@section('content')

<div>
   <form method="get" action="{{route('editTask',['task'=>$task->id])}}" >
   @csrf
   <button  type="submit" >EDIT</button>
   </form>
    @if(isset($task))
     <p>{{$task->description}}</p>
     <div>
        <p>{{$task->created_at}}</p>
        <p>{{$task->updated_at}}</p>
     </div>
      <form method="post" action="{{route('deleteTask',['task'=>$task->id])}}" >
   @csrf
   @method('delete')
   <button  type="submit" >Delete</button>
   </form>
     @else
     <div>No task</div>
     @endif
    
</div>
@endsection()