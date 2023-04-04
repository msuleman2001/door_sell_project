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
$request->session()->put('user',$user_data);
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
    public function adminLogin(Request $request)
    {
        $user_name = $request->input('user_name');
        $user_password = $request->input('user_password');

        //coparing inputs to database
        $user = AuthModel::where('user_name', '=', $user_name)->first();
        $enabled = $user->is_enabled;
        if ($user && ($user->is_admin == 1) && $enabled && password_verify($user_password, $user->user_password)) {
            session()->put('admin', $user);
            return redirect('/Admin/dashboard')->with('success', 'Login successful!');
        }
        else{
            return redirect('/admin')->withErrors(['loginError' => 'Invalid credentials.']);
        }
    }

//user login
    public function userLogin(Request $request)
    {
        $user_name = $request->input('user_name');
        $user_password = $request->input('user_password');

        //comparing inputs to database
        $user = AuthModel::where('user_name', '=', $user_name)->first();
        if ($user && ($user->is_admin == 0) && $user->is_enabled && password_verify($user_password, $user->user_password)) {
            session()->put('user', $user);
            return redirect('/')->with('success', 'Login successful!');
        } elseif ($user && ($user->is_admin == 0) && !$user->is_enabled) {
            return redirect('/')->withErrors(['loginError' => 'User is not enabled.']);
        } else {
            return redirect('/')->withErrors(['loginError' => 'Invalid login credentials.']);
        }
    }

// admin logout
    public function adminLogout(){
        // clear the user session data
        session()->forget('admin');
        // redirect the user to the login page
        return redirect('/admin');
    }

    //user logout

    public function userLogout(){
        // clear the user session data
        session()->forget('user');
        // redirect the user to the login page
        return redirect('/');
    }
//Showing the users data on view

    public function showUsers(){
        $users = AuthModel::all();
        return view('admin.users-list', compact('users'));
    }
// enabling and disabling the users
    public function toggle(Request $request, $id)
    {
        $user = AuthModel::find($id);
        $user->is_enabled = $request->input('is_enabled', 0);
        $user->save();

        if ($request->ajax()) {
            return response()->json(['message' => 'User status updated']);
        }

        return redirect()->back();
    }



}


