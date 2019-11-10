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
					<h1 class="m-0 text-dark">ADD FILES</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Media</li>
						<li class="breadcrumb-item active">Files</li>
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
						<form role="form" >
							<div class="box-body" style="padding: 15px;">
								<div class="form-group">
									<label >Upload File</label><br>
									<input type="file" class="form-control" id="title" placeholder="Upload your image">
								</div>
								<div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="File Title">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="File Description">
                </div>
								

								

								<div class="form-group">
									<label> Description</label><br>
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>



								<div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="SEO Title">
                </div>
								<div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-file"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="SEO Keywords">
                </div>
								<div class="form-group">
									<label>SEO Description</label><br>
									<div class="mb-10">
										<textarea class="textarea" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
</div>

	@endsection