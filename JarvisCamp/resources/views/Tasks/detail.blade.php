<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks Jarvis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    
    <h3 class="text-center mt-4">Selamat Datang Di Fitur Detail Tasks</h3>
    <hr>
    <div class="container">
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $tasks->name }}">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="desc" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="desc" value="{{ $tasks->desc }}">
            </div>
          </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>