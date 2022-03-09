<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        return "Liste des produits";
    }
    public function ShowProductId($id){
        echo 'Fiche du produit ' . $id;
    }
}
