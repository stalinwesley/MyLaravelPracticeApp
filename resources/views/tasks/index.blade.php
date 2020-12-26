
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tasks</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="m-t"> 

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>

  <h2>Tasks form</h2>
  <form action="{{ route('task.store')}}" method="POST"> 
    @csrf
    <div class="form-group">
      <label for="text">title:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter text" name="title">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="description" class="form-control" id="pwd" placeholder="Enter description" name="description">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @if (count($tasks1))
      
  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks1 as $task)
          
      <tr>
        <td>{{ $task->title}}</td>
        <td>{{ $task->description }}</td>
        <td> <a href="{{ route('task.edit',['task'=>$task->tasks_id])}}">Edit</a> <a href="#" class="delete_task">Delete</a> 
        </td>
        <form action="{{ route('task.delete',['task'=>$task->tasks_id])}}" id="t_d" method="POST">
        @csrf
        @method('delete')
        </form>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  @else 
  <p style="text-align: center">Tasks Not Yet Added</p>
  @endif

</div>
<script>  

$(document).ready(function(){
  $('.delete_task').click(function(e){
      e.preventDefault();
      if(confirm('Confirm to Delete ?')){
        $('#t_d').submit();
      }
  })
})
</script>
</body>
</html>
