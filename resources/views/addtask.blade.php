@extends('layouts.app')
@section('title','Add Task')
@section('content')
<form action="{{route('addTasks')}}" method="post">
  @csrf
  <div>
    <label for="Title">Title</label>
    <input type="text" name="title">
    <span>
      @error('title')
      <p>{{$message}}</p>
      @enderror
    </span>
  </div>
  <div>
    <label for="Description">Description</label>
    <input type="text" name="description">
     <span>
      @error('description')
      <p>{{$message}}</p>
      @enderror
    </span>
  </div>

  <div>
    <label for="Long Description">Long Description</label>
    <input type="text" name="long_description">
     <span>
      @error('long_description')
      <p>{{$message}}</p>
      @enderror
    </span>
  </div>


  <button type="submit">Submit</button>
</form>
@endsection