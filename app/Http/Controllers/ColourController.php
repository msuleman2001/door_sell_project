<?php

namespace App\Http\Controllers;

use App\Models\ColoursModel;
use App\Models\ColourTypeModel;
use Illuminate\Http\Request;

class ColourController extends Controller
{
public function passData(){
   $colour_list= ColoursModel::all();
    //showing the all colours list
   return view('admin.product-colour-list',compact('colour_list'));
}
//showing the Product Colour Type Data to show on dropdown on add colour page
public function passColourType(){
    $colour_types=ColourTypeModel::all();

    return view('admin.add-product-colour',compact('colour_types'));
}

//savingData in database

public  function addColour(Request $request){
    $colour=new ColoursModel();
    $colour->colour_name=$request->input('product_colour_name');
    $colour->colour_details=$request->input('product_colour_details');
    $colour->colour_type_id=$request->input('colour_type_id');
    $colour->save();
    //returning to colour list page after saving
    return redirect('Admin/add-colour');

}
}
