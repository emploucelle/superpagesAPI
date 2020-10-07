<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listing_workinghours;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class ListingworkinghoursController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listing_workinghours = Listing_workinghours::where('view_flag','=','0')->get();
        return $listing_workinghours;
    }
 
    public function show($id)
    {
        return Listing_workinghours::find($id);
    }

    public function store(Request $request)
    {
        return Listing_workinghours::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $listing_workinghours = Listing_workinghours::findOrFail($id);
        $listing_workinghours->update($request->all());

        return $listing_workinghours;
    }

    public function delete(Request $request, $id)
    {
        $listing_workinghours = Listing_workinghours::where('id','=',$id)->update(['view_flag' => 1]);
        return $listing_workinghours;
    }
}