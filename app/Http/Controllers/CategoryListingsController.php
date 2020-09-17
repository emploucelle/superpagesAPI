<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listings;
use App\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class CategoryListingsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // return Category::all();
        $category = Category::where('view_flag','=','0')->get();
        return $category;
    }
 
    public function show($id)
    {
        return Category::find($id);
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return $category;
    }

    public function delete(Request $request, $id)
    {
        $Listing = Category::where('id','=',$id)->update(['view_flag' => 1]);
        // $Listing->delete();
        return $Listing;
    }
}