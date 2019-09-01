@extends("layout")
@section('content')

     <form action="{{route('store')}}" method="post">
     @csrf
     <div class="form-group">
       <label for="">task name</label>
       <input type="text" name="task_name" id="task_name" class="form-control" placeholder="" aria-describedby="helpId">
     </div>

     <div class="form-group">
       <label for="">task description</label>
       <input type="text" name="task_description" id="task_description" class="form-control" placeholder="" aria-describedby="helpId">
     </div>


     <div class="form-group">
       <label for="">task percentage</label>
       <input type="text" name="task_precentage" id="task_precentage" class="form-control" placeholder="" aria-describedby="helpId">
     </div>

     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
     
   </div>
   @endsection