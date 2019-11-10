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
					<h1 class="m-0 text-dark">ADD Image</h1>
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
						<form role="form">
							<div class="box-body" style="padding: 15px;">
								<div class="form-group">
									<label >Upload Image</label><br>
									<input type="file" class="form-control" id="title" placeholder="Upload your image">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('title')}}</div>
									<label for="package name">Image Title</label><br>
									<input type="text" class="form-control" id="" name="imagetitle" value="{{old('imagetitle')}}">
								</div>
								<div class="form-group">
									<label>Image Description</label><br>
									<textarea class="form-control" rows="6" placeholder="Enter ..." id="imagedescription" name="imagedescription"></textarea>
								</div>



								<!-- /.box-header -->
								<div class="form-group">
									<label> Description</label><br>
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
								
								<br>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('title')}}</div>
									<label for="package name">SEO Title</label><br>
									<input type="text" class="form-control" id="" name="title" value="{{old('title')}}">
								</div>
								<br>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('keyword')}}</div>
									<label for="Alt-image"> SEO Keyword</label><br>
									<input type="text" class="form-control" id="keyword" name="keyword" value="{{old('keyword')}}">
								</div>
								<br>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('description')}}</div>
									<label for="Description">SEO Description</label><br>
									<!-- /.box-header -->
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
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