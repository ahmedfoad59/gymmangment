<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Coash;
use App\Models\User;
use App\Models\Ratecoash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoashController extends Controller
{
    public function index(){
        $coashes = Coash::paginate(20);
        return view('dashboard.coashes.coashes')->with([
            'coashes' => $coashes ,
        ]);
    }


    public function create(){
        return view('dashboard.coashes.add-coash');
    }

    
    public function store(Request $request){

        try {
            $user= User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'image_url' => $request->image_url,
                'password' => Hash::make($request->password),
                'type'=> 'coach',
                // 'age' => $request->age,
                // 'fat_percentage' => $request->fat,
                // 'height' => $request->height,
                // 'weight' => $request->weight,
                // 'account_status' => 'Pending', 
                // 'gender' => $request->gender,
                // 'membership' => $request->membership,
                // 'coash_name' => $request->coash_name,
                'api_token' => bin2hex(openssl_random_pseudo_bytes(60)),
            ]);
            return  $user->id;

           $coash= Coash::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                'image' => $request->image,
                'salary' => $request->salary,
                'joined_at' => $request->joined_at,
                'api_token' => bin2hex(openssl_random_pseudo_bytes(60)),
                // 'user_id'    =>$user->id,

            ]);
            $rate=Ratecoash::create([
                // 'training'    =>0,
                // 'feeding'    =>0,
                // 'user_id'     => $user->id,
                'Coash_id'    =>$coash->id,
                // 'Regularity'  =>0,
                // 'Response'    =>0,
                'stars'      =>1,
                ]);

            // User::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            //     'phone_number' => $request->phone_number,
            //     'image_url' => $request->image_url,
            //     'password' => Hash::make($request->password),
            //     'type'=>     'coach',
            //     // 'age' => $request->age,
            //     // 'fat_percentage' => $request->fat,
            //     // 'height' => $request->height,
            //     // 'weight' => $request->weight,
            //     // 'account_status' => 'Pending',
            //     // 'gender' => $request->gender,
            //     // 'membership' => $request->membership,
            //     // 'coash_name' => $request->coash_name,
            //     'api_token' => bin2hex(openssl_random_pseudo_bytes(60)),
            // ]);


            return redirect()->route('admin.coashes-list');

        }catch (\Exception $exception){
            return $exception;
        }

    }




    public function destroy($id){
        $coash = Coash::find($id);
        if (! $coash){
            return redirect()->route('admin.home');
        }
        $coash->delete();
        return redirect()->route('admin.coashes-list');

    }

}