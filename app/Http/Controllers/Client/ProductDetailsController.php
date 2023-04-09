<?php


namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\AdonsModel;
use App\Models\AdonItemModel;
use App\Models\ColourTypeModel;
use App\Models\ColoursModel;
use App\Models\ProductCategoryModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function  passData(){
        $adons=AdonsModel::all();
        $adons_items=AdonItemModel::all();
        $colour_types=ColourTypeModel::all();
        $colours=ColoursModel::all();
        $product=ProductModel::all();
        $product_category=ProductCategoryModel::all();

        return view('main-web.product-detail',compact('adons','adons_items','colour_types','colours',));
    }
}
