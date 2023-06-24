<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Models\Muscle;
use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function getAllExercises(){
        try {
            $exercises = Exercise::with('muscle')->get();
        
            if($exercises->isEmpty()){
                return Response()->json([
                    'success' => false,
                    'message' => 'failed',
                    'data' => 'no exercises'
                ], 404);
            }else{
                return Response()->json([
                    'success' => true,
                    'message' => 'successfully',
                    'data' => $exercises
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


        
    public function getExercise($id){
        $exercise = Exercise::where('id' , $id)->first();

        try {
         

        if ($exercise == null) {
            return Response()->json([
                'success' => false,
                'message' => 'failed',
                'data' => "null"
            ], 404);
        }else{
            return Response()->json([
                'success' => true,
                'message' => 'successfully',
                'data' => $exercise
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
