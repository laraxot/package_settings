<?php

$this->routes();

/*-- roba laralum
$middleware=['web', 'xra.base', 'xra.auth'];
$middleware=['web'];


Route::group([
    'middleware' => $middleware,
    'prefix' => config('xra.settings.base_url'),
    'namespace' => 'XRA\Settings\Controllers',
    'as' => 'XRA::',
], function () {
    Route::get('settings', 'SettingsController@index')->name('settings.index');
    Route::post('settings/update', 'SettingsController@update')->name('settings.general.update');
});
--*/
