<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Listing;
use Illuminate\Support\Facades\File;

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
    public function destroy(Request $req, $id) {
        $listing = Listing::findOrFail($id);
        $images=Image::where("listing_id",$listing->id)->get();
        foreach($images as $image){
            if (File::exists("listing_images/".$image->image)) {
                File::delete("listing_images/".$image->image);
            }
        }
        Image::where("listing_id",$listing->id)->delete();
        $listing->delete();
        return redirect('/listings');
    }

    // edit
    public function edit($id) {
        $listing = Listing::findOrFail($id);
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $req, $id) {
        $listing = Listing::findOrFail($id);
        $listing->stock = request('stock');
        $listing->make = request('make');
        $listing->model = request('model');
        $listing->manufacture = request('manufacture');
        $listing->mileage = request('mileage');
        $listing->transmission = request('transmission');
        $listing->fuel = request('fuel');
        $listing->body = request('body');
        $listing->drive = request('drive');
        $listing->exterior = request('exterior');
        $listing->price = request('price');

        $listing->update();

        if($req->hasFile("images")){
            $images=Image::where("listing_id",$listing->id)->get();
            foreach($images as $image){
                if (File::exists("listing_images/".$image->image)) {
                    File::delete("listing_images/".$image->image);
                }
            }
            Image::where("listing_id",$listing->id)->delete();
            // update
            $images=$req->file("images");
            foreach($images as $image){
                $imageName = $req->make.'-image-'.time().rand(1,1000).'.'.$image->extension();
                $request["listing_id"]=$id;
                $request["image"]=$imageName;
                $image->move(public_path('listing_images'),$imageName);
                Image::create([
                    'listing_id'=>$listing->id,
                    'image'=>$imageName
                ]);

            }
        }

        return back()->with('success', 'Added');
    }

}
