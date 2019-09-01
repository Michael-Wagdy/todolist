@extends('layout')
@section('content')

     <form action="{{route('update',$task->id)}}" method="post">
     @method('patch')
     @csrf

     <div class="form-group">
       <label for="">task name</label>
       <input type="text" name="task_name" id="task_name" class="form-control" placeholder="" value="{{ $task->task_name }}" aria-describedby="helpId">
     </div>

     <div class="form-group">
       <label for="">task description</label>
       <input type="text" name="task_description" id="task_description" class="form-control" placeholder="" value="{{ $task->task_description }}" aria-describedby="helpId">
     </div>

     <div class="form-group">
       <label for="">task percentage</label>
       <input type="text" name="task_precentage" id="task_precentage" class="form-control" placeholder="" aria-describedby="helpId">
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     
   </div>
   @endsection