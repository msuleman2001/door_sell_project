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
        return view('admin.add-product-adons', compact('adons'));


    }

//SAVING THE JSON DATA IN THE DATABSE

public  function saveAddons(Request $request){
        $addons=new AdonsModel();

        $addons->adon_title=$request->input('adon_title');
        $addons->adon_remarks=$request->input('adon_remarks');
        $addons->save();


        return redirect()->route('addingAdons');
}
//UPDATING
//pasing the data to form
public function editAdon($id){
        $adons=AdonsModel::find($id);
        return view('admin.edit-product-adon',compact('adons'));
}
//updatig to database
public function updateAdon(Request $request, $id){
        $adons=AdonsModel::find($id);
        $adons->adon_title=$request->input('adon_title');
        $adons->adon_remarks=$request->input('adon_remarks');
        $adons->save();

        return redirect()->route('addingAdons');
}







//deleting adon
public  function deleteAdon($id){
        $adon=AdonsModel::find($id);

        $adon->delete();

        return redirect()->route('addingAdons');
}
//CLIENT SIDE
// PASSING THE DATA RELATED TO SPECIFIC ADON IN PRODUCT DETAILS VIEW

    public function passAdonItems(){
        // The where() method takes two arguments: the name of the
        // column you want to search in, and the value you want to search for.
        $color_items = AdonsModel::where('adon_title', 'Color')->firstOrFail()->adonItems;
        $door_type_items = AdonsModel::where('adon_title', 'Door Type')->firstOrFail()->adonItems;
        $dimention_items = AdonsModel::where('adon_title', 'Dimentions')->firstOrFail()->adonItems;
        $swing_type_items = AdonsModel::where('adon_title', 'Swing Type')->firstOrFail()->adonItems;
        $handle_type_items = AdonsModel::where('adon_title', 'Handle')->firstOrFail()->adonItems;
        $architrave_design_items = AdonsModel::where('adon_title', 'Architrave')->firstOrFail()->adonItems;
        $lock_type_items = AdonsModel::where('adon_title', 'Door Lock')->firstOrFail()->adonItems;

        return view('main-web.product-detail', compact('color_items', 'door_type_items', 'dimention_items', 'swing_type_items', 'handle_type_items', 'architrave_design_items', 'lock_type_items'));
    }

}


