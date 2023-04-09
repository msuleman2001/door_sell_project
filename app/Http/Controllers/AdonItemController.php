<?php

namespace App\Http\Controllers;
use App\Models\AdonItemModel;
use Illuminate\Support\Facades\Storage;

use App\Models\AdonsModel;
use Illuminate\Http\Request;

class AdonItemController extends Controller
{
 public function passData(){
     $adon_items=AdonItemModel::all();
     $adons=AdonsModel::all();
     return view('admin.add-product-adon-item',compact('adon_items','adons'));
 }
 public function addItem(Request $request){
     $adon_item=new AdonItemModel();

     $adon_item->adon_item_name=$request->input('adon_item_name');
     $adon_item->adon_item_price=$request->input('adon_item_price');
     $adon_item->adon_item_remarks=$request->input('adon_item_remarks');
     $adon_item->adon_id=$request->input('adon_id');

     //saving image to show in view

         $image = $request->file('adon_item_image');
         $image_name = $image->getClientOriginalName();
         $image_folder = '/public/img/';
         $image_path = '/storage/img/' . $image_name;
         $image->storeAs($image_folder, $image_name);
         $adon_item->adon_item_image = $image_path;


         $adon_item->save();
         return redirect()->route('showAdonItems');
 }
// PASSING THE ADON ITEMS AND ADON DATA TO EDIT VIEW
public function editAdonItem($id){
     $adon_item=AdonItemModel::find($id);
     $adons=AdonsModel::all();
     return view('admin.edit-product-adon-item',compact('adon_item','adons'));
}
// UPDATING
public function updateAdonItem(Request $request, $id){
     $adon_item=AdonItemModel::find($id);
     $adon_item->adon_item_name=$request->input('adon_item_name');
     $adon_item->adon_item_price=$request->input('adon_item_price');
     $adon_item->adon_item_remarks=$request->input('adon_item_remarks');

    $image = $request->file('adon_item_image');
    if($image) {
        $image_name = $image->getClientOriginalName();
        $image_folder = '/public/img/';
        $image_path = '/storage/img/' . $image_name;
        $image->storeAs($image_folder, $image_name);
        $adon_item->adon_item_image = $image_path;
    }
    else{
        $adon_item->adon_item_image = $adon_item->adon_item_image;
    }
    $adon_item->save();
    return redirect()->route('showAdonItems');


}








// DELETING THE RECORD
public function deleteItem($id){
     $adon_item=AdonItemModel::find($id);

     $adon_item->delete();

     return redirect()->route('showAdonItems');
}
}
