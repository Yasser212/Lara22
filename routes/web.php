<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;


// All listings
Route::get('/', function(){
    return view ('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});

// Single listing
// Check if id vaild ist using ifelse and abort 404
// Route::get('/listings/{id}', function($id){
//     $listing = listing::find($id);

//     if($listing){
//         return view ('listing', [
//             'listing' => listing::find($id)
//         ]);
//     }
//     else{
//         abort('404');
//     }
// });

// Check if id vaild using Route model binding 
Route::get('/listings/{listing}', function(Listing $listing){
    return view ('listing', [
        'listing' => $listing
    ]);
});