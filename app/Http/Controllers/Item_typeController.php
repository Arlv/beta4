<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item_type;
use App\Http\Requests;

class Item_typeController extends Controller
{
    	public function vista(){
		return view ('item_type');
	}
    public function create(Request $request){
    	$item_type = new Item_typeController();

    	$item_type -> item_type_desc = $request -> item_type_desc;


    	return redirect('/create');

    }
}
