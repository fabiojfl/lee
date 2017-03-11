



<div class="col-md-3 product-bottom">
						<!--categories-->
						@can('admin')
							<div class=" rsidebar span_1_of_left">
									<h4 class="cate">Administrador</h4>
										 <ul class="menu-drop">
			<li class="item1"><a href="">Painel</a>
				<ul class="cute">
					<li class="subitem1"><a href="{{ url('/home') }}">Painel</a></li>
				</ul>
			</li>
			<li class="item2"><a href="">Gerenciador de categorias</a></a>
				<ul class="cute">
					<li class="subitem2"><a href="{{ route('admin.categories.create') }}">Criar Categorias</a></li>
					<li class="subitem3"><a href="{{ route('admin.categories.index') }}">Listar Categorias</a></li>
				</ul>
			</li>
			<li class="item3"><a href="#">Produtos</a>
				<ul class="cute">
					<li class="subitem1"><a href="{{ route('admin.products.create') }}">Criar produtos</a></li>
					<li class="subitem1"><a href="{{ route('admin.products.index') }}">Listar produtos e imagens</a></li>
				</ul>
			</li>
			<li class="item4"><a href="#">Pedidos</a>
				<ul class="cute">
					<li class="subitem1"><a href="{{ route('admin.orders.index') }}	">Listar Pedidos</a></li>
				</ul>
			</li>
			<li class="item5"><a href="#">Gerencia de emails</a>
				<ul class="cute">
					<li class="subitem1"><a href="{{ route('admin.contacts.index') }}">Contatos Externos</a></li>
					<li class="subitem1"><a href="{{ route('admin.newsletters.index') }}">Newsletter</a></li>
				</ul>
			</li>
			<li class="item6"><a href="#">Gerencia de usuários</a>
				<ul class="cute">
					<li class="subitem1"><a href="{{ route('admin.users.index') }}">Usuários do sistema</a></li>
				</ul>
			</li>
			<li class="item6"><a href="#">Help Desk</a>
				<ul class="cute">
					<li class="subitem1"><a href="{{ route('admin.supports.index') }}">Lista de chamados</a></li>
				</ul>
			</li>
		</ul>
								</div>
									@endcan
									
		<!--categories-->
	<div class=" rsidebar span_1_of_left">
		<h4 class="cate">Categorias</h4>
		<ul class="menu-drop">
			<!-- CRIAR CATEGORIA E SUB-CATEGORIAS PARA OS PRODUTOS -->
			<!--  <li class="item1"><a href="">Camisas</a>-->
				<ul class="cute">
					@foreach($categories as $category)
						<li class="item1"><a href="{{route('store.category',['id'=> $category->id])}}">{{$category->name}}</a></li>
					@endforeach
				</ul>
			</li>

		</ul>
	</div>
									
							<!--initiate accordion-->
									<script type="text/javascript">
										$(function() {
										    var menu_ul = $('.span_1_of_left > li > ul'),
										           menu_a  = $('.menu-drop > li > a');
										    menu_ul.hide();
										    menu_a.click(function(e) {
										        e.preventDefault();
										        if(!$(this).hasClass('active')) {
										            menu_a.removeClass('active');
										            menu_ul.filter(':visible').slideUp('normal');
										            $(this).addClass('active').next().stop(true,true).slideDown('normal');
										        } else {
										            $(this).removeClass('active');
										            $(this).next().stop(true,true).slideUp('normal');
										        }
										    });
										
										});
									</script>
			        	<!--//menu-->
		 				<section  class="sky-form ">
		 					<img src="{{url('images/BOLT_RESIZE_300x600_v6.jpg')}}" class="img-responsive" alt="">
						 </section> 	
						 			 				 
						</div><!-- dysplay -->	
							<div class="clearfix"></div>
						</br>
					
	
	