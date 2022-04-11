<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Listing;

class CarController extends Controller
{
    //
    public function index() {
        $listings = Listing::paginate(30);
        return view('cars.index', [
            'listings' => $listings
        ]);
    }

    public function show($id) {
        $listing = Listing::find($id);
        if(!$listing) abort(404);
        $images = $listing->images;
        return view('cars.show',compact('listing','images'));
    }
}
