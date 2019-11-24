

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
								<style type="text/css">
									.it .btn-orange
									{
										background-color: blue;
										border-color: #777!important;
										color: #777;
										text-align: left;
										width:100%;
									}
									.it input.form-control
									{
										
										border:none;
										margin-bottom:0px;
										border-radius: 0px;
										border-bottom: 1px solid #ddd;
										box-shadow: none;
									}
									.it .form-control:focus
									{
										border-color: #ff4d0d;
										box-shadow: none;
										outline: none;
									}
									.fileUpload {
										position: relative;
										overflow: hidden;
									}
									.fileUpload input.upload {
										position: absolute;
										top: 0;
										right: 0;
										margin: 0;
										padding: 0;
										font-size: 20px;
										cursor: pointer;
										opacity: 0;
										filter: alpha(opacity=0);
									}
								</style>
								<div class="container">
									<div class="row">
										<div class="col-sm-offset-2 col-sm-8"><br><br>
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" readonly>
													<div class="input-group-btn">
														<span class="fileUpload btn btn-success">
															<span class="upl" id="upload">Upload single file</span>
															<input type="file" class="upload up" id="up" onchange="readURL(this);" />
														</span><!-- btn-orange -->
													</div><!-- btn -->
												</div><!-- group -->
											</div><!-- form-group -->
											<div class="form-group">
												<div class="input-group">
													<input type="text" class="form-control" readonly>
													<div class="input-group-btn">
														<span class="fileUpload btn btn-info">
															<span class="upl" id="upload">Upload multiple file</span>
															<input type="file" class="upload up" id="up" onchange="readURL(this);" multiple/>
														</span><!-- btn-orange -->
													</div><!-- btn -->
												</div><!-- group -->
											</div><!-- form-group -->
										</div>
									</div>
								</div>

								<!-- <div class="form-group">
									<label >Upload Image</label><br>
									<input type="file" class="form-control" id="title" placeholder="Upload your image">
								</div> -->
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-heading"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Image Title">
								</div>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="far fa-file-image"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Image Description">
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
		<script type="text/javascript">
			$(document).on('change','.up', function(){
				var names = [];
				var length = $(this).get(0).files.length;
				for (var i = 0; i < $(this).get(0).files.length; ++i) {
					names.push($(this).get(0).files[i].name);
				}
                // $("input[name=file]").val(names);
                if(length>2){
                	var fileName = names.join(', ');
                	$(this).closest('.form-group').find('.form-control').attr("value",length+" files selected");
                }
                else{
                	$(this).closest('.form-group').find('.form-control').attr("value",names);
                }
            });
        </script>
    </div>
</section>


@endsection