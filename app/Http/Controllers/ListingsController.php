<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listings;
use App\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class ListingsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listings = Listings::with('categories','users','states','cities','listing_workinghours','listing_pays','listing_images')->where('view_flag','=','0')->get();
        // $listings = DB::Select('')
    //     $listings = DB::table('listings')
    //    ->join('states', 'states.id', '=', 'listings.state_id')
    //    ->join('cities', 'cities.id', '=', 'listings.citie_id')
    // //    ->join('listing_workinghours', 'listing_workinghours.listing_id', '=', 'listings.id')
    //    ->select('listings.*','states.State','states.slug as state_slug','states.Code as state_code','states.ADM1Code  as states_ADM1Code','states.price as states_price','states.seo_friendly_title as states_seo_friendly_title','cities.id','cities.StateID','cities.City as cities_city','cities.Latitude as cities_latitude','cities.Longitude as cities_longitude','cities.TimeZone as cities_timezone','cities.DmaId as cities_dmaId','cities.image as cities_image','cities.slug as cities_slug','cities.postcode as cities_postcode','cities.price as cities_price','cities.default as cities_default','cities.is_featured as cities_is_featured','cities.seo_friendly_title as cities_friendly_title','cities.seo_meta_description as cities_seo_meta_desc','cities.seo_meta_keyword as cities_seo_meta_keyword','cities.contents as cities_contents','cities.searchfld as cities_searchfld')
    //    ->get();

    //    $listing_workinghours = DB::table('listing_workinghours')
    //    ->join('listings', 'listings.id', '=', 'listing_workinghours.listing_id')
    //    ->get();

    //    return response()->json([
    //     'listing' => $listings,
    //     'listing_workinghours' => $listing_workinghours,
    // ]);

        return $listings;
    }
 
    public function show($id)
    {
        // return Listings::find($id);
        // $Listing = Listings::select('testing_table.*','sample_category.id AS s_id','sample_category.listing_id','sample_category.category_id')->join('sample_category', 'sample_category.listing_id', '=', 'testing_table.id')->where('testing_table.id','=',$id)->get();

        // $Listings = Listings::with('categories')->where('listings.id','=',$id)->get();
        $Listings = Listings::with('categories','users','states','cities','listing_workinghours','listing_pays','listing_images')->where('listings.id','=',$id)->get();
        
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