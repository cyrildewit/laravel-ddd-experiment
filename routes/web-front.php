<?php

use Domain\Listing\Models\Listing;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\SearchController;
use App\Http\Controllers\Front\ListingController;
use App\Http\Controllers\Front\DestinationAutocompleteController;

// Auth::loginUsingId(1);
// Auth::guard('management')->loginUsingId(1);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/destination-autocomplete', [DestinationAutocompleteController::class, 'search'])->name('search.destination-autocomplete');
Route::get('/listings/{id}', [ListingController::class, 'show'])->name('listings.show');
// Route::get('/{listingType}/{areaSlug}/{listingSlug}/{id}', [ListingController::class, 'show'])->name('listing.show');
