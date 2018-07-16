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





Route::group(['prefix' => 'analisisaplicaciones'], function () {
    Route::get('index', 'admin1\analisisAplicacionesController@index')->name('analisisaplicaciones.index');
    Route::get('create', 'admin1\analisisAplicacionesController@create')->name('analisisaplicaciones.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesController@edit')->name('analisisaplicaciones.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesController@show')->name('analisisaplicaciones.detail');
    Route::post('store', 'admin1\analisisAplicacionesController@store')->name('analisisaplicaciones.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesController@update')->name('analisisaplicaciones.update');
    Route::delete('delete/{id}', 'admin1\analisisAplicacionesController@delete')->name('analisisaplicaciones.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesController@store')->name('api.analisisaplicaciones.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesController@update')->name('api.analisisaplicaciones.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesController@delete')->name('api.analisisaplicaciones.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromedios'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosController@index')->name('analisisaplicacionespromedios.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosController@create')->name('analisisaplicacionespromedios.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosController@edit')->name('analisisaplicacionespromedios.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosController@show')->name('analisisaplicacionespromedios.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosController@store')->name('analisisaplicacionespromedios.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosController@update')->name('analisisaplicacionespromedios.update');
    Route::get('delete/{id}', 'admin1\analisisAplicacionesPromediosController@delete')->name('analisisaplicacionespromedios.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosController@store')->name('api.analisisaplicacionespromedios.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosController@update')->name('api.analisisaplicacionespromedios.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosController@delete')->name('api.analisisaplicacionespromedios.delete');   
    });  
});




Route::group(['prefix' => 'analisisaplicacionespromediosmensuales'], function () {
    Route::get('index', 'admin1\analisisAplicacionesPromediosMensualesController@index')->name('analisisaplicacionespromediosmensuales.index');
    Route::get('create', 'admin1\analisisAplicacionesPromediosMensualesController@create')->name('analisisaplicacionespromediosmensuales.create');
    Route::get('edit/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@edit')->name('analisisaplicacionespromediosmensuales.edit');
    Route::get('detail/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@show')->name('analisisaplicacionespromediosmensuales.detail');
    Route::post('store', 'admin1\analisisAplicacionesPromediosMensualesController@store')->name('analisisaplicacionespromediosmensuales.store');
    Route::post('update/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@update')->name('analisisaplicacionespromediosmensuales.update');
    Route::get('delete/{id}', 'admin1\analisisAplicacionesPromediosMensualesController@delete')->name('analisisaplicacionespromediosmensuales.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\analisisAplicacionesPromediosMensualesController@store')->name('api.analisisaplicacionespromediosmensuales.store');
        Route::post('update/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@update')->name('api.analisisaplicacionespromediosmensuales.update');
        Route::post('delete/{id}', 'Api\admin1\analisisAplicacionesPromediosMensualesController@delete')->name('api.analisisaplicacionespromediosmensuales.delete');   
    });  
});




Route::group(['prefix' => 'applicationuser'], function () {
    Route::get('index', 'admin1\applicationUserController@index')->name('applicationuser.index');
    Route::get('create', 'admin1\applicationUserController@create')->name('applicationuser.create');
    Route::get('edit/{id}', 'admin1\applicationUserController@edit')->name('applicationuser.edit');
    Route::get('detail/{id}', 'admin1\applicationUserController@show')->name('applicationuser.detail');
    Route::post('store', 'admin1\applicationUserController@store')->name('applicationuser.store');
    Route::post('update/{id}', 'admin1\applicationUserController@update')->name('applicationuser.update');
    Route::get('delete/{id}', 'admin1\applicationUserController@delete')->name('applicationuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationUserController@store')->name('api.applicationuser.store');
        Route::post('update/{id}', 'Api\admin1\applicationUserController@update')->name('api.applicationuser.update');
        Route::post('delete/{id}', 'Api\admin1\applicationUserController@delete')->name('api.applicationuser.delete');   
    });  
});




Route::group(['prefix' => 'applications'], function () {
    Route::get('index', 'admin1\applicationsController@index')->name('applications.index');
    Route::get('create', 'admin1\applicationsController@create')->name('applications.create');
    Route::get('edit/{id}', 'admin1\applicationsController@edit')->name('applications.edit');
    Route::get('detail/{id}', 'admin1\applicationsController@show')->name('applications.detail');
    Route::post('store', 'admin1\applicationsController@store')->name('applications.store');
    Route::post('update/{id}', 'admin1\applicationsController@update')->name('applications.update');
    Route::get('delete/{id}', 'admin1\applicationsController@delete')->name('applications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\applicationsController@store')->name('api.applications.store');
        Route::post('update/{id}', 'Api\admin1\applicationsController@update')->name('api.applications.update');
        Route::post('delete/{id}', 'Api\admin1\applicationsController@delete')->name('api.applications.delete');   
    });  
});




Route::group(['prefix' => 'awsaccounts'], function () {
    Route::get('index', 'admin1\awsAccountsController@index')->name('awsaccounts.index');
    Route::get('create', 'admin1\awsAccountsController@create')->name('awsaccounts.create');
    Route::get('edit/{id}', 'admin1\awsAccountsController@edit')->name('awsaccounts.edit');
    Route::get('detail/{id}', 'admin1\awsAccountsController@show')->name('awsaccounts.detail');
    Route::post('store', 'admin1\awsAccountsController@store')->name('awsaccounts.store');
    Route::post('update/{id}', 'admin1\awsAccountsController@update')->name('awsaccounts.update');
    Route::get('delete/{id}', 'admin1\awsAccountsController@delete')->name('awsaccounts.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\awsAccountsController@store')->name('api.awsaccounts.store');
        Route::post('update/{id}', 'Api\admin1\awsAccountsController@update')->name('api.awsaccounts.update');
        Route::post('delete/{id}', 'Api\admin1\awsAccountsController@delete')->name('api.awsaccounts.delete');   
    });  
});




Route::group(['prefix' => 'backupapplications'], function () {
    Route::get('index', 'admin1\backupApplicationsController@index')->name('backupapplications.index');
    Route::get('create', 'admin1\backupApplicationsController@create')->name('backupapplications.create');
    Route::get('edit/{id}', 'admin1\backupApplicationsController@edit')->name('backupapplications.edit');
    Route::get('detail/{id}', 'admin1\backupApplicationsController@show')->name('backupapplications.detail');
    Route::post('store', 'admin1\backupApplicationsController@store')->name('backupapplications.store');
    Route::post('update/{id}', 'admin1\backupApplicationsController@update')->name('backupapplications.update');
    Route::get('delete/{id}', 'admin1\backupApplicationsController@delete')->name('backupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupApplicationsController@store')->name('api.backupapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupApplicationsController@update')->name('api.backupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupApplicationsController@delete')->name('api.backupapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetailapplications'], function () {
    Route::get('index', 'admin1\backupDetailApplicationsController@index')->name('backupdetailapplications.index');
    Route::get('create', 'admin1\backupDetailApplicationsController@create')->name('backupdetailapplications.create');
    Route::get('edit/{id}', 'admin1\backupDetailApplicationsController@edit')->name('backupdetailapplications.edit');
    Route::get('detail/{id}', 'admin1\backupDetailApplicationsController@show')->name('backupdetailapplications.detail');
    Route::post('store', 'admin1\backupDetailApplicationsController@store')->name('backupdetailapplications.store');
    Route::post('update/{id}', 'admin1\backupDetailApplicationsController@update')->name('backupdetailapplications.update');
    Route::get('delete/{id}', 'admin1\backupDetailApplicationsController@delete')->name('backupdetailapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailApplicationsController@store')->name('api.backupdetailapplications.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailApplicationsController@update')->name('api.backupdetailapplications.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailApplicationsController@delete')->name('api.backupdetailapplications.delete');   
    });  
});




Route::group(['prefix' => 'backupdetails'], function () {
    Route::get('index', 'admin1\backupDetailsController@index')->name('backupdetails.index');
    Route::get('create', 'admin1\backupDetailsController@create')->name('backupdetails.create');
    Route::get('edit/{id}', 'admin1\backupDetailsController@edit')->name('backupdetails.edit');
    Route::get('detail/{id}', 'admin1\backupDetailsController@show')->name('backupdetails.detail');
    Route::post('store', 'admin1\backupDetailsController@store')->name('backupdetails.store');
    Route::post('update/{id}', 'admin1\backupDetailsController@update')->name('backupdetails.update');
    Route::get('delete/{id}', 'admin1\backupDetailsController@delete')->name('backupdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupDetailsController@store')->name('api.backupdetails.store');
        Route::post('update/{id}', 'Api\admin1\backupDetailsController@update')->name('api.backupdetails.update');
        Route::post('delete/{id}', 'Api\admin1\backupDetailsController@delete')->name('api.backupdetails.delete');   
    });  
});




Route::group(['prefix' => 'backupreportepoliticas'], function () {
    Route::get('index', 'admin1\backupReportePoliticasController@index')->name('backupreportepoliticas.index');
    Route::get('create', 'admin1\backupReportePoliticasController@create')->name('backupreportepoliticas.create');
    Route::get('edit/{id}', 'admin1\backupReportePoliticasController@edit')->name('backupreportepoliticas.edit');
    Route::get('detail/{id}', 'admin1\backupReportePoliticasController@show')->name('backupreportepoliticas.detail');
    Route::post('store', 'admin1\backupReportePoliticasController@store')->name('backupreportepoliticas.store');
    Route::post('update/{id}', 'admin1\backupReportePoliticasController@update')->name('backupreportepoliticas.update');
    Route::get('delete/{id}', 'admin1\backupReportePoliticasController@delete')->name('backupreportepoliticas.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupReportePoliticasController@store')->name('api.backupreportepoliticas.store');
        Route::post('update/{id}', 'Api\admin1\backupReportePoliticasController@update')->name('api.backupreportepoliticas.update');
        Route::post('delete/{id}', 'Api\admin1\backupReportePoliticasController@delete')->name('api.backupreportepoliticas.delete');   
    });  
});




Route::group(['prefix' => 'backups'], function () {
    Route::get('index', 'admin1\backupsController@index')->name('backups.index');
    Route::get('create', 'admin1\backupsController@create')->name('backups.create');
    Route::get('edit/{id}', 'admin1\backupsController@edit')->name('backups.edit');
    Route::get('detail/{id}', 'admin1\backupsController@show')->name('backups.detail');
    Route::post('store', 'admin1\backupsController@store')->name('backups.store');
    Route::post('update/{id}', 'admin1\backupsController@update')->name('backups.update');
    Route::get('delete/{id}', 'admin1\backupsController@delete')->name('backups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\backupsController@store')->name('api.backups.store');
        Route::post('update/{id}', 'Api\admin1\backupsController@update')->name('api.backups.update');
        Route::post('delete/{id}', 'Api\admin1\backupsController@delete')->name('api.backups.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinformations'], function () {
    Route::get('index', 'admin1\deploymentInformationsController@index')->name('deploymentinformations.index');
    Route::get('create', 'admin1\deploymentInformationsController@create')->name('deploymentinformations.create');
    Route::get('edit/{id}', 'admin1\deploymentInformationsController@edit')->name('deploymentinformations.edit');
    Route::get('detail/{id}', 'admin1\deploymentInformationsController@show')->name('deploymentinformations.detail');
    Route::post('store', 'admin1\deploymentInformationsController@store')->name('deploymentinformations.store');
    Route::post('update/{id}', 'admin1\deploymentInformationsController@update')->name('deploymentinformations.update');
    Route::get('delete/{id}', 'admin1\deploymentInformationsController@delete')->name('deploymentinformations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInformationsController@store')->name('api.deploymentinformations.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInformationsController@update')->name('api.deploymentinformations.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInformationsController@delete')->name('api.deploymentinformations.delete');   
    });  
});




Route::group(['prefix' => 'deploymentinstancesummaries'], function () {
    Route::get('index', 'admin1\deploymentInstanceSummariesController@index')->name('deploymentinstancesummaries.index');
    Route::get('create', 'admin1\deploymentInstanceSummariesController@create')->name('deploymentinstancesummaries.create');
    Route::get('edit/{id}', 'admin1\deploymentInstanceSummariesController@edit')->name('deploymentinstancesummaries.edit');
    Route::get('detail/{id}', 'admin1\deploymentInstanceSummariesController@show')->name('deploymentinstancesummaries.detail');
    Route::post('store', 'admin1\deploymentInstanceSummariesController@store')->name('deploymentinstancesummaries.store');
    Route::post('update/{id}', 'admin1\deploymentInstanceSummariesController@update')->name('deploymentinstancesummaries.update');
    Route::get('delete/{id}', 'admin1\deploymentInstanceSummariesController@delete')->name('deploymentinstancesummaries.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentInstanceSummariesController@store')->name('api.deploymentinstancesummaries.store');
        Route::post('update/{id}', 'Api\admin1\deploymentInstanceSummariesController@update')->name('api.deploymentinstancesummaries.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentInstanceSummariesController@delete')->name('api.deploymentinstancesummaries.delete');   
    });  
});




Route::group(['prefix' => 'deploymentlifecycleevents'], function () {
    Route::get('index', 'admin1\deploymentLifeCycleEventsController@index')->name('deploymentlifecycleevents.index');
    Route::get('create', 'admin1\deploymentLifeCycleEventsController@create')->name('deploymentlifecycleevents.create');
    Route::get('edit/{id}', 'admin1\deploymentLifeCycleEventsController@edit')->name('deploymentlifecycleevents.edit');
    Route::get('detail/{id}', 'admin1\deploymentLifeCycleEventsController@show')->name('deploymentlifecycleevents.detail');
    Route::post('store', 'admin1\deploymentLifeCycleEventsController@store')->name('deploymentlifecycleevents.store');
    Route::post('update/{id}', 'admin1\deploymentLifeCycleEventsController@update')->name('deploymentlifecycleevents.update');
    Route::get('delete/{id}', 'admin1\deploymentLifeCycleEventsController@delete')->name('deploymentlifecycleevents.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\deploymentLifeCycleEventsController@store')->name('api.deploymentlifecycleevents.store');
        Route::post('update/{id}', 'Api\admin1\deploymentLifeCycleEventsController@update')->name('api.deploymentlifecycleevents.update');
        Route::post('delete/{id}', 'Api\admin1\deploymentLifeCycleEventsController@delete')->name('api.deploymentlifecycleevents.delete');   
    });  
});




Route::group(['prefix' => 'environments'], function () {
    Route::get('index', 'admin1\environmentsController@index')->name('environments.index');
    Route::get('create', 'admin1\environmentsController@create')->name('environments.create');
    Route::get('edit/{id}', 'admin1\environmentsController@edit')->name('environments.edit');
    Route::get('detail/{id}', 'admin1\environmentsController@show')->name('environments.detail');
    Route::post('store', 'admin1\environmentsController@store')->name('environments.store');
    Route::post('update/{id}', 'admin1\environmentsController@update')->name('environments.update');
    Route::get('delete/{id}', 'admin1\environmentsController@delete')->name('environments.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\environmentsController@store')->name('api.environments.store');
        Route::post('update/{id}', 'Api\admin1\environmentsController@update')->name('api.environments.update');
        Route::post('delete/{id}', 'Api\admin1\environmentsController@delete')->name('api.environments.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogticket'], function () {
    Route::get('index', 'admin1\fileConfigCatalogTicketController@index')->name('fileconfigcatalogticket.index');
    Route::get('create', 'admin1\fileConfigCatalogTicketController@create')->name('fileconfigcatalogticket.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogTicketController@edit')->name('fileconfigcatalogticket.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogTicketController@show')->name('fileconfigcatalogticket.detail');
    Route::post('store', 'admin1\fileConfigCatalogTicketController@store')->name('fileconfigcatalogticket.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogTicketController@update')->name('fileconfigcatalogticket.update');
    Route::get('delete/{id}', 'admin1\fileConfigCatalogTicketController@delete')->name('fileconfigcatalogticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogTicketController@store')->name('api.fileconfigcatalogticket.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogTicketController@update')->name('api.fileconfigcatalogticket.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogTicketController@delete')->name('api.fileconfigcatalogticket.delete');   
    });  
});




Route::group(['prefix' => 'fileconfigcatalogs'], function () {
    Route::get('index', 'admin1\fileConfigCatalogsController@index')->name('fileconfigcatalogs.index');
    Route::get('create', 'admin1\fileConfigCatalogsController@create')->name('fileconfigcatalogs.create');
    Route::get('edit/{id}', 'admin1\fileConfigCatalogsController@edit')->name('fileconfigcatalogs.edit');
    Route::get('detail/{id}', 'admin1\fileConfigCatalogsController@show')->name('fileconfigcatalogs.detail');
    Route::post('store', 'admin1\fileConfigCatalogsController@store')->name('fileconfigcatalogs.store');
    Route::post('update/{id}', 'admin1\fileConfigCatalogsController@update')->name('fileconfigcatalogs.update');
    Route::get('delete/{id}', 'admin1\fileConfigCatalogsController@delete')->name('fileconfigcatalogs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\fileConfigCatalogsController@store')->name('api.fileconfigcatalogs.store');
        Route::post('update/{id}', 'Api\admin1\fileConfigCatalogsController@update')->name('api.fileconfigcatalogs.update');
        Route::post('delete/{id}', 'Api\admin1\fileConfigCatalogsController@delete')->name('api.fileconfigcatalogs.delete');   
    });  
});




Route::group(['prefix' => 'globalnotificationmails'], function () {
    Route::get('index', 'admin1\globalNotificationMailsController@index')->name('globalnotificationmails.index');
    Route::get('create', 'admin1\globalNotificationMailsController@create')->name('globalnotificationmails.create');
    Route::get('edit/{id}', 'admin1\globalNotificationMailsController@edit')->name('globalnotificationmails.edit');
    Route::get('detail/{id}', 'admin1\globalNotificationMailsController@show')->name('globalnotificationmails.detail');
    Route::post('store', 'admin1\globalNotificationMailsController@store')->name('globalnotificationmails.store');
    Route::post('update/{id}', 'admin1\globalNotificationMailsController@update')->name('globalnotificationmails.update');
    Route::get('delete/{id}', 'admin1\globalNotificationMailsController@delete')->name('globalnotificationmails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\globalNotificationMailsController@store')->name('api.globalnotificationmails.store');
        Route::post('update/{id}', 'Api\admin1\globalNotificationMailsController@update')->name('api.globalnotificationmails.update');
        Route::post('delete/{id}', 'Api\admin1\globalNotificationMailsController@delete')->name('api.globalnotificationmails.delete');   
    });  
});




Route::group(['prefix' => 'instances'], function () {
    Route::get('index', 'admin1\instancesController@index')->name('instances.index');
    Route::get('create', 'admin1\instancesController@create')->name('instances.create');
    Route::get('edit/{id}', 'admin1\instancesController@edit')->name('instances.edit');
    Route::get('detail/{id}', 'admin1\instancesController@show')->name('instances.detail');
    Route::post('store', 'admin1\instancesController@store')->name('instances.store');
    Route::post('update/{id}', 'admin1\instancesController@update')->name('instances.update');
    Route::get('delete/{id}', 'admin1\instancesController@delete')->name('instances.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\instancesController@store')->name('api.instances.store');
        Route::post('update/{id}', 'Api\admin1\instancesController@update')->name('api.instances.update');
        Route::post('delete/{id}', 'Api\admin1\instancesController@delete')->name('api.instances.delete');   
    });  
});




Route::group(['prefix' => 'jenkinsbuilds'], function () {
    Route::get('index', 'admin1\jenkinsBuildsController@index')->name('jenkinsbuilds.index');
    Route::get('create', 'admin1\jenkinsBuildsController@create')->name('jenkinsbuilds.create');
    Route::get('edit/{id}', 'admin1\jenkinsBuildsController@edit')->name('jenkinsbuilds.edit');
    Route::get('detail/{id}', 'admin1\jenkinsBuildsController@show')->name('jenkinsbuilds.detail');
    Route::post('store', 'admin1\jenkinsBuildsController@store')->name('jenkinsbuilds.store');
    Route::post('update/{id}', 'admin1\jenkinsBuildsController@update')->name('jenkinsbuilds.update');
    Route::get('delete/{id}', 'admin1\jenkinsBuildsController@delete')->name('jenkinsbuilds.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jenkinsBuildsController@store')->name('api.jenkinsbuilds.store');
        Route::post('update/{id}', 'Api\admin1\jenkinsBuildsController@update')->name('api.jenkinsbuilds.update');
        Route::post('delete/{id}', 'Api\admin1\jenkinsBuildsController@delete')->name('api.jenkinsbuilds.delete');   
    });  
});




Route::group(['prefix' => 'jobs'], function () {
    Route::get('index', 'admin1\jobsController@index')->name('jobs.index');
    Route::get('create', 'admin1\jobsController@create')->name('jobs.create');
    Route::get('edit/{id}', 'admin1\jobsController@edit')->name('jobs.edit');
    Route::get('detail/{id}', 'admin1\jobsController@show')->name('jobs.detail');
    Route::post('store', 'admin1\jobsController@store')->name('jobs.store');
    Route::post('update/{id}', 'admin1\jobsController@update')->name('jobs.update');
    Route::get('delete/{id}', 'admin1\jobsController@delete')->name('jobs.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\jobsController@store')->name('api.jobs.store');
        Route::post('update/{id}', 'Api\admin1\jobsController@update')->name('api.jobs.update');
        Route::post('delete/{id}', 'Api\admin1\jobsController@delete')->name('api.jobs.delete');   
    });  
});




Route::group(['prefix' => 'mailinglistticket'], function () {
    Route::get('index', 'admin1\mailingListTicketController@index')->name('mailinglistticket.index');
    Route::get('create', 'admin1\mailingListTicketController@create')->name('mailinglistticket.create');
    Route::get('edit/{id}', 'admin1\mailingListTicketController@edit')->name('mailinglistticket.edit');
    Route::get('detail/{id}', 'admin1\mailingListTicketController@show')->name('mailinglistticket.detail');
    Route::post('store', 'admin1\mailingListTicketController@store')->name('mailinglistticket.store');
    Route::post('update/{id}', 'admin1\mailingListTicketController@update')->name('mailinglistticket.update');
    Route::get('delete/{id}', 'admin1\mailingListTicketController@delete')->name('mailinglistticket.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListTicketController@store')->name('api.mailinglistticket.store');
        Route::post('update/{id}', 'Api\admin1\mailingListTicketController@update')->name('api.mailinglistticket.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListTicketController@delete')->name('api.mailinglistticket.delete');   
    });  
});




Route::group(['prefix' => 'mailinglists'], function () {
    Route::get('index', 'admin1\mailingListsController@index')->name('mailinglists.index');
    Route::get('create', 'admin1\mailingListsController@create')->name('mailinglists.create');
    Route::get('edit/{id}', 'admin1\mailingListsController@edit')->name('mailinglists.edit');
    Route::get('detail/{id}', 'admin1\mailingListsController@show')->name('mailinglists.detail');
    Route::post('store', 'admin1\mailingListsController@store')->name('mailinglists.store');
    Route::post('update/{id}', 'admin1\mailingListsController@update')->name('mailinglists.update');
    Route::get('delete/{id}', 'admin1\mailingListsController@delete')->name('mailinglists.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailingListsController@store')->name('api.mailinglists.store');
        Route::post('update/{id}', 'Api\admin1\mailingListsController@update')->name('api.mailinglists.update');
        Route::post('delete/{id}', 'Api\admin1\mailingListsController@delete')->name('api.mailinglists.delete');   
    });  
});




Route::group(['prefix' => 'mails'], function () {
    Route::get('index', 'admin1\mailsController@index')->name('mails.index');
    Route::get('create', 'admin1\mailsController@create')->name('mails.create');
    Route::get('edit/{id}', 'admin1\mailsController@edit')->name('mails.edit');
    Route::get('detail/{id}', 'admin1\mailsController@show')->name('mails.detail');
    Route::post('store', 'admin1\mailsController@store')->name('mails.store');
    Route::post('update/{id}', 'admin1\mailsController@update')->name('mails.update');
    Route::get('delete/{id}', 'admin1\mailsController@delete')->name('mails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\mailsController@store')->name('api.mails.store');
        Route::post('update/{id}', 'Api\admin1\mailsController@update')->name('api.mails.update');
        Route::post('delete/{id}', 'Api\admin1\mailsController@delete')->name('api.mails.delete');   
    });  
});




Route::group(['prefix' => 'migrations'], function () {
    Route::get('index', 'admin1\migrationsController@index')->name('migrations.index');
    Route::get('create', 'admin1\migrationsController@create')->name('migrations.create');
    Route::get('edit/{id}', 'admin1\migrationsController@edit')->name('migrations.edit');
    Route::get('detail/{id}', 'admin1\migrationsController@show')->name('migrations.detail');
    Route::post('store', 'admin1\migrationsController@store')->name('migrations.store');
    Route::post('update/{id}', 'admin1\migrationsController@update')->name('migrations.update');
    Route::get('delete/{id}', 'admin1\migrationsController@delete')->name('migrations.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\migrationsController@store')->name('api.migrations.store');
        Route::post('update/{id}', 'Api\admin1\migrationsController@update')->name('api.migrations.update');
        Route::post('delete/{id}', 'Api\admin1\migrationsController@delete')->name('api.migrations.delete');   
    });  
});




Route::group(['prefix' => 'passwordresets'], function () {
    Route::get('index', 'admin1\passwordResetsController@index')->name('passwordresets.index');
    Route::get('create', 'admin1\passwordResetsController@create')->name('passwordresets.create');
    Route::get('edit/{id}', 'admin1\passwordResetsController@edit')->name('passwordresets.edit');
    Route::get('detail/{id}', 'admin1\passwordResetsController@show')->name('passwordresets.detail');
    Route::post('store', 'admin1\passwordResetsController@store')->name('passwordresets.store');
    Route::post('update/{id}', 'admin1\passwordResetsController@update')->name('passwordresets.update');
    Route::get('delete/{id}', 'admin1\passwordResetsController@delete')->name('passwordresets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\passwordResetsController@store')->name('api.passwordresets.store');
        Route::post('update/{id}', 'Api\admin1\passwordResetsController@update')->name('api.passwordresets.update');
        Route::post('delete/{id}', 'Api\admin1\passwordResetsController@delete')->name('api.passwordresets.delete');   
    });  
});




Route::group(['prefix' => 'permissionrole'], function () {
    Route::get('index', 'admin1\permissionRoleController@index')->name('permissionrole.index');
    Route::get('create', 'admin1\permissionRoleController@create')->name('permissionrole.create');
    Route::get('edit/{id}', 'admin1\permissionRoleController@edit')->name('permissionrole.edit');
    Route::get('detail/{id}', 'admin1\permissionRoleController@show')->name('permissionrole.detail');
    Route::post('store', 'admin1\permissionRoleController@store')->name('permissionrole.store');
    Route::post('update/{id}', 'admin1\permissionRoleController@update')->name('permissionrole.update');
    Route::get('delete/{id}', 'admin1\permissionRoleController@delete')->name('permissionrole.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\permissionRoleController@store')->name('api.permissionrole.store');
        Route::post('update/{id}', 'Api\admin1\permissionRoleController@update')->name('api.permissionrole.update');
        Route::post('delete/{id}', 'Api\admin1\permissionRoleController@delete')->name('api.permissionrole.delete');   
    });  
});




Route::group(['prefix' => 'permissions'], function () {
    Route::get('index', 'admin1\permissionsController@index')->name('permissions.index');
    Route::get('create', 'admin1\permissionsController@create')->name('permissions.create');
    Route::get('edit/{id}', 'admin1\permissionsController@edit')->name('permissions.edit');
    Route::get('detail/{id}', 'admin1\permissionsController@show')->name('permissions.detail');
    Route::post('store', 'admin1\permissionsController@store')->name('permissions.store');
    Route::post('update/{id}', 'admin1\permissionsController@update')->name('permissions.update');
    Route::get('delete/{id}', 'admin1\permissionsController@delete')->name('permissions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\permissionsController@store')->name('api.permissions.store');
        Route::post('update/{id}', 'Api\admin1\permissionsController@update')->name('api.permissions.update');
        Route::post('delete/{id}', 'Api\admin1\permissionsController@delete')->name('api.permissions.delete');   
    });  
});




Route::group(['prefix' => 'qualitytests'], function () {
    Route::get('index', 'admin1\qualityTestsController@index')->name('qualitytests.index');
    Route::get('create', 'admin1\qualityTestsController@create')->name('qualitytests.create');
    Route::get('edit/{id}', 'admin1\qualityTestsController@edit')->name('qualitytests.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsController@show')->name('qualitytests.detail');
    Route::post('store', 'admin1\qualityTestsController@store')->name('qualitytests.store');
    Route::post('update/{id}', 'admin1\qualityTestsController@update')->name('qualitytests.update');
    Route::get('delete/{id}', 'admin1\qualityTestsController@delete')->name('qualitytests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsController@store')->name('api.qualitytests.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsController@update')->name('api.qualitytests.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsController@delete')->name('api.qualitytests.delete');   
    });  
});




Route::group(['prefix' => 'qualitytestsnodes'], function () {
    Route::get('index', 'admin1\qualityTestsNodesController@index')->name('qualitytestsnodes.index');
    Route::get('create', 'admin1\qualityTestsNodesController@create')->name('qualitytestsnodes.create');
    Route::get('edit/{id}', 'admin1\qualityTestsNodesController@edit')->name('qualitytestsnodes.edit');
    Route::get('detail/{id}', 'admin1\qualityTestsNodesController@show')->name('qualitytestsnodes.detail');
    Route::post('store', 'admin1\qualityTestsNodesController@store')->name('qualitytestsnodes.store');
    Route::post('update/{id}', 'admin1\qualityTestsNodesController@update')->name('qualitytestsnodes.update');
    Route::get('delete/{id}', 'admin1\qualityTestsNodesController@delete')->name('qualitytestsnodes.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\qualityTestsNodesController@store')->name('api.qualitytestsnodes.store');
        Route::post('update/{id}', 'Api\admin1\qualityTestsNodesController@update')->name('api.qualitytestsnodes.update');
        Route::post('delete/{id}', 'Api\admin1\qualityTestsNodesController@delete')->name('api.qualitytestsnodes.delete');   
    });  
});




Route::group(['prefix' => 'reportemails'], function () {
    Route::get('index', 'admin1\reportEmailsController@index')->name('reportemails.index');
    Route::get('create', 'admin1\reportEmailsController@create')->name('reportemails.create');
    Route::get('edit/{id}', 'admin1\reportEmailsController@edit')->name('reportemails.edit');
    Route::get('detail/{id}', 'admin1\reportEmailsController@show')->name('reportemails.detail');
    Route::post('store', 'admin1\reportEmailsController@store')->name('reportemails.store');
    Route::post('update/{id}', 'admin1\reportEmailsController@update')->name('reportemails.update');
    Route::get('delete/{id}', 'admin1\reportEmailsController@delete')->name('reportemails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\reportEmailsController@store')->name('api.reportemails.store');
        Route::post('update/{id}', 'Api\admin1\reportEmailsController@update')->name('api.reportemails.update');
        Route::post('delete/{id}', 'Api\admin1\reportEmailsController@delete')->name('api.reportemails.delete');   
    });  
});




Route::group(['prefix' => 'retentions'], function () {
    Route::get('index', 'admin1\retentionsController@index')->name('retentions.index');
    Route::get('create', 'admin1\retentionsController@create')->name('retentions.create');
    Route::get('edit/{id}', 'admin1\retentionsController@edit')->name('retentions.edit');
    Route::get('detail/{id}', 'admin1\retentionsController@show')->name('retentions.detail');
    Route::post('store', 'admin1\retentionsController@store')->name('retentions.store');
    Route::post('update/{id}', 'admin1\retentionsController@update')->name('retentions.update');
    Route::get('delete/{id}', 'admin1\retentionsController@delete')->name('retentions.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\retentionsController@store')->name('api.retentions.store');
        Route::post('update/{id}', 'Api\admin1\retentionsController@update')->name('api.retentions.update');
        Route::post('delete/{id}', 'Api\admin1\retentionsController@delete')->name('api.retentions.delete');   
    });  
});




Route::group(['prefix' => 'roleuser'], function () {
    Route::get('index', 'admin1\roleUserController@index')->name('roleuser.index');
    Route::get('create', 'admin1\roleUserController@create')->name('roleuser.create');
    Route::get('edit/{id}', 'admin1\roleUserController@edit')->name('roleuser.edit');
    Route::get('detail/{id}', 'admin1\roleUserController@show')->name('roleuser.detail');
    Route::post('store', 'admin1\roleUserController@store')->name('roleuser.store');
    Route::post('update/{id}', 'admin1\roleUserController@update')->name('roleuser.update');
    Route::get('delete/{id}', 'admin1\roleUserController@delete')->name('roleuser.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\roleUserController@store')->name('api.roleuser.store');
        Route::post('update/{id}', 'Api\admin1\roleUserController@update')->name('api.roleuser.update');
        Route::post('delete/{id}', 'Api\admin1\roleUserController@delete')->name('api.roleuser.delete');   
    });  
});




Route::group(['prefix' => 'roles'], function () {
    Route::get('index', 'admin1\rolesController@index')->name('roles.index');
    Route::get('create', 'admin1\rolesController@create')->name('roles.create');
    Route::get('edit/{id}', 'admin1\rolesController@edit')->name('roles.edit');
    Route::get('detail/{id}', 'admin1\rolesController@show')->name('roles.detail');
    Route::post('store', 'admin1\rolesController@store')->name('roles.store');
    Route::post('update/{id}', 'admin1\rolesController@update')->name('roles.update');
    Route::get('delete/{id}', 'admin1\rolesController@delete')->name('roles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\rolesController@store')->name('api.roles.store');
        Route::post('update/{id}', 'Api\admin1\rolesController@update')->name('api.roles.update');
        Route::post('delete/{id}', 'Api\admin1\rolesController@delete')->name('api.roles.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupapplications'], function () {
    Route::get('index', 'admin1\scheduleBackupApplicationsController@index')->name('schedulebackupapplications.index');
    Route::get('create', 'admin1\scheduleBackupApplicationsController@create')->name('schedulebackupapplications.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupApplicationsController@edit')->name('schedulebackupapplications.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupApplicationsController@show')->name('schedulebackupapplications.detail');
    Route::post('store', 'admin1\scheduleBackupApplicationsController@store')->name('schedulebackupapplications.store');
    Route::post('update/{id}', 'admin1\scheduleBackupApplicationsController@update')->name('schedulebackupapplications.update');
    Route::get('delete/{id}', 'admin1\scheduleBackupApplicationsController@delete')->name('schedulebackupapplications.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupApplicationsController@store')->name('api.schedulebackupapplications.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupApplicationsController@update')->name('api.schedulebackupapplications.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupApplicationsController@delete')->name('api.schedulebackupapplications.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupdatabases'], function () {
    Route::get('index', 'admin1\scheduleBackupDatabasesController@index')->name('schedulebackupdatabases.index');
    Route::get('create', 'admin1\scheduleBackupDatabasesController@create')->name('schedulebackupdatabases.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupDatabasesController@edit')->name('schedulebackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupDatabasesController@show')->name('schedulebackupdatabases.detail');
    Route::post('store', 'admin1\scheduleBackupDatabasesController@store')->name('schedulebackupdatabases.store');
    Route::post('update/{id}', 'admin1\scheduleBackupDatabasesController@update')->name('schedulebackupdatabases.update');
    Route::get('delete/{id}', 'admin1\scheduleBackupDatabasesController@delete')->name('schedulebackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupDatabasesController@store')->name('api.schedulebackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupDatabasesController@update')->name('api.schedulebackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupDatabasesController@delete')->name('api.schedulebackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackupfolders'], function () {
    Route::get('index', 'admin1\scheduleBackupFoldersController@index')->name('schedulebackupfolders.index');
    Route::get('create', 'admin1\scheduleBackupFoldersController@create')->name('schedulebackupfolders.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupFoldersController@edit')->name('schedulebackupfolders.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupFoldersController@show')->name('schedulebackupfolders.detail');
    Route::post('store', 'admin1\scheduleBackupFoldersController@store')->name('schedulebackupfolders.store');
    Route::post('update/{id}', 'admin1\scheduleBackupFoldersController@update')->name('schedulebackupfolders.update');
    Route::get('delete/{id}', 'admin1\scheduleBackupFoldersController@delete')->name('schedulebackupfolders.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupFoldersController@store')->name('api.schedulebackupfolders.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupFoldersController@update')->name('api.schedulebackupfolders.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupFoldersController@delete')->name('api.schedulebackupfolders.delete');   
    });  
});




Route::group(['prefix' => 'schedulebackups'], function () {
    Route::get('index', 'admin1\scheduleBackupsController@index')->name('schedulebackups.index');
    Route::get('create', 'admin1\scheduleBackupsController@create')->name('schedulebackups.create');
    Route::get('edit/{id}', 'admin1\scheduleBackupsController@edit')->name('schedulebackups.edit');
    Route::get('detail/{id}', 'admin1\scheduleBackupsController@show')->name('schedulebackups.detail');
    Route::post('store', 'admin1\scheduleBackupsController@store')->name('schedulebackups.store');
    Route::post('update/{id}', 'admin1\scheduleBackupsController@update')->name('schedulebackups.update');
    Route::get('delete/{id}', 'admin1\scheduleBackupsController@delete')->name('schedulebackups.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\scheduleBackupsController@store')->name('api.schedulebackups.store');
        Route::post('update/{id}', 'Api\admin1\scheduleBackupsController@update')->name('api.schedulebackups.update');
        Route::post('delete/{id}', 'Api\admin1\scheduleBackupsController@delete')->name('api.schedulebackups.delete');   
    });  
});




Route::group(['prefix' => 'slackchannels'], function () {
    Route::get('index', 'admin1\slackChannelsController@index')->name('slackchannels.index');
    Route::get('create', 'admin1\slackChannelsController@create')->name('slackchannels.create');
    Route::get('edit/{id}', 'admin1\slackChannelsController@edit')->name('slackchannels.edit');
    Route::get('detail/{id}', 'admin1\slackChannelsController@show')->name('slackchannels.detail');
    Route::post('store', 'admin1\slackChannelsController@store')->name('slackchannels.store');
    Route::post('update/{id}', 'admin1\slackChannelsController@update')->name('slackchannels.update');
    Route::get('delete/{id}', 'admin1\slackChannelsController@delete')->name('slackchannels.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\slackChannelsController@store')->name('api.slackchannels.store');
        Route::post('update/{id}', 'Api\admin1\slackChannelsController@update')->name('api.slackchannels.update');
        Route::post('delete/{id}', 'Api\admin1\slackChannelsController@delete')->name('api.slackchannels.delete');   
    });  
});




Route::group(['prefix' => 'sqldatabases'], function () {
    Route::get('index', 'admin1\sqlDatabasesController@index')->name('sqldatabases.index');
    Route::get('create', 'admin1\sqlDatabasesController@create')->name('sqldatabases.create');
    Route::get('edit/{id}', 'admin1\sqlDatabasesController@edit')->name('sqldatabases.edit');
    Route::get('detail/{id}', 'admin1\sqlDatabasesController@show')->name('sqldatabases.detail');
    Route::post('store', 'admin1\sqlDatabasesController@store')->name('sqldatabases.store');
    Route::post('update/{id}', 'admin1\sqlDatabasesController@update')->name('sqldatabases.update');
    Route::get('delete/{id}', 'admin1\sqlDatabasesController@delete')->name('sqldatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\sqlDatabasesController@store')->name('api.sqldatabases.store');
        Route::post('update/{id}', 'Api\admin1\sqlDatabasesController@update')->name('api.sqldatabases.update');
        Route::post('delete/{id}', 'Api\admin1\sqlDatabasesController@delete')->name('api.sqldatabases.delete');   
    });  
});




Route::group(['prefix' => 'stresstests'], function () {
    Route::get('index', 'admin1\stressTestsController@index')->name('stresstests.index');
    Route::get('create', 'admin1\stressTestsController@create')->name('stresstests.create');
    Route::get('edit/{id}', 'admin1\stressTestsController@edit')->name('stresstests.edit');
    Route::get('detail/{id}', 'admin1\stressTestsController@show')->name('stresstests.detail');
    Route::post('store', 'admin1\stressTestsController@store')->name('stresstests.store');
    Route::post('update/{id}', 'admin1\stressTestsController@update')->name('stresstests.update');
    Route::get('delete/{id}', 'admin1\stressTestsController@delete')->name('stresstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\stressTestsController@store')->name('api.stresstests.store');
        Route::post('update/{id}', 'Api\admin1\stressTestsController@update')->name('api.stresstests.update');
        Route::post('delete/{id}', 'Api\admin1\stressTestsController@delete')->name('api.stresstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketbackupdatabases'], function () {
    Route::get('index', 'admin1\ticketBackupDatabasesController@index')->name('ticketbackupdatabases.index');
    Route::get('create', 'admin1\ticketBackupDatabasesController@create')->name('ticketbackupdatabases.create');
    Route::get('edit/{id}', 'admin1\ticketBackupDatabasesController@edit')->name('ticketbackupdatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketBackupDatabasesController@show')->name('ticketbackupdatabases.detail');
    Route::post('store', 'admin1\ticketBackupDatabasesController@store')->name('ticketbackupdatabases.store');
    Route::post('update/{id}', 'admin1\ticketBackupDatabasesController@update')->name('ticketbackupdatabases.update');
    Route::get('delete/{id}', 'admin1\ticketBackupDatabasesController@delete')->name('ticketbackupdatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketBackupDatabasesController@store')->name('api.ticketbackupdatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketBackupDatabasesController@update')->name('api.ticketbackupdatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketBackupDatabasesController@delete')->name('api.ticketbackupdatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetails'], function () {
    Route::get('index', 'admin1\ticketDetailsController@index')->name('ticketdetails.index');
    Route::get('create', 'admin1\ticketDetailsController@create')->name('ticketdetails.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsController@edit')->name('ticketdetails.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsController@show')->name('ticketdetails.detail');
    Route::post('store', 'admin1\ticketDetailsController@store')->name('ticketdetails.store');
    Route::post('update/{id}', 'admin1\ticketDetailsController@update')->name('ticketdetails.update');
    Route::get('delete/{id}', 'admin1\ticketDetailsController@delete')->name('ticketdetails.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsController@store')->name('api.ticketdetails.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsController@update')->name('api.ticketdetails.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsController@delete')->name('api.ticketdetails.delete');   
    });  
});




Route::group(['prefix' => 'ticketdetailstests'], function () {
    Route::get('index', 'admin1\ticketDetailsTestsController@index')->name('ticketdetailstests.index');
    Route::get('create', 'admin1\ticketDetailsTestsController@create')->name('ticketdetailstests.create');
    Route::get('edit/{id}', 'admin1\ticketDetailsTestsController@edit')->name('ticketdetailstests.edit');
    Route::get('detail/{id}', 'admin1\ticketDetailsTestsController@show')->name('ticketdetailstests.detail');
    Route::post('store', 'admin1\ticketDetailsTestsController@store')->name('ticketdetailstests.store');
    Route::post('update/{id}', 'admin1\ticketDetailsTestsController@update')->name('ticketdetailstests.update');
    Route::get('delete/{id}', 'admin1\ticketDetailsTestsController@delete')->name('ticketdetailstests.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketDetailsTestsController@store')->name('api.ticketdetailstests.store');
        Route::post('update/{id}', 'Api\admin1\ticketDetailsTestsController@update')->name('api.ticketdetailstests.update');
        Route::post('delete/{id}', 'Api\admin1\ticketDetailsTestsController@delete')->name('api.ticketdetailstests.delete');   
    });  
});




Route::group(['prefix' => 'ticketrestoredatabases'], function () {
    Route::get('index', 'admin1\ticketRestoreDatabasesController@index')->name('ticketrestoredatabases.index');
    Route::get('create', 'admin1\ticketRestoreDatabasesController@create')->name('ticketrestoredatabases.create');
    Route::get('edit/{id}', 'admin1\ticketRestoreDatabasesController@edit')->name('ticketrestoredatabases.edit');
    Route::get('detail/{id}', 'admin1\ticketRestoreDatabasesController@show')->name('ticketrestoredatabases.detail');
    Route::post('store', 'admin1\ticketRestoreDatabasesController@store')->name('ticketrestoredatabases.store');
    Route::post('update/{id}', 'admin1\ticketRestoreDatabasesController@update')->name('ticketrestoredatabases.update');
    Route::get('delete/{id}', 'admin1\ticketRestoreDatabasesController@delete')->name('ticketrestoredatabases.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketRestoreDatabasesController@store')->name('api.ticketrestoredatabases.store');
        Route::post('update/{id}', 'Api\admin1\ticketRestoreDatabasesController@update')->name('api.ticketrestoredatabases.update');
        Route::post('delete/{id}', 'Api\admin1\ticketRestoreDatabasesController@delete')->name('api.ticketrestoredatabases.delete');   
    });  
});




Route::group(['prefix' => 'ticketsqlfiles'], function () {
    Route::get('index', 'admin1\ticketSqlFilesController@index')->name('ticketsqlfiles.index');
    Route::get('create', 'admin1\ticketSqlFilesController@create')->name('ticketsqlfiles.create');
    Route::get('edit/{id}', 'admin1\ticketSqlFilesController@edit')->name('ticketsqlfiles.edit');
    Route::get('detail/{id}', 'admin1\ticketSqlFilesController@show')->name('ticketsqlfiles.detail');
    Route::post('store', 'admin1\ticketSqlFilesController@store')->name('ticketsqlfiles.store');
    Route::post('update/{id}', 'admin1\ticketSqlFilesController@update')->name('ticketsqlfiles.update');
    Route::get('delete/{id}', 'admin1\ticketSqlFilesController@delete')->name('ticketsqlfiles.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketSqlFilesController@store')->name('api.ticketsqlfiles.store');
        Route::post('update/{id}', 'Api\admin1\ticketSqlFilesController@update')->name('api.ticketsqlfiles.update');
        Route::post('delete/{id}', 'Api\admin1\ticketSqlFilesController@delete')->name('api.ticketsqlfiles.delete');   
    });  
});




Route::group(['prefix' => 'ticketstatistics'], function () {
    Route::get('index', 'admin1\ticketStatisticsController@index')->name('ticketstatistics.index');
    Route::get('create', 'admin1\ticketStatisticsController@create')->name('ticketstatistics.create');
    Route::get('edit/{id}', 'admin1\ticketStatisticsController@edit')->name('ticketstatistics.edit');
    Route::get('detail/{id}', 'admin1\ticketStatisticsController@show')->name('ticketstatistics.detail');
    Route::post('store', 'admin1\ticketStatisticsController@store')->name('ticketstatistics.store');
    Route::post('update/{id}', 'admin1\ticketStatisticsController@update')->name('ticketstatistics.update');
    Route::get('delete/{id}', 'admin1\ticketStatisticsController@delete')->name('ticketstatistics.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketStatisticsController@store')->name('api.ticketstatistics.store');
        Route::post('update/{id}', 'Api\admin1\ticketStatisticsController@update')->name('api.ticketstatistics.update');
        Route::post('delete/{id}', 'Api\admin1\ticketStatisticsController@delete')->name('api.ticketstatistics.delete');   
    });  
});




Route::group(['prefix' => 'tickets'], function () {
    Route::get('index', 'admin1\ticketsController@index')->name('tickets.index');
    Route::get('create', 'admin1\ticketsController@create')->name('tickets.create');
    Route::get('edit/{id}', 'admin1\ticketsController@edit')->name('tickets.edit');
    Route::get('detail/{id}', 'admin1\ticketsController@show')->name('tickets.detail');
    Route::post('store', 'admin1\ticketsController@store')->name('tickets.store');
    Route::post('update/{id}', 'admin1\ticketsController@update')->name('tickets.update');
    Route::get('delete/{id}', 'admin1\ticketsController@delete')->name('tickets.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\ticketsController@store')->name('api.tickets.store');
        Route::post('update/{id}', 'Api\admin1\ticketsController@update')->name('api.tickets.update');
        Route::post('delete/{id}', 'Api\admin1\ticketsController@delete')->name('api.tickets.delete');   
    });  
});




Route::group(['prefix' => 'users'], function () {
    Route::get('index', 'admin1\usersController@index')->name('users.index');
    Route::get('create', 'admin1\usersController@create')->name('users.create');
    Route::get('edit/{id}', 'admin1\usersController@edit')->name('users.edit');
    Route::get('detail/{id}', 'admin1\usersController@show')->name('users.detail');
    Route::post('store', 'admin1\usersController@store')->name('users.store');
    Route::post('update/{id}', 'admin1\usersController@update')->name('users.update');
    Route::get('delete/{id}', 'admin1\usersController@delete')->name('users.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\usersController@store')->name('api.users.store');
        Route::post('update/{id}', 'Api\admin1\usersController@update')->name('api.users.update');
        Route::post('delete/{id}', 'Api\admin1\usersController@delete')->name('api.users.delete');   
    });  
});




Route::group(['prefix' => 'workflows'], function () {
    Route::get('index', 'admin1\workflowsController@index')->name('workflows.index');
    Route::get('create', 'admin1\workflowsController@create')->name('workflows.create');
    Route::get('edit/{id}', 'admin1\workflowsController@edit')->name('workflows.edit');
    Route::get('detail/{id}', 'admin1\workflowsController@show')->name('workflows.detail');
    Route::post('store', 'admin1\workflowsController@store')->name('workflows.store');
    Route::post('update/{id}', 'admin1\workflowsController@update')->name('workflows.update');
    Route::get('delete/{id}', 'admin1\workflowsController@delete')->name('workflows.delete');   
    Route::group(['prefix' => 'api'], function () {
        Route::post('store', 'Api\admin1\workflowsController@store')->name('api.workflows.store');
        Route::post('update/{id}', 'Api\admin1\workflowsController@update')->name('api.workflows.update');
        Route::post('delete/{id}', 'Api\admin1\workflowsController@delete')->name('api.workflows.delete');   
    });  
});

