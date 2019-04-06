<?php

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