<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Http\Requests;

class ItemController extends Controller
{
	public function vista(){
		return view ('agregar'); 
	}
    public function create(Request $request){
    	$item = new Item();

    	$item -> item_name = $request -> item_name;
    	$item -> item_price = $request -> item_price;
    	$item -> item_type_id = $request -> item_type_id;
    	$item -> item_code = $request -> item_code;
    	$item -> item_brand = $request -> item_brand;
    	$item -> item_grams = $request -> item_grams;
    	$item -> save();

    	return redirect('/item/vista');
    }
     public function read(Request $request){
    $item=Item::all(); 
    return view ('item.vista',['it'=>$item]);
    return view ('create3',['it'=>$item]);
}
public function update(Request $request, $id)
    {
        $item=Item::find($id);
        $item -> item_name = $request -> item_name;
        $item -> item_price = $request -> item_price;
        $item -> item_type_id = $request -> item_type_id;
        $item -> item_code = $request -> item_code;
        $item -> item_brand = $request -> item_brand;
        $item -> item_grams = $request -> item_grams;
        $item -> save();

return  redirect('/item/vista');



    } 
    public function edit($id){
$item=Item::find($id);
return view('item.edit')->with('itm', $item);

    }
}
