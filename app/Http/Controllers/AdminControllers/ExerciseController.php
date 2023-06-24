<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Models\Muscle;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index(){
        $exercises = Exercise::get();
        return view('dashboard.exercises.exercises')->with([
            'exercises' => $exercises ,
        ]);
    }

    public function create(){
        $muscles = Muscle::all();
        return view('dashboard.exercises.add-exercise' , compact('muscles'));
    }
    public function store(Request $request){

        try {
            $exercise = new Exercise();
            $exercise -> name = $request -> name;
            $exercise -> description = $request -> description;
            $exercise -> image = $request -> image;
            $exercise -> groups = $request -> groups;
            $exercise -> group_count = $request -> groupcount;
            $exercise -> muscle_id = $request -> muscle_id;

            $exercise -> save();
            
            return redirect()->route('admin.exercises-list');

        }catch (\Exception $exception){
           
            return redirect()->back();
        }

    }




    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        if (!$exercise) {
            return redirect()->route('admin.home');
        }
        $exercise->delete();
        return redirect()->route('admin.exercises-list');


    }

    // public function show($id){
    //     $subcategories = Subcategory::with('category')->where('category_id' , $id )->get();
    //     return view('dashboard.categories.category-subcategories' , compact('subcategories'));
    // }

}
