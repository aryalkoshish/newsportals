 @extends('layouts.testing')

@section('page-title')  
Add news
@endsection

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Files</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Media</li>
              <li class="breadcrumb-item active">View Files</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>File Name</th>
                  <th>URL</th>
                  <th>Writer Info</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  
                  <td> 4</td>
                  <td><div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Action
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('show_file')}}"><button>View</button>  </a>
                        
                        <a class="dropdown-item" href="#"><button  data-toggle="modal" data-target="#modal-danger">Delete</button></a>
                        
                      </div>
                    </div>
                    
                  </div></td>
                </tr>
                
              </tbody>
              <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        
      </div>
    </div>
  </section>

 
        @endsection