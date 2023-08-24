<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\sanpham;
use App\Models\user;
use App\Models\Product;
use App\Models\CartItem;

class ProductController extends Controller
{
        public function __construct()
        {
            $listloai = DB::table('loai')
                ->where('anhien', 1)
                ->orderBy('thutu', 'asc')
                ->limit(8)
                ->get();
            \View::share('listloai', $listloai);
            $ad=DB::table('users')->where('role','=','admin')
        ->get();
            \View::share('ad', $ad);
        }

    public function index()
    {
        $query = DB::table('sanpham')
            ->orderBy('soluotxem', 'desc')
            ->limit(8);
        $bestselling = $query->get();
        return view('giaodien.index', ['bestselling' => $bestselling]);
    }

    // public function product(){

    // }

    function detail($id = 0)
    {

        $detail = DB::table('sanpham')
            ->join('loai', 'loai.id_loai', '=', 'sanpham.id_loai')
            ->join('sanphamchitiet', 'sanphamchitiet.id_ct', '=', 'sanpham.id_sp')
            ->where('sanpham.id_sp', $id)
            ->get();


        return view('giaodien.detail', ['detail' => $detail]);
    }

    public function product($id_loai = 0)
    {
        $sanpham = sanpham::paginate(9);


        return view('giaodien/product', ['sanpham' => $sanpham]);
    }
    public function blog($id_loai = 0)
    {


        return view('giaodien/blog');
    }




    public function category($id = 0)
    {
        $category = DB::table('sanpham')
        ->join('loai', 'loai.id_loai', '=', 'sanpham.id_loai')
        // ->join('sanphamchitiet', 'sanphamchitiet.id_ct', '=', 'sanpham.id_sp')
            ->where('sanpham.id_loai', $id)
            ->where('sanpham.anhien', 1)
            ->limit(12)
            ->get();
        // dd($category);
        return view('giaodien.category', ['category' => $category]);
    }

    public function search($tk = "a")
    {
        return view('search');
    }
    public function cart(Request $request)
    {
        $cart =  $request->session()->get('cart');
        return view('cart',['cart'=> $cart]);
    }






}
