@extends('app::layouts.master')
@section('title', '4edu')
@section('content')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('js/toastr.min.css') }}">

@stop
<section class="content">
  <div class="container ">

    <div class="row">
     <div class="col-md-6 col-left">
      <h3 class="foredu">
       4Edu giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.
     </h3>
     <img src="{{ asset('4edu/dist/img/gt.png') }}" alt="cộng đồng" title="kết nối cộng đồng">
   </div>
   <div class="col-md-6 col-xs-12 col-sm-12">
    <form method="POST" name="user" enctype="multipart/form-data" action="{{ route('register.post') }}" id="user">
      {{csrf_field()}}
      <h1>Tạo tài khoản mới</h1>
      <p>Miên phí và sẽ luôn như vậy.</p>
      @if(session('msg'))
      <span class="text-danger">
       {{ session('msg') }}
     </span>
     @endif
     <div class="form-group sdt">         
       <input type="text" name="email"   class="form-control" placeholder="Email" > 
       @if(asset($errors->first('email')))
       <span class="text-danger">{{$errors->first('email')}}</span>
       @endif 
     </div>
     <div class="form-group sdt">         
       <input type="password" name="password" class="form-control" placeholder="**********">  
       @if(asset($errors->first('password')))
       <span class="text-danger">{{$errors->first('password')}}</span>
       @endif 
     </div>
     <div class="form-group sdt">   
       <input type="hidden" name="id" value="">   
       <input type="text" name="fullname"   class="form-control" placeholder="Tên đầy đủ">  
       @if(asset($errors->first('fullname')))
       <span class="text-danger">{{$errors->first('fullname')}}</span>
       @endif
     </div>
     <div class="form-group">
       <p>Ngày sinh</p>
       <input type="date" name="birthday"   > 
       @if(asset($errors->first('birthday')))
       <span class="text-danger">{{$errors->first('birthday')}}</span>
       @endif
       <span id="dv1">            
       </span>            
       <a class="aa" href="#">Tại sao tôi cần cung cấp ngày sinh của mình?</a>
     </div>
     <div class="form-group">
       <fieldset>
        <legend>Giới tính của bạn?</legend>
        <label class="radio-inline">
          <input type="radio" name="gender" value="2">Nữ</label><label class="radio-inline">
          <input type="radio" name="gender" value="1" checked="checked">Nam</label>
        </fieldset>
        @if(asset($errors->first('gender')))
        <span class="text-danger">{{$errors->first('gender')}}</span>
        @endif
      </div>
      <div class="form-group">
       <p class="dieuk">Bằng cách nhấp vào Đăng ký, bạn đồng ý với <a href="#" class="ab">Các điều khoản</a> của chúng tôi và rằng bạn đã đọc <a href="#" class="ab">Chính sách dữ liệu</a> của chúng tôi, bao gồm <a href="#" class="ab">Sử dụng cookie.</a></p>
       <!-- <input type="submit" name="submit" class="btn btn-success btn-lg" id="submitbutton" value="Create"> -->     
       <button type="submit" class="btn btn-success btn-lg" id="submitbutton" >Create</button>  
     </div>
   </form>
 </div>
</div>
</div>
<section>
  @endsection
  @section('javascript')
  <script src="{{ asset('4edu/dist/js/demo.js') }}"></script>
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <script>
    $(function(){
         // Find any date inputs and override their functionality
         var Browser = navigator.userAgent;
         if (Browser.indexOf('Firefox') >= 0){
          Browser = 'Firefox';
          $('input[type="date"]').datepicker();
        }

      });
    </script>
    <script>
  $(document).ready(function () { //ready
    debugger;
    @if(Session::has('message'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
      case 'info':
      toastr.info("{{ Session::get('message') }}");
      break;
      case 'success':
      toastr.success("{{ Session::get('message') }}");
      break;
      case 'warning':
      toastr.warning("{{ Session::get('message') }}");
      break;
      case 'error':
      toastr.error("{{ Session::get('message') }}");
      break;
    }
    @endif
  });
</script>

@stop


