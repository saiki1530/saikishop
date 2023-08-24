<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sanpham;
use App\Models\CartItem;
use App\Models\cmt;
use App\Models\donhang;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    function cart()
    {
        // $sanpham = DB::table('sanpham')->get();
        $listloai = DB::table('loai')
            ->where('anhien', 1)
            ->orderBy('thutu', 'asc')
            ->limit(8)
            ->get();
        \View::share('listloai', $listloai);


        return view('giaodien.cart');
    }
    // public function addcart(Request $req, $id) {

    //     $sanpham = DB::table('sanpham')
    //     ->where('id_sp',$id)->first();
    //     if ($sanpham!=null) {
    //         if (Session('cart') !=null)
    //         $oldCart = Session('cart') ? Session('cart') : null;;
    //         $newCart = new Cart($oldCart);
    //         $newCart->addcart($sanpham,$id);
    //         $req->session()->put('cart',$newCart);

    //     }
    //  return view('giaodien.cart',compact('newCart'));

    // }
    public function addcart($id_sp)
    {
        $sanpham = sanpham::findOrFail($id_sp);

        $cart = session()->get('cart', []);
        if (!isset($cart[$id_sp])) {
            $cart[$id_sp] = [
                "ten_sp" => $sanpham->ten_sp,
                "hinh" => $sanpham->hinh,
                "gia" => $sanpham->gia,
                "soluong" => 1
            ];
        } else {
            $cart[$id_sp]['soluong']++;
        }

        session()->put('cart', $cart);
        // dd($cart);
        return redirect()->back();
    }
    public function removeFromCart($id_sp)
    {
        // Lấy giỏ hàng từ session
        $cart = session()->get('cart');

        // Xóa sản phẩm khỏi giỏ hàng nếu tồn tại
        if (isset($cart[$id_sp])) {
            unset($cart[$id_sp]);
            session()->put('cart', $cart);
        }

        // Redirect hoặc trả về view tùy theo yêu cầu của bạn
        return redirect()->route('cart'); // Ví dụ: quay trở lại trang giỏ hàng
    }

    public function updateCart(Request $request)
    {
        $ids = $request->input('id_sp');
        $quantities = $request->input('soluong');

        foreach ($ids as $index => $id_sp) {
            $quantity = $quantities[$index];

            // Perform any validation on the quantity if needed

            // Update the quantity for the product in the cart
            if ($quantity > 0) {
                session()->put("cart.$id_sp.soluong", $quantity);
            } else {
                // If quantity is 0 or negative, remove the product from the cart
                session()->forget("cart.$id_sp");
            }
        }

        return redirect()->back();
    }
    public function session(Request $request)
    {
        $user_id = auth()->user()->id; // Lấy ID người dùng đã đăng nhập
        $cartItems = session('cart');
        $totalAmount = 0;
        if ($cartItems !== null) {
            foreach ($cartItems as $id => $details) {
                $totalAmount += $details['gia'] * $details['soluong'];
            }
        }

        // Tạo đơn hàng
        $order = donhang::create([
            'id_user' => $user_id,
            'tongtien' => $totalAmount,
            'thoidiemmua' => now(),
            'tennguoinhan' => $request->input('tennguoinhan'),
            'dienthoai' => $request->input('dienthoai'),
            'diachigiaohang' => $request->input('diachigiaohang')
        ]);
        if ($cartItems !== null) {
            foreach ($cartItems as $id => $details) {
                $order->items()->create([
                    'id_sp' => $id,
                    'ten_sp' => $details['ten_sp'],
                    'soluong' => $details['soluong'],
                    'gia' => $details['gia']
                ]);
            }
        } else {
            return back();
        }


        // Xóa giỏ hàng sau khi tạo đơn hàng
        session()->forget('cart');

        return redirect()->back()->with('success', 'Đơn hàng đã được tạo thành công.');

}

}
