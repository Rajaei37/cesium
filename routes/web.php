<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/contact', [LandingPageController::class, 'contact'])->name('contact');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');



Route::get("/contact-us", function () {
    return Inertia::render("ContactUs");
})->name("contact-us");




Route::get("/what-we-offer", [LandingPageController::class, 'whatWeOffer'])->name("what-we-offer");




Route::get("/join-our-team", function () {
    return Inertia::render("JoinOurTeam");
})->name("join-our-team");


