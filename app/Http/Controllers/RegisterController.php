<?php

namespace App\Http\Controllers;

use App\Register;

use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index()
    {
        $allData=Register::all();
        return view('index',compact('allData'));
    }

    public function store(Request $request)
    {
        Register::create($request->all());

        // return response()->json([$request->all()]);

    }

    public function login(Request $request)
    {
        $input=$request->all();
    //    $isuser= Register::findOne()->where('email',email)
    //    $matchPassword= verfiy($isuser->pass,$request->pass)
          var_dump($request);

    }

    
    public function delete($id)
    {
   $delete=Register::find($id);
   $delete->delete();
   return back();
    }

}
