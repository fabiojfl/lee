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
</head>
<link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css" media="all" >
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
	<!--content slide-->
</div>	
		<div class="banner-top">
			<div class="container">
				<!-- 
			<h1>Produtos</h1>
			<em></em>
			<h2><a href="index.html">Home</a><label>/</label>Products</a></h2>
	 -->
			</div>
		</div>
		<div class="single">
			<div class="container">
				@yield('content')
				@yield('categories')
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="brand"> <!-- brand -->
					<div class="col-md-6 brand-grid">
						<img src="{{url('images/banner-dearest-nature-300x100.gif')}}" class="img-responsive" alt="">
					</div>
					<div class="col-md-6 brand-grid">
						<img src="{{url('images/st_300x100.png')}}" class="img-responsive" alt="">
					</div>
					<div class="clearfix"></div>
				</div> <!-- end brand -->
			</div>
		</div><!--single-->
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
						<h6>Maiores informaÃ§Ãµes</h6>
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
						<span>Envie seu email para receber promoÃ§Ãµes e novidades.</span>
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

</body>
</html>
