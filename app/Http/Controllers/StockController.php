<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Item;
use AppcHttp\Requests;
use DB;

class StockController extends Controller
{
    
     	public function vista(){
		return view ('vista');
	}
    public function create(Request $request){
    	$stock = new Stock();

        $stock -> item_id = $request -> item_id;
    	$stock -> stock_qty = $request -> stock_qty;
    	$stock -> stock_expiry= $request -> stock_expiry;
    	$stock -> stock_added = $request -> stock_added;
    	$stock -> stock_manufactured = $request -> stock_manufactured;
    	$stock -> stock_purchased = $request -> stock_purchased;
    	 	$stock-> save(); 


    	return redirect('/stock/vista');

    }
 public function read(Request $request){
    $stock=Stock::all();
    return view ('stock.vista',['st'=>$stock]);

}
public function index()
{
    $stock=DB::table('stock')
            ->join('item', 'item.item_id', '=', 'stock.item_id' )
            ->select('stock.stock_id', 'item.item_name' )
            ->get();
            dd($stock);


}
}
 