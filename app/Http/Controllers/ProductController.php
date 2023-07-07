<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function form(){
        return view('products/product-form'); 
    }

    public function createProduct(Request $request){
        $name=$request->input("name");
        $brand=$request->input("brand");
        $description=$request->input("description");
        $price=$request->input("price"); 

        // $product= new Product();
        // $product->name= $name;
        // $product->brand= $brand;
        // $product->description= $description;
        // $product->price= $price;

        // $product->save(); 

        Product::create(
            [
                "name"=>$name,
                "brand"=>$brand,
                "description"=>$description,
                "price"=>$price,
            ],
        ); 

        return redirect(route('homePage'))->with("alertMessage", "Prodotto aggiunto con successo!"); 

    }

    public function showBrand($brand){
        $products= Product::where('brand', $brand)->get(); 
        return view('products/product-brand', ["products"=>$products]); 
    }
}
