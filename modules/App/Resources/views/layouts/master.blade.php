<!DOCTYPE html>
<html>
<head>
	@include('app::partial.head')
</head>
<body class="hold-transition skin-blue sidebar-mini fixed sidebar-collapse">
	<div class="wrapper">
		<header class="main-header">
			@include('app::partial.header')
		</header>
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			@include('app::partial.sidebar')
		</aside>
		<!--====  phần nội dung  ====-->
		<div class="content-wrapper contents ">
			@yield('content')
			<!--====  hết phần nội dung  ====-->
		</div>
		<footer class="main-footer">
			@include('app::partial.footer')
		</footer>
		<aside id="canhanng" class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<div class="col-md-3 col-xs-12">
				<div class="box box-solid">
					<div class="box-header with-border">
						<h3 class="box-title">Cá Nhân</h3>
						<div class="box-tools">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="box-body no-padding" style="display: block;">
						<ul class="nav nav-pills nav-stacked">
							<li><a href="mailbox.html"><i class="fa fa-inbox text-blue"></i> Inbox
								<span class="label label-primary pull-right">12</span></a></li>
								<li><a href="#"><i class="fa fa-envelope-o text-green"></i> Sent</a></li>
								<li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
								<li><a href="#"><i class="fa fa-filter text-yellow"></i> Junk <span class="label label-warning pull-right">65</span></a>
								</li>
								<li><a href="#"><i class="fa fa-trash-o text-red"></i> Trash</a></li>
							</ul>
						</div>
					</div>
					<div class="box box-solid">
						<div class="box-header with-border">
							<h3 class="box-title">Lối tắt</h3>
							<div class="box-tools">
								<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
								</button>
							</div>
						</div>
						<div class="box-body no-padding">
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#"><i class="fa  fa-windows text-yellow"></i> Promotions</a></li>
								<li><a href="#"><i class="fa  fa-wordpress text-light-blue"></i> Wordpress</a></li>
								<li><a href="#"><i class="fa  fa-futbol-o text-light-red"></i> Social</a></li>
								<li><a href="#"><i class="fa fa-youtube-square text-red"></i> Important</a></li>
								<li><a href="#"><i class="fa  fa-music text-green"></i> Social</a></li>
								<li><a href="#"><i class="fa  fa-pie-chart text-red"></i> About Me</a></li>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<!--hết cá nhân-->
			<!-- Control Sidebar -->
			<aside id="stert" class="control-sidebar control-sidebar-dark">
				@include('app::partial.panel')
			</aside>

			<div class="control-sidebar-bg"></div>
			@include('app::partial.importjs')
			@yield('javascript')
		</div>
	</body>
	</html>
