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
				<div class="box-body" style="padding-left: 15px;">
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
							<label for="Writer's ID">Description</label><br>
						
						
						<!-- /.box-header -->
						<div class="box-body pad">
							<form>
								<textarea class="summernote" name="description" rows="10" cols="80">
									This is my textarea to be replaced with CKEditor.
								</textarea>
							</form>
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
							<label for="Description">SEO Description</label><br>
							<!-- /.box-header -->
							<textarea class="summernote" rows="10" cols="80" name="description" >
								This is my textarea to be replaced with CKEditor.
							</textarea>
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