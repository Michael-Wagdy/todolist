@extends('layout')
@section('content')
      <table class="table table-striped">
         <thead>
         <tr>
            <th>Task name</th>
            <th>Description</th>
            <th>percenetage</th>
            <th>Action
             <a name="view" style="float:right;" class="btn btn-primary" href="{{route('create')}}" role="button">Add Task</a></th>
         </tr>
         </thead>
         <tbody>
            @foreach($tasks as $task)
            <tr>
               <td>{{ $task->task_name }}</td>
               <td>{{ $task->task_description }}</td>
               <td>{{ $task->task_precentage }}</td>
               <td>
               <div class="btn-group">
               <a name="view" class="btn btn-primary" href="{{route('show',$task->id)}}" role="button">view</a>
               <a name="view" class="btn btn-dafult" href="{{route('edit',$task->id)}}" role="button">edit</a>
               <form action="{{ route('destroy', $task->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                                  </form>
                  </div>  
                  </div>  
            
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
   @endsection