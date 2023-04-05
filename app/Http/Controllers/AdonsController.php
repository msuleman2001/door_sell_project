<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdonsModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class AdonsController extends Controller
{
    //passing the adons data to view
    public function passData(){
        $adons=AdonsModel::all();
        $data=[];
        return view('admin.add-product-adons', compact('adons','data'));


    }
public  function addJsonToDb(Request $request){
   $addon=new  AdonsModel();
    $addon->adon_title = $request->addon_title;
    $addon->adon_item = $request->addon_item;
    $addon->save();

    return response()->json(['message' => 'Addons added successfully!']);
}





}
    //deleting the json data

