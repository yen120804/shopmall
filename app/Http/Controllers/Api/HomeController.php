<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\products;
use App\Models\categories;
use App\Models\user;

class HomeController extends Controller
{
    
    public function products(){
        $product= products::orderBy('id','desc')->get();
        return response()->json(
            [
                "status" => 200,
                "data" => $product
            ]

        );

    }
    public function categories(){
        $categories= categories::orderBy('id','desc')->get();
        return response(
            [
                "status" => 200,
                "data" => $categories
            ]

        );

    }
    public function user(){
        $user= user::orderBy('id','desc')->get();
        return response(
            [
                "status" => 200,
                "data" => $user
            ]

        );

    }
    public function detail($id){
        $detail= products::findOrfail($id);
        return response()->json(
            [
                "status" => 200,
                "data" => $detail
            ]

        );

    }
    public function best(){
        $productsbest= products::where('sold','>=', 10)->take(3)->get();
        return response()->json(
            [
                "status" => 200,
                "data" => $productsbest
            ]

        );

    }
    
}
