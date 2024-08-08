<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;

class ProductsController extends Controller
{
    function products(Request $request)
    {
        $pagina = Products::paginate(10);
        $kyw= $request->input('query');
        // lấy từ khóa tìm kiếm query người dùng nhập dô
        $category_id = $request->input('category_id');
        $dsdm = categories::orderBy('name', 'ASC')->get();
        if ($request->category_id) {
            $dssp = products::where('category_id', $request->category_id)->orderBy('id', 'DESC')->paginate(4);
        } else {
            $dssp = products::orderBy('id', 'DESC')->paginate(10);
        }

        return view('products', compact('dsdm', 'dssp','kyw','category_id'));
    }
    function search(Request $request)
    {
        $pagina = Products::paginate(10);
        $dsdm = categories::orderBy('name', 'ASC')->get();
        $kyw= $request->input('query');
        $category_id = $request->input('category_id');
        $dssp = products::where('name','LIKE', "%$kyw%")->orWhere('description','LIKE',"%kyw%")->orderBy('id', 'DESC')->paginate(10);
        

        return view('products', compact('dsdm', 'dssp','kyw','category_id'));
    }

    function detail(Request $request)
    {
        if ($request->products_id) {
            $sp = products::find($request->products_id);
            $splq = products::where('category_id', $sp->category_id)->where('id','<>',$sp->id)->get();
        }
        
        return view('detail', compact('sp', 'splq'));
    }
    function cart()
    {
        return view('cart');
    }
    function best(Request $request){
        // $pagina = Products::paginate(10);
        $productsbest = products::bestseller()->paginate(4);
        $dsdm = categories::orderBy('name', 'ASC')->get();
        
        $kyw= $request->input('query');
    
        $dssp = products::where('name','LIKE', "%$kyw%")->orWhere('description','LIKE',"%kyw%")->orderBy('id', 'DESC')->paginate(10);
    
        return view('best',compact('productsbest','dsdm','dssp','kyw'));
    }
    function view(Request $request){
        // $pagina = Products::paginate(10);
        $productsview = products::view()->paginate(4);
        $dsdm = categories::orderBy('name', 'ASC')->get();
        $kyw= $request->input('query');
        $dssp = products::where('name','LIKE', "%$kyw%")->orWhere('description','LIKE',"%kyw%")->orderBy('id', 'DESC')->paginate(10);
    
        return view('view',compact('productsview','dsdm','dssp','kyw'));
    }
   
}
