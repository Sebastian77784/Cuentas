<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only("email","password");
        try{
            if(! $access_token = JWTAuth::attempt($credentials)){
                return response ()
                ->json(["error" => "Credenciales Invalidas"]);
            }
            $user = Auth::user();
            return response()->json([
                "token"=>$access_token,
                "user"=>$user
            ]);
        }catch(JWTException $e){
            return response()->json([
                "error"=>"Credenciales invalidas"
            ]);
        }
    }
}