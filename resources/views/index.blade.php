<div>
@if(count($tasks))

@foreach ($tasks as $task )
    
<a href="{{route('getTask',['id'=>$task->id])}}">{{$task->title}}</div>
@endforeach
@else
 <div>No task</div>
 @endif
</div>