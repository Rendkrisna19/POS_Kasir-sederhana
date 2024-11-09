<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Login; // Import Login Livewire component

Route::get('/', App\Livewire\Pos::class);

Route::get('pos', App\Livewire\Pos::class)->name('pos');

Route::get('product', App\Livewire\ProductList::class)->name('product');
Route::get('product/create', App\Livewire\ProductCreate::class);
Route::get('product/edit/{id}', App\Livewire\ProductEdit::class)->name('posts.edit');
Route::get('order', App\Livewire\OrderList::class)->name('order');