<?php

use Ampart\BitrixIntegration\Http\Controllers\Admin\ConfigController;

Route::group([
    'middleware' => ['web', 'admin'],
    'prefix' => config('app.admin_url') . '/ampart/bitrix',
    'as'=> 'ampart.bitrix.admin.'
], function () {
    Route::get('/', [ConfigController::class, 'index'])->name('index');
});