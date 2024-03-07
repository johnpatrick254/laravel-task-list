<div>
    @if(isset($task))
    <h1>{{$task->title}}</h1>
     <p>{{$task->description}}</p>
     @else
     <div>No task</div>
     @endif
     
</div>