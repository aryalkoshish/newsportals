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
						<form role="form">
							<div class="box-body" style="padding: 15px;">
								<div class="form-group">
									<label >News Title</label><br>
									<input type="title" class="form-control" id="title" placeholder="Enter news title">
								</div>

								<div class="form-group">
									<label>News Description</label><br>
									<textarea class="form-control" rows="6" placeholder="Enter ..." id="newsdescription" name="newsdescription"></textarea>
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
								<div class="mb-10">
									<textarea class="textarea" placeholder="Place some text here"
									style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('title')}}</div>
									<label for="package name">Title</label><br>
									<input type="text" class="form-control" id="" name="title" value="{{old('title')}}">
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('keyword')}}</div>
									<label for="Alt-image">Keyword</label><br>
									<input type="text" class="form-control" id="keyword" name="keyword" value="{{old('keyword')}}">
								</div>
								
								<div class="form-group">
									<div class="text text-danger">{{$errors->first('description')}}</div>
									<label for="Description">Description</label><br>
									<!-- /.box-header -->
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
								<div class="form-group">
									<!-- checkbox -->

									
									
									<label>
										<input type="checkbox">
										Checkbox 1
									</label>
									
									
									<label>
										<input type="checkbox">
										Checkbox 2
									</label>
									
									
									<label>
										<input type="checkbox">
										Checkbox 3
									</label>
									
									<label>
										<input type="checkbox">
										Checkbox 11
									</label>
									
									<label>
										<input type="checkbox">
										Checkbox 12
									</label>
									
									<label>
										<input type="checkbox">
										Checkbox 13
									</label>
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