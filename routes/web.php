<?php
//Route::get('/', "PageController@index");

// Authentication Routes...
//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name("login");
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset/', 'Auth\ResetPasswordController@reset');
Route::get('password/comment', 'Auth\ResetPasswordController@comment');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('/', 'GuestController@index');

Route::get('/pruebasyn', "aController@pruebasyn");

Route::group(['middleware' => ['role:admin|developer', 'auth']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin');
});

Route::group(['middleware' => ['role:developer', 'auth']], function () {
    Route::get('/1crearjson', "aController@crearJsonIni");
    Route::get('/2generar', "aController@crearDesdeElJson");
    Route::get('/rollback', "aController@rollback");
});
Route::group(['middleware' => ['role:user|admin|developer', 'auth']], function () {
    Route::get('/home', 'UserController@index')->name('home');



});
Route::get('/pruebadepost', "aController@pruebademodelo");


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



Route::group(['prefix' => 'permissionrole'], function () {
    Route::get('index', 'admin1\permissionRoleController@index')->name('admin1.permissionrole.index');
    Route::get('create', 'admin1\permissionRoleController@create')->name('admin1.permissionrole.create');
    Route::get('edit/{id}', 'admin1\permissionRoleController@edit')->name('admin1.permissionrole.edit');
    Route::get('detail/{id}', 'admin1\permissionRoleController@show')->name('admin1.permissionrole.detail');
    Route::post('store', 'admin1\permissionRoleController@store')->name('admin1.permissionrole.store');
    Route::post('update/{id}', 'admin1\permissionRoleController@update')->name('admin1.permissionrole.update');
    Route::delete('delete/{id}', 'admin1\permissionRoleController@delete')->name('admin1.permissionrole.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\permissionRoleController@store')->name('api.permissionrole.store');
        Route::post('update/{id}', 'Api\admin1\permissionRoleController@update')->name('api.permissionrole.update');
        Route::post('delete/{id}', 'Api\admin1\permissionRoleController@delete')->name('api.permissionrole.delete');   
        Route::get('detail/{id}', 'Api\admin1\permissionRoleController@show')->name('api.permissionrole.detail');   
        Route::get('all', 'Api\admin1\permissionRoleController@all')->name('api.permissionrole.all');
    });  
});



Route::group(['prefix' => 'permissions'], function () {
    Route::get('index', 'admin1\permissionsController@index')->name('admin1.permissions.index');
    Route::get('create', 'admin1\permissionsController@create')->name('admin1.permissions.create');
    Route::get('edit/{id}', 'admin1\permissionsController@edit')->name('admin1.permissions.edit');
    Route::get('detail/{id}', 'admin1\permissionsController@show')->name('admin1.permissions.detail');
    Route::post('store', 'admin1\permissionsController@store')->name('admin1.permissions.store');
    Route::post('update/{id}', 'admin1\permissionsController@update')->name('admin1.permissions.update');
    Route::delete('delete/{id}', 'admin1\permissionsController@delete')->name('admin1.permissions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\permissionsController@store')->name('api.permissions.store');
        Route::post('update/{id}', 'Api\admin1\permissionsController@update')->name('api.permissions.update');
        Route::post('delete/{id}', 'Api\admin1\permissionsController@delete')->name('api.permissions.delete');   
        Route::get('detail/{id}', 'Api\admin1\permissionsController@show')->name('api.permissions.detail');   
        Route::get('all', 'Api\admin1\permissionsController@all')->name('api.permissions.all');
    });  
});



Route::group(['prefix' => 'phones'], function () {
    Route::get('index', 'admin1\phonesController@index')->name('admin1.phones.index');
    Route::get('create', 'admin1\phonesController@create')->name('admin1.phones.create');
    Route::get('edit/{id}', 'admin1\phonesController@edit')->name('admin1.phones.edit');
    Route::get('detail/{id}', 'admin1\phonesController@show')->name('admin1.phones.detail');
    Route::post('store', 'admin1\phonesController@store')->name('admin1.phones.store');
    Route::post('update/{id}', 'admin1\phonesController@update')->name('admin1.phones.update');
    Route::delete('delete/{id}', 'admin1\phonesController@delete')->name('admin1.phones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\phonesController@store')->name('api.phones.store');
        Route::post('update/{id}', 'Api\admin1\phonesController@update')->name('api.phones.update');
        Route::post('delete/{id}', 'Api\admin1\phonesController@delete')->name('api.phones.delete');   
        Route::get('detail/{id}', 'Api\admin1\phonesController@show')->name('api.phones.detail');   
        Route::get('all', 'Api\admin1\phonesController@all')->name('api.phones.all');
    });  
});



Route::group(['prefix' => 'postcategories'], function () {
    Route::get('index', 'admin1\postCategoriesController@index')->name('admin1.postcategories.index');
    Route::get('create', 'admin1\postCategoriesController@create')->name('admin1.postcategories.create');
    Route::get('edit/{id}', 'admin1\postCategoriesController@edit')->name('admin1.postcategories.edit');
    Route::get('detail/{id}', 'admin1\postCategoriesController@show')->name('admin1.postcategories.detail');
    Route::post('store', 'admin1\postCategoriesController@store')->name('admin1.postcategories.store');
    Route::post('update/{id}', 'admin1\postCategoriesController@update')->name('admin1.postcategories.update');
    Route::delete('delete/{id}', 'admin1\postCategoriesController@delete')->name('admin1.postcategories.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\postCategoriesController@store')->name('api.postcategories.store');
        Route::post('update/{id}', 'Api\admin1\postCategoriesController@update')->name('api.postcategories.update');
        Route::post('delete/{id}', 'Api\admin1\postCategoriesController@delete')->name('api.postcategories.delete');   
        Route::get('detail/{id}', 'Api\admin1\postCategoriesController@show')->name('api.postcategories.detail');   
        Route::get('all', 'Api\admin1\postCategoriesController@all')->name('api.postcategories.all');
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



Route::group(['prefix' => 'roleuser'], function () {
    Route::get('index', 'admin1\roleUserController@index')->name('admin1.roleuser.index');
    Route::get('create', 'admin1\roleUserController@create')->name('admin1.roleuser.create');
    Route::get('edit/{id}', 'admin1\roleUserController@edit')->name('admin1.roleuser.edit');
    Route::get('detail/{id}', 'admin1\roleUserController@show')->name('admin1.roleuser.detail');
    Route::post('store', 'admin1\roleUserController@store')->name('admin1.roleuser.store');
    Route::post('update/{id}', 'admin1\roleUserController@update')->name('admin1.roleuser.update');
    Route::delete('delete/{id}', 'admin1\roleUserController@delete')->name('admin1.roleuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\roleUserController@store')->name('api.roleuser.store');
        Route::post('update/{id}', 'Api\admin1\roleUserController@update')->name('api.roleuser.update');
        Route::post('delete/{id}', 'Api\admin1\roleUserController@delete')->name('api.roleuser.delete');   
        Route::get('detail/{id}', 'Api\admin1\roleUserController@show')->name('api.roleuser.detail');   
        Route::get('all', 'Api\admin1\roleUserController@all')->name('api.roleuser.all');
    });  
});



Route::group(['prefix' => 'roles'], function () {
    Route::get('index', 'admin1\rolesController@index')->name('admin1.roles.index');
    Route::get('create', 'admin1\rolesController@create')->name('admin1.roles.create');
    Route::get('edit/{id}', 'admin1\rolesController@edit')->name('admin1.roles.edit');
    Route::get('detail/{id}', 'admin1\rolesController@show')->name('admin1.roles.detail');
    Route::post('store', 'admin1\rolesController@store')->name('admin1.roles.store');
    Route::post('update/{id}', 'admin1\rolesController@update')->name('admin1.roles.update');
    Route::delete('delete/{id}', 'admin1\rolesController@delete')->name('admin1.roles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\rolesController@store')->name('api.roles.store');
        Route::post('update/{id}', 'Api\admin1\rolesController@update')->name('api.roles.update');
        Route::post('delete/{id}', 'Api\admin1\rolesController@delete')->name('api.roles.delete');   
        Route::get('detail/{id}', 'Api\admin1\rolesController@show')->name('api.roles.detail');   
        Route::get('all', 'Api\admin1\rolesController@all')->name('api.roles.all');
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