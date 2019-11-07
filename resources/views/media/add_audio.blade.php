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
					<h1 class="m-0 text-dark">ADD AUDIO</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Add Audio</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<!-- form start -->
						<form role="form">
							<div class="box-body" style="padding-left: 15px;">
								<div class="form-group">
									<label >Audio URL</label><br>
									<input type="url" class="form-control" id="title" placeholder="Upload your image">
								</div>
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('title')}}</div>
									<label for="package name">Audio Title</label><br>
									<input type="text" class="form-control" id="" name="imagetitle" value="{{old('imagetitle')}}">
								</div>
								<div class="form-group">
									<label>Audio Description</label><br>
									<textarea class="form-control" rows="6" placeholder="Enter ..." id="imagedescription" name="imagedescription"></textarea>
								</div>
								
								<!-- /.box-header -->
								<div class="form-group">
								<label> Description</label><br>
								<div class="box-body pad">
									<form>
										<textarea class="summernote" name="description" rows="10" cols="80">
											This is my textarea to be replaced with CKEditor.
										</textarea>
									</form>
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
									<textarea class="summernote" rows="10" cols="80" name="description" >
										This is my textarea to be replaced with CKEditor.
									</textarea>
								</div>
							</div>


						</div>
						<button type="submit" class="btn btn-default bg-green " >Submit</button>
						<button type="submit" class="btn btn-default bg-green " >Cancel</button>
						
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
</section>


@endsection