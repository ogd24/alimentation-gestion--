<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class afficherController extends Controller
{

    public function acceuil(){
        $products = product::all();
return view('acceuil', ['products' =>$products],compact('products'));

    }
    public function afficherProduit(product $product)
    {
        $product->delete();
       return redirect()->route('acceuil');
    }
}


