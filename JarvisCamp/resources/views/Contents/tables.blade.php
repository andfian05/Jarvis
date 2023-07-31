@extends('main')
@section('content')
<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title fw-semibold mb-4">Data Blog</h5>
          <div class="card">
            <div class="card-body">
              <form>
                
                <div class="table-responsive " id="no-more-tables">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                       
                        <th scope="col" class="text-center">Action</th> 
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      @foreach ($posts as $post)
                        <tr>
                          <td scope="row" data-title="No" class="text-center">{{ $loop->iteration }}</td>
                          <td data-title="Title">{{ $post->title }}</td>
                          <td data-title="Author">{{ $post->author }}</td>
                          <td data-title="Description">{{ $post->description }}</td>
                          <th class="d-flex justify-content-center">
                            <a class="btn btn-primary btn-sm me-2"
                                href=""><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                            <a class="btn btn-success btn-sm me-2"
                                href=""><i class="fa-solid fa-pencil"></i> Update</a>
                            <form method="POST" action=""
                                style="display: inline-block;">
                              
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                            </form>
                          </th>
                        </tr>
                        @endforeach
                    </tbody>
                    
                  </table>
                </div>

              </form>
            </div>
          </div>




          <h5 class="card-title fw-semibold mb-4">Data Pengguna</h5>
          <div class="card">
            <div class="card-body">
              <form>
                
                <div class="table-responsive " id="no-more-tables">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                      
                       
                        <th scope="col" class="text-center">Action</th> 
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      @foreach ($users as $user)
                        
                        <tr>
                          <td scope="row" data-title="No" class="text-center">{{ $loop->iteration }}</td>
                          <td data-title="Full Name">{{ $user->name }}</td>
                          <td data-title="Email">{{ $user->email }}</td>
                          
                          <th class="d-flex justify-content-center">
                            <a class="btn btn-primary btn-sm me-2"
                                href=""><i class="fa-sharp fa-solid fa-magnifying-glass"></i>  Detail</a>
                            <a class="btn btn-success btn-sm me-2"
                                href=""><i class="fa-solid fa-pencil"></i> Update</a>
                            <form method="POST" action=""
                                style="display: inline-block;">
                              
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Delete?')"><i class="fa-solid fa-trash"></i>  Delete</button>
                            </form>
                          </th>
                        </tr>
                        @endforeach
                    </tbody>
                    
                  </table>
                </div>

              </form>
            </div>
          </div>


         
        </div>
      </div>
    </div>
  </div>
@endsection