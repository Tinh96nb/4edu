@extends('app::layouts.master')

@section('content')
<section class="content">
	<div class="container">
		<div class="row sapxep">
			<!-- .col trái -->
			<div class="col-md-3 col-xs-12 canhan">
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
							<li><a href="mailbox.html"><i class="fa fa-inbox text-blue"></i> @lang('alert.inbox')
								<span class="label label-primary pull-right">12</span></a></li>
								<li><a href="#"><i class="fa fa-envelope-o text-green"></i> {{ trans('alert.sent') }} </a></li>
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
						<!-- /.box-body -->
					</div>
				</div>
				<!-- ./col trái-->
				<!-- ./col chính content-->
				<div class="col-md-6 col-xs-12 noidung">
					<!-- ./post Status-->
					<div class="nav-tabs-custom">
						<ul id="munus" class="nav nav-tabs">
							<li class="active"> <a href="#tab_1" data-toggle="tab" aria-expanded="true">
								<i class="fa fa-pencil"></i> <b> Tạo bài viết</b></a>
							</li>
							<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">
								<i class="fa fa-image"></i> <b> Album Ảnh/Video</b></a>
							</li>
							<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">
								<i class="fa fa-file-video-o"></i> <b> Video Live</b></a>
							</li>
							<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<textarea class="dt-post" placeholder="Bạn đang nghĩ gì?"></textarea>
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								
							</div>
							<!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
							</div>
							<!-- /.tab-pane -->
						</div>
						<div class="dt-submit clearfix">
							<div class="select-icon">
								<i class="fa fa-frown-o"></i>
								<i class="fa fa-user-plus"></i>
								<i class="fa fa-camera"></i>
								<i class="fa fa-calendar"></i>
							</div>
							<div class="pull-right dt-btn">
								<select class="custom-select">
									<option selected> <i class="fa fa-circle-o">Mọi người</i></option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<button type="button" class="btn btn-primary btn-sm">Đăng lên</button>
							</div>
						</div>
					</div>
					<!-- 2 ảnh destop-->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="box-body">
							<p>2 ảnh destop</p>
							<div class="content-img two-content">
								<img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								<img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
							</div>
							<div class="clearfix">
								
							</div>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">127 likes - 3 comments</span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer box-comments">
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">
								<div class="comment-text">
									<span class="username">
										Maria Gonzales
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="User Image">
								<div class="comment-text">
									<span class="username">
										Luna Stark
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
						</div>
						<!-- /.box-footer -->
						<div class="box-footer">
							<form action="#" method="post">
								<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
								<!-- .img-push is used to add margin to elements next to floating images -->
								<div class="img-push">
									<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
								</div>
							</form>
						</div>
					</div>
					<!-- 4 ảnh destop-->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="content-img mul-content">
								<p>Nhiều ảnh destop</p>
								<img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								<div class="item-img">
									<img src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								</div>
								<div class="item-img">
									<img src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								</div>
								<div class="item-img">
									<div class="over-lay">
										<img src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
									</div>
								</div>
							</div>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">127 likes - 3 comments</span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer box-comments">
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">
								<div class="comment-text">
									<span class="username">
										Maria Gonzales
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="User Image">

								<div class="comment-text">
									<span class="username">
										Luna Stark
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
						</div>
						<!-- /.box-footer -->
						<div class="box-footer">
							<form action="#" method="post">
								<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
								<!-- .img-push is used to add margin to elements next to floating images -->
								<div class="img-push">
									<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
								</div>
							</form>
						</div>
					</div>
					<!-- 3 ảnh destop-->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<p>3 ảnh destop</p>
							<div class="content-img three-content">
								<img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								<div class="item-img">
									<img src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								</div>
								<div class="item-img">
									<img src="{{ asset('4edu/dist/img/photo2.png') }}" alt="Photo">
								</div>
							</div>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">127 likes - 3 comments</span>
						</div>
						<div class="box-footer box-comments">
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">
								<div class="comment-text">
									<span class="username">
										Maria Gonzales
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="User Image">

								<div class="comment-text">
									<span class="username">
										Luna Stark
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
						</div>
						<!-- /.box-footer -->
						<div class="box-footer">
							<form action="#" method="post">
								<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
								<!-- .img-push is used to add margin to elements next to floating images -->
								<div class="img-push">
									<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
								</div>
							</form>
						</div>
					</div>
					<!-- /share link -->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<!-- post text -->
							<p>Far far away, behind the word mountains, far from the
								countries Vokalia and Consonantia, there live the blind
							texts. Separated they live in Bookmarksgrove right at</p>

							<p>the coast of the Semantics, a large language ocean.
								A small river named Duden flows by their place and supplies
								it with the necessary regelialia. It is a paradisematic
								country, in which roasted parts of sentences fly into
							your mouth.</p>

							<!-- Attachment -->
							<div class="attachment-block clearfix">
								<img class="attachment-img" src="{{ asset('4edu/dist/img/photo1.png') }}" alt="Attachment Image">

								<div class="attachment-pushed">
									<h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

									<div class="attachment-text">
										Description about the attachment can be placed here.
										Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
									</div>
									<!-- /.attachment-text -->
								</div>
								<!-- /.attachment-pushed -->
							</div>
							<!-- /.attachment-block -->

							<!-- Social sharing buttons -->
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">45 likes - 2 comments</span>
						</div>
						<!-- /.box-body -->
						<div class="box-footer box-comments">
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">

								<div class="comment-text">
									<span class="username">
										Maria Gonzales
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									It is a long established fact that a reader will be distracted
									by the readable content of a page when looking at its layout.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
							<div class="box-comment">
								<!-- User image -->
								<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user5-128x128.jpg') }}" alt="User Image">

								<div class="comment-text">
									<span class="username">
										Nora Havisham
										<span class="text-muted pull-right">8:03 PM Today</span>
									</span><!-- /.username -->
									The point of using Lorem Ipsum is that it has a more-or-less
									normal distribution of letters, as opposed to using
									'Content here, content here', making it look like readable English.
								</div>
								<!-- /.comment-text -->
							</div>
							<!-- /.box-comment -->
						</div>
						<!-- /.box-footer -->
						<div class="box-footer">
							<form action="#" method="post">
								<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
								<!-- .img-push is used to add margin to elements next to floating images -->
								<div class="img-push">
									<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
								</div>
							</form>
						</div>
						<!-- /.box-footer -->
					</div>
					mobile
					<!-- 2 ảnh mobile-->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<p>2 Ảnh mobile</p>
							<div class="content-img mb-content-2">
								<div class="item-img">
									<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
								</div>
								<div class="item-img">
									<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
								</div>
							</div>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">127 likes - 3 comments</span>
							<!-- /.box-body -->
							<div class="box-footer box-comments">
								<div class="box-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">
									<div class="comment-text">
										<span class="username">
											Maria Gonzales
											<span class="text-muted pull-right">8:03 PM Today</span>
										</span><!-- /.username -->
										It is a long established fact that a reader will be distracted
										by the readable content of a page when looking at its layout.
									</div>
									<!-- /.comment-text -->
								</div>
								<!-- /.box-comment -->
								<div class="box-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="User Image">

									<div class="comment-text">
										<span class="username">
											Luna Stark
											<span class="text-muted pull-right">8:03 PM Today</span>
										</span><!-- /.username -->
										It is a long established fact that a reader will be distracted
										by the readable content of a page when looking at its layout.
									</div>
									<!-- /.comment-text -->
								</div>
								<!-- /.box-comment -->
							</div>
							<!-- /.box-footer -->
							<div class="box-footer">
								<form action="#" method="post">
									<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
									<!-- .img-push is used to add margin to elements next to floating images -->
									<div class="img-push">
										<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /3 ảnh mobile -->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<p>4 Ảnh mobile</p>
							<div class="content-img mb-content-4">
								<div class="left-col">
									<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
								</div>
								<div class="right-col">
									<div class="item-img">
										<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
									</div>
									<div class="item-img">
										<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
									</div>
									<div class="item-img">
										<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
									</div>
								</div>
							</div>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">127 likes - 3 comments</span>
							<!-- /.box-body -->
							<div class="box-footer box-comments">
								<div class="box-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">
									<div class="comment-text">
										<span class="username">
											Maria Gonzales
											<span class="text-muted pull-right">8:03 PM Today</span>
										</span><!-- /.username -->
										It is a long established fact that a reader will be distracted
										by the readable content of a page when looking at its layout.
									</div>
									<!-- /.comment-text -->
								</div>
								<!-- /.box-comment -->
								<div class="box-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="User Image">

									<div class="comment-text">
										<span class="username">
											Luna Stark
											<span class="text-muted pull-right">8:03 PM Today</span>
										</span><!-- /.username -->
										It is a long established fact that a reader will be distracted
										by the readable content of a page when looking at its layout.
									</div>
									<!-- /.comment-text -->
								</div>
								<!-- /.box-comment -->
							</div>
							<!-- /.box-footer -->
							<div class="box-footer">
								<form action="#" method="post">
									<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
									<!-- .img-push is used to add margin to elements next to floating images -->
									<div class="img-push">
										<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- /4 ảnh mobile -->
					<div class="box box-widget">
						<div class="box-header with-border">
							<div class="user-block">
								<img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg') }}" alt="User Image">
								<span class="username"><a href="#">Jonathan Burke Jr.</a></span>
								<span class="description">Shared publicly - 7:30 PM Today</span>
							</div>
							<!-- /.user-block -->
							<div class="box-tools">
								<div class="btn-group">
									<button type="button" class="btn btn-box-tool" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu">
										<li><a href="#">Bỏ theo dõi</a></li>
										<li><a href="#">Ẩn trên newfeeds</a></li>
									</ul>
								</div>
							</div>
							<!-- /.box-tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<p>3 Ảnh mobile</p>
							<div class="content-img mb-content-3">
								<div class="left-col">
									<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
								</div>
								<div class="right-col">
									<div class="item-img">
										<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
									</div>
									<div class="item-img">
										<img src="{{ asset('4edu/dist/img/mobile.jpg') }}" alt="Photo">
									</div>
								</div>
							</div>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
							<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
							<span class="pull-right text-muted">127 likes - 3 comments</span>
							<!-- /.box-body -->
							<div class="box-footer box-comments">
								<div class="box-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg') }}" alt="User Image">
									<div class="comment-text">
										<span class="username">
											Maria Gonzales
											<span class="text-muted pull-right">8:03 PM Today</span>
										</span><!-- /.username -->
										It is a long established fact that a reader will be distracted
										by the readable content of a page when looking at its layout.
									</div>
									<!-- /.comment-text -->
								</div>
								<!-- /.box-comment -->
								<div class="box-comment">
									<!-- User image -->
									<img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="User Image">
									<div class="comment-text">
										<span class="username">
											Luna Stark
											<span class="text-muted pull-right">8:03 PM Today</span>
										</span><!-- /.username -->
										It is a long established fact that a reader will be distracted
										by the readable content of a page when looking at its layout.
									</div>
									<!-- /.comment-text -->
								</div>
								<!-- /.box-comment -->
							</div>
							<!-- /.box-footer -->
							<div class="box-footer">
								<form action="#" method="post">
									<img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg') }}" alt="Alt Text">
									<!-- .img-push is used to add margin to elements next to floating images -->
									<div class="img-push">
										<input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- ./col nội dung chính -->
				<!-- .col sự kiện -->
				<div class="col-md-3 hidden-xs col-xs-12">
					<div class="event">
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Sự kiện - Event</h3>
								<div class="box-tools">
									<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
									</button>
								</div>
							</div>
							<div class="box-body no-padding">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"><i class="fa fa-birthday-cake text-red"></i> Hôm nay sinh nhật của Alexander Pierce</a></li>
									<li><a href="#"><i class="fa  fa-wordpress text-light-blue"></i> Bình no beerr đã bày tỏ cảm xúc về một bài viết.</a></li>
									<li><a href="#"><i class="fa  fa-music text-green"></i> Bình no beerr đã bày tỏ cảm xúc về một bài viết.</a></li>
									<li><a href="#"><i class="fa  fa-pie-chart text-red"></i> Bình no beerr đã bày tỏ cảm xúc về một bài viết.</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- ./col sự kiện-->
			</div>
			<!-- /.row (main row) -->
		</div>
	</section>
	<!-- /.content -->
	<!-- /.content-wrapper -->
	@stop
