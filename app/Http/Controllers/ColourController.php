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
    $colour->colour_name=$request->input('colour_name');
    $colour->colour_details=$request->input('colour_details');
    $colour->colour_type_id=$request->input('colour_type_id');

//image upload
    $image = $request->file('colour_image');
    $image_name = $image->getClientOriginalName();
    $image_folder = '/public/img/';
    $image_path = '/storage/img/'. $image_name;
    $image->storeAs($image_folder,$image_name);
    $colour->colour_image = $image_path;
    $colour->save();
    //returning to colour list page after saving
    return redirect('Admin/add-colour');
}

//updating colour data

public function editColour($id){

    $colour=ColoursModel::find($id);

    $colour_types=ColourTypeModel::all();
    return view('admin.edit-product-colour',compact('colour','colour_types'));
}
public function updateColour(Request $request, $id){
    $colour=ColoursModel::find($id);

    $colour->colour_name=$request->input('colour_name');
    $colour->colour_details=$request->input('colour_details');
    $colour->colour_type_id=$request->input('colour_type_id');

//image upload
    $image = $request->file('colour_image');
    $image_name = $image->getClientOriginalName();
    $image_folder = '/public/img/';
    $image_path = '/storage/img/'. $image_name;
    $image->storeAs($image_folder,$image_name);
    $colour->colour_image = $image_path;
    $colour->save();
    //returning to colour list page after saving
    return redirect('Admin/add-colour');
}
//deleting the colour

public function deleteColour($id){
    $colour=ColoursModel::find($id);
    $colour->delete();
    return redirect()->back();
}
}
