<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;

class ProductController extends Controller
{
    //Voir la liste des voitures
    public function product_list(){
        $cars = Car::all();
        return view('product-list', ['cars'=>$cars]);
    }
    //Voir la liste des voitures par marque
    public function product_list_sortByName(){
        $cars = Car::all()->sortBy('marque');
        return view('product-list', ['cars'=>$cars]);
    }
    //Voir la liste des voiture par prix
    public function product_list_sortByPrice(){
        $cars = Car::all()->sortBy('prix');
        return view('product-list', ['cars'=>$cars]);
    }
    //Affiche la page avec une voiture
    public function product_details(Car $car){
       $vendeur= $car->vendeur();
        return view('product-details', ['car' => $car]);
    }
    //Envoi vers la page d'ajout de véhicule
    public function sell_car(){
        return view('product-sell');
    }
}

