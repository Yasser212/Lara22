<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;


// All Listings
Route::get('/', function(){
    return view ('Listings', [
        'heading' => 'Latest Listings',
        'Listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/Listings/{id}', function($id){
    return view ('Listing', [
        'Listing' => Listing::find($id)
    ]);
});