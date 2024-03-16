@extends('layouts.app')
<div class="w-full relative flex justify-end align-center gap-1">
  <p class="mr-auto">Status :
    @if ($task->completed == 0 )
    <span class="mr-auto bg-gray-100 p-1 rounded-sm">pending</span>
    @else
    <span class="mr-auto bg-gray-100 p-1 rounded-sm">completed</span>
    @endif
  </p>
  <form method="get" action="{{route('editTask',['task'=>$task->id])}}">
    @csrf
    <button class=" text-sm bg-gray-100 p-1 rounded-sm" type="submit">EDIT</button>

  </form>
  <form method="post" action="{{route('toggleComplete',['task'=>$task->id])}}">
    @csrf
    @method('PUT')

    <button class="text-sm bg-gray-100 p-1 rounded-sm" type="submit">
      @if ($task->completed == 0 )
      Mark Copmpleted
      @else
      Mark Pending
      @endif
    </button>

  </form>

</div>
@section('title',$task->title)
@section('script')
<script>
  function update() {

    // return "{{route('editTasks',['task'=>$task->id])}}"
  }
</script>
@endsection
@section('content')

<div>

  @if(isset($task))
  <p>{{$task->description}}</p>
  <div class="w-full relative my-2 flex justify-between align-center gap-1">
    <p>created at : {{$task->created_at}}</p>
    <p>last updated: {{$task->updated_at}}</p>
  </div>

  <div class="flex gap-2">
    <form method="post" action="{{route('deleteTask',['task'=>$task->id])}}">
      @csrf
      @method('delete')
      <button class="mt-5 text-sm bg-red-100 p-1 rounded-sm" type="submit">Delete</button>
    </form>
    <form method="get" action="{{route('getTasks')}}">
      @csrf
      <button class="mt-5 text-sm bg-gray-100 p-1 rounded-sm" type="submit">Back</button>
    </form>
  </div>

  @else
  <div>No task</div>
  @endif

</div>
@endsection()