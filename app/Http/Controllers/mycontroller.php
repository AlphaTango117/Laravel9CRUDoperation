<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    function insert(Request $req){
         $name= $req->get('name');
         $price= $req->get('price');
         $image= $req->file('image')->getClientOriginalName();
         //move uploaded file
         $req->image->move(public_path('image'),$image);

         $prod = new product();
    $prod->PName=$name;
    $prod->PPrice= $price;
    $prod->PImage= $image;
    $prod->save();
    return redirect('/');
    }
    function readdata(){
        $pdata=product::all();
        return view('insertRead',['data'=>$pdata]);
    }
    function updateordelete($id){


      $product=product::find($id);
      return view('/updateview',compact('product'));
    }
    function update(Request $req , $id){

        $data = $req->all();
       // print_r($data);
        $products=product::find($id);
        $products->PName = $req->get('name');
        $products->PPrice = $req->get('price');

        $products->save();
        return redirect('/');
     }

     function delete($id){
        //echo $id;
            $prod=product::find($id);
            $prod->delete();
            return redirect('/');
     }

}

