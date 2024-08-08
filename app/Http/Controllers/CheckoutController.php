<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bill;
use App\Models\BillDetail;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Lấy thông tin giỏ hàng từ session
        $cart = session('cart', []);

        // Hiển thị view thanh toán và truyền thông tin giỏ hàng
        return view('checkout', compact('cart'));
    }

    public function processPayment(Request $request)
    {
        $cart = session()->get('cart');

        
        $total = 0;
        foreach($cart as $item){
            $total += $item['product_price'] * $item['quantity'];
        }

       $user_id = Auth::user()->id ?? null;

       $request->validate([
        'name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'address'=>'required',
       ]);

       $bill = Bill::create([
        'user_id' => $user_id ,
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'total' => $total
       ]);

       //lap qua gio hang trong session de tao chi tiet don hang
        foreach ($cart as $item) {
            BillDetail::create([
                'bill_id' => $bill->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
            ]);
        };

        //xoa gio hang
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Dat Hang Thanh Cong');
    }
}
