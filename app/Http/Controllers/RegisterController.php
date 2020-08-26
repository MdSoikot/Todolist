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
        dd($allData);
    }

    public function store(Request $request)
    {
        Register::create($request->all());

        // return response()->json([$request->all()]);

    }
}
