<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( $var = null)
    {
        return view('home');
    }

 public function store(Request $request )
 {

    $request->validate([
        'name' => 'required',
        'price' => 'required',
    ]);


             $Datastore = new Product();
             $Datastore->name = $request->name;
             $Datastore->price = $request->price;

             $Datastore->save();
             $message = 'Data Successully Addede';
             return response()->json(['status'=>$message],200);
 }


}
