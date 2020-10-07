<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Listings;
use App\Category;
use App\CategoryDesc;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class CategoryDescriptionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // return Category::all();
        $category_desc = CategoryDesc::where('view_flag','=','0')->get();
        return $category_desc;
    }
 
    public function show($id)
    {
        return CategoryDesc::find($id); 
    }

    public function store(Request $request)
    {
        return CategoryDesc::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $category_desc = CategoryDesc::findOrFail($id);
        $category_desc->update($request->all());

        return $category_desc;
    }

    public function delete(Request $request, $id)
    {
        $category_desc = CategoryDesc::where('id','=',$id)->update(['view_flag' => 1]);
        // $Listing->delete();
        return $category_desc;
    }
}