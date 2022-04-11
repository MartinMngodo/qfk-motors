<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Listing;

class HomepageController extends Controller
{
    //
    public function index() {
        // $listings = Listing::limit(4)->get();
        $listings = Listing::latest()->where('stock', 'in-stock')->limit(8)->get();
        $shippinglistings = Listing::latest()->where('stock', 'shipping')->limit(8)->get();
        $soldlistings = Listing::latest()->where('stock', 'sold')->limit(4)->get();
        return view('index', [
            'listings' => $listings,
            'shippinglistings' => $shippinglistings,
            'soldlistings' => $soldlistings
        ]);
    }


    public function show($id) {
        $listing = Listing::find($id);
        if(!$listing) abort(404);
        $images = $listing->images;
        return view('cars.show',compact('listing','images'));
    }
}
