<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Muscle;
use Illuminate\Http\Request;

class MuscleController extends Controller
{
    public function index(){
        $muscles = Muscle::get();
        return view('dashboard.muscles.muscles')->with([
            'muscles' => $muscles ,
        ]);
    }

    public function create(){
        return view('dashboard.muscles.add-muscle');
    }
    public function store(Request $request){

        try {
            $muscle = new Muscle();
            $muscle -> name = $request -> name;
            $muscle -> description = $request -> description;
            $muscle -> image = $request -> image;
            $muscle -> image = $request -> image;

            $muscle -> save();
            
            return redirect()->route('admin.muscles-list');

        }catch (\Exception $exception){
           
            return redirect()->back();
        }

    }




    public function destroy($id)
    {
        $muscle = Muscle::find($id);
        if (!$muscle) {
            return redirect()->route('admin.home');
        }
        $muscle->delete();
        return redirect()->route('admin.muscles-list');


    }

    // public function show($id){
    //     $subcategories = Subcategory::with('category')->where('category_id' , $id )->get();
    //     return view('dashboard.categories.category-subcategories' , compact('subcategories'));
    // }

}
