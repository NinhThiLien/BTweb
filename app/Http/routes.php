<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function ()
// {
// 	return 'Hello world!';
// });

// Route::get('hello', 'HelloController@index');
// Route::get('/hello/{name}', 'HelloController@show');

// Route::get('blade', function ()
// {
// 	$drinks = array('Vodka', 'Gin', 'Brandy');
// 	return view('page', array('name' => 'The Raven', 'day' => 'Friday', 'drinks' => $drinks));
// });

Route::get('/', 'ProgramController@blog');

Route::get('/blog', 'ProgramController@blog');
Route::get('/blog/{id}', 'ProgramController@blog_post');
Route::post('/blog/{id}', 'ProgramController@post');
Route::post('/postcmt', 'ProgramController@postcmt');
Route::post('/postregis', 'ProgramController@postregis');
Route::post('/postlike1', 'ProgramController@postlike1');
Route::post('/postlike2', 'ProgramController@postlike2');

Route::get('/contact-us', 'ProgramController@contact_us');

// Authentication routes

Route::group(['middleware' => 'auth'], function () {

    Route::get('auth/login', 'ProgramController@blog');

});

Route::get('coach/{coachid}', 'CoachController@program');
Route::group(['middleware' => 'guest'], function () {

	Route::get('auth/login', 'Front@login');
});

Route::post('auth/login', 'Front@authenticate');
Route::get('auth/logout', 'Front@logout');
Route::get('coachlist', 'SearchController@coachlist');
// Registration routes
Route::post('/register', 'Front@register');

Route::get('/mypage', 'MyPageController@mypage');
Route::get('/tutorial', 'TutorialController@create');
Route::get('/toplike', 'LikeController@showtop');
Route::get('/newpost', 'PostController@newpost');
Route::post('/newpost', 'PostController@addpost');
// Route::post('/test', function () {
//     return view('test');
// });
// Route::group(['middleware' => 'auth'], function () {

// 	Route::get('/update', 'Auth\ProfileController@index');
// 	Route::post('update', 'Auth\ProfileController@update');

// });

// Route::get('update', 'ProfileController@show');
// Route::post('/update', 'ProfileController@update');
Route::get('update',[
	'as' => 'update',
	'uses' => 'ProfileController@update'
]);
Route::post('update','ProfileController@postupdate');

//Route::post('blog_post', 'ProfileController@join');


/////////////////
// Test routes //
/////////////////
// Route::get('/insert', function ()
// {
// 	App\Category::create(array('name' => 'Music'));
// 	return 'category added';
// });

// Route::get('/read', function ()
// {
// 	$category = new App\Category();
// 	$data = $category->all(array('name', 'id'));

// 	foreach ($data as $list) {
// 		echo $list->id . ' ' . $list->name . '<br>';
// 	}
// });

// Route::get('/update', function ()
// {
// 	$category = App\Category::find(6);
// 	$category->name = 'HEAVY METAL';
// 	$category->save();

// 	$data = $category->all(array('name', 'id'));

// 	foreach ($data as $list) {
// 		echo $list->id . ' ' . $list->name . ' ';
// 	}
// });

// Route::get('/delete', function ()
// {
// 	$category = App\Category::find(5);
// 	$category->delete();

// 	$data = $category->all(array('name', 'id'));

// 	foreach ($data as $list) {
// 		echo $list->id . ' ' . $list->name . ' ';
// 	}
// });

// Route::get('/raw', function () {
//     $sql = "INSERT INTO categories (name) VALUES ('POMBE')";

//     DB::statement($sql);
//     $results = DB::select(DB::raw("SELECT * FROM categories"));

//     print_r($results);
// }
// );

// API routes
// Route::get('/api/v1/products/{id?}', ['middleware' => 'auth.basic', function($id = null)
// {
// 	if ($id == null) {
// 		$products = App\Product::all(array('id', 'name', 'price'));
// 	} else {
// 		$products = App\Product::find($id, array('id', 'name', 'price'));
// 	}
// 	return Response::json(array(
// 		'error' => false,
// 		'products' => $products,
// 		'status_code' => 200
// 		));
// }]);

// Route::get('/api/v1/categories/{id?}', ['middleware' => 'auth.basic', function($id = null)
// {
// 	if ($id == null) {
// 		$products = App\Product::all(array('id', 'name'));
// 	} else {
// 		$products = App\Product::find($id, array('id', 'name'));
// 	}
// 	return Response::json(array(
// 		'error' => false,
// 		'user' => $categories,
// 		'status_code' => 200
// 		));
// }]);
