<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Listing;

class ListingController extends Controller
{
    // Authentication
    public function __construct() {
        $this->middleware('auth');
    }

    // Index
    public function index() {
        $listings = Listing::paginate(10);
        return view('listings.index', [
            'listings' => $listings
        ]);
    }

    // Show
    public function show($id) {
        // $listing = Listing::findOrFail($id);
        // return view('listings.show', ['listing' => $listing]);
        $listing = Listing::find($id);
        if(!$listing) abort(404);
        $images = $listing->images;
        return view('listings.show',compact('listing','images'));
    }

    // Create
    public function create() {
        return view('listings.create');
    }

    // Post
    public function store(Request $req) {

        $data = $req->validate([
            'stock'=>'required',
            'make'=>'required',
            'model'=>'required',
            'manufacture'=>'required',
            'mileage'=>'required',
            'transmission'=>'required',
            'fuel'=>'required',
            'body'=>'required',
            'drive'=>'required',
            'exterior'=>'required',
            'price'=>'required'
        ]);
        $new_listing = Listing::create($data);
        if($req->has('images')){
            foreach($req->file('images')as $image){
                $imageName = $data['make'].'-image-'.time().rand(1,1000).'.'.$image->extension();
                $image->move(public_path('listing_images'),$imageName);
                Image::create([
                    'listing_id'=>$new_listing->id,
                    'image'=>$imageName
                ]);
            }
        }

        return back()->with('success', 'Added');
    }

    // destroy
    public function destroy($id) {
        $listing = Listing::findOrFail($id);
        $listing->delete();

        return redirect('/listings');
    }

    // edit
    public function edit($id) {
        $listing = Listing::findOrFail($id);
        return view('listings.edit', ['listing' => $listing]);
    }

    // update
    public function update($id) {
        $listing = Listing::findOrFail($id);
        $listing->stock = request('stock');
        $listing->update();

        return back()->with('success', 'Added');
    }
}
