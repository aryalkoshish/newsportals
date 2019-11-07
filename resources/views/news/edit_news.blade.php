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
					<h1 class="m-0 text-dark">EDIT NEWS</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Edit News</li>
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
							<label >News Title</label><br>
							<input type="title" class="form-control" id="title" placeholder="Previous title">
						</div>

						<div class="form-group">
							<label>News Description</label><br>
							<textarea class="form-control" rows="6" placeholder="Previous values" id="newsdescription" name="newsdescription"></textarea>
						</div>

						<div class="form-group">
							<label for="Writer's ID">Writer's ID</label><br>
							<input type="input" class="form-control" id="writerid" placeholder="writer's ID">
						</div>

						<div class="box-header">
							<h3 class="box-title">News

							</h3>
						</div>
						<!-- /.box-header -->
						<div class="box-body pad">
							<form>
								<textarea class="summernote" name="description" rows="10" cols="80">
									Previous Values
								</textarea>
							</form>
						</div>  
						<br>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('title')}}</div>
							<label for="package name">Title</label><br>
							<input type="text" class="form-control" id="" name="title" value="{{old('title')}}">
						</div>
						<br>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('keyword')}}</div>
							<label for="Alt-image">Keyword</label><br>
							<input type="text" class="form-control" id="keyword" name="keyword" value="{{old('keyword')}}">
						</div>
						<br>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('description')}}</div>
							<label for="Description">Description</label><br>
							<!-- /.box-header -->
							<textarea class="summernote" rows="10" cols="80" name="description" >
								This is my textarea to be replaced with CKEditor.
							</textarea>
						</div>
						<div class="form-group">
							<!-- checkbox -->

							<div class="col-xs-12">
								<div class="checkbox col-xs-4">
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
								</div>
								<div class="checkbox col-xs-4">
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
								</div>
								<div class="checkbox col-xs-4">
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="checkbox col-xs-4">
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
								</div>
								<div class="checkbox col-xs-4">
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
								</div>
								<div class="checkbox col-xs-4">
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
								</div>
								
							</div>
						</div>


					</div>
					<div class="input-group mb-3">
					<button type="submit" class="btn btn-default bg-green " >Save</button>
				</div>
				</div>

			</form>
			<button type="submit" class="btn btn-default bg-green " >Cancel</button>
		</div>
	</div>
</div>
		
	</div>
</section>

	@endsection