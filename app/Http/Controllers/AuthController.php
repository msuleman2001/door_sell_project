<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//registration_model
use App\Models\AuthModel;

class AuthController extends Controller
{
//registering user to database
    public function register(Request $request)
    {
        $user_data = new AuthModel();
        $user_data->user_name = $request->input('user_name');
        $user_data->user_email = $request->input('user_email');
        $user_data->user_password = password_hash($request->input('user_password'), PASSWORD_BCRYPT);
$user_data->save();
return redirect('login');
//following will select the value of is_admin field 0 or 1 based on input values
//    0 for client and 1 for admin

    }

    public function login(Request $request)
    {
//        Attempting to Authenticate the user

        $user_name=$request->input('user_name');
        $user_password=$request->input('user_password');
$user=AuthModel::where('user_name', '=', $user_name)->where('user_password', '=', $user_password)->get();

//       if successful
        if($user->isNotEmpty()) {
//            delete previous session data and generate a new id
          session()->put('user',$user[0]);
          return view('main-web.index');
        }
        else {
//        if authentication fails
            return redirect()->back()->withErrors(['msg' => 'Invalid username or password']);
        }
    }

        public function logout(){
            // clear the user session data
            session()->forget('user');
            // redirect the user to the login page
            return redirect('/login');
        }



}
