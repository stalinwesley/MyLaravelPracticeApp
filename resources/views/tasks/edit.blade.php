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
  <h2>Tasks Edit</h2>
  <form action="{{ route('task.update',['task'=>$task->tasks_id])}}" method="POST"> 
    @csrf
    @method('put')
    <div class="form-group">
      <label for="text">Title:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter text" name="title" value="{{$task->title}}">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="description" class="form-control" id="pwd" placeholder="Enter description" name="description" value="{{$task->description}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

 

</div>

</body>
</html>
