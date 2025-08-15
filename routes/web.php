<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/contact', [LandingPageController::class, 'contact'])->name('contact');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Blog Post API routes
Route::prefix('api/blog-posts')->group(function () {
    Route::get('/', [BlogPostController::class, 'index']);
    Route::get('/latest', [BlogPostController::class, 'latest']);
    Route::post('/', [BlogPostController::class, 'store']);
    Route::get('/{slug}', [BlogPostController::class, 'show']);
    Route::put('/{id}', [BlogPostController::class, 'update']);
    Route::delete('/{id}', [BlogPostController::class, 'destroy']);
});

Route::get("/contact-us", function () {
    return Inertia::render("ContactUs");
})->name("contact-us");

Route::get("/what-we-offer", [LandingPageController::class, 'whatWeOffer'])->name("what-we-offer");

Route::get("/our-process", function () {
    return Inertia::render("OurProcess", [
        'title' => 'Our Process - Cesium Marketing'
    ]);
})->name("our-process");

Route::get("/join-our-team", function () {
    return Inertia::render("JoinOurTeam");
})->name("join-our-team");

Route::get("/services", function () {
    return Inertia::render("ServicesPage");
})->name("services");


