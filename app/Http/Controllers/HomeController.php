<?php

namespace App\Http\Controllers;

use App\Product;
use App\Status;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            $products = DB::table('products')
                    ->join('status', 'status.id', '=', 'products.status_id')
                    ->join('users', 'users.id', '=', 'products.user_id')
                    ->select('products.*', 'status.names as nama_status', 'users.name as nama_user')
                    ->get();
            $status = Status::all();
       $data = array(
            'products' => $products,
            'status' => $status
        );
        return view('home', $data);
    }

    public function cari(Request $request)
    {
        //mencari produk yang dicari user
        $prod  = Product::where('price','like','%' . $request->cari. '%')->paginate(9);
        $total = Product::where('price','like','%' . $request->cari. '%')->count(); 
        $data  = array(
            'produks' => $prod,
            'cari' => $request->cari,
            'total' => $total
        );
        return view('produk.cariproduk',$data);

    }

        public function caristatus(Request $request)
    {
        //mencari produk yang dicari user
        
        $prod  = Product::with('status')
                ->join('status', 'status.id', '=', 'products.status_id')
                ->join('users', 'users.id', '=', 'products.user_id')
                ->select('products.*', 'status.names as nama_status', 'users.name as nama_user')
                ->where('status_id',$request->cari)->paginate(9);
        // $prod = DB::table('products')
        //             ->join('status', 'status.id', '=', 'products.status_id')
        //             ->join('users', 'users.id', '=', 'products.user_id')
        //             ->select('products.*', 'status.names as nama_status', 'users.name as nama_user')
        //             ->where('status_id',$request)
        //             ->get();
        $total = Product::where('status_id','like','%' . $request->cari. '%')->count(); 
        $data  = array(
            'produks' => $prod,
            'cari' => $request->cari,
            'total' => $total
        );
        return view('produk.caristatus',$data);

    }

            public function caritanggal(Request $request)
    {
        //mencari produk yang dicari user
        
        $prod  = Product::where('created_at','like','%' . $request->cari. '%')->paginate(9);
        $total = Product::where('created_at','like','%' . $request->cari. '%')->count(); 
        $data  = array(
            'produks' => $prod,
            'cari' => $request->cari,
            'total' => $total
        );
        return view('produk.caritanggal',$data);

    }

      public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $data = $request->all();

        $data['image'] = $request->file('image')->store('assets/product', 'public');

        User::create($data);

        return redirect()->route('home')->with('success','Data Berhasil Di Tambah !!');
    }

    public function create()
    {
        $user = User::all();
         $data  = array(
            'user' => $user
        );
        return view('user.create', $data);
    }

}
