<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{   
    //show all listings
     public function index(){
        return view ('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(8) //we can also use simplepaginate instade of paginate to show next/prev instade of numbers
        ]);
     }

     //show single listing
     public function show(Listing $listing){
        return view ('listings.show', [
            'listing' => $listing
        ]);
     }

     // Show Create Form
     public function create(){  
         return view('listings.create');
     }

     // Store Listing Data
     public function store(Request $request){
         $formFields = $request->validate([
             'title' => 'required',
             'company' => ['required', Rule::unique('listings', 'company')],
             'location' => 'required',
             'description' => 'required',
             'website' => 'required',
             'email' => ['required', 'email'],
             'tags' => 'required'
         ]);

         if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

         Listing::create($formFields);

         
         return redirect('/')->with('message', 'Listing created Successfully!');
     }
}