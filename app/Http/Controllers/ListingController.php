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

    //Show Edit Form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

        // Update Listing Data
        public function update(Request $request, Listing $listing){
            $formFields = $request->validate([
                 'title' => 'required',
                 'company' => 'required',
                 'location' => 'required',
                 'description' => 'required',
                 'website' => 'required',
                 'email' => ['required', 'email'],
                 'tags' => 'required'
            ]);
    
            if($request->hasFile('logo')) {
                $formFields['logo'] = $request->file('logo')->store('logos', 'public');
            }
    
            $listing->update($formFields);
            return back()->with('message', 'Listing updated successfully!');
        }

        //Delete Listing
        public function destroy(Listing $listing){
            $listing->delete();
            return redirect('/')->with('message', 'Listing deleted successfully!');
        }
}