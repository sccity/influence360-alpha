<?php 

use Illuminate\Support\Facades\Route;
use Webkul\Admin\Http\Controllers\BillFiles\ActivityController as BillFileActivityController;
use Webkul\Admin\Http\Controllers\BillFiles\BillFileController;

Route::group(['prefix' => 'bill-files'], function () {
    Route::controller(BillFileController::class)->group(function () {
        Route::get('/', 'index')->name('admin.bill-files.index');
        Route::get('create', 'create')->name('admin.bill-files.create');
        Route::post('create', 'store')->name('admin.bill-files.store');
        Route::get('view/{id}', 'view')->name('admin.bill-files.view');
        Route::get('edit/{id}', 'edit')->name('admin.bill-files.edit');
        Route::put('edit/{id}', 'update')->name('admin.bill-files.update');
        Route::delete('{id}', 'destroy')->name('admin.bill-files.delete');
        Route::post('mass-destroy', 'massDestroy')->name('admin.bill-files.mass_delete');
    });

    Route::controller(BillFileActivityController::class)->prefix('{id}/activities')->group(function () {
        Route::get('', 'index')->name('admin.bill-files.activities.index');
    });
});
