<?php

namespace App\Http\Controllers\frontend;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Models\Order;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
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
        $this->validate($request,array(
            'cus_fullname' => 'required|min:3',
            'cus_address' => 'required',
            'cus_phone' => 'required',
            'cus_email' => 'required|email',
            'pay_number' => 'required|numeric',
            'pay_cvc' => 'required|numeric',
            'pay_mm' => 'required|numeric',
            'pay_yyyy' => 'required|numeric',
        ));
        $order = new Order();
        $order->user_id =$request->user_id;
        $order->cus_fullname = $request->cus_fullname;
        $order->cus_address = $request->cus_address;
        $order->cus_phone = $request->cus_phone;
        $order->cus_email = $request->cus_email;
        $order->pay_number = $request->pay_number;
        $order->pay_cvc = $request->pay_cvc;
        $order->pay_mm=$request->pay_mm;
        $order->pay_yyyy = $request->pay_yyyy;
        $order->total_price = Cart::subtotal();
        $order->save();
        Session::flash('checkout','Dat hang thanh cong');
        return redirect()->route('checkout');
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
