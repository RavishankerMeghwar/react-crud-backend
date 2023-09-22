<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InsuranceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// auth routes

Route::get('/', [AdminController::class, 'index'])->name('login');
Route::post('/login', [AdminController::class, 'loginProcess'])->name('login.process');


Route::middleware(['auth', 'is.admin'])
    ->prefix('dashboard')
    ->as('dashboard.')
    ->group(function () {

        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::get('/', [AdminController::class, 'dashboard'])->name('home');
       
        // Insurance routes
        Route::resource('/insurance', InsuranceController::class)->except([
            'edit',
            'update',
            'destroy'
        ]);

        // Route::get('/supplier/image-download/{supplier}', [SupplierController::class, 'imageDownload'])->name('supplier.imageDownload');
        // Route::get('/supplier/delete/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');
        // Route::post('/supplier/updatetag/{id}', [SupplierController::class, 'updateTags'])->name('supplier.updateTags');



    });