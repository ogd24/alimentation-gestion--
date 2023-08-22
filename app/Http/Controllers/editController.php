<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\product;
use Illuminate\Http\Request;

class editController extends Controller
{

public function modifier(product $product){
    $categorie = categorie::all();
    return view('editProduct',compact('product','categorie'));
}

    public function edit(product $product,categorie $categorie )
    {
        $categorie = categorie::all();
        return view('editProduct', compact('product','categorie'));
    }

    public function update(Request $request , $id)
    {

       $input = $request->all();
       product  ::findOrFail($id)->update($input);

        return redirect()->route('');
    }

}


