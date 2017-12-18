<section class="sidebar">
<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			<img src="{{ asset('4edu/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
			<p>	@if(Auth::user())
				{{ Auth::user()->fullname }}
				@else
				Username
				@endif</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<!-- search form -->
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
				</button>
			</span>
		</div>
	</form>
	<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
	    <li class="header">MAIN NAVIGATION</li>
	    <li class="active treeview">
	      <a href="#">
	        <i class="fa fa-stethoscope"></i>
	        <span>Chăm sóc cho bé</span>
	        <span class="pull-right-container">
	          <i class="fa fa-angle-left pull-right"></i>
	        </span>
	      </a>
	      <ul class="treeview-menu">
	        <li><a href="pages/layout/top-nav.html"><i class="fa fa-caret-right"></i> Chăm sóc thai nhi</a></li>
	        <li><a href="pages/layout/boxed.html"><i class="fa fa-caret-right"></i> Giai đoạn sơ sinh</a></li>
	        <li><a href="pages/layout/fixed.html"><i class="fa fa-caret-right"></i> Giai đoạn nhũ sinh</a></li>
	        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-caret-right"></i> Giai đoạn răng sữa</a></li>
	      </ul>
	    </li>
	    <li class="treeview">
	      <a href="#">
	        <i class="fa  fa-paw"></i>
	        <span>Trang bị cho bé</span>
	        <span class="pull-right-container">
	          <i class="fa fa-angle-left pull-right"></i>
	        </span>
	      </a>
	      <ul class="treeview-menu">
	        <li><a href="pages/layout/top-nav.html"><i class="fa fa-caret-right"></i> Quần áo cho bé</a></li>
	        <li><a href="pages/layout/boxed.html"><i class="fa fa-caret-right"></i> Đồ chơi cho bé</a></li>
	        <li><a href="pages/layout/fixed.html"><i class="fa fa-caret-right"></i> Đồ dùng sinh hoạt</a></li>
	      </ul>
	    </li>
	    <li><a href="documentation/index.html"><i class="fa fa-heart"></i> <span>Dinh dưỡng cho bé</span></a></li>
	    <li><a href="documentation/index.html"><i class="fa fa-medkit"></i> <span>Sức khỏe gia đình</span></a></li>
	    <li><a href="documentation/index.html"><i class="fa fa-subway"></i> <span>Đồ chơi thông minh</span></a></li>
	    <li><a href="documentation/index.html"><i class="fa fa-trophy"></i> <span>Bé sáng tạo</span></a></li>
	    <li><a href="documentation/index.html"><i class="fa fa-user-md"></i> <span>Phương pháp dạy trẻ</span></a></li>
	    <li class="header">LABELS</li>
	    <li><a href="#"><i class="fa fa-caret-right text-red"></i> <span>Important</span></a></li>
	    <li><a href="#"><i class="fa fa-caret-right text-yellow"></i> <span>Warning</span></a></li>
	    <li><a href="#"><i class="fa fa-caret-right text-aqua"></i> <span>Information</span></a></li>
	  </ul>
</section>