<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReviewController extends Controller
{
    public function inForm(){
        return view("reviews/review-form"); 
    }

    public function showThank($nameRedirect){
        $products= Product::all(); 
        return view('reviews/tankYou', ["nomeReindirizzato"=>$nameRedirect], ["products"=>$products]); 
    }

    public function createReview(Request $request){
        $nomeCognome=$request->input("nameSurname");
        $indirizzo=$request->input("email");
        $descrizione=$request->input("description"); 

        // return redirect(route('pageReview'))->with("alertMessaggio", "Grazie per aver lasciato la tua recensione!"); 

        Mail::to($indirizzo)->send(new ContactMail($nomeCognome, $indirizzo, $descrizione)); 
        
        return redirect(route('thankPage', ["nameRedirect"=>$nomeCognome])); 

    }
}
