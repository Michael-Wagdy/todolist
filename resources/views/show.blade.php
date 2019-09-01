@extends('layout')
@section('content')

      <table class="table table-striped">
         <thead>
         <tr>
            <th>Task name</th>
            <th>Description</th>
            <th>percenetage</th>
         </tr>
         </thead>
         <tbody>
            <tr>
               <td>{{ $task->task_name }}</td>
               <td>{{ $task->task_description }}</td>
               <td>{{ $task->task_precentage }}</td>
            </tr>
            
         </tbody>
      </table>
      @endsection