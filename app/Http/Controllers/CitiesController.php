<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\Cities;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class CitiesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $cities = Cities::where('view_flag','=','0')->get();
        return $cities;
    }
 
    public function show($id)
    {
        return Cities::find($id);
    }

    public function store(Request $request)
    {
        return Cities::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $cities = Cities::findOrFail($id);
        $cities->update($request->all());

        return $cities;
    }

    public function delete(Request $request, $id)
    {
        $cities = Cities::where('id','=',$id)->update(['view_flag' => 1]);
        return $cities;
    }
}