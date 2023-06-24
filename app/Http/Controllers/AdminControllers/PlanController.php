<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\Exercise;
use App\Models\Muscle;
use App\Models\User;
use Illuminate\Http\Request;

class PlanController extends Controller
{

    public function index(){
        $plans = Plan::get();
        return view('dashboard.plans.plans')->with([
            'plans' => $plans ,
        ]);
    }


    public function create(){
        $exercises = Exercise::get();
        $muscles = Muscle::get();
        $users = User::get();
        return view('dashboard.plans.add-plan')->with([
            'exercises' => $exercises ,
            'muscles' => $muscles ,
            'users' => $users ,
        ]);
    }

    public function store(Request $request){

        try {
            $plan = new Plan();
            $plan -> user_id = $request -> user_id;
            $plan -> muscle_id = $request -> muscle_id;
            $plan -> exercise_id = $request -> exercise_id;
            $plan -> day = $request -> day;
            $plan -> exercises = json_encode($request->exercises);
            $plan -> muscles = json_encode($request->muscles);
            
            $plan -> save();
            
            return redirect()->route('admin.plans-list');

        }catch (\Exception $exception){
           
            return redirect()->back();
        }

    }

    // destroy plan
    public function destroy($id){
        try {
            $plan = Plan::find($id);
            $plan -> delete();
            return redirect()->route('admin.plans-list');
        }catch (\Exception $exception){
            return redirect()->back();
        }
    }


}