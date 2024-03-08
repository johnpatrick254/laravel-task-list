@extends('layouts.app')
@section('title','Edit Task')
@section('content')
@section('styles')
<style>
.err{
    font-size:10px;
    color: red;

}

</style>
@endsection
<form action="{{route('editTasks',['task'=>$task->id])}}" method="post">
  @csrf
  @method('PUT')
  <div>
    <label for="Title">Title</label>
    <input type="text" name="title" value="{{$task->title}}"/>
    <span>
      @error('title')
      <p class="err">{{$message}}</p>
      @enderror
    </span>
  </div>
  <div>
    <label for="Description">Description</label>
    <input type="text" name="description" value="{{$task->description}}"/>
     <span>
      @error('description')
      <p class="err">{{$message}}</p>
      @enderror
    </span>
  </div>

  <div>
    <label for="Long Description">Long Description</label>
    <input type="text" name="long_description" value="{{$task->long_description}}"/>
     <span>
      @error('long_description')
      <p class="err">{{$message}}</p>
      @enderror
    </span>
  </div>


  <button type="submit">Submit</button>
</form>
@endsection