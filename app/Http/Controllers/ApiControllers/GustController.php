<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Muscle;
use App\Models\Exercise;
use App\Models\Coash;
use App\Models\Rate;
use App\Models\Ratecoash;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\CoashResource;
use App\Http\Resources\CountryResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class GustController extends Controller
{

    public function getprofil($id) {
        // $validator=Validator::make($request->all(),[
        //     'id' =>'required | exists:users,id',
        //     ]);
            
        //     if($validator->fails())
        //     {
        //         return response()->json([
        //             'status'=>false,
        //             'message'=>$validator->errors(),
        //         ]);
        //     }
            $user=User::find($id);

            if ($user) {
                return response()->json([
                    'status'=>true,
                    'users'=>new UserResource($user)
                ]); 
            }
            return response()->json([
                'status'=>false,
                'message'=>'user not found',
            ]);
           
    }
    public function users()
    {
        $users=User::get();
        return response()->json([
            'status'=>true,
            'users'=>UserResource::collection($users)->response()->getData(true)
        ]); 
    }
    public function coaches()
    {
        $Coash=Coash::get();
        return response()->json([
            'status'=>true,
            'Coashs'=>CoashResource::collection($Coash)->response()->getData(true)
        ]); 
    }
    public function customcoach(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id'   =>'required|exists:coaches,id',
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ],400);
        }
        $coach=Coash::find($request->id);
        return response()->json([
            'status'=>true,
            'coach'=>new CoashResource($coach),
        ]); 
    }

   

    public function updaterate(Request $request) 
    { 
        $validator = Validator::make($request->all(), [
            // 'id'=>'required|exists:rates,id',
            'Coash_id'   =>'required|exists:coaches,id',
            'user_id'   =>'required|exists:users,id',
            'training'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'feeding'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'Regularity'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'Response'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'Total'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ],400);
        }
        $rate=Rate::where('user_id',$request->user_id)->first();

        $rate->update([
        'training'    =>$request->training,
        'feeding'    =>$request->feeding,
        'user_id'     =>$request->user_id,
        'Coash_id'    =>$request->Coash_id,
        'Regularity'  =>$request->Regularity,
        'Response'    =>$request->Response,
        'Total'      =>$request->Total ,
        ]);
        if ($rate) {
            return response()->json([
                'status'=>true,
                'message'=>'rate updated',
            ],200);
        }
        return response()->json([
            'status'=>false,
            'message'=>'rate updated faild',
        ],200);

    }
    public function updateratecoach(Request $request) 
    { 
        $validator = Validator::make($request->all(), [
            // 'id'=>'required|exists:rates,id',
            'Coash_id'   =>'required|exists:coaches,id',
            'user_id'   =>'required|exists:users,id',
            'training'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'feeding'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'Regularity'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'Response'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
            'Total'=> ['required',Rule::in(1,2,3,4,5,6,7,8,9,10)],
        ]);
        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ],400);
        }
        $rate=Ratecoash::where('Coash_id',$request->Coash_id)->first();

        $rate->update([
        'training'    =>$request->training,
        'feeding'    =>$request->feeding,
        'user_id'     =>$request->user_id,
        'Coash_id'    =>$request->Coash_id,
        'Regularity'  =>$request->Regularity,
        'Response'    =>$request->Response,
        'Total'      =>$request->Total ,
        ]);
        if ($rate) {
            return response()->json([
                'status'=>true,
                'message'=>'rate updated',
            ],200);
        }
        return response()->json([
            'status'=>false,
            'message'=>'rate updated faild',
        ],200);

    }
    public function updateprofil(Request $request) 
    { 
        $validator = Validator::make($request->all(), [
            // 'id'=>'required|exists:rates,id',
            'user_id'   =>'required|exists:users,id',
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
        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ],400);
        }
           $user=User::find($request->user_id);
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
            return Response()->json([
                'success' => true,
                'message' => 'User updated successfully',
                'data' => $user
            ]);
    }

}





