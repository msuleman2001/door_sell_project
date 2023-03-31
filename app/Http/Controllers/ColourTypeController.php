<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColourTypeModel;

class ColourTypeController extends Controller
{
    public function passData(){
        //passing data to color-list view
        $colour_type_list=ColourTypeModel::all();
        return view('admin.product-colour-type-list',compact('colour_type_list'));

https://doorng.com/door/public/Admin/add-colour-type
    }


//    adding the color-type to the db
    public function addType(Request $request){
        $colour_type=new ColourTypeModel();
        $colour_type->colour_type_name=$request->input('colour_type_name');
        $colour_type->colour_type_details=$request->input('colour_type_details');

        $colour_type->save();
//redirecting to the colour-typ-list view
return redirect('Admin/add-colour-type');

    }

    //updating the colour type data
    public function editColourType($id){
        $colour_types=ColourTypeModel::find($id);

        return view('admin.edit-product-colour-type',compact('colour_types'));
    }
public function updateColourType(Request $request, $id){
        $colour_type=ColourTypeModel::find($id);

        $colour_type->colour_type_name=$request->input('colour_type_name');

        $colour_type->save();

        return redirect('/Admin/add-colour-type');
}

//deleting the coloue type
public function deleteColourType($id){
        $colour_type=ColourTypeModel::find($id);

        $colour_type->delete();

        return redirect()->back();
}
    }

