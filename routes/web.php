<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing


// All listings
Route::get('/', [ListingController::class, 'index']);

// Check if id vaild using Route model binding 
Route::get('/listings/{listing}', [ListingController::class, 'show']);