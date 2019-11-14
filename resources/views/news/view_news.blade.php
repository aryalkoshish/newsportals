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
          <h1 class="m-0 text-dark">View News</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add News</li>
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
              <h3 class="card-title">All News</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>News Title</th>
                  <th>Write Name</th>
                  <th>Views</th>
                  <th>Action</th>
                  <th>Comments</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($news as $news)
                <tr>
                  <td>{{e(str_limit($news->news_title,$limits='20'))}}</td>
                  <td>{{e($news->writer_id)}}
                  </td>
                  <td>Views Count</td>
                  <td>                 <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                      Action
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{url('edit_news')}}">Edit</a>
                      <a class="dropdown-item" href="{{route('shownews',$news->id)}}">View</a>
                      <a class="dropdown-item" href="#">Delete</a>
                      
                    </div>
                  </div>
                  
                </div></td>
                  <td>No. of comments</td>
                </tr>
 @endforeach

                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->





  
  @endsection