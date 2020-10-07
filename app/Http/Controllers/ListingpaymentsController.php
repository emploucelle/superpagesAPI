<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listing_payments;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class ListingpaymentsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $listing_payments = Listing_payments::where('view_flag','=','0')->get();
        return $listing_payments;
    }
 
    public function show($id)
    {
        return Listing_payments::find($id);
    }

    public function store(Request $request)
    {
        return Listing_payments::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $listing_payments = Listing_payments::findOrFail($id);
        $listing_payments->update($request->all());

        return $listing_payments;
    }

    public function delete(Request $request, $id)
    {
        $listing_payments = Listing_payments::where('id','=',$id)->update(['view_flag' => 1]);
        return $listing_payments;
    }
}