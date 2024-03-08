@extends('layouts.app')
@section('title','Add Task')
@section('content')
@section('styles')
<style>
.err{
    font-size:10px;
    color: red;

}

</style>
@endsection

<form action="{{route('addTasks')}}" method="post">
  @csrf
  <div>
    <label for="Title">Title</label>
    <input type="text" name="title">
    <span>
      @error('title')
      <p class="err">{{$message}}</p>
      @enderror
    </span>
  </div>
  <div>
    <label for="Description">Description</label>
    <input type="text" name="description">
     <span>
      @error('description')
      <p class="err">{{$message}}</p>
      @enderror
    </span>
  </div>

  <div>
    <label for="Long Description">Long Description</label>
    <input type="text" name="long_description">
     <span>
      @error('long_description')
      <p class="err">{{$message}}</p>
      @enderror
    </span>
  </div>


  <button type="submit">Submit</button>
</form>
@endsection