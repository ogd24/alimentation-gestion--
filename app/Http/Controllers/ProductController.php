<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\product; // Utilisation de la convention de nommage CamelCase pour le modèle
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function produit(){
        $categories = categorie::all();
        return view('product_register',compact('categories'));
    }

    public function product(Request $request){
        $request->validate([
            'name' => 'required',
            'categories_id' => 'required',
            'prix' => 'required',
            'description' => 'required'
        ]);

        $product = new product();
        $product->name = $request->input('name');
        $product->prix = $request->input('prix');
        $product->categories_id = $request->input('categories_id');

        // Gestion du téléchargement de l'image
        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('uploads', 'public');
            $product->photo = $imagePath;
        }

        $product->description = $request->input('description');
        $product->save();
         return('ook');
        // // return redirect()->intended('/login');
    }
    public function supprimer(product $product)
    {
        $product->delete();
       return redirect()->route('afficher');
    }
}
