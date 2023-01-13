<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\Transaction;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function search(Request $request) {

        // return view('shop', [
        //     'result' => Product::where('name', 'like', "%{$request->searchProduct}%")->get(),
        //     'request' => $request->searchProduct,
        //     'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
        //     'totalCart' => Cart::where('email', auth()->user()->email)->count()
        // ]);

        if(auth()->check()) {

            return view('shop', [
                'result' => Product::where('name', 'like', "%{$request->searchProduct}%")->get(),
                'request' => $request->searchProduct,
                'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
                'totalCart' => Cart::where('email', auth()->user()->email)->count(),
                'wishlist' => Wishlist::where('email', auth()->user()->email)->get(),
                'cart' => Cart::where('email', auth()->user()->email)->get(),
                'totalPrice' => Cart::sum('product_price')
            ]);

        } else {

            return view('home', [
                'result' => Product::where('name', 'like', "%{$request->searchProduct}%")->get(),
                'request' => $request->searchProduct
            ]);

        }
    }

    public function product(Product $product) {

        $shop = $product->shop;
        $shop = Product::where('shop', $shop)->where('id', '!=', $product->id)->get();

        return view('product', [
            'product' => $product,
            'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
            'totalCart' => Cart::where('email', auth()->user()->email)->count(),
            'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
            'totalCart' => Cart::where('email', auth()->user()->email)->count(),
            'cart' => Cart::where('email', auth()->user()->email)->get(),
            'wishlist' => Wishlist::where('email', auth()->user()->email)->get(),
            'totalPrice' => Cart::sum('product_price'),
            'alsoLike' => $shop
        ]);

    }

    public function addWishlist(Request $request) {
        
        $product = Product::where('id', $request->product)->get();

        $wishlist = new Wishlist;
        $wishlist->name = auth()->user()->name;
        $wishlist->email = auth()->user()->email;
        $wishlist->product_id = $product[0]->id;
        $wishlist->product_name = $product[0]->name;
        $wishlist->product_thumb = $product[0]->thumb;
        $wishlist->product_price = $product[0]->price;

        $wishlist->save();

        return "Ok";
    }

    public function addCart(Request $request) {
        
        $product = Product::where('id', $request->product)->get();

        $cart = new Cart;
        $cart->name = auth()->user()->name;
        $cart->email = auth()->user()->email;
        $cart->product_id = $product[0]->id;
        $cart->product_name = $product[0]->name;
        $cart->product_thumb = $product[0]->thumb;
        $cart->product_price = $product[0]->price;
        $cart->product_shop = $product[0]->shop;

        $cart->save();

        return "Ok";
    }

    public function deleteCart(Request $request) {

        Cart::where('id', $request->product)->delete();
        return "Ok";

    }

    public function deleteWishlist(Request $request) {

        Wishlist::where('id', $request->product)->delete();
        return "Ok";

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

    public function checkout(Request $request) {

        if(isset($request->cart)) {

            $name = auth()->user()->name;
            $name = explode(" ", $name);

            $firstName = array_shift($name);
            $lastName = end($name);

            $cart = Cart::where('email', auth()->user()->email)->get();
            $totalPrice = Cart::sum('product_price');
            $totalPrice = number_format($totalPrice, 0, ",", ".");

            return view('checkout', [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'cart' => $cart,
                'totalPrice' => $totalPrice
            ]);

            // return dd($cart[1]->product_name);

        } elseif(isset($request->product)) {

            $name = auth()->user()->name;
            $name = explode(" ", $name);

            $firstName = array_shift($name);
            $lastName = end($name);

            // $product = Product::where('id', $request->product)->get();
            $products = Product::all();
            $product = $products->find($request->product);
            $price = number_format($product->price, 0, ",", ".");

            return view('checkout', [
                'firstName' => $firstName,
                'lastName' => $lastName,
                'item' => $product,
                'totalPrice' => $price
            ]);

        } else {

            return redirect('shop');

        } 
        
    }

    public function checkoutSubmit(Request $request) {

        $transaction = new Transaction;

        $transaction->transactionId = $request->transactionId;
        $transaction->firstName = $request->firstName;
        $transaction->lastName = $request->lastName;
        $transaction->email = $request->email;
        $transaction->company = $request->company;
        $transaction->country = $request->country;
        $transaction->street = $request->street;
        $transaction->address = $request->address;
        $transaction->city = $request->city;
        $transaction->province = $request->province;
        $transaction->postcode = $request->postcode;
        $transaction->phone = $request->phone;
        $transaction->notes = $request->notes;
        $transaction->products = $request->products;

        $transaction->save();

        Cart::where('email', auth()->user()->email)->delete();

        return redirect("home")->with('successSubmit', 'Your order will arrive soon, please wait a moment.');

    }

    public function shop() {

        if(auth()->check()) {

            return view('shop', [
                'result' => Product::get(),
                'request' => 'All Product',
                'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
                'totalCart' => Cart::where('email', auth()->user()->email)->count(),
                'cart' => Cart::where('email', auth()->user()->email)->get(),
                'wishlist' => Wishlist::where('email', auth()->user()->email)->get(),
                'totalPrice' => Cart::sum('product_price')
            ]);

        } else {

            return view('home', [
                'result' => Product::get(),
                'request' => 'All Product'
            ]);

        }

    }

    public function wishlist() {

        return view('wishlist', [
            'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
            'totalCart' => Cart::where('email', auth()->user()->email)->count(),
            'totalWishlist' => Wishlist::where('email', auth()->user()->email)->count(),
            'totalCart' => Cart::where('email', auth()->user()->email)->count(),
            'cart' => Cart::where('email', auth()->user()->email)->get(),
            'wishlist' => Wishlist::where('email', auth()->user()->email)->get(),
            'totalPrice' => Cart::sum('product_price')
        ]);

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
