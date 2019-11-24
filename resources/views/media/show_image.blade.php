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
          <h1 class="m-0 text-dark">Images</h1>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">चिल्ला र खाल्डामुक्त सडकमै बढी दुर्घटना</h3>
            </div>
            <div class="card-body">
             <div class="col-md-12">
              <h1 class="m-0 text-dark">अटेर गरे डोजर चलाउँछौं : प्रवक्ता चौधरी</h1>
            </div>
            <div  style="text-align: right;">
              <h4>2076/07/19</h4>
                  <h4 class="m-0 text-dark">Writers Name</h1>
                <h4 class="m-0 text-dark">Views</h1>
                </div>
               
                @foreach($im as $i) 
              <div class='container'>
                     
                <div class="row">
                 <div class='col-md-4'>
                         
                    <img style="width:70%;height:200px;" alt="photoes" src='image/{{$i->images}}'>
                     
                    </div>
                    @endforeach

                
                  <div>
                    <h5>SEO Title</h5>
                    <h5>SEO Keywords</h5>
                    <h5>SEO Description</h5>
                  </div>

                </div>
                <!-- /.card-body -->
                <button type="submit" class="btn btn-default bg-green " >Back</button>
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>





      @endsection