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
					<h1 class="m-0 text-dark">ADD Video</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Add Video</li>
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
						<form role="form">
							<div class="box-body" style="padding: 15px;">
								<div class="form-group">
									<label >Video URL</label><br>
									<input type="url" class="form-control" id="title" placeholder="Upload your image">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('title')}}</div>
									<label for="package name">Video Title</label><br>
									<input type="text" class="form-control" id="" name="imagetitle" value="{{old('imagetitle')}}">
								</div>
								<div class="form-group">
									<label>Video Description</label><br>
									<textarea class="form-control" rows="6" placeholder="Enter ..." id="imagedescription" name="imagedescription"></textarea>
								</div>
								<div class="form-group">
									<label> Description</label><br>
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
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
									
									<label> Description</label><br>
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
							</div>
						</div>


					</div>
					<button type="submit" class="btn btn-default bg-green " >Submit</button>
				</div>

			</form>
		</div>
	</div>
</div>

</div>
</section>

@endsection