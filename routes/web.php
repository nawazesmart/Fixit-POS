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
use App\Http\Controllers\Admin\SaleReturnController;
use App\Http\Controllers\Admin\ReturnDetailsController;
use  App\Http\Controllers\Admin\CreateUserController;
use App\Http\Controllers\UserrollActionController;
Route::get('/', [LoginControler::class, 'loginView'])->name('loginView');
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


    Route::get('/dashboard', [DashboardControler::class, 'dashboard'])->name('dashboard');
//    sale control

    Route::resource('sales', SalesController::class);
    Route::get('fetchCategory/{id}', [SalesController::class, 'fetchCategory'])->name('fetchCategory');
    Route::get('fetchProducts-details/{category_id}/{branch_id}', [SalesController::class, 'fetchProductsDetails'])->name('fetchProductsDetails');
    Route::resource('sale-details', SaleDetailsController::class);
    Route::resource('sale-store', SaleAddController::class);
//    sale control end
    Route::resource('users',CreateUserController::class);
    Route::resource('user-rolls',UserrollActionController::class);
//    product control
    Route::resource('products', ProductCOntroller::class);
//    product control end

//    customer control
    Route::resource('customers', CustomerController::class);
//    customer control end


//    Product searc
    Route::get('productsSearch', [SearsController::class, 'search'])->name('productsSearch');
    Route::get('productsBarcode', [SearsController::class, 'barcode'])->name('barcode');
    Route::get('productscode/{xitem}', [SearsController::class, 'code'])->name('code');
    Route::get('SearchBarcode', [SearsController::class, 'quantity'])->name('SearchBarcode');
//    Product searc end

//    invoice control
    Route::resource('invoices', InvoicePrintCOntroller::class);
//    invoice control end


//    return section
    Route::resource('return', SaleReturnController::class);

    Route::resource('return-details', ReturnDetailsController::class);

    Route::post('/searchXitem', [ReturnDetailsController::class, 'search']);

    Route::get('/detailsSearch',[ReturnDetailsController::class,'searchSystem'])->name('DetailsSearch');

});


