<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use Illuminate\Auth\Events\Validated;

class AdminController extends Controller
{
    public function index()
    {
        $categories = categories::all();
        return view('admin.index', compact('categories'));
    }
    public function productlist()
    {
        $products = Products::orderBy('id', 'DESC')->paginate(10);
        $categories = categories::orderBy('name', 'ASC')->where('hidden','0')->get();
        return view('admin.productlist', compact('products', 'categories'));
    }
    public function productadd(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'category_id' => 'required|integer|exists:categories,id',
                'img' => 'required|file'
            ]
        );

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $validatedData['img'] = $imageName;
        }

        $products = products::create($validatedData);

        return redirect()->route('productlist')->with('success','Bạn đã thêm thành công');
    }
    public function productdelete($id)
    {
        $product = products::find($id);
        $imgpath = "uploaded/" . $product->img;
        if (file_exists($imgpath)) {
            unlink($imgpath);
        }
        $product->delete();
        return redirect()->route('productlist');
    }
    public function productupdateform($id)
    {
        $categories = categories::orderBy('name', 'ASC')->get();
        $products = Products::orderBy('id', 'DESC')->paginate(10);
        $product = products::find($id);
        return view('admin.productupdateform', compact('products', 'categories', 'product'));
    }
    public function productupdate(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'category_id' => 'required|integer|exists:categories,id',
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'description' => 'nullable|string',
                'img' => 'nullable|file',
            ]
        );
        $id = $request->id;
        $product = products::findOrFail($id);

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->move(public_path('uploaded'), $imageName);
            $validatedData['img'] = $imageName;
            $oldImgpath = public_path('uploaded/' . $product->img);
            if (file_exists($oldImgpath)) {
                unlink($oldImgpath);
            }
        }

        $product->update($validatedData);

        return redirect()->route('productlist')->with('success','Bạn đã sửa thành công');
    }
    public function category()
    {
        // $products = Products::orderBy('id', 'DESC')->paginate(10);
        $category = categories::orderBy('id', 'ASC')->get();
        return view('admin.category', compact('category'));
    }
    public function categoryadd(Request $request )
{
    $validatedData = $request->validate([

        'name' => 'required|unique:categories' 
    ]);
    $category = categories::create($validatedData);
 


    return redirect()->route('category')->with('success','Bạn đã thêm thành công');
}
// public function categorydelete(Request $request ,$id)
// {
//     $category = Categories::find($id);
//     $category->hidden = $request->has('hidden');
//     if (!$category) {
//         return redirect()->route('category');
//     }

//     $category->delete();
//     return redirect()->route('category');

// }
public function categoryhide($id) {
    $category = Categories::findOrFail($id);
    $category->hidden = true;
    $category->save();
    return redirect()->route('category')->with('success', 'Bạn đã ẩn danh mục thành công!');
}
// hiển thị nút bỏ ẩn 
public function categoryunhide($id) {
    $category = Categories::findOrFail($id);
    $category->hidden = false;
    $category->save();
    return redirect()->route('category')->with('success', 'Bạn đã mở danh mục thành công!');
}
public function categoryedit($id)
{
    $category = Categories::findOrFail($id);
    $categories = Categories::all();
    return view('admin.categoryedit', compact('category', 'categories'));
}

public function categoryupdate(Request $request, $id)
{
    $validatedData = $request->validate([
        'name' => 'required|unique:categories'
    ]);
    $id = $request->id;
    $category = Categories::findOrFail($id);
    $category->update($validatedData);

    return redirect()->route('category')->with('success','Bạn đã sửa thành công');
}

}
