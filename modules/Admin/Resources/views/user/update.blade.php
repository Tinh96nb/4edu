@extends('app::layouts.master')

@section('content')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('js/toastr.min.css') }}">
@stop
<section class="content">

	<div class="container">
		<div class="row">
			<!-- .col trái -->
			<div class="col-md-3 col-xs-12 conte">
				<div class="box box-solid install">
					<div class="box-header with-border">
						<h3 class="box-title">Chỉnh sửa thiết đặt</h3>
						<div class="box-tools">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body no-padding" style="display: block;">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="" class="active"><i class="fa fa-cog"></i> Chung</a></li>
							<li><a href="#"><i class="fa fa-shield text-red"></i> Bảo mật</a></li>
							<li><a href="#"><i class="fa fa-briefcase text-yellow"></i> Quyền riêng tư</a></li>
							<li><a href="#"><i class="fa fa-contao text-green"></i> Bảng tin</a></li>
							<li><a href="#"><i class="fa fa-hand-paper-o text-red"></i> Chặn</a></li>
							<li><a href="#"><i class="fa fa-language text-blue"></i> Ngôn ngữ</a></li>
							<li><a href="#"><i class="fa fa-globe text-green"></i> Thông báo</a></li>
							<li><a href="#"><i class="fa fa-mobile text-red"></i> Di động</a></li>
							<li><a href="#"><i class="fa fa-edit text-green"></i> Bài viết công khai</a></li>
							<li><a href="#"><i class="fa fa-pie-chart text-yellow"></i> Ứng dụng</a></li>
							<li><a href="#"><i class="fa fa-ils text-blue"></i> Quảng cáo</a></li>
							<li><a href="#"><i class="fa fa-credit-card text-gray"></i> Thanh toán</a></li>
							<li><a href="/svn/public/user/logout/"><i class="fa fa-sign-out text-red"></i> Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- .col content -->
			<div class="col-md-6 col-xs-12 conte ">
				<div class="box box-solid setting">
					<div class="box-header with-border">
						<h3 class="box-title">Cài đặt tài khoản chung</h3>
					</div>
					<div class="box-body no-padding">
						<ul class="nav nav-pills nav-stacked">
							<li>
								<a role="button" data-toggle="collapse" href="#name">
									<div class="text-label">Tên</div>
									<div class="text-content">{{ $user_id->fullname }}</div>
									<div class="text-edit"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</div>
								</a>
								<div id="name" class="panel-collapse collapse " role="name">
									<div class="panel-body">
										<div class="form-group">

											<form method="POST" name="user" enctype="multipart/form- data" action="{{ route('user.save') }}" id="user">			{{csrf_field()}}
												<input type="hidden" value="{{ $user_id->id }}" name="id">
												@if(session('msg'))
												<span class="text-info">	{{ session('msg') }}</span>	
												@endif						
												<ul>
													<li class="row">
														<label for="inputName" class="col-md-offset-1 col-md-3 col-sm-2 control-label">Username</label>
														<div class="col-md-6 col-sm-10 col-xs-12">
															<input type="text" name="username" class="form-control input-sm" placeholder="User Name" value="{{ $user_id->username }}">		
															@if(asset($errors->first('username')))
															<span class="text-danger">{{ $errors->first('username') }}</span>
															@endif
														</div>
													</li>
													<li class="row">
														<label for="inputName" class="col-md-offset-1  col-md-3 col-sm-2 control-label">Full name</label>
														<div class="col-md-6 col-sm-10 col-xs-12">
															<input type="text" name="fullname" class="form-control input-sm" placeholder="Tên đầy đủ" value="{{ $user_id->fullname }}">		
															@if(asset($errors->first('fullname')))
															<span class="text-danger">{{ $errors->first('fullname') }}</span>
															@endif
														</div>
													</li>
													<li class="row">
														<label for="inputName" class="col-md-offset-1 col-md-3 col-sm-2 control-label">Mail</label>
														<div class="col-md-6 col-sm-10 col-xs-12">
															<input type="text" name="email" class="form-control input-sm" placeholder="Email" value="{{ $user_id->email }}">
															@if(asset($errors->first('email')))
															<span class="text-danger">{{ $errors->first('email') }}</span>
															@endif
														</div>
													</li>
												</ul>
												<p>Xin lưu ý: Bạn sẽ không thể đổi tên trong vòng 60 ngày tới. Đảm bảo không thêm bất kỳ từ ngẫu nhiên, ký tự, dấu câu hoặc từ viết hoa bất thường nào.<a href=""> Tìm hiểu thêm.</a></p>
												<hr>
												<div class="row row-btn">
													<button type="submit" class="btn btn-primary input-sm" id="submitbutton">Cập nhật</button>			
													<button type="button" class="btn btn-default input-sm" role="name"><strong>Hủy</strong></button>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li>
									<a role="button" data-toggle="collapse" href="#username">
										<div class="text-label">Tên người dùng</div>
										<div class="text-content">{{ $user_id->fullname }}</div>
										<div class="text-edit"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</div>
									</a>
									<div id="username" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
										</div>
									</div>
								</li>
								<li>
									<a role="button" data-toggle="collapse" href="#contact">
										<div class="text-label">Liên hệ</div>
										<div class="text-content">{{ $user_id->email }}</div>
										<div class="text-edit"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</div>
									</a>
									<div id="contact" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<div class="form-group">
											</div>
										</div>
									</div>
								</li>
								<li>
									<a role="button" data-toggle="collapse" href="#collapseOne">
										<div class="text-label">Mật khẩu</div>
										<div class="text-content">Cập nhật 2 tuần trước</div>
										<div class="text-edit"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</div>
									</a>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<div class="form-group">
											</div>
										</div>
									</div>
								</li>
								<li>
									<a role="button" data-toggle="collapse" href="#collapseOne">
										<div class="text-label">Mạng liên kết</div>
										<div class="text-content">Không có</div>
										<div class="text-edit"><i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa</div>
									</a>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<div class="form-group">
											</div>
										</div>
									</div>
								</li>
								<li>
									<a role="button" data-toggle="collapse" href="#collapseOne">
										<div class="text-label">Nhiệt độ</div>
										<div class="text-content">celicius</div>
										<div class="text-edit"><i class="fa fa-pencil"></i> Chỉnh sửa</div>
									</a>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel">
										<div class="panel-body">
											<div class="form-group">
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection
	@section('javascript')
	<script src="{{ asset('4edu/dist/js/demo.js') }}"></script>
	<script src="{{ asset('js/toastr.min.js') }}"></script>

	<script>

		@if(Session::has('success'))
		toastr.success("{{ Session::get('success') }}");
		@endif

		@if(Session::has('info'))
		toastr.info("{{ Session::get('info') }}");
		@endif

		@if(Session::has('warning'))
		toastr.warning("{{ Session::get('warning') }}");
		@endif

		@if(Session::has('error'))
		toastr.error("{{ Session::get('error') }}");
		@endif

	</script>
	@stop

