<?php

use CodeCommerce\Events\CheckoutEvent;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('order/{id}/update',['as' => 'home-test', 'uses' => 'HomeController@update']);
Route::get('home',['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('test', 'CheckoutController@test');

Route::get('/', 'StoreController@index');
Route::get('/about' ,['as' => 'store.pages.about', 'uses' => 'StoreController@about']);


Route::get('/contact'  ,['as' => 'store.pages.contact', 'uses' => 'ContactController@create']);
Route::post('/contact'   ,['as' => 'store.pages.store',   'uses' => 'ContactController@store']);




//Route::get('/home', )
Route::get('/product-categories/{id}' ,['as' => 'store.product_categories.products', 'uses' => 'StoreController@product_category']);

Route::get('home', 'HomeController@index');

Route::get('category/{id}', ['as' => 'store.category', 'uses'=>'StoreController@category']);
Route::get('product/{id}', ['as' => 'store.product', 'uses'=>'StoreController@product']);
Route::get('sale/{id}'   , ['as' => 'store.sale', 'uses'=>'StoreController@sale']);

Route::get('cart',                  ['as'=> 'store.cart', 'uses'=>'CartController@index']);
Route::get('cart/add/{id}',         ['as'=> 'store.cart.add', 'uses'=>'CartController@add']);
Route::get('cart/destroy/{id}',     ['as'=> 'store.cart.destroy', 'uses'=>'CartController@destroy']);
Route::put('cart/update/{id}',      ['as' => 'store.cart.update', 'uses' => 'CartController@update']);

Route::get('cart/frete', 'CartController@frete');

//Route::get('profile/show/{id}',['as'=>'store.profile.show','users'=>'AdminProfilesController@show']);

Route::group(['prefix'=>'register', 'as'=>'register.'], function(){
	Route::get('', 				['as' => 'index', 	'uses'=>'RegisterController@index']);
	Route::post('store', 		['as' => 'store', 	'uses'=>'RegisterController@store']);
	Route::post('address', 		['as' => 'address', 'uses'=>'RegisterController@address']);
	Route::get('{id}/show', 	['as'=>	 'show', 	'uses'=>'RegisterController@show']);
});

Route::group(['middleware' => 'auth'], function(){	
	Route::get('checkout/placeorder', ['as' => 'store.checkout.place', 'uses' => 'CheckoutController@place']);
	Route::get('account/orders', ['as' => 'account.orders', 'uses' => 'AccountController@orders']);
});

//Route::get('dashboard/home', ['as'=>'store.dashboard.home', 'uses' => 'StoreController@dashboard']);
//Route::get('',['as'=> 'dashboard','uses'=>'' ]);

Route::get('/newslatter'  		,['as' => 'store.pages.newslattercreate',   'uses' =>'AdminNewsletterController@newslattercreate']);
Route::post('/newslatterstore'  ,['as' => 'store.pages.newslatterstore',    'uses' =>'AdminNewsletterController@newslatterstore']);
Route::get('/newslattermessage' ,['as '=> 'store.pages.newslattermessage',	'uses'=> 'AdminNewsletterController@newslattermessage']);

Route::get('newsletters/create'	,['as'=> 'admin.newsletters.create',	'uses'=> 'AdminNewsletterController@create']);
Route::post('newsletters/create',['as'=> 'admin.newsletters.store',		'uses'=> 'AdminNewsletterController@store']);
Route::get('newsletters/message',['as'=> 'admin.newsletters.message',	'uses'=> 'AdminNewsletterController@message']);

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

	Route::group(['prefix' => 'categories/'], function(){
		//categories
		Route::get(''             ,['as' => 'admin.categories.index', 'uses' => 'AdminCategoriesController@index']);
		Route::get('show/{id}'    ,['as' => 'admin.categories.show',  'uses' => 'AdminCategoriesController@show']);
		Route::get('create'       ,['as'=>  'admin.categories.create','uses'=>'AdminCategoriesController@create']);
		Route::post('store'       ,['as'=>  'admin.categories.store','uses'=>'AdminCategoriesController@store']);
		Route::get('edit/{id}'    ,['as'=>  'admin.categories.edit','uses'=>'AdminCategoriesController@edit']);
		Route::put('update/{id}'  ,['as'=>  'admin.categories.update','uses'=>'AdminCategoriesController@update']);
		Route::get('destroy/{id}' ,['as'=>  'admin.categories.destroy','uses'=>'AdminCategoriesController@destroy']);
	});
	
		Route::group(['prefix' => 'sub_categories/'], function(){
			//categories
			Route::get(''             ,['as' => 'admin.sub_categories.index', 	'uses' 	=>'AdminSubCategoriesController@index']);
			Route::get('show/{id}'    ,['as' => 'admin.sub_categories.show',  	'uses' 	=>'AdminSubCategoriesController@show']);
			Route::get('create'       ,['as'=>  'admin.sub_categories.create',	'uses'	=>'AdminSubCategoriesController@create']);
			Route::post('store'       ,['as'=>  'admin.sub_categories.store',	'uses'	=>'AdminSubCategoriesController@store']);
			Route::get('edit/{id}'    ,['as'=>  'admin.sub_categories.edit',	'uses'	=>'AdminSubCategoriesController@edit']);
			Route::put('update/{id}'  ,['as'=>  'admin.sub_categories.update',	'uses'	=>'AdminSubCategoriesController@update']);
			Route::get('destroy/{id}' ,['as'=>  'admin.sub_categories.destroy',	'uses'	=>'AdminSubCategoriesController@destroy']);
		});
	

	Route::group(['prefix' => 'products'], function(){
		//products
		Route::get(''             ,['as' => 'admin.products.index',  'uses' => 'AdminProductsController@index']);
		Route::get('show/{id}'    ,['as' => 'admin.products.show',   'uses' => 'AdminProductsController@show']);
		Route::get('create'       ,['as'=>  'admin.products.create', 'uses'=>  'AdminProductsController@create']);
		Route::post('store'       ,['as'=>  'admin.products.store',  'uses'=>  'AdminProductsController@store']);
		Route::get('edit/{id}'    ,['as'=>  'admin.products.edit',   'uses'=>  'AdminProductsController@edit']);
		Route::put('update/{id}'  ,['as'=>  'admin.products.update', 'uses'=>  'AdminProductsController@update']);
		Route::get('destroy/{id}' ,['as'=>  'admin.products.destroy','uses'=>  'AdminProductsController@destroy']);

		// products image
		Route::get('images/{id}/product'  ,['as'=>'admin.products.images',         'uses'=>'AdminProductsController@images']);
		Route::get('create/{id}/product'  ,['as'=>'admin.products.create_image',   'uses'=>'AdminProductsController@createImage']);
		Route::post('store/{id}/images'   ,['as'=>'admin.products.images.store',   'uses'=>'AdminProductsController@storeImage']);
		Route::get('destroy/{id}/image'   ,['as'=>'admin.products.images.destroy', 'uses'=>'AdminProductsController@destroyImage']);
		
		// Products Slides
		Route::get('images/{id}/homeSlide'     ,['as'=>'admin.slides.index',         			 'uses'=>'AdminProductsController@homeSlides']);
		Route::get('create/{id}/homeSlide'     ,['as'=>'admin.slides.create_slide_home_image',   'uses'=>'AdminProductsController@createSlideImage']);
		Route::post('store/{id}/homeSlide'     ,['as'=>'admin.holmeSlide.images.store',   		 'uses'=>'AdminProductsController@storeHomeSlideImage']);
		Route::get('destroy/{id}/homeSlide'    ,['as'=>'admin.slides.images.destroy', 		     'uses'=>'AdminProductsController@destroyHomeSlide']);
		
		// products features
		Route::get('feature/{id}/product'   ,['as'=>'admin.products.features',          	'uses'=>'AdminProductsController@features']);
		Route::get('create/{id}/feature'    ,['as'=>'admin.products.create_feature',     	'uses'=>'AdminProductsController@createFeature']);
		Route::post('store/{id}/feature'    ,['as'=>'admin.products.features.store',    	'uses'=>'AdminProductsController@storeFeature']);
		Route::get('destroy/{id}/feature'   ,['as'=>'admin.products.features.destroy', 		'uses'=>'AdminProductsController@destroyFeature']);

		// products itemFeatures
		Route::get('itemFeature/{id}/itemFeature'   ,['as'=>'admin.products.ifeatures',          	'uses'=>'AdminProductsController@itemFeatures']);
		Route::get('itemCreate/{id}/itemFeature'    ,['as'=>'admin.products.create_item_feature',     	'uses'=>'AdminProductsController@createItemFeature']);
		Route::post('itemStore/{id}/itemFeature'    ,['as'=>'admin.products.itemFeatures.store',    	'uses'=>'AdminProductsController@storeItemFeature']);
		Route::get('itemDestroy/{id}/itemFeature'   ,['as'=>'admin.products.itemFeatures.destroy', 		'uses'=>'AdminProductsController@destroyItemFeature']);

		
	});
	
	Route::group(['prefix' => 'orders'], function(){
		Route::get(''                    ,['as'=>'admin.orders.index', 		    'uses'=> 'AdminOrdersController@index']);
		Route::get('edit-status/{id}'    ,['as'=>'admin.orders.edit_status',	'uses'=> 'AdminOrdersController@editStatus']);
		Route::put('update-status/{id}'  ,['as'=>'admin.orders.update_status',	'uses'=> 'AdminOrdersController@updateStatus']);
		Route::get('show/{id}'           ,['as'=>'admin.orders.show', 		    'uses'=> 'AdminOrdersController@show']);
	});

	Route::group(['prefix' => 'profiles'], function(){
		Route::get(''                    ,['as'=>'admin.orders.index', 		    'uses'=> 'AdminOrdersController@index']);
	});

	Route::group(['prefix' => 'newsletters'], function(){

		Route::get('',['as'=>'admin.newsletters.index', 'uses'=> 'AdminNewsletterController@index']);
	});

	Route::group(['prefix'=> 'users'],function(){
		Route::get('', 				['as' => 'admin.users.index', 	'uses' => 'AdminUsersController@index']);
		Route::get('{id}/show', 	['as' => 'admin.users.show', 	'uses' => 'AdminUsersController@show']);
		Route::get('create', 		['as' => 'admin.users.create', 	'uses' => 'AdminUsersController@create']);
		Route::post('store', 		['as' => 'admin.users.store', 	'uses' => 'AdminUsersController@store']);
		Route::get('{id}/edit', 	['as' => 'admin.users.edit', 	'uses' => 'AdminUsersController@edit']);
		Route::put('{id}/update', 	['as' => 'admin.user.update', 	'uses' => 'AdminUsersController@update']);
		Route::get('{id}/destroy', 	['as' => 'admin.users.destroy', 'uses' => 'AdminUsersController@destroy']);
	});

	Route::group(['prefix'=> 'supports'],function(){
		Route::get('', 				['as' => 'admin.supports.index', 	'uses' => 'AdminSupportsController@index']);
		Route::get('messge', 		['as' => 'admin.supports.message', 	'uses' => 'AdminSupportsController@message']);
		Route::get('{id}/show', 	['as' => 'admin.supports.show', 	'uses' => 'AdminSupportsController@show']);
		Route::get('create', 		['as' => 'admin.supports.create', 	'uses' => 'AdminSupportsController@create']);
		Route::post('store', 		['as' => 'admin.supports.store', 	'uses' => 'AdminSupportsController@store']);
		Route::get('{id}/edit', 	['as' => 'admin.supports.edit', 	'uses' => 'AdminSupportsController@edit']);
		Route::put('{id}/update', 	['as' => 'admin.supports.update', 	'uses' => 'AdminSupportsController@update']);
		Route::get('{id}/destroy', 	['as' => 'admin.supports.destroy',  'uses' => 'AdminSupportsController@destroy']);

	});

	Route::group(['prefix'=> 'stocks'],function(){
		Route::get('', 				['as' => 'admin.stocks.index', 		'uses' => 'AdminStocksController@index']);
		Route::get('messge', 		['as' => 'admin.stocks.message', 	'uses' => 'AdminStocksController@message']);
		Route::get('{id}/show', 	['as' => 'admin.stocks.show', 		'uses' => 'AdminStocksController@show']);
		Route::get('create', 		['as' => 'admin.stocks.create', 	'uses' => 'AdminStocksController@create']);
		Route::post('store', 		['as' => 'admin.stocks.store', 		'uses' => 'AdminStocksController@store']);
		Route::get('{id}/edit', 	['as' => 'admin.stocks.edit', 		'uses' => 'AdminStocksController@edit']);
		Route::put('{id}/update', 	['as' => 'admin.stocks.update', 	'uses' => 'AdminStocksController@update']);
		Route::get('{id}/destroy', 	['as' => 'admin.stocks.destroy',  	'uses' => 'AdminStocksController@destroy']);

	});
	Route::group(['prefix'=> 'contacts'],function(){
		Route::get(''   ,['as' => 'admin.contacts.index',   'uses' => 'ContactController@index']);
		Route::get('show/{id}'   ,['as' => 'admin.contacts.show',   'uses' => 'ContactController@show']);
		
	});	
});

Route::controllers([
	'auth' 		=> 'Auth\AuthController',
	'password'  => 'Auth\PasswordController',
	'test'      => 'TestController'
]);

Route::auth();

Route::get('/home', ['as' => 'home', 	'uses' => 'HomeController@index']);
