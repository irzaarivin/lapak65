<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();

        if(auth()->check()) {

            return view('home', [
                'newer' => Product::whereDate('created_at', $today)->get(),
                'older' => Product::whereDate('created_at', '<', $yesterday)->get(),
                'topRated' => Product::where('rating', '9')->orwhere('rating', '10')->get(),
                'topSale' => Product::where('sold', '>', 0)->orderBy('sold', 'desc')->get(),
                'wishlist' => Wishlist::where('email', auth()->user()->email)->get(),
                'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
                'totalCart' => Cart::where('email', auth()->user()->email)->count(),
                'cart' => Cart::where('email', auth()->user()->email)->get(),
                'totalPrice' => Cart::sum('product_price')
            ]);

        } else {

            return view('home', [
                'newer' => Product::whereDate('created_at', $today)->get(),
                'older' => Product::whereDate('created_at', '<', $yesterday)->get(),
                'topRated' => Product::where('rating', '9')->orwhere('rating', '10')->get(),
                'topSale' => Product::where('sold', '>', 0)->orderBy('sold', 'desc')->get()
            ]);

        }
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
