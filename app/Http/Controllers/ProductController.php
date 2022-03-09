<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        return view('product-list');
    }
    public function ShowProductId($id){
        return view('product-details ', [ "id" => $id]);
    }
}
