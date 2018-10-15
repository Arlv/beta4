<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Http\Requests;

class UsersController extends Controller
{
    public function index()
    {
return view ('/user/vista');


    }

	public function vista(){
		return view('user');
	}

    public function create(Request $request){
    	$users = new Users(); 

    	$users -> name = $request -> name;
    	$users -> email = $request -> email; 
        $users -> password = $request -> password;
    	$users -> type = $request -> type;
    	
    	$users -> save();

    	return  redirect('/user/vista'); 
    }
    public function read(Request $request){
    $users=Users::all();
    return view ('user.vista',['users'=>$users]);

}
public function destroy($id){
   $users=Users::find($id);
   $users->delete();
return  redirect('/user/vista');

}
public function update(Request $request, $id)
    {
$users=Users::find($id);
$users->name=$request->name;
$users->email=$request->email;
$users->type=$request->type;
$users -> save();

return  redirect('/user/vista');



    } 
    public function edit($id){
$user=Users::find($id);
return view('user.edit')->with('user', $user);

    }

}
 