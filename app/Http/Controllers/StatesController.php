<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;
use App\States;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
 
class StatesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        // return Category::all();
        $states = States::where('view_flag','=','0')->get();
        return $states;
    }
 
    public function show($id)
    {
        return States::find($id);
    }

    public function store(Request $request)
    {
        return States::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $states = States::findOrFail($id);
        $states->update($request->all());

        return $states;
    }

    public function delete(Request $request, $id)
    {
        $states = States::where('id','=',$id)->update(['view_flag' => 1]);
        return $states;
    }
}