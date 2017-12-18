@extends('app::layouts.master')
@section('title', '4edu profile')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-xs-12 content-pro">
          <!-- Ảnh bìa và avatar -->
          <div class="head-content box box-widget">
            <div class="cover-img">
              <a href="">
                <img src="{{ asset('4edu/dist/img/anhbia.jpg') }}">
              </a>
            </div>
            <div class="tool-bar with-border">
              <div class="avatar">
                <a href=""><img src="{{ asset('4edu/dist/img/avatar.jpg')}}"></a>
              </div>
              <div class="title-pf">
                  <h1>Bình no beerr</h1>
                  <span>( Thích đàn bà )</span>                
              </div>
              <div class="btn-left">
                <a href="" class="friend pull-right"><i class="fa fa-check"></i> Bạn bè</a>
                <div class="btn-bottom">
                  <a href="" class="friend"><i class="fa fa-check"></i> Đang theo dõi</a>
                  <a href="" class="friend"><i class="fa fa-commenting-o"></i> Nhắn tin</a>
                  <a href="" class="friend">...</a>
                </div>
              </div>
              <div class="time-line" >
                <div class="row">
                  <div class="col-xs-3 text-center">
                    <a id="frien" href="" class="friend pull-right"><i class="fa fa-check" style="
                    "></i>
                    <span> Bạn bè</span>
                    </a>
                  </div>
                  <div class="col-xs-3 text-center">
                    <a href="" class="friend"><i class="fa fa-rss"></i> 
                      <span>Đang theo dõi</span>                    
                    </a>
                  </div>
                  <div class="col-xs-3 text-center">
                    <a href="" class="friend"><i class="fa fa-comments"></i> 
                      <span>Nhắn tin</span>
                    </a>
                  </div>
                  <div class="col-xs-3 text-center">                 
                    <a href="" class="friend">
                      <i class="fa fa-ellipsis-h" aria-hidden="true"></i> 
                      <span>Khác</span>
                    </a>
                  </div>
                </div>                 
              </div>
              <div class="listbtn">
                <div class="list-btn">
                  <a href="" class="button-pf selected">Dòng thời gian</a>
                  <a href="" class="button-pf">Giới thiệu</a>
                  <a href="" class="button-pf">Bạn bè</a>
                  <a href="" class="button-pf">Ảnh</a>
                  <a href="" class="button-pf">Xem thêm</a>
                </div>
              </div>
            </div>
          </div>
      <!-- .col left -->
      <div class="row">
        <div id="col-left" class="col-md-4 col-xs-3 fix-md-4">
          <!-- giới thiệu -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-globe text-blue"></i>  Giới thiệu</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding gt" style="display: block;">
              <ul class="nav nav-pills nav-stacked">
                <li><p class="title-gt">Đôi khi cảm thấy mình thật vô dụng...Có việc che giấu vẻ đẹp trai mà cũng không làm được!</p></li>
                <li><p><i class="fa fa-inbox"></i> Học Thiết kế đô thị tại Trường Đại học Mỹ thuật Việt Nam</p></li>
                <li><p><i class="fa fa-suitcase"></i> Photographer tại Fast film</p></li>
                <li><p><i class="fa fa-male"></i> Có mối quan hệ phức tạp</p></li>
                <li><p><i class="fa fa-map-pin"></i> Đến từ Haiphong, Hải Phòng, Vietnam
                </p></li>
                <li><p><i class="fa fa-rss"></i> Có 138 người theo dõi</p></li>
              </ul>
            </div>
          </div>
          <!-- Ảnh -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-picture-o text-green"> </i> Ảnh</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <div class="border-box size-img">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <img src="{{ asset('4edu/dist/img/pic.jpg')}}">
                          </div>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Box bạn bè -->
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-users text-red"></i> Bạn bè</h3>
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding table-responsive">
              <div class="border-box size-img">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>
                        <a href="#">
                          <div class="fix-height">
                            <div class="box-friend">
                              <img src="{{ asset('4edu/dist/img/friend.jpg')}}">
                              <p class="friend-name">Kim Dung</p>
                            </div>
                          </div>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- .col content-->
        <div id="col-right" class="col-md-8 col-xs-6 fix-md-8">
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
            </div><div class="dt-submit clearfix">
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
        <!-- status -->
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg')}}" alt="User Image">
              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
              <span class="description">Shared publicly - 7:30 PM Today</span>
            </div>
            <!-- /.user-block -->
            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
              <i class="fa fa-circle-o"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
            <div class="box-body">
              <p>2 ảnh destop</p>
              <div class="content-img two-content">
                <img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                <img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
              </div>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">127 likes - 3 comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg')}}" alt="User Image">
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
                <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="User Image">
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
                <img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
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
                <img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg')}}" alt="User Image">
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
                  <img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                  <div class="item-img">
                    <img src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                  </div>
                  <div class="item-img">
                    <img src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                  </div>
                  <div class="item-img">
                    <div class="over-lay">
                      <img src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
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
                  <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg')}}" alt="User Image">
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
                  <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="User Image">

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
                  <img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
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
                  <img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg')}}" alt="User Image">
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
                    <img class="img-responsive set-position" src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                    <div class="item-img">
                      <img src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                    </div>
                    <div class="item-img">
                      <img src="{{ asset('4edu/dist/img/photo2.png')}}" alt="Photo">
                    </div>
                  </div>
                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                  <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                  <span class="pull-right text-muted">127 likes - 3 comments</span>
                </div>
                <div class="box-footer box-comments">
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg')}}" alt="User Image">
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
                    <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="User Image">

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
                    <img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
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
                    <img class="img-circle" src="{{ asset('4edu/dist/img/user1-128x128.jpg')}}" alt="User Image">
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
                          <img class="attachment-img" src="{{ asset('4edu/dist/img/photo1.png')}}" alt="Attachment Image">

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
                          <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user3-128x128.jpg')}}" alt="User Image">

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
                          <img class="img-circle img-sm" src="{{ asset('4edu/dist/img/user5-128x128.jpg')}}" alt="User Image">

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
                          <img class="img-responsive img-circle img-sm" src="{{ asset('4edu/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
                          <!-- .img-push is used to add margin to elements next to floating images -->
                          <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                          </div>
                        </form>
                </div>
              </div>
              <!-- status -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-md-10 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
<!-- /.content-wrapper -->
@endsection