<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',function(){
	return view('test');
});

// Route::get('/add_news',function(){
// 	return view('news.add_news');
// });

Route::get('/add_news','NewsController@createnews')->name('createnews');
Route::post('/store_news','NewsController@addnews')->name('addnews');
Route::get('/view_news','NewsController@viewnews')->name('viewnews');
Route::get('/show_news/{id}','NewsController@shownews')->name('shownews');

// Route::get('/view_news',function(){
// 	return view('news.view_news');
// });

// Route::get('/show_news',function(){
// 	return view('news.show_news');
// });

route::get('/edit_news',function(){
	return view('news.edit_news');
});

Route::post('/images',"NewsController@storeimage")->name('storeimage');
Route::get('/view_image',"NewsController@viewimages")->name('viewimages');
Route::get('/show_image/{id}',"NewsController@showimage")->name('showimage');


route::get('/media',function(){
	return view('media.media');
});

route::get('/add_image',function(){
	return view('media.add_image');
});

route::get('/add_video',function(){
	return view('media.add_video');
});

route::get('/add_audio',function(){
	return view('media.add_audio');
});

route::get('/add_files',function(){
	return view('media.add_files');
});

// route::get('/view_image',function(){
// 	return view('media.view_image');
// });

route::get('/edit_image',function(){
	return view('media.edit_images');
});

route::get('/view_audio',function(){
	return view('media.view_audio');
});

route::get('/view_files',function(){
	return view('media.view_files');
});

route::get('/view_videos',function(){
	return view('media.view_videos');
});

Route::get('/edit_audio',function(){
	return view('media.edit_audio');
});

Route::get('/edit_video',function(){
	return view('media.edit_video');
});

Route::get('/edit_files',function(){
	return view('media.edit_files');
});

// Route::get('/show_images',function(){
// 	return view('media.show_image');
// });
Route::get('/show_video',function(){
	return view('media.show_video');
});

route::get('/show_audio',function(){
	return view('media.show_audio');
});

route::get('/show_file',function(){
	return view('media.show_file');
});

route::get('/tes',function(){
	return view('media.test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
