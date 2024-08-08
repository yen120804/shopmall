<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\products;

class ProController extends Controller
{
    function getProductsByCategory(Request $request, $category_id){
        $category = Categories::All();
        $products = Products::where('category_id',$category_id)->get();
        return view('products', compact('products', 'category'));

    }}
