<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function storeListing(Request $request) {
        //validation
        $this->validate($request , [
            'property_type' => 'required|not_in:0',
            'property_for' => 'required|not_in:0',
            'property_space' => 'required',
            'property_address' => 'required',
        ]);
        Listing::create([
            'property_type' => $request->property_type,
            'property_for' => $request->property_for,
            'property_space' => $request->property_space,
            'property_address' => $request->property_address,
            'property_bedrooms' => $request->property_bedrooms,
            'property_bathrooms' => $request->property_bathrooms,
            'property_garges' => $request->property_garges,
            'property_desc' => $request->property_desc,
            'user_id' => auth()->user()->id
        ]);
        return back()->with('add-listing-success' , 'listing was added successfully');
    }
    public function editListing(Request $request , $id) {
        $listing = Listing::find($id);
        $listing->property_type = $request->property_type;
        $listing->property_for = $request->property_for;
        $listing->property_space = $request->property_space;
        $listing->property_address = $request->property_address;
        $listing->property_bedrooms = $request->property_bedrooms;
        $listing->property_bathrooms = $request->property_bathrooms;
        $listing->property_garges = $request->property_garges;
        $listing->save();
    }
    public function destroy($id) {
        $listing = Listing::find($id);
        $listing->delete();
    }
    public function show($id) {
        $property = Listing::find($id);
        return view('main.property')->with('property' , $property);
    }
}
