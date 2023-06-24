<?php

namespace App\Http\Controllers\ApiControllers;
use App\Models\Rate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Coash;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller {

    public function login(Request $request){

        try {
            $request -> validate([
                'email' => ['required' , 'email', 'max:255'],
                'password' => ['required', 'min:8'],
            ]);
        } catch (\Throwable $th) {
            return Response()->json([
                'success' => false,
                'message' => 'entered data not valid',
                'data' => $th->getMessage()
            ] , 404);
        }

        $email = $request->input('email');
        $credentials = $request->only('email', 'password');
        
        $user = User::where('email' , $email)->first();
        if ($user->type=='coach') 
        {
            $Coash = Coash::where('user_id' ,$user->id)->first();
            $user = User::where('email' , $email)->first();
            try {
                if (Auth::attempt($credentials)){
                    return Response()->json([
                        'success' => true,
                        'message' => 'Logged in done successfully',
                        'data' => $user,
                        'coash'=>$Coash
                    ]);
                }
            } catch (\Throwable $th) {
                return Response()->json([
                    'success' => false,
                    'message' => 'User Logged in failed',
                    'data' => $th->getMessage()
                ], 404);
            }
    
    
            return Response()->json([
                'success' => false,
                'message' => 'User Logged in failed',
                'data' => 'null'
            ], 404);
        }
        try {
            if (Auth::attempt($credentials)){
                return Response()->json([
                    'success' => true,
                    'message' => 'Logged in done successfully',
                    'data' => $user
                ]);
            }
        } catch (\Throwable $th) {
            return Response()->json([
                'success' => false,
                'message' => 'User Logged in failed',
                'data' => $th->getMessage()
            ], 404);
        }


        return Response()->json([
            'success' => false,
            'message' => 'User Logged in failed',
            'data' => 'null'
        ], 404);
    }



    public function register(Request $request){

        try {
            $request -> validate([
                'name'     => ['required', 'string', 'max:255'],
                'email'     => ['required' , 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
                'phone_number' => ['required', 'string'],
                'image_url' => ['required', 'string'],
                'height' => ['required' , 'integer'],
                'weight' => ['required' , 'integer'],
                'age' => ['required' , 'integer'],
                'fat_percentage' => ['required' , 'integer'],
                'gender' => ['required' , 'string'],
                'membership' => ['string'],
                'coash_name' => ['string'],
                
            ]);
        } catch (\Throwable $th) {
            return Response()->json([
                'success' => false,
                'message' => 'entered data not valid',
                'data' => $th->getMessage()
            ] , 404);
        }


        try {
            $user = new User();
            $user -> name = $request->input('name');
            $user -> email = $request->input('email');
            $user -> password  = Hash::make($request->input('password'));
            $user -> phone_number = $request->input('phone_number');
            $user -> image_url = $request->input('image_url');
            $user -> height = $request->input('height');
            $user -> weight = $request->input('weight');
            $user -> age = $request->input('age');
            $user -> fat_percentage = $request->input('fat_percentage');
            $user -> account_status = 'Active';
            $user -> gender = $request->input('gender');
            $user -> membership =  $request->input('membership');
            $user -> coash_name =  $request->input('coash_name');
    
            $user -> api_token = bin2hex(openssl_random_pseudo_bytes(30));
            $user -> save();


            $rate=Rate::create([
                'training'    =>0,
                'feeding'    =>0,
                'user_id'     => $user->id,
                // 'Coash_id'    =>$request->Coash_id,
                'Regularity'  =>0,
                'Response'    =>0,
                'Total'      =>0,
                ]);
            return Response()->json([
                'success' => true,
                'message' => 'User created successfully',
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'User created failed',
                'data' => $e->getMessage()
            ], 404);
        }



        
    }




    public function getUserData($id){
        $user = User::where('id' , $id)->first();
    
       
        try {

            if ($user == null) {
                return Response()->json([
                    'success' => false,
                    'message' => 'failed',
                    'data' => "null"
                ], 404);
            }else{
                return Response()->json([
                    'success' => true,
                    'message' => 'successfully',
                    'data' => $user
                ]);
            }
    
            
            } catch (\Throwable $th) {
                return Response()->json([
                    'success' => false,
                    'message' => 'failed',
                    'data' => "null"
                ], 404);
            }
    }

}