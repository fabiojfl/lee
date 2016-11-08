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
							<li><a href="{{ url('/home') }}"><i class="fa fa-lock"></i>Minha conta</a></li>
                             <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>Sair</a></li>
						@endif
					</ul>
				</div>
			<!--	
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
			-->
				<div class="clearfix"> </div>
		</div>
		</div>
		
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
            <!-- 
			<li><a class="color" href="index.html">Home</a></li>
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu1</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu2</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu3</h4>
									<ul>
										<li><a href="product.html">Shirts</a></li>
										<li><a href="product.html">Shoes, Boots & Trainers</a></li>
										<li><a href="product.html">Sunglasses</a></li>
										<li><a href="product.html">Sweatpants</a></li>
										<li><a href="product.html">Swimwear</a></li>
										<li><a href="product.html">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu4</h4>
								<ul>
									<li><a href="product.html">T-Shirts</a></li>
									<li><a href="product.html">Underwear & Socks</a></li>
									<li><a href="product.html">Vests</a></li>
									<li><a href="product.html">Jackets & Coats</a></li>
									<li><a href="product.html">Jeans</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu1</h4>
									<ul>
										<li><a href="product.html">Accessories</a></li>
										<li><a href="product.html">Bags</a></li>
										<li><a href="product.html">Caps & Hats</a></li>
										<li><a href="product.html">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu2</h4>
								<ul>
										<li><a href="product.html">Jackets & Coats</a></li>
										<li><a href="product.html">Jeans</a></li>
										<li><a href="product.html">Jewellery</a></li>
										<li><a href="product.html">Jumpers & Cardigans</a></li>
										<li><a href="product.html">Leather Jackets</a></li>
										<li><a href="product.html">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu3</h4>
								
<ul>
										<li><a href="product.html">Shirts</a></li>
										<li><a href="product.html">Shoes, Boots & Trainers</a></li>
										<li><a href="product.html">Sunglasses</a></li>
										<li><a href="product.html">Sweatpants</a></li>
										<li><a href="product.html">Swimwear</a></li>
										<li><a href="product.html">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu4</h4>
								<ul>
									<li><a href="product.html">T-Shirts</a></li>
									<li><a href="product.html">Underwear & Socks</a></li>
									<li><a href="product.html">Vests</a></li>
									<li><a href="product.html">Jackets & Coats</a></li>
									<li><a href="product.html">Jeans</a></li>
									<li><a href="product.html">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li><a class="color3" href="product.html">Sale</a></li>
			<li><a class="color5" href="typo.html">Short Codes</a></li>
			-->
			<li><a class="color4" href="404.html">A Leelee</a></li>
            <li ><a class="color6" href="contact.html">Atendimento</a></li>
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<!--<li>
				<a href="wishlist.html" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li> -->
					<!--<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>-->
					</ul>
					<!--  CARRINHO -->
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<!--  <span class="simpleCart_total"></span> -->
					
							</div>
							<!-- <img src="images/cart.png" alt=""/> -->
						</h3>
						</a>
						<!-- <p><a href="javascript:;" class="simpleCart_empty">Carrinho</a></p> -->
					<!--  FIM CARRINHO -->
					</div>
					<div class="clearfix"> </div>
					

						<!---pop-up-box---->
						<link href="{{ asset('css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />				
			<script src="{{ asset('js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p>Leelee</p>
				</div>				
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
<!--banner-->
<!--  
<div class="banner">
	<div class="container">
		<section class="rw-wrapper">
			<h1 class="rw-sentence">
				<span>Fashion &amp; Beauty</span>
				<div class="rw-words rw-words-1">
					<span>Beautiful Designs</span>
					<span>Sed ut perspiciatis</span>
					<span> Totam rem aperiam</span>
					<span>Nemo enim ipsam</span>
					<span>Temporibus autem</span>
					<span>intelligent systems</span>
				</div>
				<div class="rw-words rw-words-2">
					<span>We denounce with right</span>
					<span>But in certain circum</span>
					<span>Sed ut perspiciatis unde</span>
					<span>There are many variation</span>
					<span>The generated Lorem Ipsum</span>
					<span>Excepteur sint occaecat</span>
				</div>
			</h1>
		</section>

	</div>
</div>
-->
	<!--content-->
		<div class="content">
			<div class="container">
			<!-- 
				<div class="content-top">
					<div class="col-md-6 col-md">
						<div class="col-1">
						 <a href="single.html" class="b-link-stroke b-animate-go  thickbox">
						<img src="images/pi.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><p class="b-animate b-from-right    b-delay03 ">Lorem ipsum</p><label class="b-animate b-from-right    b-delay03 "></label><h3 class="b-animate b-from-left    b-delay03 ">Trendy</h3></div></a>

							<!---<a href="single.html"><img src="images/pi.jpg" class="img-responsive" alt=""></a>--
						</div>
						<div class="col-2">
							<span>Hot Deal</span>
							<h2><a href="single.html">Luxurious &amp; Trendy</a></h2>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years</p>
							<a href="single.html" class="buy-now">Buy Now</a>
						</div>
					</div>
					<div class="col-md-6 col-md1">
						<div class="col-3">
							<a href="single.html"><img src="images/pi1.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>For Men</h5>
							</div></a>
						</div>
						<div class="col-3">
							<a href="single.html"><img src="images/pi2.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>For Kids</h5>
							</div></a>
						</div>
						<div class="col-3">
							<a href="single.html"><img src="images/pi3.jpg" class="img-responsive" alt="">
							<div class="col-pic">
								<p>Lorem Ipsum</p>
								<label></label>
								<h5>For Women</h5>
							</div></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				 -->
				<!--products-->
			<div class="product">
			<div class="container">

				@yield('content')
				@yield('categories')
			</div>
			</div class="clearfix"></div>
				<!--products-->
			<!--brand-->
			<div class="brand">
				<div class="col-md-3 brand-grid">
					<img src="{{ asset('images/ic.png') }}" class="img-responsive" alt="">
				</div>
				
				<div class="col-md-3 brand-grid">
					<img src="{{ asset('images/ic1.png') }}" class="img-responsive" alt="">
				</div>
				
				<div class="col-md-3 brand-grid">
					<img src="{{ asset('images/ic2.png') }}" class="img-responsive" alt="">
				</div>
				<div class="col-md-3 brand-grid">
					<img src="{{ asset('images/ic3.png') }}" class="img-responsive" alt="">
				</div>
				<div class="clearfix"></div>
			</div>
			<!--//brand-->
			</div>
			
		</div>
	<!--//content-->
	<!--//footer-->
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="col-md-3 footer-middle-in">
						<a href="index.html"><img src="{{ asset('images/log.png') }}" alt=""></a>
						<p>A empresa de cosméticos que ....</p>
					</div>
					
					<div class="col-md-3 footer-middle-in">
						<h6>Maiores informações</h6>
						<ul class=" in">
							<li><a href="#">A Leelee</a></li>
							<li><a href="#">Atendimento</a></li>
							<!--  
								<li><a href="#">Returns</a></li>
								<li><a href="contact.html">Site Map</a></li>
							-->
						</ul>
						<ul class="in in1">
							<!-- 
							<li><a href="#">Order History</a></li>
							<li><a href="wishlist.html">Wish List</a></li>
							<li><a href="login.html">Login</a></li>
							 -->
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
