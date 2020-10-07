<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listing_images;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class ListingimagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listing_images = Listing_images::where('view_flag','=','0')->get();
        return $listing_images;
    }
 
    public function show($id)
    {
        return Listing_images::find($id);
    }

    public function store(Request $request)
    {
        return Listing_images::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $listing_images = Listing_images::findOrFail($id);
        $listing_images->update($request->all());

        return $listing_images;
    }

    public function delete(Request $request, $id)
    {
        $listing_images = Listing_images::where('id','=',$id)->update(['view_flag' => 1]);
        return $listing_images;
    }
}