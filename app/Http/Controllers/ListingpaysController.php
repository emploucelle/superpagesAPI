<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listing_pays;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class ListingpaysController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listing_pays = Listing_pays::where('view_flag','=','0')->get();
        return $listing_pays;
    }
 
    public function show($id)
    {
        return Listing_pays::find($id);
    }

    public function store(Request $request)
    {
        return Listing_pays::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $listing_pays = Listing_pays::findOrFail($id);
        $listing_pays->update($request->all());

        return $listing_pays;
    }

    public function delete(Request $request, $id)
    {
        $listing_pays = Listing_pays::where('id','=',$id)->update(['view_flag' => 1]);
        return $listing_pays;
    }
}