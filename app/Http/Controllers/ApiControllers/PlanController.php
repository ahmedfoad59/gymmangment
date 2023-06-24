<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Plan;
use App\Models\Muscle;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PlanResource;
class PlanController extends Controller
{
    public function store(Request $request){
        try 
        {
            $validator=Validator::make($request->all(),[
                'user_id' =>'required | exists:users,id',
                'day'=>'required ',
                // 'muscle_id' =>'required | exists:muscles,id',
                // 'exercise_id' =>'required | exists:exercises,id',
                ]);
                
                if($validator->fails())
                {
                    return response()->json([
                        'status'=>false,
                        'message'=>$validator->errors(),
                    ]);
                }
                $user=User::find($request->user_id);    
                if ($user->type=='coach') {
                    return Response()->json([
                        'success' => false,
                        'message' => 'this user is coach',
                    ], 200);
                }
            $plan = new Plan();
            $plan -> user_id = $request -> user_id;
            // $plan -> muscle_id = $request -> muscle_id;
            // $plan -> exercise_id = $request -> exercise_id;
            $plan -> day = $request -> day;
            $plan -> exercises = json_encode($request->exercises);
            $plan -> muscles = json_encode($request->muscles);
            
            $plan -> save();
            
            return Response()->json([
                'success' => true,
                'data' => new PlanResource($plan),
            ], 200);
        }catch (\Exception $e) 
        {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
       }
    }

    public function getUserPlanByDay($user_id , $day){
        $plan = Plan::with('exercise')
        ->with('muscle')
        ->where('user_id' , $user_id)
        ->where('day' , $day)
        ->get()
        ->all();
        try {
            if ($plan == null) {
                return Response()->json([
                    'success' => false,
                    'message' => 'failed',
                    'data' => "null"
                ], 404);
            }else{
                return Response()->json([
                    'success' => true,
                    'message' => 'successfully',
                    'data' => $plan
                ]);
            }
        
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
        }
    }



    public function getUserPlanByMuscle($user_id , $muscle_id){
        $plan = Plan::with('exercise')
        ->with('muscle')
        ->where('user_id' , $user_id)
        ->where('muscle_id' , $muscle_id)
        ->get()
        ->all();
        try {
            if ($plan == null) {
                return Response()->json([
                    'success' => false,
                    'message' => 'failed',
                    'data' => "null"
                ], 404);
            }
            else{
                return Response()->json([
                    'success' => true,
                    'message' => 'successfully',
                    'data' => $plan
                ]);
            }
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => 'null'
            ], 404);
        }
    }




    public function getUserPlanByMuscleAndDay($user_id , $muscle_id , $day){
        $plan = Plan::with('exercise')
        ->with('muscle')
        ->where('user_id' , $user_id)
        ->where('muscle_id' , $muscle_id)
        ->where('day' , $day)
        ->get()
        ->all();
        try {
            if ($plan == null) {
                return Response()->json([
                    'success' => false,
                    'message' => 'failed',
                    'data' => "null"
                ], 404);
            }
            else{
                return Response()->json([
                    'success' => true,
                    'message' => 'successfully',
                    'data' => $plan
                ]);
            }
        
        } catch (\Exception $e) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => $e->getMessage()
            ], 404);
        }
    }

}