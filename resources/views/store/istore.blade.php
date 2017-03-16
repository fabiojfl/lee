<!DOCTYPE html>
<html>
<head>
<title>Lee lee | Cosméticos</title>
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" >
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" >
	<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="leelee cosméticos" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--theme-style-->
<link href="{{ asset('css/style4.css') }}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<!--- start-rate---->
<script src="{{ asset('js/jstarbox.js') }}" type="text/javascript"></script>
<link rel="stylesheet" href="{{ asset('css/jstarbox.css') }}" type="text/css" media="screen" charset="utf-8" >
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
<!--slider-script-->
<link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css" media="all" >

<link href="{{ asset('css/jquery.bxslider.css') }}" rel="stylesheet" type="text/css" media="all"/>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6147210221245640",
    enable_page_level_ads: true
  });
</script>
</head>

<body>
<!--header-->
<div class="header">
	<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="{{ url('/') }}"><img src="{{ asset('images/logo.png') }}" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
						@if (Auth::guest())
                            <li><a href="{{ url('/auth/login') }}"><i class="fa fa-lock"></i>Minha conta</a></li>
							<li><a href="{{ url('/auth/register') }}">Cadastre-se</a></li>
						@else
							<li><a href="{{ url('/home') }}"><i class="fa fa-lock"></i>Minha conta&nbsp; (Olá, &nbsp; {{ Auth::user()->name }})</a></li>
                             <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a></li>
						@endif
					</ul>
				</div>
		
				<div class="clearfix"> </div>
		</div>
	</div>
	<!-- content menu -->	
	<div class="container">		
		<div class="head-top">
			<div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
					  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li><a class="color4" href="{{url('/about')}}">A Leelee</a></li>
							<!-- <li ><a class="color6" href="{{url('/about')}}">Promoções</a></li> -->
							<li><a class="color4" href="{{url('/category/1')}}">Matizadores</a></li>
							<!--  <li><a class="color4" href="{{url('/')}}">Promoções</a></li>-->
							<li><a class="color4" href="{{url('/newslatter')}}">Novidades</a></li>
							<li ><a class="color6" href="{{url('/contact')}}">Atendimento</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>	
		</div>
	</div>
	<!-- end menu -->
	
	<!--content-->
	<div class="content">
		<div class="container">
		
			<div class="banner">
					<!-- Slideshow 4 -->
				   <div class="slider">
						<ul class="rslides" id="slider1">
						@foreach($slideHomes as $slideHome)
						<li>
							<a href="{{route('store.product', ['id' => $slideHome->id])}}">
								<img src="{{ url('uploads/ProductHomeSlide/'.$slideHome->id.'.'.$slideHome->extension) }}" alt="">
							</a>
						</li>
						@endforeach
						</ul>
					</div>
					<div class="banner-bottom">	
					 <div class="clearfix"></div>
					 <br>
					</div> 
				</div><!-- end banner -->		
				@yield('content')
				
				@yield('categories')
				
				
		</div><!-- fim novidades -->
	</div><!-- end container -->
	</div><!-- end content -->				
<!--//content-->
<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-12 footer-middle-in text-center">
						<a href="{{url('/about')}}"><img src="{{ asset('images/log.png') }}" alt="">
							<p>A Leelee Cosméticos defende ....</p>
						</a>
					</div>
					<!--
					<div class="col-md-3 footer-middle-in">
						<h6>Maiores informações</h6>
						<ul class=" in">
							<li><a href="#">A Leelee</a></li>
							<li><a href="#">Atendimento</a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Tags</h6>
						<ul class="tag-in">
							<li><a href="#">Lorem</a></li>
							<li><a href="#">Sed</a></li>
							<li><a href="#">Ipsum</a></li>
							<li><a href="#">Contrary</a></li>
							<li><a href="#">Chunk</a></li>
							<li><a href="#">Amet</a></li>
							<li><a href="#">Omnis</a></li>
						</ul>
					</div>
					<div class="col-md-3 footer-middle-in">
						<h6>Novidades</h6>
						<span>Envie seu email para receber promoções e novidades.</span>
							<form>
								<input type="text" value="Seu email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Enter your E-mail';}">
								<input type="submit" value="Enviar">
							</form>
					</div>
					<div class="clearfix"> </div>
					-->
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<ul class="footer-bottom-top">
						<li><a href="https://pagseguro.uol.com.br/"><img src="{{ asset('images/pagseguro.png') }}" class="img-responsive" alt=""></a></li>
						<!-- 
						<li><a href="#"><img src="images/f2.png" class="img-responsive" alt=""></a></li>
						<li><a href="#"><img src="images/f3.png" class="img-responsive" alt=""></a></li>
						-->
					</ul>
					<p class="footer-class">&copy;2016 Lee lee Cosméticos.</p>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('js/jquery.flexslider.js') }}" type="text/javascript"></script>
<link href="{{ asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" >

<script src="{{ asset('js/simpleCart.min.js') }}" type="text/javascript"></script>
		
<!-- slide -->
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--light-box-files -->
<script src="{{ asset('js/jquery.chocolat.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/imagezoom.js') }}" type="text/javascript"></script>

		<link rel="stylesheet" href="{{ asset('css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8" >		
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('a.picture').Chocolat();
		});

		// Can also be used with $(document).ready()
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});

		</script>
<!--<script src="{{ asset('js/jquery.maskmoney.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.maskedinput.min.js') }}" type="text/javascript"></script>
<script>
	$(function($){
		// Aqui fazemos uso do plugin MASKED INPUT
		$("#data").mask("99/99/9999");
		$("#cpf").mask("999.999.999-99");
		$("#telefone").mask("(99) 9999-9999");
		$("#celular").mask("(99)99999-9999");
		// Aqui usamos fazemos uso do plugin MASK MONEY
		$("#valor").maskMoney({prefix:'R$ ', thousands:'.',decimal:','});
	});
</script>
-->

<script src="{{ asset('js/busca-cep.js') }}" type="text/javascript"></script>

<script src="{{ asset('js/busca-frete.js') }}" type="text/javascript"></script>
<script>
$(document).ready(function () {
$('#get-data').click(function () {
var showData = $('#show-data');

$.get('arquivo.json', function (data) {
console.log(data);

var items = data.items.map(function (item) {
return item.key + ': ' + item.value;
});

showData.empty();

if (items.length) {
var content = '<li>' + items.join('</li><li>') + '</li>';
var list = $('<ul />').html(content);
showData.append(list);
}
});

showData.text('Loading the JSON file.');
});
});
</script>


<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="{{ asset('js/slide/jquery.bxslider.min.js') }}" type="text/javascript"></script>
<!-- bxSlider CSS file -->
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  auto: true,
  autoControls: true
  });
});
</script>
<script src="{{ asset('js/responsiveslides.min.js') }}" type="text/javascript"></script>
		
			<script>
				$(function () {
				  $("#slider1").responsiveSlides({
					auto: true,
					speed: 500,
					namespace: "callbacks",
					pager: true,
				  });
				});
			</script>
<!--//slider-script-->
</body>
</html>
