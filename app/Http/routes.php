<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['web']], function () {
	Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
	Route::get('chi-tiet-san-pham/{id}/{tenloai}/{color}',['as'=>'detailProduct','uses'=>'HomeController@detailProduct']);
	Route::get('loai-san-pham/{id}/{tenloai}',['as'=>'loaisanpham','uses'=>'HomeController@loaisanpham']);
    Route::get('fqa/{id}/{tenloai}',['as'=>'fqa','uses'=>'HomeController@fqa']);
	Route::get('san-pham-moi',['as'=>'sanphammoi','uses'=>'HomeController@newProduct']);
	Route::get('san-pham-ban-chay',['as'=>'sanphambanchay','uses'=>'HomeController@sanPhamBanChay']);
	Route::get('tin-tuc',['as'=>'tintuc','uses'=>'HomeController@tintuc']);
	Route::get('noi-bat',['as'=>'sanphamnoibat','uses'=>'HomeController@noibat']);
	Route::get('chi-tiet-tin-tuc/{id}',['as'=>'chitiettintuc','uses'=>'HomeController@chitiettintuc']);
	Route::get('gioi-thieu',['as'=>'gioithieu','uses'=>'HomeController@gioithieu']);
    Route::get('lien-he',['as'=>'getLienhe', 'uses'=>'HomeController@getLienhe']);
    Route::post('lien-he',['as'=>'postLienhe', 'uses'=>'HomeController@postLienhe']);
    Route::get('mua-hang/{id}/{tensanpham}',['as'=>'muahang','uses'=>'HomeController@muahang']);
    Route::post('mua-hang',['as'=>'postmuahang','uses'=>'HomeController@postmuahang']);
	Route::get('gio-hang',['as'=>'giohang','uses'=>'HomeController@giohang']);
    Route::get('xoa-san-pham/{rowId}',['as'=>'xoasanpham','uses'=>'HomeController@xoasanpham']);
    Route::post('dat-hang',['as'=>'dathang','uses'=>'HomeController@postDatHang']);
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
		Route::group(['prefix'=>'cate'], function () {
			Route::get('list',['as'=>'admin.cate.getList','uses'=>'CateController@getList']);
			Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
			Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		});
		Route::group(['prefix'=>'product'], function () {
			Route::get('list',['as'=>'admin.product.getList','uses'=>'ProductController@getList']);
			Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
			Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
			Route::get('delimg/{id}',['as'=>'admin.product.getDelImg','uses'=>'ProductController@getDelImg']);
		});
		Route::group(['prefix'=>'user'], function () {
			Route::get('list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
			Route::get('add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
			Route::post('add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		});
		Route::group(['prefix'=>'news'], function () {
			Route::get('list',['as'=>'admin.news.getList','uses'=>'NewsController@getList']);
			Route::get('add',['as'=>'admin.news.getAdd','uses'=>'NewsController@getAdd']);
			Route::post('add',['as'=>'admin.news.postAdd','uses'=>'NewsController@postAdd']);
			Route::get('delete/{id}',['as'=>'admin.news.getDelete','uses'=>'NewsController@getDelete']);
			Route::get('edit/{id}',['as'=>'admin.news.getEdit','uses'=>'NewsController@getEdit']);
			Route::post('edit/{id}',['as'=>'admin.news.postEdit','uses'=>'NewsController@postEdit']);
		});
        Route::group(['prefix'=>'slider'], function () {
            Route::get('list',['as'=>'admin.slider.getList','uses'=>'SliderController@getList']);
            Route::get('add',['as'=>'admin.slider.getAdd','uses'=>'SliderController@getAdd']);
            Route::post('add',['as'=>'admin.slider.postAdd','uses'=>'SliderController@postAdd']);
            Route::get('delete/{id}',['as'=>'admin.slider.getDelete','uses'=>'SliderController@getDelete']);
        });
        Route::group(['prefix'=>'fqa'], function () {
            Route::get('list',['as'=>'admin.fqa.getList','uses'=>'FqaController@getList']);
            Route::get('add',['as'=>'admin.fqa.getAdd','uses'=>'FqaController@getAdd']);
            Route::post('add',['as'=>'admin.fqa.postAdd','uses'=>'FqaController@postAdd']);
            Route::get('delete/{id}',['as'=>'admin.fqa.getDelete','uses'=>'FqaController@getDelete']);
            Route::get('edit/{id}',['as'=>'admin.fqa.getEdit','uses'=>'FqaController@getEdit']);
            Route::post('edit/{id}',['as'=>'admin.fqa.postEdit','uses'=>'FqaController@postEdit']);
        });
	});
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

  //  Route::get('/home','HomeController@index');
});

