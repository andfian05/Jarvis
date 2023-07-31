<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks Jarvis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
    <h3 class="text-center mt-4">Selamat Datang Di Fitur Tasks</h3>
    <hr>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Deadline</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        
        <tbody>

         
         @foreach($tasks as $task)
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $task['name'] }}</td>
            <td>{{ Carbon\Carbon::parse($task['deadline'])->format('D, d-F-Y') }}</td>
            <td>{{ $task['status'] }}</td>
            <td>
                <a href="{{ route('tasks.show', $tasks->id) }}" class="btn btn-primary">View</a>
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
          </tr>
          @endforeach
          
        </tbody>
        
      </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>