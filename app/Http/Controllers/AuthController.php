<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//registration_model
use App\Models\AuthModel;

class AuthController extends Controller
{
//registering user to database

//returning register view

//user registration
    public function user_register(Request $request)
    {
        $user_data = new AuthModel();
        $user_data->user_name = $request->input('user_name');
        $user_data->user_email = $request->input('user_email');
        $user_data->user_password = password_hash($request->input('user_password'), PASSWORD_BCRYPT);
$user_data->save();
return redirect('/')->with('success', 'Registered Successfully');

    }

   //loading login view after registration
    public function logView(){
        return view('auth.login');
    }


    //admin registration
    public  function adminRegView(){
    return view('admin.register');
    }
    public function admin_register(Request $request){
        $admin_data=new AuthModel();
        $admin_data->user_name=$request->input('user_name');
        $admin_data->user_email=$request->input('user_email');
        $admin_data->user_password=password_hash($request->input('user_password'),PASSWORD_BCRYPT);
        $admin_data->is_admin=1; // set is_admin column to 1

        $admin_data->save();

        return redirect('/admin');
}
    public function login(Request $request)
    {
        $user_name = $request->input('user_name');
        $user_password = $request->input('user_password');

        //coparing inputs to database
        $user = AuthModel::where('user_name', '=', $user_name)->first();

        if ($user && password_verify($user_password, $user->user_password)) {
            session()->put('user', $user->user_name);
            if(!$user->is_admin==1){
                return redirect('/')->with('success', 'Login successful!');
            }
            else {
                return redirect('/Admin/dashboard')->with('success', 'Login successful!');
            }
        } else {
            return redirect()->back()->withErrors(['msg' => 'Invalid username or password']);
        }
    }



    public function logout(){
        // clear the user session data
        session()->forget('user');
        // redirect the user to the login page
        return redirect('/admin');
    }
//Showing the users data on view

    public function showUsers(){
        $users = AuthModel::all();
        return view('admin.users-list', compact('users'));
    }

}


