<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginControler;
use App\Http\Controllers\Admin\DashboardControler;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\DivController;
use  App\Http\Controllers\Admin\ProductCOntroller;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ProductShowController;
use App\Http\Controllers\Admin\SaleDetailsController;
use App\Http\Controllers\Admin\SaleAddController;
use App\Http\Controllers\Admin\SearsController;
use App\Http\Controllers\Admin\InvoicePrintCOntroller;


//Route::get('/', [LoginControler::class, 'loginView'])->name('loginView');

//Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {
//    $enableViews = config('fortify.views', true);
//// Registration...
//    if (Features::enabled(Features::registration())) {
//        if ($enableViews) {
//            Route::get(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'create'])
//                ->middleware(['guest:' . config('fortify.guard')])
//                ->name('register');
//        }
//
//        Route::post(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'store'])
//            ->middleware(['guest:' . config('fortify.guard')]);
//    }
//});



//Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/', [DashboardControler::class, 'dashboard'])->name('dashboard');

//sale control
    Route::resource('sales', SalesController::class);
    Route::get('fetchCategory/{id}', [SalesController::class, 'fetchCategory'])->name('fetchCategory');
    Route::get('fetchProducts-details/{category_id}/{branch_id}', [SalesController::class, 'fetchProductsDetails'])->name('fetchProductsDetails');
    Route::resource('sale-details',SaleDetailsController::class);
    Route::resource('sale-store',SaleAddController::class);
//sale control end

//    product control
    Route::resource('products', ProductCOntroller::class);
//    product control end

//    customer control
    Route::resource('customers', CustomerController::class);
//    customer control end

//Product searc

    Route::get('productsSearch',[SearsController::class,'search'])->name('productsSearch');

//Product searc end

//invoice control
    Route::resource('invoices',InvoicePrintCOntroller::class);
//invoice control end


//
//});


