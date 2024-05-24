<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\OrderController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\GalleryController;
use App\Http\Controllers\Admin\Market\PaymentController;
use App\Http\Controllers\Admin\Market\ProductController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use App\Http\Controllers\Admin\Market\DiscountController;

// |---------------------------------------------------------------
// admin

Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.home');

    Route::prefix('market')->namespace('Narket')->group(function(){
        //create category route in admin panell

    Route::prefix('category')->group(function(){
        Route::get('/',[CategoryController::class,'index'])->name('admin.market.category.index');
        Route::get('/create',[CategoryController::class,'create'])->name('admin.market.category.create');
        Route::post('/store',[CategoryController::class,'store'])->name('admin.market.category.store');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('admin.market.category.edit');
        Route::put('/update/{id}',[CategoryController::class,'update'])->name('admin.market.category.update');
        Route::delete('/destroy/{id}',[CategoryController::class,'destroy'])->name('admin.market.category.destroy');
    });

        //brand

        Route::prefix('brand')->group(function(){
        Route::get('/',[BrandController::class,'index'])->name('admin.market.brand.index');
        Route::get('/create',[BrandController::class,'create'])->name('admin.market.brand.create');
        Route::post('/store',[BrandController::class,'store'])->name('admin.market.brand.store');
        Route::get('/edit/{id}',[BrandController::class,'edit'])->name('admin.market.brand.edit');
        Route::put('/update/{id}',[BrandController::class,'update'])->name('admin.market.brand.update');
        Route::delete('/destroy/{id}',[BrandController::class,'destroy'])->name('admin.market.brand.destroy');
    });

    //comments

        Route::prefix('comment')->group(function(){
        Route::get('/',[CommentController::class,'index'])->name('admin.market.comment.index');
        Route::get('/show',[CommentController::class,'show'])->name('admin.market.comment.show');
        Route::post('/store',[CommentController::class,'store'])->name('admin.market.comment.store');
        Route::get('/edit/{id}',[CommentController::class,'edit'])->name('admin.market.comment.edit');
        Route::put('/update/{id}',[CommentController::class,'update'])->name('admin.market.comment.update');
        Route::delete('/destroy/{id}',[CommentController::class,'destroy'])->name('admin.market.comment.destroy');
    });

        //deliver

        Route::prefix('delivery')->group(function(){
        Route::get('/',[DeliveryController::class,'index'])->name('admin.market.delivery.index');
        Route::get('/create',[DeliveryController::class,'create'])->name('admin.market.delivery.create');
        Route::post('/store',[DeliveryController::class,'store'])->name('admin.market.delivery.store');
        Route::get('/edit/{id}',[DeliveryController::class,'edit'])->name('admin.market.delivery.edit');
        Route::put('/update/{id}',[DeliveryController::class,'update'])->name('admin.market.delivery.update');
        Route::delete('/destroy/{id}',[DeliveryController::class,'destroy'])->name('admin.market.delivery.destroy');
    });


        //discount

        Route::prefix('discount')->group(function(){
        Route::get('/copan',[DiscountController::class,'copan'])->name('admin.market.Discount.copan');
        Route::get('/copan/create',[DiscountController::class,'CopanCreate'])->name('admin.market.Discount.copan.create');
        Route::get('/common-discount',[DiscountController::class,'commonDiscount'])->name('admin.market.Discount.commomDiscount');
        Route::get('/common-discount/create',[DiscountController::class,'commonDiscountCreate'])->name('admin.market.Discount.commomDiscountCreate');
        Route::get('/amazing-sale',[DiscountController::class,'amazingSale'])->name('admin.market.Discount.amazingSale');
        Route::get('/amazing-sale/create',[DiscountController::class,'amazingSaleCreate'])->name('admin.market.Discount.amazingSaleCreate');
    });

            //order

        Route::prefix('order')->group(function(){
        Route::get('/',[OrderController::class,'all'])->name('admin.market.Order.all');
        Route::get('/new-order',[OrderController::class,'newOrders'])->name('admin.market.Order.newOrders');
        Route::get('/sending',[OrderController::class,'sending'])->name('admin.market.Order.sending');
        Route::get('/unpaid',[OrderController::class,'unpaid'])->name('admin.market.Order.unpaid');
        Route::get('/canceled',[OrderController::class,'canceled'])->name('admin.market.Order.canceled');
        Route::get('/returned',[OrderController::class,'returned'])->name('admin.market.Order.returned');
        Route::get('/show',[OrderController::class,'show'])->name('admin.market.Order.show');
        Route::get('/change-send-status',[OrderController::class,'changeSendStatus'])->name('admin.market.Order.changeSendStatus');
        Route::get('/change-order-status',[OrderController::class,'changeOrderStatus'])->name('admin.market.Order.changeOrderStatus');
        Route::get('/cancel-order',[OrderController::class,'cancelOrder'])->name('admin.market.Order.cancelOrder');
    });


            //order

        Route::prefix('payment')->group(function(){
        Route::get('/',[PaymentController::class,'index'])->name('admin.market.payment.index');
        Route::get('/online',[PaymentController::class,'online'])->name('admin.market.payment.online');
        Route::get('/offline',[PaymentController::class,'offline'])->name('admin.market.payment.offline');
        Route::get('/attendance',[PaymentController::class,'attendance'])->name('admin.market.payment.attendance');
        Route::get('/confirm',[PaymentController::class,'confirm'])->name('admin.market.payment.confirm');
    });

                //product

        Route::prefix('product')->group(function(){
        Route::get('/',[ProductController::class,'index'])->name('admin.market.product.index');
        Route::get('/create',[ProductController::class,'create'])->name('admin.market.product.create');
        Route::post('/store',[ProductController::class,'store'])->name('admin.market.product.store');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->name('admin.market.product.edit');
        Route::put('/update/{id}',[ProductController::class,'update'])->name('admin.market.product.update');
        Route::delete('/destroy/{id}',[ProductController::class,'destroy'])->name('admin.market.product.destroy');

        // gallery
        Route::get('/gallery',[GalleryController::class,'index'])->name('admin.market.gallery.index');
        Route::post('/gallery/store',[GalleryController::class,'store'])->name('admin.market.gallery.store');
        Route::delete('/gallery/destroy/{id}',[GalleryController::class,'destroy'])->name('admin.market.gallery.destroy');
    });



    });
});

