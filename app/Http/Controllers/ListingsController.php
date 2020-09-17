<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listings;
use App\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class ListingsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listings = Listings::with('categories','users')->where('view_flag','=','0')->get();
        return $listings;
    }
 
    public function show($id)
    {
        // return Listings::find($id);
        // $Listing = Listings::select('testing_table.*','sample_category.id AS s_id','sample_category.listing_id','sample_category.category_id')->join('sample_category', 'sample_category.listing_id', '=', 'testing_table.id')->where('testing_table.id','=',$id)->get();

        $Listings = Listings::with('categories','users')->where('testing_table.id','=',$id)->get();
        
        return $Listings;
    }

    public function store(Request $request)
    {
        $listing = Listings::create($request->all());

        $category = $listing->categories()->create([
            'category_id' => $request->input('category_id')
        ]);

        // $user = $listing->users()->create($request->all());

        return response()->json([
            'listing' => $listing,
            'category' => $category,
            // 'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $Listing = Listings::findOrFail($id);
        $Listing->update($request->all());

        return $Listing;
    }

    public function delete(Request $request, $id)
    {
        $Listing = Listings::where('id','=',$id)->update(['view_flag' => 1]);
        // $Listing->delete();

        return $Listing;
    }
}