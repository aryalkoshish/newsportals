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
          <h1 class="m-0 text-dark">File</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View File</li>
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
             <div class="col-sm-9">
              <h1 class="m-0 text-dark">अटेर गरे डोजर चलाउँछौं : प्रवक्ता चौधरी</h1>
            </div>
            <div style="text-align: right;">
              <h4>2076/07/19</h4>           
                  <h4 class="m-0 text-dark">Writers Name</h1>
                 
                <h4 class="m-0 text-dark">Views</h1>
                </div>
               
                <div>
                  <h2>Video URL : <a href="https://www.youtube.com/watch?v=04cL3gTS_94">link</a></h2>
                </div>
                <div class="col-sm-12">
                  <h5 >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>

                </div>
                
                  <div>
                    <h5>SEO title</h5>
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