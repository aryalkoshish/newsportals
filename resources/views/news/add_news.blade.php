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
					<h1 class="m-0 text-dark">ADD NEWS</h1>
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
					<div class="card">
						<!-- form start -->
						<form action="{{url('store_news')}}" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="box-body" style="padding: 15px;">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-heading"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="News Title" name="news_title">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-user-edit"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Writer Id" name="writer_id" >
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="far fa-file-alt"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="News Description" name="news_description">
								</div>

								

								<div class="box-header">
									<h3 class="box-title">News

									</h3>
								</div>
								<!-- /.box-header -->
								<div class="mb-10">
									<textarea class="textarea" placeholder="Place some text here" name="news" 
									style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</div>
								
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-file"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="SEO Title" name="seo_title">
								</div>
								
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-tags"></i></i></span>
									</div>
									<input type="text" class="form-control" placeholder="SEO Keywords" name="seo_keywords" >
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('description')}}</div>
									<label for="Description">Description</label><br>
									<!-- /.box-header -->
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here" name="seo_description" 
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
								<div class="form-group">
									<!-- checkbox -->
<input type="checkbox" name="categories" value="news"> News<br>
<input type="checkbox" name="categories" value="politics">Politics<br>
<input type="checkbox" name="categories" value="International" checked> International<br>
								</div>
								<div class="form-group">
									<input type="hidden" name="views" value="0">
								</div>
								<div class="col-sm-3" >
									<button type="submit" class="btn btn-default bg-green " >Submit</button>
								</div>

							</div>

						</form>
					</div>
					
				</div>		
			</div>
		</div>
	</section>


	@endsection