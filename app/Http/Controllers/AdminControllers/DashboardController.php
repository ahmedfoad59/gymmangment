<?php


namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
class DashboardController extends Controller
{
    public function index(){
        $plans=Plan::get();
        return view('dashboard.home.index',compact('plans'));
    }

}
