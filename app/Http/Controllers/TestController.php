<?php

namespace App\Http\Controllers;
use App\Service\ServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    public function customProvider(ServiceInterface $myservice)
    {
        $myservice->doAwesomeThing();
    }

    public function customHelper()
    {
        return createDateFormat(date('Y-m-d'),'d-m-Y');
        $image_name ='example.png';
        $full_path  =  productImagePath($image_name);
        return $full_path;
    }

    public function index(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return response([
                "message"=>["Creadentials Does Not Match the Records"]
            ],[404]);
        }
        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user'=>$user,
            'token'=>$token
        ];

        return response($response,200);
    }

    public function getUser()
    {
        $users = User::get();
        return ["result"=>$users];
    }

    public function fileUpload(Request $request)
    {
       $result = $request->file('thisimage')->store('myimages');
       return ["result"=>$result];
    }
}