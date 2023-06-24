<?php


namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(20);
        return view('dashboard.users.users')->with([
            'users' => $users ,
        ]);
    }


    public function create(){
        return view('dashboard.users.add-user');
    }

    
    public function store(Request $request){

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'image_url' => $request->image_url,
                'password' => Hash::make($request->password),
                'age' => $request->age,
                'fat_percentage' => $request->fat,
                'height' => $request->height,
                'weight' => $request->weight,
                'account_status' => 'Pending',
                'gender' => $request->gender,
                'membership' => $request->membership,
                'coash_name' => $request->coash_name,
                'api_token' => bin2hex(openssl_random_pseudo_bytes(60)),
            ]);

            return redirect()->route('admin.users-list');

        }catch (\Exception $exception){
            return $exception;
        }

    }




    public function destroy($id){
        $user = User::find($id);
        if (! $user){
            return redirect()->route('admin.home');
        }
        $user->delete();
        return redirect()->route('admin.users-list');

    }


    public function changeStatus($id){
        try {
            $user = User::find($id);
            if (! $user){
                return redirect()->route('admin.home');
            }else{
                $status = $user -> account_status == 'Pending' ? 'Active': 'Pending';
                User::where('id' , $id)
                    ->update([
                        
                        'account_status' => $status,
                        'updated_at' => now(),
                    ]);
                return redirect()->route('admin.users-list');
            }


        }catch (\Exception $exception){
            return $exception;
        }
    }


}
