<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $featured_listings = Listing::inRandomOrder()->limit(3)->get();
        return view('main.index')->with('featured_listings' , $featured_listings);
    }
    public function listings() {
        $listings = Listing::orderBy('id' , 'DESC')->paginate(6);
        return view('main.listings')->with('listings' , $listings);
    }
    public function search(Request $request) {
        $type = $request->property_search_type;
        $location = $request->property_search_location;
        $rooms = $request->property_search_rooms;
        if ($type == '' && $location == '' && $rooms == '') {
            $listings = Listing::orderBy('id' , 'DESC')->paginate(6);
            return view('main.listings')->with('listings' , $listings);
        } else if ($type != '' && $rooms == '' && $location == '' ) {
            $listings = Listing::where('property_type' , $type)->paginate(100);
            return view('main.listings')->with('listings' , $listings);
        } else if ($type == '' && $location != '' && $rooms == '') {
            $listings = Listing::where('property_address' , 'Like' , '%'.$location.'%')->paginate(100);
            return view('main.listings')->with('listings' , $listings);
        } else if ($type == '' && $location == '' && $rooms != ''){
            $listings = Listing::where('property_bedrooms' , $rooms)->paginate(100);
            return view('main.listings')->with('listings' , $listings);
        }
    }
}
