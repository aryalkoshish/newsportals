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
          <h1 class="m-0 text-dark">Media</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Media</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      

        <div class="card">
          <div class="col-sm-12">
            <div class="col-sm-6">
              <h4>Image</h4>
            
              <a href="{{url('add_image')}}"><button type="submit" class="btn btn-default bg-green " >Add</button></a>      
            
              <a href="{{url('view_image')}}"><button type="submit" class="btn btn-default bg-green " >View</button></a>      
            </div>


            <div class="col-sm-4">
              <h4>Audio</h4>
           
              <a href="{{url('add_audio')}}"><button type="submit" class="btn btn-default bg-green " >Add</button></a>      
            
              <a href="{{url('view_audio')}}"><button type="submit" class="btn btn-default bg-green " >View</button></a>      
            </div>


            <div class="col-sm-4">
              <h4>Files</h4>
            
              <a href="{{url('add_files')}}"><button type="submit" class="btn btn-default bg-green " >Add</button></a>     
            
              <a href="{{url('view_files')}}"><button type="submit" class="btn btn-default bg-green " >View</button></a>       
            </div>

            <div class="col-sm-4">
              <h4>Videos</h4>
           
              <a href="{{url('add_video')}}"><button type="submit" class="btn btn-default bg-green " >Add</button></a>      
            
              <a href="{{url('view_videos')}}"><button type="submit" class="btn btn-default bg-green " >View</button></a>       
            </div>
          </div>
        </div>
      
    </div>
  </section>

  @endsection