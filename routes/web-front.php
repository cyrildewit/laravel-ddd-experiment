<?php

use Carbon\Carbon;
use Spatie\Period\Period;
use App\Domain\Users\Models\User;
use App\Domain\Rooms\Models\Room;
use Illuminate\Support\Facades\Auth;
use App\Domain\Listings\Models\Listing;

// Auth::loginUsingId(1);
// Auth::guard('management')->loginUsingId(1);


Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/search', 'SearchController@index')->name('search.index');
Route::get('/listings/{id}', 'ListingController@show')->name('listing.show');
// Route::get('/{listingType}/{areaSlug}/{listingSlug}/{id}', 'ListingController@show')->name('listing.show');
