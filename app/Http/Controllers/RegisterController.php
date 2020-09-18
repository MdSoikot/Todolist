<?php

namespace App\Http\Controllers;

use App\Register;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller

{
    private $status_code=200;
    public function index()
    {
        $allData=Register::all();
        return view('index',compact('allData'));
    }

    public function store(Request $request)
    {
        // Register::create($request->all());

    $request->validate([
        'name'=>'required|string|max:255',
        'email'=>'required|string|email|max:255',
        'password'=>'required|string|min:5',
    ]);

  Register::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'password'=>Hash::make($request->password),

    
]);
}

    public function login(Request $request)
    
    
    {

        $email_status=Register::where("email",$request->email)->first();    

        if(!$email_status){
            return response()->json(["status"=>"failed","mail"=>$request->email,"success"=>false,"message"=>"email doesn't exit"]);
            
        }
        if(!Hash::check($request->password,$email_status->password)){
            return response()->json(["status"=>"failed","mail"=>$request->password,"success"=>false,"message"=>"password doesn't match"]);

        }
        else{
            return response()->json(["status"=>$this->status_code,"success"=>true,"message"=>"successfully login"]);

        }
    }

    
    public function delete($id)
    {
   $delete=Register::find($id);
   $delete->delete();
   return back();
    }

}
