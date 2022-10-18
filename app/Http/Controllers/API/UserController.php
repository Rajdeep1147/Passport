<?php

namespace App\Http\Controllers\API;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{
    public function userShow()
    {
        
        $user = User::all();
        dd($user);
    }

    public function userLogin(Request $request)
    {
        
        $input = $request->all();
        $validation = Validator::make($input,[
            'email'=>'required',
            'password'=>'required'
        ]);
       

        if($validation->fails()){
           
            return response()->json(['error'=>$validation->errors()],422);
        }
       
        if (auth()->attempt($input)) {
           
            $token = auth()->user()->createToken('passport_token')->accessToken;
            
            
            return response()->json([
                'success' => true,
                'message' => 'User login succesfully, Use token to authenticate.',
                'token' => $token
            ], 200);
        }
        return $input;
    }
}
