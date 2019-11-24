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
          <h1 class="m-0 text-dark">View NEWS</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">View News</li>
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
              <h3 class="card-title">{{e($news->categories)}}</h3>
            </div>
            <div class="card-body">
             <div class="col-sm-9">
              <h1 class="m-0 text-dark">{{e($news->news_title)}}</h1>
            </div>
            <div style="text-align: right;">
              <h4>{{$news->created_at}}</h4>           
              <h4 class="m-0 text-dark">{{$news->writer_id}}</h1>

                <h4 class="m-0 text-dark">{{$ip}}</h1>
                </div>
                <div>
                  {!! ($news->news_description) !!}
                </div>
                <div class="col-sm-12">
                  <h5 >{{e($news->news)}}</h5>

                </div>
                
                <div>
                  <h5>SEO Title:: {{e($news->seo_title)}}</h5>
                  <h5>SEO Keyword:: {{e($news->seo_keywords)}}</h5>
                  <h5>SEO Description:: {!! ($news->seo_description) !!}</h5>
                </div>
               @foreach($sorted as $s)
               {{$s}}&nbsp;

               @endforeach
              </div>


              <!-- /.card-body -->
              <button type="submit" class="btn btn-default bg-green " >Back</button>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

  </div>



  @endsection