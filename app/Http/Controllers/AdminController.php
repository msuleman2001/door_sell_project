<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CartModel;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $total_products = count(ProductModel::all());
        $total_users = count(User::all());
        $total_orders = count(CartModel::all());
        return view('admin.dashboard', compact('total_products', 'total_users', 'total_orders'));
    }
}
