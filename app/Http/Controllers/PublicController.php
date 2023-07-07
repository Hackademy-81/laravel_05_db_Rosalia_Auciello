<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome() {
        $products= Product::all(); 
        return view('welcome', ["products"=>$products]);
    }

    public function dettaglioProdotto($idProduct){
        $products= Product::all();
        foreach($products as $product){
            if($idProduct==$product["id"]){
                return view('products/product-dettaglio', ["prodotto"=>$product]); 
            }
        }

    }

    
}
