$(document).ready(function() {
	$('.lisst').click(function() {
		$('#canhanng').show();
		$('#stert').hide();
	});
	
	$('.settinh').click(function() {
		$('#stert').show();
		$('#canhanng').hide();
	});
	var w = $(window).width();
	// debugger;
	if (w>= 1000) {
		$('#col-left').addClass('col-xs-3 fix-md-4');		
		$('.time-line').css('display', 'none');
		// $('.lisst').css('display', 'none');
		$('#col-right').addClass('col-xs-6 fix-md-8');		
		$('.size-img').removeClass('table-responsive');		
		
	}
	if (w>=992 && w<=1024) {
		$('#col-left').removeClass('col-xs-3 fix-md-4');		
		$('#col-right').removeClass('col-xs-6 fix-md-8');	
		$('.time-line').css('display', 'none');	
		$('.size-img').addClass('table-responsive');		
	}

	if(w<992){

		$('a.settinh').css('display', 'none');
		$('.timkiem').css('display', 'none');
		$('.lisst').css('display', 'block');
	}
	if (w>=768 && w<=992 ) {		// debugger;
		
		$('#col-left').removeClass('col-xs-3 fix-md-4');		
		$('#col-right').removeClass('col-xs-6 fix-md-8');	
		$('#frien').removeClass('pull-right');	
		$('#col-left').addClass('col-sm-6');		
		$('#col-left').css('width','94%');
		$('#col-left').css('min-width','5% !important');
		$('#col-right').css('width','94%');
		$('.size-img table').css('margin-left','23%');
		$('.head-content ').css('width','94%');
		$('.listbtn').css('display', 'none');
		$('.time-line.row div:first-child a').removeClass('pull-right');
		$('.btn-left').css('display', 'none');
		$('.time-line').css('display', 'block');
		$('#col-right').css('min-width','5% !important');
		$('#col-right').addClass('col-sm-6');		
		// $('.size-img').addClass('table-responsive');		
	}
	if (w<768) {
		$('#col-left').removeClass('col-xs-3 fix-md-4');		
		$('#col-right').removeClass('col-xs-6 fix-md-8');	
		$('#frien').removeClass('pull-right');	
		$('#col-left').addClass('col-xs-8');		
		$('#col-left').css('width','100%');
		$('#col-left').css('min-width','5% !important');
		$('#col-right').css('width','100%');
		// $('.size-img table').css('margin-left','23%');
		$('.head-content ').css('width','100%');
		$('.listbtn').css('display', 'none');
		$('.time-line.row div:first-child a').removeClass('pull-right');
		$('.btn-left').css('display', 'none');
		$('.time-line').css('display', 'block');
		$('#col-right').css('min-width','5% !important');
		$('#col-right').addClass('col-xs-6');		
		// $('.size-img').addClass('table-responsive');		
	}
	if (w<=414) {
		$('#col-left').removeClass('col-xs-3 fix-md-4');		
		$('#col-right').removeClass('col-xs-6 fix-md-8');	
		//$('ul#menudown.dropdown-menu').css('width', '333px !important');
		$('#frien').removeClass('pull-right');	
		$('#col-left').addClass('col-xs-8');		
		$('#col-left').css('width','100%');
		$('#col-left').css('min-width','5% !important');
		$('#col-right').css('width','100%');
		// $('.size-img table').css('margin-left','23%');
		$('.head-content ').css('width','100%');
		$('.listbtn').css('display', 'none');
		$('.time-line.row div:first-child a').removeClass('pull-right');
		$('.btn-left').css('display', 'none');
		$('.time-line').css('display', 'block');
		$('#col-right').css('min-width','5% !important');
		$('#col-right').addClass('col-xs-6');		
		$('.size-img').addClass('table-responsive');		
		// $('.size-img').addClass('table-responsive');		
	}

	$('#submitbutton').click(function() {

		$.notify({
	// options
	icon: 'glyphicon glyphicon-warning-sign',
	title: 'Bootstrap notify',
	message: 'Turning standard Bootstrap alerts into "notify" like notifications',
	url: 'https://github.com/mouse0270/bootstrap-notify',
	target: '_blank'
},{
	// settings
	element: 'body',
	position: null,
	type: "info",
	allow_dismiss: true,
	newest_on_top: false,
	showProgressbar: false,
	placement: {
		from: "top",
		align: "right"
	},
	offset: 20,
	spacing: 10,
	z_index: 1031,
	delay: 1000,
	timer: 1000,
	url_target: '_blank',
	mouse_over: null,
	animate: {
		enter: 'animated fadeInDown',
		exit: 'animated fadeOutUp'
	},
	onShow: null,
	onShown: null,
	onClose: null,
	onClosed: null,
	icon_type: 'class',
	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
	'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
	'<span data-notify="icon"></span> ' +
	'<span data-notify="title">{1}</span> ' +
	'<span data-notify="message">{2}</span>' +
	'<div class="progress" data-notify="progressbar">' +
	'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
	'</div>' +
	'<a href="{3}" target="{4}" data-notify="url"></a>' +
	'</div>' 
});
	});
	$('#languagechange').change(function(){
		var locale = $(this).val();
		var _token = $("input[name=_token]").val();
		$.ajax({
			url: '/language',
			type: 'POST',
			dataType:'json',
			data: {locale: locale, _token : _token},
			success:function(data){
			},
			error:function(data){
			},
			complete:function(data){
				window.location.reload(true);
			}
		});

	});
});