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

$app->get('/', function() {
    return view('home.index');
});

// settings

$app->get('/settings/channels', ['as' => 'settings-channels', 'uses' => '\App\Http\Controllers\ChannelsController@index']);
$app->get('/settings/channels/add', ['as' => 'settings-channel-add', 'uses' => '\App\Http\Controllers\ChannelsController@detail']);
$app->get('/settings/channels/{id}', ['as' => 'settings-channel-detail', 'uses' => '\App\Http\Controllers\ChannelsController@detail']);

$app->get('/settings/templates', ['as' => 'settings-templates', 'uses' => '\App\Http\Controllers\TemplatesController@index']);
$app->get('/settings/templates/add', ['as' => 'settings-template-add', 'uses' => '\App\Http\Controllers\TemplatesController@detail']);
$app->get('/settings/templates/{id}', ['as' => 'settings-template-detail', 'uses' => '\App\Http\Controllers\TemplatesController@detail']);

$app->get('/settings/modules', ['as' => 'settings-modules', 'uses' => '\App\Http\Controllers\ModulesController@index']);
$app->get('/settings/modules/add', ['as' => 'settings-module-add', 'uses' => '\App\Http\Controllers\ModulesController@add']);
$app->post('/settings/modules/add', ['as' => 'settings-module--add-do', 'uses' => '\App\Http\Controllers\ModulesController@addDo']);
$app->get('/settings/modules/{id}', ['as' => 'settings-module-detail', 'uses' => '\App\Http\Controllers\ModulesController@detail']);
$app->post('/settings/modules/{id}', ['as' => 'settings-module-detail-do', 'uses' => '\App\Http\Controllers\ModulesController@detailDo']);

$app->get('/settings/fields', ['as' => 'settings-fields', 'uses' => '\App\Http\Controllers\FieldsController@index']);
$app->get('/settings/fields/add', ['as' => 'settings-field-add', 'uses' => '\App\Http\Controllers\FieldsController@add']);
$app->post('/settings/fields/add', ['as' => 'settings-field-add-do', 'uses' => '\App\Http\Controllers\FieldsController@addDo']);
$app->get('/settings/fields/{id}', ['as' => 'settings-field-detail', 'uses' => '\App\Http\Controllers\FieldsController@detail']);
$app->post('/settings/fields/{id}', ['as' => 'settings-field-detail-do', 'uses' => '\App\Http\Controllers\FieldsController@detailDo']);

$app->get('/settings/field-types', ['as' => 'settings-field-types', 'uses' => '\App\Http\Controllers\FieldTypesController@index']);
$app->get('/settings/field-types/add', ['as' => 'settings-field-type-add', 'uses' => '\App\Http\Controllers\FieldTypesController@add']);
$app->post('/settings/field-types/add', ['as' => 'settings-field-type-add-do', 'uses' => '\App\Http\Controllers\FieldTypesController@addDo']);
$app->get('/settings/field-types/{id}', ['as' => 'settings-field-type-detail', 'uses' => '\App\Http\Controllers\FieldTypesController@detail']);
$app->post('/settings/field-types/{id}', ['as' => 'settings-field-type-detail-do', 'uses' => '\App\Http\Controllers\FieldTypesController@detailDo']);
$app->get('/settings/field-types/{id}/config', ['as' => 'settings-field-type-config', 'uses' => '\App\Http\Controllers\FieldTypesController@config']);