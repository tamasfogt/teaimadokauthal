<?php namespace App\Http\Controllers\UserHandler;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Models\User;
use Validator;
use \Authorizer;
use Auth;
class UserController extends Controller {
	

    
    public function editUser(Request $request){
     $user = User::find(Authorizer::getResourceOwnerId());
        if($request->input('password')!==null){
            $user->password = \Illuminate\Support\Facades\Hash::make($request->input('password'));
        }
        
        $user->save();
        return response('success',200);
        
    }

    
    public function isAuthenticated(){      
        return response(json_encode( Auth::check() ), 200);
    }
    
    public function updateUserDetails(Request $request){
        User::find(Authorizer::getResourceOwnerId());
        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = \Illuminate\Support\Facades\Hash::make($request->input('password'));
        $user->country = $request->input('country');
        $user->city = $request->input('city');
        $user->zipcode = $request->input('zipcode');
        $user->address = $request->input('address');
    }
}