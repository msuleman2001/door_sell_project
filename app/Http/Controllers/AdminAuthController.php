<?php

namespace App\Http\Controllers;

use App\Models\AuthModel;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
public function adminRegister(Request $request){
    $admin_data=new AuthModel();
    $admin_data->user_name=$request->input('user_name');
    $admin_data->user_email=$request->input('user_email');
    $admin_data->user_password=password_hash($request->input('user_password'),PASSWORD_BCRYPT);
    $admin_data->is_admin=1; // set is_admin column to 1

    $admin_data->save();

    return view('admin-login');
}
public function adminLogin(Request $request){
    // Clear existing admin session data
    if ($request->session()->has('admin')) {
        $request->session()->forget('admin');
    }

    $request->validate([
    'user_name'=>'required',
    'user_password'=>'required'
]);

$admin_credentials=$request->input();
$admin_name=$admin_credentials['user_name'];
$admin_password=$admin_credentials['user_password'];

$admin=AuthModel::where('user_name','=',$admin_name)->where('user_password','=',$admin_password)->get();

if($admin){
    $request->session()->put('admin',$admin);
    return view('dashboard');
}
else{
    return redirect('/Admin/admin-login')->withErrors(['msg'=>'Login Failed']);
}
}

}
