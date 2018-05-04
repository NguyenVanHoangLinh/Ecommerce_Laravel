<?php

namespace App\Http\Controllers;

use App\Http\Models\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Models\Categories;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems=Cart::content();
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front.cart.shopping_cart',compact('cartItems','categories','pro_shirt','pro_pant','pro_dress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addItem($id)
    {
        $product=Products::find($id);
        Cart::add(['id' => $product->pro_id,'name' => $product->pro_title,'price' => $product->pro_price,'qty' => 1,'options' => ['img'=>$product->pro_img] ]);
        return back();
    }

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
        Cart::update($id,['qty'=>$request->qty]);
        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
    public function del_all()
    {
        Cart::destroy();
        return redirect()->back();
    }
}
