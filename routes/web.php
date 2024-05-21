<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

Route::get('/', function () {
    return view('welcome');
});

//=======FOR CREATE INTERFACE FIRST=======

//Layout
Route::get('/layout', function(){
    return view('layout.layout');
});

//Dashboard
Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
})->name('dashboard');

//Inventory Product
Route::prefix('product')->group(function() {
    //Product
    Route::get('/product', function(){
        return view('inventory.product.product.index');
    })->name('product');
    Route::get('/product/create', function(){
        return view('inventory.product.product.create');
    })->name('product-create');
    Route::get('/product/edit', function(){
        return view('inventory.product.product.edit');
    })->name('product-edit');

    //Category
    Route::get('/category', function(){
        return view('inventory.product.category.index');
    })->name('category');

    //Category
    Route::get('/unit', function(){
        return view('inventory.product.unit.index');
    })->name('unit');
});

Route::prefix('restock')->group(function() {
    //Restock
    Route::get('/restock', function(){
        return view('inventory.restock.restock.index');
    });
    Route::get('/restock/create', function(){
        return view('inventory.restock.restock.create');
    });
    Route::get('/restock/edit', function(){
        return view('inventory.restock.restock.edit');
    });

    //Archive
    Route::get('/archive', function(){
        return view('inventory.restock.archive.index');
    });
    Route::get('archive/show', function(){
        return view('inventory.restock.archive.show');
    });
});

Route::prefix('branch')->group(function(){
    //Branch
    Route::get('/branch', function(){
        return view('inventory.branch.branch.index');
    });

    //Detail Branch
    Route::get('/branch-detail', function(){
        return view('inventory.branch.detail-branch.index');
    });
});

Route::prefix('customer')->group(function(){
    //Customer
    Route::get('/customer', function(){
        return view('inventory.customer.index');
    });
});

Route::prefix('sale')->group(function(){
    //Sale
    Route::get('/sale', function(){
        return view('inventory.sale.index');
    });
    Route::get('/sale/show', function(){
        return view('inventory.sale.show');
    });
});

Route::prefix('distribution')->group(function(){
    //Distribution
    Route::get('/distribution', function(){
        return view('inventory.distribution.distribution.index');
    });
    Route::get('/distribution/edit', function(){
        return view('inventory.distribution.distribution.edit');
    });

    //Archive
    Route::get('/archive', function(){
        return view('inventory.distribution.archive.index');
    });
    Route::get('/archive/show', function() {
        return view('inventory.distribution.archive.show');
    });
});

Route::prefix('supplier')->group(function(){
    Route::get('/supplier', function(){
        return view('inventory.supplier.index');
    });
});
