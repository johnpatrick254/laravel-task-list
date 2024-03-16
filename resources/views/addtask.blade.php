@extends('layouts.app')
@section('title','Add Task')
@section('content')
@section('styles')
<style type="text/tailwindcss">
  .err {
    font-size: 10px;
    color: red;

  }

  label{
    display: block
  }
  input, textarea{
     @apply shadow-sm bg-gray-100 appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
  } 
</style>
@endsection

   
    <form method="get" class="relative"  action="{{route('getTasks')}}">
      @csrf
      <button class="absolute top-[-45px] right-2 font-bold text-sm bg-gray-100 p-1 rounded-sm" type="submit">Back</button>
    </form>

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

 <div class="flex gap-2">
   <button class="mt-5 font-bold text-bold bg-gray-100 p-1 rounded-sm" type="submit">Submit</button>
  </div>
</form>
@endsection