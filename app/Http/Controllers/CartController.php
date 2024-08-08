<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    public function cart()
    {
        $cart = session()->get('cart');
        return view('cart', compact('cart'));
    }

    public function add(Request $request)
    {   
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
    
        $cart = session()->get('cart');
        // Kiểm tra nếu giỏ hàng đã tồn tại
        if (!$cart) {
            $cart = [
                $product_id => [
                    'product_id' => $product_id,
                    'product_name' => $request->input('product_name'),
                    'product_price' => $request->input('product_price'),
                    'product_img' => $request->input('product_img'),
                    'quantity' => $quantity
                ]
            ];
        } else {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng
            if (isset($cart[$product_id])) {
                $cart[$product_id]['quantity'] += $quantity;
            } else {
                // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
                $cart[$product_id] = [
                    'product_id' => $product_id,
                    'product_name' => $request->input('product_name'),
                    'product_price' => $request->input('product_price'),
                    'product_img' => $request->input('product_img'),
                    'quantity' => $quantity
                ];
            }
        }
    
        session()->put('cart', $cart);
    
        return redirect()->route('cart');
    }
    

public function remove(Request $request, $productId)
{
    // Lấy giỏ hàng từ session
    $cart = session()->get('cart');

    // Kiểm tra xem sản phẩm cần xóa có tồn tại trong giỏ hàng không
    if (isset($cart[$productId])) {
        // Xóa sản phẩm khỏi giỏ hàng
        unset($cart[$productId]);

        // Cập nhật giỏ hàng trong session
        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    return redirect()->route('cart')->with('error', 'Không tìm thấy sản phẩm trong giỏ hàng.');
}


public function destroy(){
    session()->forget('cart');
    return redirect()->route('cart');
}

}
