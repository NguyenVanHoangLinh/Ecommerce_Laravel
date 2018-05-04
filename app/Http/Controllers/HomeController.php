<?php

namespace App\Http\Controllers;

use App\Http\Models\Product_images;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Models\Products;
use App\Http\Models\Categories;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recent_pro=Products::orderBy('pro_id','DESC')->Paginate(4);
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $hot_pro=Products::where('pro_status',1)->Paginate(4);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front.home',compact('recent_pro','hot_pro','categories','pro_shirt','pro_pant','pro_dress'));
    }
    public function product($id){
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        $product = Products::where('pro_id',$id)->Paginate(1);
        $pimgs=Product_images::where('pro_id',$id)->Paginate(3);
//        dd($product_imgs);
//        $products=Products::whereHas('cat_id', function($query) use($product)
//        {
//            $query->where('cat_id', $product->category);
//        })->whereNotIn('pro_id', [$product->pro_id])->get();
        return view('front.product.product', compact('product','categories','pro_shirt','pro_pant','pro_dress','pimgs'));
    }
    public function category($id){
        $relatedpro=Products::where('cat_id',$id)->get();
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front.category.category',compact('relatedpro','categories','pro_shirt','pro_pant','pro_dress'));
    }
    public function checkout(){
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front.cart.checkout', compact('categories','pro_shirt','pro_pant','pro_dress'));
    }
    public function aboutus(){
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front.extends.aboutus', compact('categories','pro_shirt','pro_pant','pro_dress'));
    }
}
