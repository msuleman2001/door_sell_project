<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColorTypeModel;

class ColorTypeController extends Controller
{
    public function passData(){
        //passing data to color-list view
        $color_type_list=ColorTypeModel::all();
        return view('product-color-type-list',compact('color_type_list'));


    }


//    adding the color-type to the db
    public function addType(Request $request){
        $color_type=new ColorTypeModel();
        $color_type->colour_type_name=$request->input('colour_type_name');
        $color_type->colour_type_details=$request->input('colour_type_details');

        $color_type->save();
//redirecting to the colour-typ-list view
return redirect('Admin/add-color-type');

    }
    }
