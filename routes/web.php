<?php

Route::view('matrix','layouts.backend.matrix_admin');
Route::view('khmer24','layouts.backend.khmer24_layout');

// Plupload Route
	Route::get('plupload','PluploadController@upload');
	Route::post('plupload','PluploadController@store');

Auth::routes();

//for switching language route
	Route::get('/locale/{locale}',function($locale){
	  Session::put('locale',$locale);
	  return redirect()->back();
	});

// for language tranlation route
	Route::get('languages', 'Admin\LanguageTranslationController@index')->name('languages');
	Route::post('translations/update', 'Admin\LanguageTranslationController@transUpdate')->name('translation.update.json');
	Route::post('translations/updateKey', 'Admin\LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
	Route::delete('translations/destroy/{key}', 'Admin\LanguageTranslationController@destroy')->name('translations.destroy');
	Route::post('translations/create', 'Admin\LanguageTranslationController@store')->name('translations.create');
	Route::get('check-translation', function(){
	  \App::setLocale('fr');
	  
	  dd(__('website'));
	});

//Crud Generator UI
Route::resource('admin/activitylogs', 'Admin\\ActivityLogsController');
	Route::get('admin/generator', ['uses' => 'Admin\\ProcessController@getGenerator']);
	Route::post('admin/generator', ['uses' => 'Admin\\ProcessController@postGenerator']);
	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/home', 'Admin\DashboardController@index')->name('home');
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
	Route::resource('admin/category', 'Admin\\CategoryController');
	Route::resource('admin/product', 'Admin\\ProductController');
	Route::get('image-view','FreePostController@imageView')->name('image.view');
	Route::post('image-submit','FreePostController@imageSubmit')->name('image.submit');
	Route::get('/dynamic_dependent', 'DynamicDependent@index');
	Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');
	Route::get('/student', 'SchoolController@index');
	Route::get('students/get/{id}', 'SchoolController@getStudents');
	Route::get('dropdownlist','DropdownController@index');
	Route::get('get-state-list','DropdownController@getStateList');
	Route::get('get-city-list','DropdownController@getCityList');

// Route::get('upload','FreePostController@getIndex');	
	Route::get('preview','FreePostController@getPreview');
	Route::post('action','FreePostController@postAction');

// freeads post route
	Route::get('get-district-list','FreePostController@getDistrictList');
	Route::get('get-commune-list','FreePostController@getCommuneList');
	
	Route::get('post','FreePostController@index')->name('post.index');
	Route::get('post/{post_id}/create','FreePostController@create')->name('post.create');
	Route::post('post','FreePostController@saveProperties')->name('post.store');
	Route::get('post/{id}/properties_edit','FreePostController@editProperties')->name('post.edit');
	Route::put('post/{id}/update','FreePostController@updateProperties')->name('post.update');
	Route::delete('post/{id}/destroy','FreePostController@deleteProperties')->name('post.destroy');
	Route::get('post/{id}/properties_detail','FreePostController@showProperties')->name('post.show');
	Route::get('post/list_by_category','FreePostController@listProperties')->name('post.by_category');
	Route::get('post/allproperties','FreePostController@allProperties')->name('post.allProperties');

// Profile
	Route::view('member','freeads.member_dashboard');
	Route::view('vipmember','freeads.vipmember');
	Route::view('profile','freeads.member_profile');

//login mutiple table testing
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/writer', 'writer');