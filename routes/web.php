<?php
//Route::get('/', "pruebaController@autoModel");
Route::get('/', 'Auth\LoginController@showLoginForm');
Route::get('/1crearjson', "aController@crearJsonIni");
Route::get('/2generar', "aController@crearDesdeElJson");
Route::get('/rollback', "aController@rollback");

Route::get('/pruebadepost', "aController@pruebademodelo");
/*
Route::group(['prefix' => 'analisisAplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name("analisisaplicaciones.index");
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name("analisisaplicaciones.create");
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name("analisisaplicaciones.edit");
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name("analisisaplicaciones.show");
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name("analisisaplicaciones.store");
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name("analisisaplicaciones.update");
    Route::post('delete/{id}', 'admin1\analisisAplicacionesController@destroy');
});*/
//Route::post('analisisAplicaciones/store', 'analisisAplicacionesAPIController@store');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*<SG-autoRoute>*/

Route::group(['prefix' => 'categories'], function () {
    Route::get('index', 'admin1\categoriesController@index')->name('admin1.categories.index');
    Route::get('create', 'admin1\categoriesController@create')->name('admin1.categories.create');
    Route::get('edit/{id}', 'admin1\categoriesController@edit')->name('admin1.categories.edit');
    Route::get('detail/{id}', 'admin1\categoriesController@show')->name('admin1.categories.detail');
    Route::post('store', 'admin1\categoriesController@store')->name('admin1.categories.store');
    Route::post('update/{id}', 'admin1\categoriesController@update')->name('admin1.categories.update');
    Route::delete('delete/{id}', 'admin1\categoriesController@delete')->name('admin1.categories.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriesController@store')->name('api.categories.store');
        Route::post('update/{id}', 'Api\admin1\categoriesController@update')->name('api.categories.update');
        Route::post('delete/{id}', 'Api\admin1\categoriesController@delete')->name('api.categories.delete');
        Route::get('detail/{id}', 'Api\admin1\categoriesController@show')->name('api.categories.detail');
        Route::get('all', 'Api\admin1\categoriesController@all')->name('api.categories.all');
    });
});


Route::group(['prefix' => 'comments'], function () {
    Route::get('index', 'admin1\commentsController@index')->name('admin1.comments.index');
    Route::get('create', 'admin1\commentsController@create')->name('admin1.comments.create');
    Route::get('edit/{id}', 'admin1\commentsController@edit')->name('admin1.comments.edit');
    Route::get('detail/{id}', 'admin1\commentsController@show')->name('admin1.comments.detail');
    Route::post('store', 'admin1\commentsController@store')->name('admin1.comments.store');
    Route::post('update/{id}', 'admin1\commentsController@update')->name('admin1.comments.update');
    Route::delete('delete/{id}', 'admin1\commentsController@delete')->name('admin1.comments.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\commentsController@store')->name('api.comments.store');
        Route::post('update/{id}', 'Api\admin1\commentsController@update')->name('api.comments.update');
        Route::post('delete/{id}', 'Api\admin1\commentsController@delete')->name('api.comments.delete');
        Route::get('detail/{id}', 'Api\admin1\commentsController@show')->name('api.comments.detail');
        Route::get('all', 'Api\admin1\commentsController@all')->name('api.comments.all');
    });
});


Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('admin1.migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('admin1.migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('admin1.migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('admin1.migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('admin1.migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('admin1.migrations.update');
    Route::delete('delete/{id}', 'admin1\migrationsController@delete')->name('admin1.migrations.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');
        Route::get('detail/{id}', 'Api\admin1\migrationsController@show')->name('api.migrations.detail');
        Route::get('all', 'Api\admin1\migrationsController@all')->name('api.migrations.all');
    });
});


Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('admin1.passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('admin1.passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('admin1.passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('admin1.passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('admin1.passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('admin1.passwordresets.update');
    Route::delete('delete/{id}', 'admin1\passwordResetsController@delete')->name('admin1.passwordresets.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');
        Route::get('detail/{id}', 'Api\admin1\passwordResetsController@show')->name('api.passwordresets.detail');
        Route::get('all', 'Api\admin1\passwordResetsController@all')->name('api.passwordresets.all');
    });
});


Route::group(['prefix' => 'postcategory'], function () {
    Route::get('index', 'admin1\postCategoryController@index')->name('admin1.postcategory.index');
    Route::get('create', 'admin1\postCategoryController@create')->name('admin1.postcategory.create');
    Route::get('edit/{id}', 'admin1\postCategoryController@edit')->name('admin1.postcategory.edit');
    Route::get('detail/{id}', 'admin1\postCategoryController@show')->name('admin1.postcategory.detail');
    Route::post('store', 'admin1\postCategoryController@store')->name('admin1.postcategory.store');
    Route::post('update/{id}', 'admin1\postCategoryController@update')->name('admin1.postcategory.update');
    Route::delete('delete/{id}', 'admin1\postCategoryController@delete')->name('admin1.postcategory.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoryController@store')->name('api.postcategory.store');
        Route::post('update/{id}', 'Api\admin1\postCategoryController@update')->name('api.postcategory.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoryController@delete')->name('api.postcategory.delete');
        Route::get('detail/{id}', 'Api\admin1\postCategoryController@show')->name('api.postcategory.detail');
        Route::get('all', 'Api\admin1\postCategoryController@all')->name('api.postcategory.all');
    });
});


Route::group(['prefix' => 'posts'], function () {
    Route::get('index', 'admin1\postsController@index')->name('admin1.posts.index');
    Route::get('create', 'admin1\postsController@create')->name('admin1.posts.create');
    Route::get('edit/{id}', 'admin1\postsController@edit')->name('admin1.posts.edit');
    Route::get('detail/{id}', 'admin1\postsController@show')->name('admin1.posts.detail');
    Route::post('store', 'admin1\postsController@store')->name('admin1.posts.store');
    Route::post('update/{id}', 'admin1\postsController@update')->name('admin1.posts.update');
    Route::delete('delete/{id}', 'admin1\postsController@delete')->name('admin1.posts.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postsController@store')->name('api.posts.store');
        Route::post('update/{id}', 'Api\admin1\postsController@update')->name('api.posts.update');
        Route::post('delete/{id}', 'Api\admin1\postsController@delete')->name('api.posts.delete');
        Route::get('detail/{id}', 'Api\admin1\postsController@show')->name('api.posts.detail');
        Route::get('all', 'Api\admin1\postsController@all')->name('api.posts.all');
    });
});


Route::group(['prefix' => 'tags'], function () {
    Route::get('index', 'admin1\tagsController@index')->name('admin1.tags.index');
    Route::get('create', 'admin1\tagsController@create')->name('admin1.tags.create');
    Route::get('edit/{id}', 'admin1\tagsController@edit')->name('admin1.tags.edit');
    Route::get('detail/{id}', 'admin1\tagsController@show')->name('admin1.tags.detail');
    Route::post('store', 'admin1\tagsController@store')->name('admin1.tags.store');
    Route::post('update/{id}', 'admin1\tagsController@update')->name('admin1.tags.update');
    Route::delete('delete/{id}', 'admin1\tagsController@delete')->name('admin1.tags.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\tagsController@store')->name('api.tags.store');
        Route::post('update/{id}', 'Api\admin1\tagsController@update')->name('api.tags.update');
        Route::post('delete/{id}', 'Api\admin1\tagsController@delete')->name('api.tags.delete');
        Route::get('detail/{id}', 'Api\admin1\tagsController@show')->name('api.tags.detail');
        Route::get('all', 'Api\admin1\tagsController@all')->name('api.tags.all');
    });
});


Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('admin1.users.index');
    Route::get('create', 'admin1\usersController@create')->name('admin1.users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('admin1.users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('admin1.users.detail');
    Route::post('store', 'admin1\usersController@store')->name('admin1.users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('admin1.users.update');
    Route::delete('delete/{id}', 'admin1\usersController@delete')->name('admin1.users.delete');
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');
        Route::get('detail/{id}', 'Api\admin1\usersController@show')->name('api.users.detail');
        Route::get('all', 'Api\admin1\usersController@all')->name('api.users.all');
    });
});


/*<SG-autoRoute>*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*<SG-autoRoute>*/


Route::group(['prefix' => 'categories'], function () {
    Route::get('index', 'admin1\categoriesController@index')->name('admin1.categories.index');
    Route::get('create', 'admin1\categoriesController@create')->name('admin1.categories.create');
    Route::get('edit/{id}', 'admin1\categoriesController@edit')->name('admin1.categories.edit');
    Route::get('detail/{id}', 'admin1\categoriesController@show')->name('admin1.categories.detail');
    Route::post('store', 'admin1\categoriesController@store')->name('admin1.categories.store');
    Route::post('update/{id}', 'admin1\categoriesController@update')->name('admin1.categories.update');
    Route::delete('delete/{id}', 'admin1\categoriesController@delete')->name('admin1.categories.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriesController@store')->name('api.categories.store');
        Route::post('update/{id}', 'Api\admin1\categoriesController@update')->name('api.categories.update');
        Route::post('delete/{id}', 'Api\admin1\categoriesController@delete')->name('api.categories.delete');   
        Route::get('detail/{id}', 'Api\admin1\categoriesController@show')->name('api.categories.detail');   
        Route::get('all', 'Api\admin1\categoriesController@all')->name('api.categories.all');
    });  
});



Route::group(['prefix' => 'comments'], function () {
    Route::get('index', 'admin1\commentsController@index')->name('admin1.comments.index');
    Route::get('create', 'admin1\commentsController@create')->name('admin1.comments.create');
    Route::get('edit/{id}', 'admin1\commentsController@edit')->name('admin1.comments.edit');
    Route::get('detail/{id}', 'admin1\commentsController@show')->name('admin1.comments.detail');
    Route::post('store', 'admin1\commentsController@store')->name('admin1.comments.store');
    Route::post('update/{id}', 'admin1\commentsController@update')->name('admin1.comments.update');
    Route::delete('delete/{id}', 'admin1\commentsController@delete')->name('admin1.comments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\commentsController@store')->name('api.comments.store');
        Route::post('update/{id}', 'Api\admin1\commentsController@update')->name('api.comments.update');
        Route::post('delete/{id}', 'Api\admin1\commentsController@delete')->name('api.comments.delete');   
        Route::get('detail/{id}', 'Api\admin1\commentsController@show')->name('api.comments.detail');   
        Route::get('all', 'Api\admin1\commentsController@all')->name('api.comments.all');
    });  
});



Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('admin1.migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('admin1.migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('admin1.migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('admin1.migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('admin1.migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('admin1.migrations.update');
    Route::delete('delete/{id}', 'admin1\migrationsController@delete')->name('admin1.migrations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');   
        Route::get('detail/{id}', 'Api\admin1\migrationsController@show')->name('api.migrations.detail');   
        Route::get('all', 'Api\admin1\migrationsController@all')->name('api.migrations.all');
    });  
});



Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('admin1.passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('admin1.passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('admin1.passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('admin1.passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('admin1.passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('admin1.passwordresets.update');
    Route::delete('delete/{id}', 'admin1\passwordResetsController@delete')->name('admin1.passwordresets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');   
        Route::get('detail/{id}', 'Api\admin1\passwordResetsController@show')->name('api.passwordresets.detail');   
        Route::get('all', 'Api\admin1\passwordResetsController@all')->name('api.passwordresets.all');
    });  
});



Route::group(['prefix' => 'postcategory'], function () {
    Route::get('index', 'admin1\postCategoryController@index')->name('admin1.postcategory.index');
    Route::get('create', 'admin1\postCategoryController@create')->name('admin1.postcategory.create');
    Route::get('edit/{id}', 'admin1\postCategoryController@edit')->name('admin1.postcategory.edit');
    Route::get('detail/{id}', 'admin1\postCategoryController@show')->name('admin1.postcategory.detail');
    Route::post('store', 'admin1\postCategoryController@store')->name('admin1.postcategory.store');
    Route::post('update/{id}', 'admin1\postCategoryController@update')->name('admin1.postcategory.update');
    Route::delete('delete/{id}', 'admin1\postCategoryController@delete')->name('admin1.postcategory.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoryController@store')->name('api.postcategory.store');
        Route::post('update/{id}', 'Api\admin1\postCategoryController@update')->name('api.postcategory.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoryController@delete')->name('api.postcategory.delete');   
        Route::get('detail/{id}', 'Api\admin1\postCategoryController@show')->name('api.postcategory.detail');   
        Route::get('all', 'Api\admin1\postCategoryController@all')->name('api.postcategory.all');
    });  
});



Route::group(['prefix' => 'posttag'], function () {
    Route::get('index', 'admin1\postTagController@index')->name('admin1.posttag.index');
    Route::get('create', 'admin1\postTagController@create')->name('admin1.posttag.create');
    Route::get('edit/{id}', 'admin1\postTagController@edit')->name('admin1.posttag.edit');
    Route::get('detail/{id}', 'admin1\postTagController@show')->name('admin1.posttag.detail');
    Route::post('store', 'admin1\postTagController@store')->name('admin1.posttag.store');
    Route::post('update/{id}', 'admin1\postTagController@update')->name('admin1.posttag.update');
    Route::delete('delete/{id}', 'admin1\postTagController@delete')->name('admin1.posttag.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postTagController@store')->name('api.posttag.store');
        Route::post('update/{id}', 'Api\admin1\postTagController@update')->name('api.posttag.update');
        Route::post('delete/{id}', 'Api\admin1\postTagController@delete')->name('api.posttag.delete');   
        Route::get('detail/{id}', 'Api\admin1\postTagController@show')->name('api.posttag.detail');   
        Route::get('all', 'Api\admin1\postTagController@all')->name('api.posttag.all');
    });  
});



Route::group(['prefix' => 'posts'], function () {
    Route::get('index', 'admin1\postsController@index')->name('admin1.posts.index');
    Route::get('create', 'admin1\postsController@create')->name('admin1.posts.create');
    Route::get('edit/{id}', 'admin1\postsController@edit')->name('admin1.posts.edit');
    Route::get('detail/{id}', 'admin1\postsController@show')->name('admin1.posts.detail');
    Route::post('store', 'admin1\postsController@store')->name('admin1.posts.store');
    Route::post('update/{id}', 'admin1\postsController@update')->name('admin1.posts.update');
    Route::delete('delete/{id}', 'admin1\postsController@delete')->name('admin1.posts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postsController@store')->name('api.posts.store');
        Route::post('update/{id}', 'Api\admin1\postsController@update')->name('api.posts.update');
        Route::post('delete/{id}', 'Api\admin1\postsController@delete')->name('api.posts.delete');   
        Route::get('detail/{id}', 'Api\admin1\postsController@show')->name('api.posts.detail');   
        Route::get('all', 'Api\admin1\postsController@all')->name('api.posts.all');
    });  
});



Route::group(['prefix' => 'tags'], function () {
    Route::get('index', 'admin1\tagsController@index')->name('admin1.tags.index');
    Route::get('create', 'admin1\tagsController@create')->name('admin1.tags.create');
    Route::get('edit/{id}', 'admin1\tagsController@edit')->name('admin1.tags.edit');
    Route::get('detail/{id}', 'admin1\tagsController@show')->name('admin1.tags.detail');
    Route::post('store', 'admin1\tagsController@store')->name('admin1.tags.store');
    Route::post('update/{id}', 'admin1\tagsController@update')->name('admin1.tags.update');
    Route::delete('delete/{id}', 'admin1\tagsController@delete')->name('admin1.tags.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\tagsController@store')->name('api.tags.store');
        Route::post('update/{id}', 'Api\admin1\tagsController@update')->name('api.tags.update');
        Route::post('delete/{id}', 'Api\admin1\tagsController@delete')->name('api.tags.delete');   
        Route::get('detail/{id}', 'Api\admin1\tagsController@show')->name('api.tags.detail');   
        Route::get('all', 'Api\admin1\tagsController@all')->name('api.tags.all');
    });  
});



Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('admin1.users.index');
    Route::get('create', 'admin1\usersController@create')->name('admin1.users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('admin1.users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('admin1.users.detail');
    Route::post('store', 'admin1\usersController@store')->name('admin1.users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('admin1.users.update');
    Route::delete('delete/{id}', 'admin1\usersController@delete')->name('admin1.users.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');   
        Route::get('detail/{id}', 'Api\admin1\usersController@show')->name('api.users.detail');   
        Route::get('all', 'Api\admin1\usersController@all')->name('api.users.all');
    });  
});


/*<SG-autoRoute>*/

/*<SG-autoRoute>*/


Route::group(['prefix' => 'categories'], function () {
    Route::get('index', 'admin1\categoriesController@index')->name('admin1.categories.index');
    Route::get('create', 'admin1\categoriesController@create')->name('admin1.categories.create');
    Route::get('edit/{id}', 'admin1\categoriesController@edit')->name('admin1.categories.edit');
    Route::get('detail/{id}', 'admin1\categoriesController@show')->name('admin1.categories.detail');
    Route::post('store', 'admin1\categoriesController@store')->name('admin1.categories.store');
    Route::post('update/{id}', 'admin1\categoriesController@update')->name('admin1.categories.update');
    Route::delete('delete/{id}', 'admin1\categoriesController@delete')->name('admin1.categories.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriesController@store')->name('api.categories.store');
        Route::post('update/{id}', 'Api\admin1\categoriesController@update')->name('api.categories.update');
        Route::post('delete/{id}', 'Api\admin1\categoriesController@delete')->name('api.categories.delete');   
        Route::get('detail/{id}', 'Api\admin1\categoriesController@show')->name('api.categories.detail');   
        Route::get('all', 'Api\admin1\categoriesController@all')->name('api.categories.all');
    });  
});



Route::group(['prefix' => 'comments'], function () {
    Route::get('index', 'admin1\commentsController@index')->name('admin1.comments.index');
    Route::get('create', 'admin1\commentsController@create')->name('admin1.comments.create');
    Route::get('edit/{id}', 'admin1\commentsController@edit')->name('admin1.comments.edit');
    Route::get('detail/{id}', 'admin1\commentsController@show')->name('admin1.comments.detail');
    Route::post('store', 'admin1\commentsController@store')->name('admin1.comments.store');
    Route::post('update/{id}', 'admin1\commentsController@update')->name('admin1.comments.update');
    Route::delete('delete/{id}', 'admin1\commentsController@delete')->name('admin1.comments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\commentsController@store')->name('api.comments.store');
        Route::post('update/{id}', 'Api\admin1\commentsController@update')->name('api.comments.update');
        Route::post('delete/{id}', 'Api\admin1\commentsController@delete')->name('api.comments.delete');   
        Route::get('detail/{id}', 'Api\admin1\commentsController@show')->name('api.comments.detail');   
        Route::get('all', 'Api\admin1\commentsController@all')->name('api.comments.all');
    });  
});



Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('admin1.migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('admin1.migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('admin1.migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('admin1.migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('admin1.migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('admin1.migrations.update');
    Route::delete('delete/{id}', 'admin1\migrationsController@delete')->name('admin1.migrations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');   
        Route::get('detail/{id}', 'Api\admin1\migrationsController@show')->name('api.migrations.detail');   
        Route::get('all', 'Api\admin1\migrationsController@all')->name('api.migrations.all');
    });  
});



Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('admin1.passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('admin1.passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('admin1.passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('admin1.passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('admin1.passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('admin1.passwordresets.update');
    Route::delete('delete/{id}', 'admin1\passwordResetsController@delete')->name('admin1.passwordresets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');   
        Route::get('detail/{id}', 'Api\admin1\passwordResetsController@show')->name('api.passwordresets.detail');   
        Route::get('all', 'Api\admin1\passwordResetsController@all')->name('api.passwordresets.all');
    });  
});



Route::group(['prefix' => 'postcategory'], function () {
    Route::get('index', 'admin1\postCategoryController@index')->name('admin1.postcategory.index');
    Route::get('create', 'admin1\postCategoryController@create')->name('admin1.postcategory.create');
    Route::get('edit/{id}', 'admin1\postCategoryController@edit')->name('admin1.postcategory.edit');
    Route::get('detail/{id}', 'admin1\postCategoryController@show')->name('admin1.postcategory.detail');
    Route::post('store', 'admin1\postCategoryController@store')->name('admin1.postcategory.store');
    Route::post('update/{id}', 'admin1\postCategoryController@update')->name('admin1.postcategory.update');
    Route::delete('delete/{id}', 'admin1\postCategoryController@delete')->name('admin1.postcategory.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoryController@store')->name('api.postcategory.store');
        Route::post('update/{id}', 'Api\admin1\postCategoryController@update')->name('api.postcategory.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoryController@delete')->name('api.postcategory.delete');   
        Route::get('detail/{id}', 'Api\admin1\postCategoryController@show')->name('api.postcategory.detail');   
        Route::get('all', 'Api\admin1\postCategoryController@all')->name('api.postcategory.all');
    });  
});



Route::group(['prefix' => 'posttag'], function () {
    Route::get('index', 'admin1\postTagController@index')->name('admin1.posttag.index');
    Route::get('create', 'admin1\postTagController@create')->name('admin1.posttag.create');
    Route::get('edit/{id}', 'admin1\postTagController@edit')->name('admin1.posttag.edit');
    Route::get('detail/{id}', 'admin1\postTagController@show')->name('admin1.posttag.detail');
    Route::post('store', 'admin1\postTagController@store')->name('admin1.posttag.store');
    Route::post('update/{id}', 'admin1\postTagController@update')->name('admin1.posttag.update');
    Route::delete('delete/{id}', 'admin1\postTagController@delete')->name('admin1.posttag.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postTagController@store')->name('api.posttag.store');
        Route::post('update/{id}', 'Api\admin1\postTagController@update')->name('api.posttag.update');
        Route::post('delete/{id}', 'Api\admin1\postTagController@delete')->name('api.posttag.delete');   
        Route::get('detail/{id}', 'Api\admin1\postTagController@show')->name('api.posttag.detail');   
        Route::get('all', 'Api\admin1\postTagController@all')->name('api.posttag.all');
    });  
});



Route::group(['prefix' => 'posts'], function () {
    Route::get('index', 'admin1\postsController@index')->name('admin1.posts.index');
    Route::get('create', 'admin1\postsController@create')->name('admin1.posts.create');
    Route::get('edit/{id}', 'admin1\postsController@edit')->name('admin1.posts.edit');
    Route::get('detail/{id}', 'admin1\postsController@show')->name('admin1.posts.detail');
    Route::post('store', 'admin1\postsController@store')->name('admin1.posts.store');
    Route::post('update/{id}', 'admin1\postsController@update')->name('admin1.posts.update');
    Route::delete('delete/{id}', 'admin1\postsController@delete')->name('admin1.posts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postsController@store')->name('api.posts.store');
        Route::post('update/{id}', 'Api\admin1\postsController@update')->name('api.posts.update');
        Route::post('delete/{id}', 'Api\admin1\postsController@delete')->name('api.posts.delete');   
        Route::get('detail/{id}', 'Api\admin1\postsController@show')->name('api.posts.detail');   
        Route::get('all', 'Api\admin1\postsController@all')->name('api.posts.all');
    });  
});



Route::group(['prefix' => 'tags'], function () {
    Route::get('index', 'admin1\tagsController@index')->name('admin1.tags.index');
    Route::get('create', 'admin1\tagsController@create')->name('admin1.tags.create');
    Route::get('edit/{id}', 'admin1\tagsController@edit')->name('admin1.tags.edit');
    Route::get('detail/{id}', 'admin1\tagsController@show')->name('admin1.tags.detail');
    Route::post('store', 'admin1\tagsController@store')->name('admin1.tags.store');
    Route::post('update/{id}', 'admin1\tagsController@update')->name('admin1.tags.update');
    Route::delete('delete/{id}', 'admin1\tagsController@delete')->name('admin1.tags.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\tagsController@store')->name('api.tags.store');
        Route::post('update/{id}', 'Api\admin1\tagsController@update')->name('api.tags.update');
        Route::post('delete/{id}', 'Api\admin1\tagsController@delete')->name('api.tags.delete');   
        Route::get('detail/{id}', 'Api\admin1\tagsController@show')->name('api.tags.detail');   
        Route::get('all', 'Api\admin1\tagsController@all')->name('api.tags.all');
    });  
});



Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('admin1.users.index');
    Route::get('create', 'admin1\usersController@create')->name('admin1.users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('admin1.users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('admin1.users.detail');
    Route::post('store', 'admin1\usersController@store')->name('admin1.users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('admin1.users.update');
    Route::delete('delete/{id}', 'admin1\usersController@delete')->name('admin1.users.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');   
        Route::get('detail/{id}', 'Api\admin1\usersController@show')->name('api.users.detail');   
        Route::get('all', 'Api\admin1\usersController@all')->name('api.users.all');
    });  
});


/*<SG-autoRoute>*//*<SG-autoRoute>*/


Route::group(['prefix' => 'categories'], function () {
    Route::get('index', 'admin1\categoriesController@index')->name('admin1.categories.index');
    Route::get('create', 'admin1\categoriesController@create')->name('admin1.categories.create');
    Route::get('edit/{id}', 'admin1\categoriesController@edit')->name('admin1.categories.edit');
    Route::get('detail/{id}', 'admin1\categoriesController@show')->name('admin1.categories.detail');
    Route::post('store', 'admin1\categoriesController@store')->name('admin1.categories.store');
    Route::post('update/{id}', 'admin1\categoriesController@update')->name('admin1.categories.update');
    Route::delete('delete/{id}', 'admin1\categoriesController@delete')->name('admin1.categories.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriesController@store')->name('api.categories.store');
        Route::post('update/{id}', 'Api\admin1\categoriesController@update')->name('api.categories.update');
        Route::post('delete/{id}', 'Api\admin1\categoriesController@delete')->name('api.categories.delete');   
        Route::get('detail/{id}', 'Api\admin1\categoriesController@show')->name('api.categories.detail');   
        Route::get('all', 'Api\admin1\categoriesController@all')->name('api.categories.all');
    });  
});



Route::group(['prefix' => 'comments'], function () {
    Route::get('index', 'admin1\commentsController@index')->name('admin1.comments.index');
    Route::get('create', 'admin1\commentsController@create')->name('admin1.comments.create');
    Route::get('edit/{id}', 'admin1\commentsController@edit')->name('admin1.comments.edit');
    Route::get('detail/{id}', 'admin1\commentsController@show')->name('admin1.comments.detail');
    Route::post('store', 'admin1\commentsController@store')->name('admin1.comments.store');
    Route::post('update/{id}', 'admin1\commentsController@update')->name('admin1.comments.update');
    Route::delete('delete/{id}', 'admin1\commentsController@delete')->name('admin1.comments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\commentsController@store')->name('api.comments.store');
        Route::post('update/{id}', 'Api\admin1\commentsController@update')->name('api.comments.update');
        Route::post('delete/{id}', 'Api\admin1\commentsController@delete')->name('api.comments.delete');   
        Route::get('detail/{id}', 'Api\admin1\commentsController@show')->name('api.comments.detail');   
        Route::get('all', 'Api\admin1\commentsController@all')->name('api.comments.all');
    });  
});



Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('admin1.migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('admin1.migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('admin1.migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('admin1.migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('admin1.migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('admin1.migrations.update');
    Route::delete('delete/{id}', 'admin1\migrationsController@delete')->name('admin1.migrations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');   
        Route::get('detail/{id}', 'Api\admin1\migrationsController@show')->name('api.migrations.detail');   
        Route::get('all', 'Api\admin1\migrationsController@all')->name('api.migrations.all');
    });  
});



Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('admin1.passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('admin1.passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('admin1.passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('admin1.passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('admin1.passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('admin1.passwordresets.update');
    Route::delete('delete/{id}', 'admin1\passwordResetsController@delete')->name('admin1.passwordresets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');   
        Route::get('detail/{id}', 'Api\admin1\passwordResetsController@show')->name('api.passwordresets.detail');   
        Route::get('all', 'Api\admin1\passwordResetsController@all')->name('api.passwordresets.all');
    });  
});



Route::group(['prefix' => 'postcategory'], function () {
    Route::get('index', 'admin1\postCategoryController@index')->name('admin1.postcategory.index');
    Route::get('create', 'admin1\postCategoryController@create')->name('admin1.postcategory.create');
    Route::get('edit/{id}', 'admin1\postCategoryController@edit')->name('admin1.postcategory.edit');
    Route::get('detail/{id}', 'admin1\postCategoryController@show')->name('admin1.postcategory.detail');
    Route::post('store', 'admin1\postCategoryController@store')->name('admin1.postcategory.store');
    Route::post('update/{id}', 'admin1\postCategoryController@update')->name('admin1.postcategory.update');
    Route::delete('delete/{id}', 'admin1\postCategoryController@delete')->name('admin1.postcategory.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoryController@store')->name('api.postcategory.store');
        Route::post('update/{id}', 'Api\admin1\postCategoryController@update')->name('api.postcategory.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoryController@delete')->name('api.postcategory.delete');   
        Route::get('detail/{id}', 'Api\admin1\postCategoryController@show')->name('api.postcategory.detail');   
        Route::get('all', 'Api\admin1\postCategoryController@all')->name('api.postcategory.all');
    });  
});



Route::group(['prefix' => 'posttag'], function () {
    Route::get('index', 'admin1\postTagController@index')->name('admin1.posttag.index');
    Route::get('create', 'admin1\postTagController@create')->name('admin1.posttag.create');
    Route::get('edit/{id}', 'admin1\postTagController@edit')->name('admin1.posttag.edit');
    Route::get('detail/{id}', 'admin1\postTagController@show')->name('admin1.posttag.detail');
    Route::post('store', 'admin1\postTagController@store')->name('admin1.posttag.store');
    Route::post('update/{id}', 'admin1\postTagController@update')->name('admin1.posttag.update');
    Route::delete('delete/{id}', 'admin1\postTagController@delete')->name('admin1.posttag.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postTagController@store')->name('api.posttag.store');
        Route::post('update/{id}', 'Api\admin1\postTagController@update')->name('api.posttag.update');
        Route::post('delete/{id}', 'Api\admin1\postTagController@delete')->name('api.posttag.delete');   
        Route::get('detail/{id}', 'Api\admin1\postTagController@show')->name('api.posttag.detail');   
        Route::get('all', 'Api\admin1\postTagController@all')->name('api.posttag.all');
    });  
});



Route::group(['prefix' => 'posts'], function () {
    Route::get('index', 'admin1\postsController@index')->name('admin1.posts.index');
    Route::get('create', 'admin1\postsController@create')->name('admin1.posts.create');
    Route::get('edit/{id}', 'admin1\postsController@edit')->name('admin1.posts.edit');
    Route::get('detail/{id}', 'admin1\postsController@show')->name('admin1.posts.detail');
    Route::post('store', 'admin1\postsController@store')->name('admin1.posts.store');
    Route::post('update/{id}', 'admin1\postsController@update')->name('admin1.posts.update');
    Route::delete('delete/{id}', 'admin1\postsController@delete')->name('admin1.posts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postsController@store')->name('api.posts.store');
        Route::post('update/{id}', 'Api\admin1\postsController@update')->name('api.posts.update');
        Route::post('delete/{id}', 'Api\admin1\postsController@delete')->name('api.posts.delete');   
        Route::get('detail/{id}', 'Api\admin1\postsController@show')->name('api.posts.detail');   
        Route::get('all', 'Api\admin1\postsController@all')->name('api.posts.all');
    });  
});



Route::group(['prefix' => 'tags'], function () {
    Route::get('index', 'admin1\tagsController@index')->name('admin1.tags.index');
    Route::get('create', 'admin1\tagsController@create')->name('admin1.tags.create');
    Route::get('edit/{id}', 'admin1\tagsController@edit')->name('admin1.tags.edit');
    Route::get('detail/{id}', 'admin1\tagsController@show')->name('admin1.tags.detail');
    Route::post('store', 'admin1\tagsController@store')->name('admin1.tags.store');
    Route::post('update/{id}', 'admin1\tagsController@update')->name('admin1.tags.update');
    Route::delete('delete/{id}', 'admin1\tagsController@delete')->name('admin1.tags.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\tagsController@store')->name('api.tags.store');
        Route::post('update/{id}', 'Api\admin1\tagsController@update')->name('api.tags.update');
        Route::post('delete/{id}', 'Api\admin1\tagsController@delete')->name('api.tags.delete');   
        Route::get('detail/{id}', 'Api\admin1\tagsController@show')->name('api.tags.detail');   
        Route::get('all', 'Api\admin1\tagsController@all')->name('api.tags.all');
    });  
});



Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('admin1.users.index');
    Route::get('create', 'admin1\usersController@create')->name('admin1.users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('admin1.users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('admin1.users.detail');
    Route::post('store', 'admin1\usersController@store')->name('admin1.users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('admin1.users.update');
    Route::delete('delete/{id}', 'admin1\usersController@delete')->name('admin1.users.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');   
        Route::get('detail/{id}', 'Api\admin1\usersController@show')->name('api.users.detail');   
        Route::get('all', 'Api\admin1\usersController@all')->name('api.users.all');
    });  
});


/*<SG-autoRoute>*//*<SG-autoRoute>*/


Route::group(['prefix' => 'categories'], function () {
    Route::get('index', 'admin1\categoriesController@index')->name('admin1.categories.index');
    Route::get('create', 'admin1\categoriesController@create')->name('admin1.categories.create');
    Route::get('edit/{id}', 'admin1\categoriesController@edit')->name('admin1.categories.edit');
    Route::get('detail/{id}', 'admin1\categoriesController@show')->name('admin1.categories.detail');
    Route::post('store', 'admin1\categoriesController@store')->name('admin1.categories.store');
    Route::post('update/{id}', 'admin1\categoriesController@update')->name('admin1.categories.update');
    Route::delete('delete/{id}', 'admin1\categoriesController@delete')->name('admin1.categories.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriesController@store')->name('api.categories.store');
        Route::post('update/{id}', 'Api\admin1\categoriesController@update')->name('api.categories.update');
        Route::post('delete/{id}', 'Api\admin1\categoriesController@delete')->name('api.categories.delete');   
        Route::get('detail/{id}', 'Api\admin1\categoriesController@show')->name('api.categories.detail');   
        Route::get('all', 'Api\admin1\categoriesController@all')->name('api.categories.all');
    });  
});



Route::group(['prefix' => 'comments'], function () {
    Route::get('index', 'admin1\commentsController@index')->name('admin1.comments.index');
    Route::get('create', 'admin1\commentsController@create')->name('admin1.comments.create');
    Route::get('edit/{id}', 'admin1\commentsController@edit')->name('admin1.comments.edit');
    Route::get('detail/{id}', 'admin1\commentsController@show')->name('admin1.comments.detail');
    Route::post('store', 'admin1\commentsController@store')->name('admin1.comments.store');
    Route::post('update/{id}', 'admin1\commentsController@update')->name('admin1.comments.update');
    Route::delete('delete/{id}', 'admin1\commentsController@delete')->name('admin1.comments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\commentsController@store')->name('api.comments.store');
        Route::post('update/{id}', 'Api\admin1\commentsController@update')->name('api.comments.update');
        Route::post('delete/{id}', 'Api\admin1\commentsController@delete')->name('api.comments.delete');   
        Route::get('detail/{id}', 'Api\admin1\commentsController@show')->name('api.comments.detail');   
        Route::get('all', 'Api\admin1\commentsController@all')->name('api.comments.all');
    });  
});



Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('admin1.migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('admin1.migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('admin1.migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('admin1.migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('admin1.migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('admin1.migrations.update');
    Route::delete('delete/{id}', 'admin1\migrationsController@delete')->name('admin1.migrations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');   
        Route::get('detail/{id}', 'Api\admin1\migrationsController@show')->name('api.migrations.detail');   
        Route::get('all', 'Api\admin1\migrationsController@all')->name('api.migrations.all');
    });  
});



Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('admin1.passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('admin1.passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('admin1.passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('admin1.passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('admin1.passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('admin1.passwordresets.update');
    Route::delete('delete/{id}', 'admin1\passwordResetsController@delete')->name('admin1.passwordresets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');   
        Route::get('detail/{id}', 'Api\admin1\passwordResetsController@show')->name('api.passwordresets.detail');   
        Route::get('all', 'Api\admin1\passwordResetsController@all')->name('api.passwordresets.all');
    });  
});



Route::group(['prefix' => 'postcategory'], function () {
    Route::get('index', 'admin1\postCategoryController@index')->name('admin1.postcategory.index');
    Route::get('create', 'admin1\postCategoryController@create')->name('admin1.postcategory.create');
    Route::get('edit/{id}', 'admin1\postCategoryController@edit')->name('admin1.postcategory.edit');
    Route::get('detail/{id}', 'admin1\postCategoryController@show')->name('admin1.postcategory.detail');
    Route::post('store', 'admin1\postCategoryController@store')->name('admin1.postcategory.store');
    Route::post('update/{id}', 'admin1\postCategoryController@update')->name('admin1.postcategory.update');
    Route::delete('delete/{id}', 'admin1\postCategoryController@delete')->name('admin1.postcategory.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoryController@store')->name('api.postcategory.store');
        Route::post('update/{id}', 'Api\admin1\postCategoryController@update')->name('api.postcategory.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoryController@delete')->name('api.postcategory.delete');   
        Route::get('detail/{id}', 'Api\admin1\postCategoryController@show')->name('api.postcategory.detail');   
        Route::get('all', 'Api\admin1\postCategoryController@all')->name('api.postcategory.all');
    });  
});



Route::group(['prefix' => 'posttag'], function () {
    Route::get('index', 'admin1\postTagController@index')->name('admin1.posttag.index');
    Route::get('create', 'admin1\postTagController@create')->name('admin1.posttag.create');
    Route::get('edit/{id}', 'admin1\postTagController@edit')->name('admin1.posttag.edit');
    Route::get('detail/{id}', 'admin1\postTagController@show')->name('admin1.posttag.detail');
    Route::post('store', 'admin1\postTagController@store')->name('admin1.posttag.store');
    Route::post('update/{id}', 'admin1\postTagController@update')->name('admin1.posttag.update');
    Route::delete('delete/{id}', 'admin1\postTagController@delete')->name('admin1.posttag.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postTagController@store')->name('api.posttag.store');
        Route::post('update/{id}', 'Api\admin1\postTagController@update')->name('api.posttag.update');
        Route::post('delete/{id}', 'Api\admin1\postTagController@delete')->name('api.posttag.delete');   
        Route::get('detail/{id}', 'Api\admin1\postTagController@show')->name('api.posttag.detail');   
        Route::get('all', 'Api\admin1\postTagController@all')->name('api.posttag.all');
    });  
});



Route::group(['prefix' => 'posts'], function () {
    Route::get('index', 'admin1\postsController@index')->name('admin1.posts.index');
    Route::get('create', 'admin1\postsController@create')->name('admin1.posts.create');
    Route::get('edit/{id}', 'admin1\postsController@edit')->name('admin1.posts.edit');
    Route::get('detail/{id}', 'admin1\postsController@show')->name('admin1.posts.detail');
    Route::post('store', 'admin1\postsController@store')->name('admin1.posts.store');
    Route::post('update/{id}', 'admin1\postsController@update')->name('admin1.posts.update');
    Route::delete('delete/{id}', 'admin1\postsController@delete')->name('admin1.posts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postsController@store')->name('api.posts.store');
        Route::post('update/{id}', 'Api\admin1\postsController@update')->name('api.posts.update');
        Route::post('delete/{id}', 'Api\admin1\postsController@delete')->name('api.posts.delete');   
        Route::get('detail/{id}', 'Api\admin1\postsController@show')->name('api.posts.detail');   
        Route::get('all', 'Api\admin1\postsController@all')->name('api.posts.all');
    });  
});



Route::group(['prefix' => 'tags'], function () {
    Route::get('index', 'admin1\tagsController@index')->name('admin1.tags.index');
    Route::get('create', 'admin1\tagsController@create')->name('admin1.tags.create');
    Route::get('edit/{id}', 'admin1\tagsController@edit')->name('admin1.tags.edit');
    Route::get('detail/{id}', 'admin1\tagsController@show')->name('admin1.tags.detail');
    Route::post('store', 'admin1\tagsController@store')->name('admin1.tags.store');
    Route::post('update/{id}', 'admin1\tagsController@update')->name('admin1.tags.update');
    Route::delete('delete/{id}', 'admin1\tagsController@delete')->name('admin1.tags.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\tagsController@store')->name('api.tags.store');
        Route::post('update/{id}', 'Api\admin1\tagsController@update')->name('api.tags.update');
        Route::post('delete/{id}', 'Api\admin1\tagsController@delete')->name('api.tags.delete');   
        Route::get('detail/{id}', 'Api\admin1\tagsController@show')->name('api.tags.detail');   
        Route::get('all', 'Api\admin1\tagsController@all')->name('api.tags.all');
    });  
});



Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('admin1.users.index');
    Route::get('create', 'admin1\usersController@create')->name('admin1.users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('admin1.users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('admin1.users.detail');
    Route::post('store', 'admin1\usersController@store')->name('admin1.users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('admin1.users.update');
    Route::delete('delete/{id}', 'admin1\usersController@delete')->name('admin1.users.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');   
        Route::get('detail/{id}', 'Api\admin1\usersController@show')->name('api.users.detail');   
        Route::get('all', 'Api\admin1\usersController@all')->name('api.users.all');
    });  
});


/*<SG-autoRoute>*//*<SG-autoRoute>*/


Route::group(['prefix' => 'categories'], function () {
    Route::get('index', 'admin1\categoriesController@index')->name('admin1.categories.index');
    Route::get('create', 'admin1\categoriesController@create')->name('admin1.categories.create');
    Route::get('edit/{id}', 'admin1\categoriesController@edit')->name('admin1.categories.edit');
    Route::get('detail/{id}', 'admin1\categoriesController@show')->name('admin1.categories.detail');
    Route::post('store', 'admin1\categoriesController@store')->name('admin1.categories.store');
    Route::post('update/{id}', 'admin1\categoriesController@update')->name('admin1.categories.update');
    Route::delete('delete/{id}', 'admin1\categoriesController@delete')->name('admin1.categories.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriesController@store')->name('api.categories.store');
        Route::post('update/{id}', 'Api\admin1\categoriesController@update')->name('api.categories.update');
        Route::post('delete/{id}', 'Api\admin1\categoriesController@delete')->name('api.categories.delete');   
        Route::get('detail/{id}', 'Api\admin1\categoriesController@show')->name('api.categories.detail');   
        Route::get('all', 'Api\admin1\categoriesController@all')->name('api.categories.all');
    });  
});



Route::group(['prefix' => 'comments'], function () {
    Route::get('index', 'admin1\commentsController@index')->name('admin1.comments.index');
    Route::get('create', 'admin1\commentsController@create')->name('admin1.comments.create');
    Route::get('edit/{id}', 'admin1\commentsController@edit')->name('admin1.comments.edit');
    Route::get('detail/{id}', 'admin1\commentsController@show')->name('admin1.comments.detail');
    Route::post('store', 'admin1\commentsController@store')->name('admin1.comments.store');
    Route::post('update/{id}', 'admin1\commentsController@update')->name('admin1.comments.update');
    Route::delete('delete/{id}', 'admin1\commentsController@delete')->name('admin1.comments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\commentsController@store')->name('api.comments.store');
        Route::post('update/{id}', 'Api\admin1\commentsController@update')->name('api.comments.update');
        Route::post('delete/{id}', 'Api\admin1\commentsController@delete')->name('api.comments.delete');   
        Route::get('detail/{id}', 'Api\admin1\commentsController@show')->name('api.comments.detail');   
        Route::get('all', 'Api\admin1\commentsController@all')->name('api.comments.all');
    });  
});



Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('admin1.migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('admin1.migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('admin1.migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('admin1.migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('admin1.migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('admin1.migrations.update');
    Route::delete('delete/{id}', 'admin1\migrationsController@delete')->name('admin1.migrations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');   
        Route::get('detail/{id}', 'Api\admin1\migrationsController@show')->name('api.migrations.detail');   
        Route::get('all', 'Api\admin1\migrationsController@all')->name('api.migrations.all');
    });  
});



Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('admin1.passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('admin1.passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('admin1.passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('admin1.passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('admin1.passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('admin1.passwordresets.update');
    Route::delete('delete/{id}', 'admin1\passwordResetsController@delete')->name('admin1.passwordresets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');   
        Route::get('detail/{id}', 'Api\admin1\passwordResetsController@show')->name('api.passwordresets.detail');   
        Route::get('all', 'Api\admin1\passwordResetsController@all')->name('api.passwordresets.all');
    });  
});



Route::group(['prefix' => 'postcategory'], function () {
    Route::get('index', 'admin1\postCategoryController@index')->name('admin1.postcategory.index');
    Route::get('create', 'admin1\postCategoryController@create')->name('admin1.postcategory.create');
    Route::get('edit/{id}', 'admin1\postCategoryController@edit')->name('admin1.postcategory.edit');
    Route::get('detail/{id}', 'admin1\postCategoryController@show')->name('admin1.postcategory.detail');
    Route::post('store', 'admin1\postCategoryController@store')->name('admin1.postcategory.store');
    Route::post('update/{id}', 'admin1\postCategoryController@update')->name('admin1.postcategory.update');
    Route::delete('delete/{id}', 'admin1\postCategoryController@delete')->name('admin1.postcategory.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoryController@store')->name('api.postcategory.store');
        Route::post('update/{id}', 'Api\admin1\postCategoryController@update')->name('api.postcategory.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoryController@delete')->name('api.postcategory.delete');   
        Route::get('detail/{id}', 'Api\admin1\postCategoryController@show')->name('api.postcategory.detail');   
        Route::get('all', 'Api\admin1\postCategoryController@all')->name('api.postcategory.all');
    });  
});



Route::group(['prefix' => 'posttag'], function () {
    Route::get('index', 'admin1\postTagController@index')->name('admin1.posttag.index');
    Route::get('create', 'admin1\postTagController@create')->name('admin1.posttag.create');
    Route::get('edit/{id}', 'admin1\postTagController@edit')->name('admin1.posttag.edit');
    Route::get('detail/{id}', 'admin1\postTagController@show')->name('admin1.posttag.detail');
    Route::post('store', 'admin1\postTagController@store')->name('admin1.posttag.store');
    Route::post('update/{id}', 'admin1\postTagController@update')->name('admin1.posttag.update');
    Route::delete('delete/{id}', 'admin1\postTagController@delete')->name('admin1.posttag.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postTagController@store')->name('api.posttag.store');
        Route::post('update/{id}', 'Api\admin1\postTagController@update')->name('api.posttag.update');
        Route::post('delete/{id}', 'Api\admin1\postTagController@delete')->name('api.posttag.delete');   
        Route::get('detail/{id}', 'Api\admin1\postTagController@show')->name('api.posttag.detail');   
        Route::get('all', 'Api\admin1\postTagController@all')->name('api.posttag.all');
    });  
});



Route::group(['prefix' => 'posts'], function () {
    Route::get('index', 'admin1\postsController@index')->name('admin1.posts.index');
    Route::get('create', 'admin1\postsController@create')->name('admin1.posts.create');
    Route::get('edit/{id}', 'admin1\postsController@edit')->name('admin1.posts.edit');
    Route::get('detail/{id}', 'admin1\postsController@show')->name('admin1.posts.detail');
    Route::post('store', 'admin1\postsController@store')->name('admin1.posts.store');
    Route::post('update/{id}', 'admin1\postsController@update')->name('admin1.posts.update');
    Route::delete('delete/{id}', 'admin1\postsController@delete')->name('admin1.posts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postsController@store')->name('api.posts.store');
        Route::post('update/{id}', 'Api\admin1\postsController@update')->name('api.posts.update');
        Route::post('delete/{id}', 'Api\admin1\postsController@delete')->name('api.posts.delete');   
        Route::get('detail/{id}', 'Api\admin1\postsController@show')->name('api.posts.detail');   
        Route::get('all', 'Api\admin1\postsController@all')->name('api.posts.all');
    });  
});



Route::group(['prefix' => 'tags'], function () {
    Route::get('index', 'admin1\tagsController@index')->name('admin1.tags.index');
    Route::get('create', 'admin1\tagsController@create')->name('admin1.tags.create');
    Route::get('edit/{id}', 'admin1\tagsController@edit')->name('admin1.tags.edit');
    Route::get('detail/{id}', 'admin1\tagsController@show')->name('admin1.tags.detail');
    Route::post('store', 'admin1\tagsController@store')->name('admin1.tags.store');
    Route::post('update/{id}', 'admin1\tagsController@update')->name('admin1.tags.update');
    Route::delete('delete/{id}', 'admin1\tagsController@delete')->name('admin1.tags.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\tagsController@store')->name('api.tags.store');
        Route::post('update/{id}', 'Api\admin1\tagsController@update')->name('api.tags.update');
        Route::post('delete/{id}', 'Api\admin1\tagsController@delete')->name('api.tags.delete');   
        Route::get('detail/{id}', 'Api\admin1\tagsController@show')->name('api.tags.detail');   
        Route::get('all', 'Api\admin1\tagsController@all')->name('api.tags.all');
    });  
});



Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('admin1.users.index');
    Route::get('create', 'admin1\usersController@create')->name('admin1.users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('admin1.users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('admin1.users.detail');
    Route::post('store', 'admin1\usersController@store')->name('admin1.users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('admin1.users.update');
    Route::delete('delete/{id}', 'admin1\usersController@delete')->name('admin1.users.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');   
        Route::get('detail/{id}', 'Api\admin1\usersController@show')->name('api.users.detail');   
        Route::get('all', 'Api\admin1\usersController@all')->name('api.users.all');
    });  
});


/*<SG-autoRoute>*/