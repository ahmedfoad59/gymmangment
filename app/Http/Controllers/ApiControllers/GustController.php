<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Muscle;
use App\Models\Exercise;
use App\Models\Coash;
use App\Models\Rate;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Resources\CoashResource;
use App\Http\Resources\CountryResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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

    // public function update(Request $request)  
    // {
        
    //         $user = auth('api')->user();

    //         if (empty($user)) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => __('site.user_not_found'),
    //             ]);
    //         }
    //     // return $user->id;
    //         // $fileName = $request->file('image')->hashName();
    //         // $path = $request->file('image')->save(public_path('images/'.$fileName));

    //         $rules = [
    //             'id'    =>'required|exists:missings,id',
    //             'name' => 'required|min:3|max:40',
    //             'governorate' => 'required|min:3|max:40',
    //             'city' => 'required|min:3|max:40',
    //             'age' => 'required|min:1|max:2',
    //             'image' => 'required|image|mimes:png,jpg,jpeg',
    //             'fatherName' => 'required|min:3|max:40',
    //             'phone' =>    'required|min:11|max:11',
    //             'nationalNumber' => 'required|min:14|max:14',
    //         ];
    //         $messages = [
    //             'name.required' => 'هذاالحقل مطلوب',
    //             'name.min' => 'يجب أن يحتوي الاسم على 3 أحرف على الأقل.',
    //             'name.max' => 'يجب أن يحتوي الاسم على 40 أحرف على الاكثر.',
    //             'governorate.required' => 'هذاالحقل مطلوب',
    //             'governorate.min' => 'يجب أن تحتوي المحافظه على 3 أحرف على الأقل.',
    //             'governorate.max' => 'يجب أن تحتوي المحافظه على 40 أحرف على الاكثر.',
    //             'city.required' => 'هذاالحقل مطلوب',
    //             'city.min' => 'يجب أن تحتوي المدينة على 3 أحرف على الأقل.',
    //             'city.max' => 'يجب أن تحتوي المدينة على 40 أحرف على الاكثر.',
    //             'age.required' => 'هذاالحقل مطلوب',
    //             'age.min' => 'يجب أن يحتوي العمر على رقم 1 على الأقل.',
    //             'age.max' => 'يجب أن يحتوي الاسم على رقمين على الاكثر.',
    //             'image.required' => 'هذاالحقل مطلوب',
    //             'image.image' => 'يجب ادخال صوره',
    //             'image.mimes' => 'يجب أن تكون الصورة من نوع ملف png ، jpg ، jpeg',
    //             'fatherName.required' => 'هذاالحقل مطلوب',
    //             'fatherName.min' => 'يجب أن يحتوي اسم الاب على 3 أحرف على الأقل.',
    //             'fatherName.max' => 'يجب أن يحتوي اسم الاب على 40 أحرف على الاكثر.',
    //             'phone.required' => 'هذاالحقل مطلوب',
    //             'phone.min' => 'يجب أن يحتوي رقم الهاتف على 11 رقم على الأقل.',
    //             'phone.max' => 'يجب أن يحتوي رقم الهاتف على 11 رقم على الاكثر.',
    //             'nationalNumber.required' => 'هذاالحقل مطلوب',
    //             'nationalNumber.min' => 'يجب أن يحتوي الرقم القومي على 14 رقم على الأقل.',
    //             'nationalNumber.max' => 'يجب أن يحتوي الرقم القومي على 14 رقم على الاكثر.',



    //         ];
    //         $validator = Validator::make($request->all(), $rules, $messages);

    //         if ($validator->fails()) {
    //             return $this->apiResponse(null, $validator->errors(), 400);

    //         }
    //         $missing=missing::find($request->id);
    //         $imageName = time().'.'.$request->image->extension();

    //         $request->image->move(public_path('images'), $imageName);

    //         $missing->update([

    //             'name' => $request->name,
    //             'governorate' => $request->governorate,
    //             'city' => $request->city,
    //             'age' => $request->age,
    //             'image' => $imageName,
    //             'fatherName' => $request->fatherName,
    //             'phone' => $request->phone,
    //             'nationalNumber' => $request->nationalNumber,
    //             'user_id' => $user->id,

    //         ]
    //         );

    //         return $this->apiResponse(new MissingResource($missing), 'The Missing updated', 201);
            
    // }

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

}





