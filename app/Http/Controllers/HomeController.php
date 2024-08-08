<?php

namespace App\Http\Controllers;
use App\Models\products;
use App\Models\categories;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $dsdm = categories::orderBy('name', 'ASC')->get();
        $categories = categories::all();
        $products = products::new()->get();
        $productsbest = products::bestseller()->get();
        $productsview = products::view()->get();

        return view('home', compact('products','productsbest','productsview','categories','dsdm'));        return view('home', compact('products'));
    }

}
