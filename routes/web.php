<?php
//Route::get('/', "pruebaController@autoModel");
Route::get('/new', "aController@autonew");
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




Route::group(['prefix' => 'articulos'], function () {
    Route::get('index', 'admin1\articulosController@index')->name('admin1.articulos.index');
    Route::get('create', 'admin1\articulosController@create')->name('admin1.articulos.create');
    Route::get('edit/{id}', 'admin1\articulosController@edit')->name('admin1.articulos.edit');
    Route::get('detail/{id}', 'admin1\articulosController@show')->name('admin1.articulos.detail');
    Route::post('store', 'admin1\articulosController@store')->name('admin1.articulos.store');
    Route::post('update/{id}', 'admin1\articulosController@update')->name('admin1.articulos.update');
    Route::delete('delete/{id}', 'admin1\articulosController@delete')->name('admin1.articulos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\articulosController@store')->name('api.articulos.store');
        Route::post('update/{id}', 'Api\admin1\articulosController@update')->name('api.articulos.update');
        Route::post('delete/{id}', 'Api\admin1\articulosController@delete')->name('api.articulos.delete');   
    });  
});




Route::group(['prefix' => 'categorias'], function () {
    Route::get('index', 'admin1\categoriasController@index')->name('admin1.categorias.index');
    Route::get('create', 'admin1\categoriasController@create')->name('admin1.categorias.create');
    Route::get('edit/{id}', 'admin1\categoriasController@edit')->name('admin1.categorias.edit');
    Route::get('detail/{id}', 'admin1\categoriasController@show')->name('admin1.categorias.detail');
    Route::post('store', 'admin1\categoriasController@store')->name('admin1.categorias.store');
    Route::post('update/{id}', 'admin1\categoriasController@update')->name('admin1.categorias.update');
    Route::delete('delete/{id}', 'admin1\categoriasController@delete')->name('admin1.categorias.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriasController@store')->name('api.categorias.store');
        Route::post('update/{id}', 'Api\admin1\categoriasController@update')->name('api.categorias.update');
        Route::post('delete/{id}', 'Api\admin1\categoriasController@delete')->name('api.categorias.delete');   
    });  
});




Route::group(['prefix' => 'imagenes'], function () {
    Route::get('index', 'admin1\imagenesController@index')->name('admin1.imagenes.index');
    Route::get('create', 'admin1\imagenesController@create')->name('admin1.imagenes.create');
    Route::get('edit/{id}', 'admin1\imagenesController@edit')->name('admin1.imagenes.edit');
    Route::get('detail/{id}', 'admin1\imagenesController@show')->name('admin1.imagenes.detail');
    Route::post('store', 'admin1\imagenesController@store')->name('admin1.imagenes.store');
    Route::post('update/{id}', 'admin1\imagenesController@update')->name('admin1.imagenes.update');
    Route::delete('delete/{id}', 'admin1\imagenesController@delete')->name('admin1.imagenes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\imagenesController@store')->name('api.imagenes.store');
        Route::post('update/{id}', 'Api\admin1\imagenesController@update')->name('api.imagenes.update');
        Route::post('delete/{id}', 'Api\admin1\imagenesController@delete')->name('api.imagenes.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'matches'], function () {
    Route::get('index', 'admin1\matchesController@index')->name('admin1.matches.index');
    Route::get('create', 'admin1\matchesController@create')->name('admin1.matches.create');
    Route::get('edit/{id}', 'admin1\matchesController@edit')->name('admin1.matches.edit');
    Route::get('detail/{id}', 'admin1\matchesController@show')->name('admin1.matches.detail');
    Route::post('store', 'admin1\matchesController@store')->name('admin1.matches.store');
    Route::post('update/{id}', 'admin1\matchesController@update')->name('admin1.matches.update');
    Route::delete('delete/{id}', 'admin1\matchesController@delete')->name('admin1.matches.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\matchesController@store')->name('api.matches.store');
        Route::post('update/{id}', 'Api\admin1\matchesController@update')->name('api.matches.update');
        Route::post('delete/{id}', 'Api\admin1\matchesController@delete')->name('api.matches.delete');   
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
    });  
});




Route::group(['prefix' => 'minas'], function () {
    Route::get('index', 'admin1\minasController@index')->name('admin1.minas.index');
    Route::get('create', 'admin1\minasController@create')->name('admin1.minas.create');
    Route::get('edit/{id}', 'admin1\minasController@edit')->name('admin1.minas.edit');
    Route::get('detail/{id}', 'admin1\minasController@show')->name('admin1.minas.detail');
    Route::post('store', 'admin1\minasController@store')->name('admin1.minas.store');
    Route::post('update/{id}', 'admin1\minasController@update')->name('admin1.minas.update');
    Route::delete('delete/{id}', 'admin1\minasController@delete')->name('admin1.minas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\minasController@store')->name('api.minas.store');
        Route::post('update/{id}', 'Api\admin1\minasController@update')->name('api.minas.update');
        Route::post('delete/{id}', 'Api\admin1\minasController@delete')->name('api.minas.delete');   
    });  
});




Route::group(['prefix' => 'minerales'], function () {
    Route::get('index', 'admin1\mineralesController@index')->name('admin1.minerales.index');
    Route::get('create', 'admin1\mineralesController@create')->name('admin1.minerales.create');
    Route::get('edit/{id}', 'admin1\mineralesController@edit')->name('admin1.minerales.edit');
    Route::get('detail/{id}', 'admin1\mineralesController@show')->name('admin1.minerales.detail');
    Route::post('store', 'admin1\mineralesController@store')->name('admin1.minerales.store');
    Route::post('update/{id}', 'admin1\mineralesController@update')->name('admin1.minerales.update');
    Route::delete('delete/{id}', 'admin1\mineralesController@delete')->name('admin1.minerales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mineralesController@store')->name('api.minerales.store');
        Route::post('update/{id}', 'Api\admin1\mineralesController@update')->name('api.minerales.update');
        Route::post('delete/{id}', 'Api\admin1\mineralesController@delete')->name('api.minerales.delete');   
    });  
});




Route::group(['prefix' => 'paises'], function () {
    Route::get('index', 'admin1\paisesController@index')->name('admin1.paises.index');
    Route::get('create', 'admin1\paisesController@create')->name('admin1.paises.create');
    Route::get('edit/{id}', 'admin1\paisesController@edit')->name('admin1.paises.edit');
    Route::get('detail/{id}', 'admin1\paisesController@show')->name('admin1.paises.detail');
    Route::post('store', 'admin1\paisesController@store')->name('admin1.paises.store');
    Route::post('update/{id}', 'admin1\paisesController@update')->name('admin1.paises.update');
    Route::delete('delete/{id}', 'admin1\paisesController@delete')->name('admin1.paises.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\paisesController@store')->name('api.paises.store');
        Route::post('update/{id}', 'Api\admin1\paisesController@update')->name('api.paises.update');
        Route::post('delete/{id}', 'Api\admin1\paisesController@delete')->name('api.paises.delete');   
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
    });  
});




Route::group(['prefix' => 'problemas'], function () {
    Route::get('index', 'admin1\problemasController@index')->name('admin1.problemas.index');
    Route::get('create', 'admin1\problemasController@create')->name('admin1.problemas.create');
    Route::get('edit/{id}', 'admin1\problemasController@edit')->name('admin1.problemas.edit');
    Route::get('detail/{id}', 'admin1\problemasController@show')->name('admin1.problemas.detail');
    Route::post('store', 'admin1\problemasController@store')->name('admin1.problemas.store');
    Route::post('update/{id}', 'admin1\problemasController@update')->name('admin1.problemas.update');
    Route::delete('delete/{id}', 'admin1\problemasController@delete')->name('admin1.problemas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\problemasController@store')->name('api.problemas.store');
        Route::post('update/{id}', 'Api\admin1\problemasController@update')->name('api.problemas.update');
        Route::post('delete/{id}', 'Api\admin1\problemasController@delete')->name('api.problemas.delete');   
    });  
});




Route::group(['prefix' => 'razones'], function () {
    Route::get('index', 'admin1\razonesController@index')->name('admin1.razones.index');
    Route::get('create', 'admin1\razonesController@create')->name('admin1.razones.create');
    Route::get('edit/{id}', 'admin1\razonesController@edit')->name('admin1.razones.edit');
    Route::get('detail/{id}', 'admin1\razonesController@show')->name('admin1.razones.detail');
    Route::post('store', 'admin1\razonesController@store')->name('admin1.razones.store');
    Route::post('update/{id}', 'admin1\razonesController@update')->name('admin1.razones.update');
    Route::delete('delete/{id}', 'admin1\razonesController@delete')->name('admin1.razones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\razonesController@store')->name('api.razones.store');
        Route::post('update/{id}', 'Api\admin1\razonesController@update')->name('api.razones.update');
        Route::post('delete/{id}', 'Api\admin1\razonesController@delete')->name('api.razones.delete');   
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
    });  
});




Route::group(['prefix' => 'soluciones'], function () {
    Route::get('index', 'admin1\solucionesController@index')->name('admin1.soluciones.index');
    Route::get('create', 'admin1\solucionesController@create')->name('admin1.soluciones.create');
    Route::get('edit/{id}', 'admin1\solucionesController@edit')->name('admin1.soluciones.edit');
    Route::get('detail/{id}', 'admin1\solucionesController@show')->name('admin1.soluciones.detail');
    Route::post('store', 'admin1\solucionesController@store')->name('admin1.soluciones.store');
    Route::post('update/{id}', 'admin1\solucionesController@update')->name('admin1.soluciones.update');
    Route::delete('delete/{id}', 'admin1\solucionesController@delete')->name('admin1.soluciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\solucionesController@store')->name('api.soluciones.store');
        Route::post('update/{id}', 'Api\admin1\solucionesController@update')->name('api.soluciones.update');
        Route::post('delete/{id}', 'Api\admin1\solucionesController@delete')->name('api.soluciones.delete');   
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
    });  
});




Route::group(['prefix' => 'varios'], function () {
    Route::get('index', 'admin1\variosController@index')->name('admin1.varios.index');
    Route::get('create', 'admin1\variosController@create')->name('admin1.varios.create');
    Route::get('edit/{id}', 'admin1\variosController@edit')->name('admin1.varios.edit');
    Route::get('detail/{id}', 'admin1\variosController@show')->name('admin1.varios.detail');
    Route::post('store', 'admin1\variosController@store')->name('admin1.varios.store');
    Route::post('update/{id}', 'admin1\variosController@update')->name('admin1.varios.update');
    Route::delete('delete/{id}', 'admin1\variosController@delete')->name('admin1.varios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\variosController@store')->name('api.varios.store');
        Route::post('update/{id}', 'Api\admin1\variosController@update')->name('api.varios.update');
        Route::post('delete/{id}', 'Api\admin1\variosController@delete')->name('api.varios.delete');   
    });  
});




Route::group(['prefix' => 'articulos'], function () {
    Route::get('index', 'admin1\articulosController@index')->name('admin1.articulos.index');
    Route::get('create', 'admin1\articulosController@create')->name('admin1.articulos.create');
    Route::get('edit/{id}', 'admin1\articulosController@edit')->name('admin1.articulos.edit');
    Route::get('detail/{id}', 'admin1\articulosController@show')->name('admin1.articulos.detail');
    Route::post('store', 'admin1\articulosController@store')->name('admin1.articulos.store');
    Route::post('update/{id}', 'admin1\articulosController@update')->name('admin1.articulos.update');
    Route::delete('delete/{id}', 'admin1\articulosController@delete')->name('admin1.articulos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\articulosController@store')->name('api.articulos.store');
        Route::post('update/{id}', 'Api\admin1\articulosController@update')->name('api.articulos.update');
        Route::post('delete/{id}', 'Api\admin1\articulosController@delete')->name('api.articulos.delete');   
    });  
});




Route::group(['prefix' => 'categorias'], function () {
    Route::get('index', 'admin1\categoriasController@index')->name('admin1.categorias.index');
    Route::get('create', 'admin1\categoriasController@create')->name('admin1.categorias.create');
    Route::get('edit/{id}', 'admin1\categoriasController@edit')->name('admin1.categorias.edit');
    Route::get('detail/{id}', 'admin1\categoriasController@show')->name('admin1.categorias.detail');
    Route::post('store', 'admin1\categoriasController@store')->name('admin1.categorias.store');
    Route::post('update/{id}', 'admin1\categoriasController@update')->name('admin1.categorias.update');
    Route::delete('delete/{id}', 'admin1\categoriasController@delete')->name('admin1.categorias.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\categoriasController@store')->name('api.categorias.store');
        Route::post('update/{id}', 'Api\admin1\categoriasController@update')->name('api.categorias.update');
        Route::post('delete/{id}', 'Api\admin1\categoriasController@delete')->name('api.categorias.delete');   
    });  
});




Route::group(['prefix' => 'imagenes'], function () {
    Route::get('index', 'admin1\imagenesController@index')->name('admin1.imagenes.index');
    Route::get('create', 'admin1\imagenesController@create')->name('admin1.imagenes.create');
    Route::get('edit/{id}', 'admin1\imagenesController@edit')->name('admin1.imagenes.edit');
    Route::get('detail/{id}', 'admin1\imagenesController@show')->name('admin1.imagenes.detail');
    Route::post('store', 'admin1\imagenesController@store')->name('admin1.imagenes.store');
    Route::post('update/{id}', 'admin1\imagenesController@update')->name('admin1.imagenes.update');
    Route::delete('delete/{id}', 'admin1\imagenesController@delete')->name('admin1.imagenes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\imagenesController@store')->name('api.imagenes.store');
        Route::post('update/{id}', 'Api\admin1\imagenesController@update')->name('api.imagenes.update');
        Route::post('delete/{id}', 'Api\admin1\imagenesController@delete')->name('api.imagenes.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'matches'], function () {
    Route::get('index', 'admin1\matchesController@index')->name('admin1.matches.index');
    Route::get('create', 'admin1\matchesController@create')->name('admin1.matches.create');
    Route::get('edit/{id}', 'admin1\matchesController@edit')->name('admin1.matches.edit');
    Route::get('detail/{id}', 'admin1\matchesController@show')->name('admin1.matches.detail');
    Route::post('store', 'admin1\matchesController@store')->name('admin1.matches.store');
    Route::post('update/{id}', 'admin1\matchesController@update')->name('admin1.matches.update');
    Route::delete('delete/{id}', 'admin1\matchesController@delete')->name('admin1.matches.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\matchesController@store')->name('api.matches.store');
        Route::post('update/{id}', 'Api\admin1\matchesController@update')->name('api.matches.update');
        Route::post('delete/{id}', 'Api\admin1\matchesController@delete')->name('api.matches.delete');   
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
    });  
});




Route::group(['prefix' => 'minas'], function () {
    Route::get('index', 'admin1\minasController@index')->name('admin1.minas.index');
    Route::get('create', 'admin1\minasController@create')->name('admin1.minas.create');
    Route::get('edit/{id}', 'admin1\minasController@edit')->name('admin1.minas.edit');
    Route::get('detail/{id}', 'admin1\minasController@show')->name('admin1.minas.detail');
    Route::post('store', 'admin1\minasController@store')->name('admin1.minas.store');
    Route::post('update/{id}', 'admin1\minasController@update')->name('admin1.minas.update');
    Route::delete('delete/{id}', 'admin1\minasController@delete')->name('admin1.minas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\minasController@store')->name('api.minas.store');
        Route::post('update/{id}', 'Api\admin1\minasController@update')->name('api.minas.update');
        Route::post('delete/{id}', 'Api\admin1\minasController@delete')->name('api.minas.delete');   
    });  
});




Route::group(['prefix' => 'minerales'], function () {
    Route::get('index', 'admin1\mineralesController@index')->name('admin1.minerales.index');
    Route::get('create', 'admin1\mineralesController@create')->name('admin1.minerales.create');
    Route::get('edit/{id}', 'admin1\mineralesController@edit')->name('admin1.minerales.edit');
    Route::get('detail/{id}', 'admin1\mineralesController@show')->name('admin1.minerales.detail');
    Route::post('store', 'admin1\mineralesController@store')->name('admin1.minerales.store');
    Route::post('update/{id}', 'admin1\mineralesController@update')->name('admin1.minerales.update');
    Route::delete('delete/{id}', 'admin1\mineralesController@delete')->name('admin1.minerales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mineralesController@store')->name('api.minerales.store');
        Route::post('update/{id}', 'Api\admin1\mineralesController@update')->name('api.minerales.update');
        Route::post('delete/{id}', 'Api\admin1\mineralesController@delete')->name('api.minerales.delete');   
    });  
});




Route::group(['prefix' => 'paises'], function () {
    Route::get('index', 'admin1\paisesController@index')->name('admin1.paises.index');
    Route::get('create', 'admin1\paisesController@create')->name('admin1.paises.create');
    Route::get('edit/{id}', 'admin1\paisesController@edit')->name('admin1.paises.edit');
    Route::get('detail/{id}', 'admin1\paisesController@show')->name('admin1.paises.detail');
    Route::post('store', 'admin1\paisesController@store')->name('admin1.paises.store');
    Route::post('update/{id}', 'admin1\paisesController@update')->name('admin1.paises.update');
    Route::delete('delete/{id}', 'admin1\paisesController@delete')->name('admin1.paises.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\paisesController@store')->name('api.paises.store');
        Route::post('update/{id}', 'Api\admin1\paisesController@update')->name('api.paises.update');
        Route::post('delete/{id}', 'Api\admin1\paisesController@delete')->name('api.paises.delete');   
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
    });  
});




Route::group(['prefix' => 'problemas'], function () {
    Route::get('index', 'admin1\problemasController@index')->name('admin1.problemas.index');
    Route::get('create', 'admin1\problemasController@create')->name('admin1.problemas.create');
    Route::get('edit/{id}', 'admin1\problemasController@edit')->name('admin1.problemas.edit');
    Route::get('detail/{id}', 'admin1\problemasController@show')->name('admin1.problemas.detail');
    Route::post('store', 'admin1\problemasController@store')->name('admin1.problemas.store');
    Route::post('update/{id}', 'admin1\problemasController@update')->name('admin1.problemas.update');
    Route::delete('delete/{id}', 'admin1\problemasController@delete')->name('admin1.problemas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\problemasController@store')->name('api.problemas.store');
        Route::post('update/{id}', 'Api\admin1\problemasController@update')->name('api.problemas.update');
        Route::post('delete/{id}', 'Api\admin1\problemasController@delete')->name('api.problemas.delete');   
    });  
});




Route::group(['prefix' => 'razones'], function () {
    Route::get('index', 'admin1\razonesController@index')->name('admin1.razones.index');
    Route::get('create', 'admin1\razonesController@create')->name('admin1.razones.create');
    Route::get('edit/{id}', 'admin1\razonesController@edit')->name('admin1.razones.edit');
    Route::get('detail/{id}', 'admin1\razonesController@show')->name('admin1.razones.detail');
    Route::post('store', 'admin1\razonesController@store')->name('admin1.razones.store');
    Route::post('update/{id}', 'admin1\razonesController@update')->name('admin1.razones.update');
    Route::delete('delete/{id}', 'admin1\razonesController@delete')->name('admin1.razones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\razonesController@store')->name('api.razones.store');
        Route::post('update/{id}', 'Api\admin1\razonesController@update')->name('api.razones.update');
        Route::post('delete/{id}', 'Api\admin1\razonesController@delete')->name('api.razones.delete');   
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
    });  
});




Route::group(['prefix' => 'soluciones'], function () {
    Route::get('index', 'admin1\solucionesController@index')->name('admin1.soluciones.index');
    Route::get('create', 'admin1\solucionesController@create')->name('admin1.soluciones.create');
    Route::get('edit/{id}', 'admin1\solucionesController@edit')->name('admin1.soluciones.edit');
    Route::get('detail/{id}', 'admin1\solucionesController@show')->name('admin1.soluciones.detail');
    Route::post('store', 'admin1\solucionesController@store')->name('admin1.soluciones.store');
    Route::post('update/{id}', 'admin1\solucionesController@update')->name('admin1.soluciones.update');
    Route::delete('delete/{id}', 'admin1\solucionesController@delete')->name('admin1.soluciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\solucionesController@store')->name('api.soluciones.store');
        Route::post('update/{id}', 'Api\admin1\solucionesController@update')->name('api.soluciones.update');
        Route::post('delete/{id}', 'Api\admin1\solucionesController@delete')->name('api.soluciones.delete');   
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
    });  
});




Route::group(['prefix' => 'varios'], function () {
    Route::get('index', 'admin1\variosController@index')->name('admin1.varios.index');
    Route::get('create', 'admin1\variosController@create')->name('admin1.varios.create');
    Route::get('edit/{id}', 'admin1\variosController@edit')->name('admin1.varios.edit');
    Route::get('detail/{id}', 'admin1\variosController@show')->name('admin1.varios.detail');
    Route::post('store', 'admin1\variosController@store')->name('admin1.varios.store');
    Route::post('update/{id}', 'admin1\variosController@update')->name('admin1.varios.update');
    Route::delete('delete/{id}', 'admin1\variosController@delete')->name('admin1.varios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\variosController@store')->name('api.varios.store');
        Route::post('update/{id}', 'Api\admin1\variosController@update')->name('api.varios.update');
        Route::post('delete/{id}', 'Api\admin1\variosController@delete')->name('api.varios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('admin1.analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('admin1.analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('admin1.analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('admin1.analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('admin1.analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('admin1.analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('admin1.analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('admin1.analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('admin1.analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('admin1.analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('admin1.analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('admin1.analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('admin1.analisisaplicacionespromedios.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('admin1.analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('admin1.analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('admin1.analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('admin1.analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('admin1.analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('admin1.analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('admin1.analisisaplicacionespromediosmensuales.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('admin1.analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('admin1.applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('admin1.applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('admin1.applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('admin1.applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('admin1.applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('admin1.applicationuser.update');
    Route::delete('delete/{id}', 'admin1\applicationUserController@delete')->name('admin1.applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('admin1.applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('admin1.applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('admin1.applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('admin1.applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('admin1.applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('admin1.applications.update');
    Route::delete('delete/{id}', 'admin1\applicationsController@delete')->name('admin1.applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'autotestdetalles'], function () {
    Route::get('index', 'admin1\autoTestDetallesController@index')->name('admin1.autotestdetalles.index');
    Route::get('create', 'admin1\autoTestDetallesController@create')->name('admin1.autotestdetalles.create');
    Route::get('edit/{id}', 'admin1\autoTestDetallesController@edit')->name('admin1.autotestdetalles.edit');
    Route::get('detail/{id}', 'admin1\autoTestDetallesController@show')->name('admin1.autotestdetalles.detail');
    Route::post('store', 'admin1\autoTestDetallesController@store')->name('admin1.autotestdetalles.store');
    Route::post('update/{id}', 'admin1\autoTestDetallesController@update')->name('admin1.autotestdetalles.update');
    Route::delete('delete/{id}', 'admin1\autoTestDetallesController@delete')->name('admin1.autotestdetalles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestDetallesController@store')->name('api.autotestdetalles.store');
        Route::post('update/{id}', 'Api\admin1\autoTestDetallesController@update')->name('api.autotestdetalles.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestDetallesController@delete')->name('api.autotestdetalles.delete');   
    });  
});




Route::group(['prefix' => 'autotestrepos'], function () {
    Route::get('index', 'admin1\autoTestReposController@index')->name('admin1.autotestrepos.index');
    Route::get('create', 'admin1\autoTestReposController@create')->name('admin1.autotestrepos.create');
    Route::get('edit/{id}', 'admin1\autoTestReposController@edit')->name('admin1.autotestrepos.edit');
    Route::get('detail/{id}', 'admin1\autoTestReposController@show')->name('admin1.autotestrepos.detail');
    Route::post('store', 'admin1\autoTestReposController@store')->name('admin1.autotestrepos.store');
    Route::post('update/{id}', 'admin1\autoTestReposController@update')->name('admin1.autotestrepos.update');
    Route::delete('delete/{id}', 'admin1\autoTestReposController@delete')->name('admin1.autotestrepos.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestReposController@store')->name('api.autotestrepos.store');
        Route::post('update/{id}', 'Api\admin1\autoTestReposController@update')->name('api.autotestrepos.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestReposController@delete')->name('api.autotestrepos.delete');   
    });  
});




Route::group(['prefix' => 'autotests'], function () {
    Route::get('index', 'admin1\autoTestsController@index')->name('admin1.autotests.index');
    Route::get('create', 'admin1\autoTestsController@create')->name('admin1.autotests.create');
    Route::get('edit/{id}', 'admin1\autoTestsController@edit')->name('admin1.autotests.edit');
    Route::get('detail/{id}', 'admin1\autoTestsController@show')->name('admin1.autotests.detail');
    Route::post('store', 'admin1\autoTestsController@store')->name('admin1.autotests.store');
    Route::post('update/{id}', 'admin1\autoTestsController@update')->name('admin1.autotests.update');
    Route::delete('delete/{id}', 'admin1\autoTestsController@delete')->name('admin1.autotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\autoTestsController@store')->name('api.autotests.store');
        Route::post('update/{id}', 'Api\admin1\autoTestsController@update')->name('api.autotests.update');
        Route::post('delete/{id}', 'Api\admin1\autoTestsController@delete')->name('api.autotests.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('admin1.awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('admin1.awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('admin1.awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('admin1.awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('admin1.awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('admin1.awsaccounts.update');
    Route::delete('delete/{id}', 'admin1\awsAccountsController@delete')->name('admin1.awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('admin1.backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('admin1.backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('admin1.backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('admin1.backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('admin1.backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('admin1.backupapplications.update');
    Route::delete('delete/{id}', 'admin1\backupApplicationsController@delete')->name('admin1.backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('admin1.backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('admin1.backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('admin1.backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('admin1.backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('admin1.backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('admin1.backupdetailapplications.update');
    Route::delete('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('admin1.backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('admin1.backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('admin1.backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('admin1.backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('admin1.backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('admin1.backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('admin1.backupdetails.update');
    Route::delete('delete/{id}', 'admin1\backupDetailsController@delete')->name('admin1.backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('admin1.backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('admin1.backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('admin1.backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('admin1.backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('admin1.backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('admin1.backupreportepoliticas.update');
    Route::delete('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('admin1.backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('admin1.backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('admin1.backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('admin1.backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('admin1.backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('admin1.backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('admin1.backups.update');
    Route::delete('delete/{id}', 'admin1\backupsController@delete')->name('admin1.backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'cloudwatchlogdir'], function () {
    Route::get('index', 'admin1\cloudwatchlogdirController@index')->name('admin1.cloudwatchlogdir.index');
    Route::get('create', 'admin1\cloudwatchlogdirController@create')->name('admin1.cloudwatchlogdir.create');
    Route::get('edit/{id}', 'admin1\cloudwatchlogdirController@edit')->name('admin1.cloudwatchlogdir.edit');
    Route::get('detail/{id}', 'admin1\cloudwatchlogdirController@show')->name('admin1.cloudwatchlogdir.detail');
    Route::post('store', 'admin1\cloudwatchlogdirController@store')->name('admin1.cloudwatchlogdir.store');
    Route::post('update/{id}', 'admin1\cloudwatchlogdirController@update')->name('admin1.cloudwatchlogdir.update');
    Route::delete('delete/{id}', 'admin1\cloudwatchlogdirController@delete')->name('admin1.cloudwatchlogdir.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\cloudwatchlogdirController@store')->name('api.cloudwatchlogdir.store');
        Route::post('update/{id}', 'Api\admin1\cloudwatchlogdirController@update')->name('api.cloudwatchlogdir.update');
        Route::post('delete/{id}', 'Api\admin1\cloudwatchlogdirController@delete')->name('api.cloudwatchlogdir.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('admin1.deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('admin1.deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('admin1.deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('admin1.deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('admin1.deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('admin1.deploymentinformations.update');
    Route::delete('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('admin1.deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('admin1.deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('admin1.deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('admin1.deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('admin1.deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('admin1.deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('admin1.deploymentinstancesummaries.update');
    Route::delete('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('admin1.deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('admin1.deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('admin1.deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('admin1.deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('admin1.deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('admin1.deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('admin1.deploymentlifecycleevents.update');
    Route::delete('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('admin1.deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('admin1.environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('admin1.environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('admin1.environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('admin1.environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('admin1.environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('admin1.environments.update');
    Route::delete('delete/{id}', 'admin1\environmentsController@delete')->name('admin1.environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('admin1.fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('admin1.fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('admin1.fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('admin1.fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('admin1.fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('admin1.fileconfigcatalogticket.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('admin1.fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('admin1.fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('admin1.fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('admin1.fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('admin1.fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('admin1.fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('admin1.fileconfigcatalogs.update');
    Route::delete('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('admin1.fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmailbds'], function () {
    Route::get('index', 'admin1\globalNotificationMailBdsController@index')->name('admin1.globalnotificationmailbds.index');
    Route::get('create', 'admin1\globalNotificationMailBdsController@create')->name('admin1.globalnotificationmailbds.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailBdsController@edit')->name('admin1.globalnotificationmailbds.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailBdsController@show')->name('admin1.globalnotificationmailbds.detail');
    Route::post('store', 'admin1\globalNotificationMailBdsController@store')->name('admin1.globalnotificationmailbds.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailBdsController@update')->name('admin1.globalnotificationmailbds.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailBdsController@delete')->name('admin1.globalnotificationmailbds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailBdsController@store')->name('api.globalnotificationmailbds.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailBdsController@update')->name('api.globalnotificationmailbds.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailBdsController@delete')->name('api.globalnotificationmailbds.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('admin1.globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('admin1.globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('admin1.globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('admin1.globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('admin1.globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('admin1.globalnotificationmails.update');
    Route::delete('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('admin1.globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('admin1.instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('admin1.instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('admin1.instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('admin1.instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('admin1.instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('admin1.instances.update');
    Route::delete('delete/{id}', 'admin1\instancesController@delete')->name('admin1.instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('admin1.jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('admin1.jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('admin1.jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('admin1.jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('admin1.jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('admin1.jenkinsbuilds.update');
    Route::delete('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('admin1.jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('admin1.jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('admin1.jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('admin1.jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('admin1.jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('admin1.jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('admin1.jobs.update');
    Route::delete('delete/{id}', 'admin1\jobsController@delete')->name('admin1.jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('admin1.mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('admin1.mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('admin1.mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('admin1.mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('admin1.mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('admin1.mailinglistticket.update');
    Route::delete('delete/{id}', 'admin1\mailingListTicketController@delete')->name('admin1.mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('admin1.mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('admin1.mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('admin1.mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('admin1.mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('admin1.mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('admin1.mailinglists.update');
    Route::delete('delete/{id}', 'admin1\mailingListsController@delete')->name('admin1.mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('admin1.mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('admin1.mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('admin1.mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('admin1.mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('admin1.mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('admin1.mails.update');
    Route::delete('delete/{id}', 'admin1\mailsController@delete')->name('admin1.mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
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
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('admin1.qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('admin1.qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('admin1.qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('admin1.qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('admin1.qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('admin1.qualitytests.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsController@delete')->name('admin1.qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('admin1.qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('admin1.qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('admin1.qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('admin1.qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('admin1.qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('admin1.qualitytestsnodes.update');
    Route::delete('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('admin1.qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('admin1.reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('admin1.reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('admin1.reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('admin1.reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('admin1.reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('admin1.reportemails.update');
    Route::delete('delete/{id}', 'admin1\reportEmailsController@delete')->name('admin1.reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('admin1.retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('admin1.retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('admin1.retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('admin1.retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('admin1.retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('admin1.retentions.update');
    Route::delete('delete/{id}', 'admin1\retentionsController@delete')->name('admin1.retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
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
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('admin1.schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('admin1.schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('admin1.schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('admin1.schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('admin1.schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('admin1.schedulebackupapplications.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('admin1.schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('admin1.schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('admin1.schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('admin1.schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('admin1.schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('admin1.schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('admin1.schedulebackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('admin1.schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('admin1.schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('admin1.schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('admin1.schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('admin1.schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('admin1.schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('admin1.schedulebackupfolders.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('admin1.schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('admin1.schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('admin1.schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('admin1.schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('admin1.schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('admin1.schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('admin1.schedulebackups.update');
    Route::delete('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('admin1.schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('admin1.slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('admin1.slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('admin1.slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('admin1.slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('admin1.slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('admin1.slackchannels.update');
    Route::delete('delete/{id}', 'admin1\slackChannelsController@delete')->name('admin1.slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('admin1.sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('admin1.sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('admin1.sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('admin1.sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('admin1.sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('admin1.sqldatabases.update');
    Route::delete('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('admin1.sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('admin1.stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('admin1.stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('admin1.stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('admin1.stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('admin1.stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('admin1.stresstests.update');
    Route::delete('delete/{id}', 'admin1\stressTestsController@delete')->name('admin1.stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketautotests'], function () {
    Route::get('index', 'admin1\ticketAutoTestsController@index')->name('admin1.ticketautotests.index');
    Route::get('create', 'admin1\ticketAutoTestsController@create')->name('admin1.ticketautotests.create');
    Route::get('edit/{id}', 'admin1\ticketAutoTestsController@edit')->name('admin1.ticketautotests.edit');
    Route::get('detail/{id}', 'admin1\ticketAutoTestsController@show')->name('admin1.ticketautotests.detail');
    Route::post('store', 'admin1\ticketAutoTestsController@store')->name('admin1.ticketautotests.store');
    Route::post('update/{id}', 'admin1\ticketAutoTestsController@update')->name('admin1.ticketautotests.update');
    Route::delete('delete/{id}', 'admin1\ticketAutoTestsController@delete')->name('admin1.ticketautotests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketAutoTestsController@store')->name('api.ticketautotests.store');
        Route::post('update/{id}', 'Api\admin1\ticketAutoTestsController@update')->name('api.ticketautotests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketAutoTestsController@delete')->name('api.ticketautotests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('admin1.ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('admin1.ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('admin1.ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('admin1.ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('admin1.ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('admin1.ticketbackupdatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('admin1.ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('admin1.ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('admin1.ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('admin1.ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('admin1.ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('admin1.ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('admin1.ticketdetails.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsController@delete')->name('admin1.ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('admin1.ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('admin1.ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('admin1.ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('admin1.ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('admin1.ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('admin1.ticketdetailstests.update');
    Route::delete('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('admin1.ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('admin1.ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('admin1.ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('admin1.ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('admin1.ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('admin1.ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('admin1.ticketrestoredatabases.update');
    Route::delete('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('admin1.ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('admin1.ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('admin1.ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('admin1.ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('admin1.ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('admin1.ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('admin1.ticketsqlfiles.update');
    Route::delete('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('admin1.ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('admin1.ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('admin1.ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('admin1.ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('admin1.ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('admin1.ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('admin1.ticketstatistics.update');
    Route::delete('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('admin1.ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('admin1.tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('admin1.tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('admin1.tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('admin1.tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('admin1.tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('admin1.tickets.update');
    Route::delete('delete/{id}', 'admin1\ticketsController@delete')->name('admin1.tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
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
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('admin1.workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('admin1.workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('admin1.workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('admin1.workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('admin1.workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('admin1.workflows.update');
    Route::delete('delete/{id}', 'admin1\workflowsController@delete')->name('admin1.workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});

