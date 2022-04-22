<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

   Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

    Route::get('/affiliate', [App\Http\Controllers\AffiliateController::class, 'index'])->name('affiliate');

    Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');

    Route::get('/blog-detail', [App\Http\Controllers\BlogDetailController::class, 'index'])->name('blog-detail');

    Route::get('/application-form', [App\Http\Controllers\ApplicationController::class, 'index'])->name('application-form');

Route::get('/construction', [App\Http\Controllers\ConstructionController::class, 'index'])->name('construction');

Route::get('/book-inspection', [App\Http\Controllers\BookInspectionController::class, 'index'])->name('book-inspection');

Route::get('/cis-form', [App\Http\Controllers\CisFormController::class, 'index'])->name('cis-form');

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery');

Route::get('/consultancy', [App\Http\Controllers\ConsultancyController::class, 'index'])->name('consultancy');

Route::get('/lifting-form', [App\Http\Controllers\LiftingFormController::class, 'index'])->name('lifting-form');

Route::get('/consultants-form', [App\Http\Controllers\ConsultantsController::class, 'index'])->name('consultants-form');

Route::get('/estate-detail', [App\Http\Controllers\EstatedetailController::class, 'index'])->name('estate-detail');

Route::get('/our-work', [App\Http\Controllers\OurWorkController::class, 'index'])->name('our-work');

Route::get('/our-estate', [App\Http\Controllers\OurEstateController::class, 'index'])->name('our-estate');

Route::get('/site-form', [App\Http\Controllers\SiteFormController::class, 'index'])->name('site-form');

Route::get('/property-form', [App\Http\Controllers\PropertySearchController::class, 'index'])->name('property-form');

Route::get('/real-estate', [App\Http\Controllers\RealEstateController::class, 'index'])->name('real-estate');

Route::get('/career', [App\Http\Controllers\CareerController::class, 'index'])->name('career');


