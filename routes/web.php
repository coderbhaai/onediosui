<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\About;
use App\Http\Livewire\Pages\Customersupport;
use App\Http\Livewire\Pages\Faq;
use App\Http\Livewire\Pages\Fourofour;
use App\Http\Livewire\Pages\Thankyou;
use App\Http\Livewire\Pages\Tnc;

use App\Http\Livewire\Ecom\Cart;




Route::get("/", Home::class)->name('home');
Route::get("/about", About::class)->name('about');
Route::get("/customer-support", Customersupport::class)->name('customerSupport');
Route::get("/faq", Faq::class)->name('faq');
Route::get("/404", Fourofour::class)->name('404');
Route::get("/thank-you", Thankyou::class)->name('thankyou');
Route::get("/terms-and-conditions", Tnc::class)->name('tnc');

Route::get("/cart", Cart::class)->name('cart');
