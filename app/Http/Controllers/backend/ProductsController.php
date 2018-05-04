<?php

namespace App\Http\Controllers\backend;

use App\Http\Models\Products;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Http\Models\Categories;
use App\Http\Models\Product_images;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        $categories = Categories::getall();
        return view('back.products.index', ['products' => $products,'categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Products::getall();
        return view('back.products.create', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pro_title' => 'required|unique:tbl_products,pro_title|min:3|max:30',
            'pro_descript' => 'required',
            'cat_id' => 'required',
            'pro_detail' => 'required',
            'pro_img' => 'required|image',
            'quantity' => 'required|numeric',
            'pro_price' => 'required|numeric',
            'pro_status' => 'required|in:0,1',]
        ,[
            'required'=>'Trường thông tin cần điền đầy đủ',
            'unique:tbl_products,pro_title'=>'tên sản phẩm không được trùng',
            'min:3'=>'Tên sản phẩm phải có ít nhất 3 ký tự',
            'max:20'=>'Tên sản phẩm tối đa 20 ký tự',
            'image'=>'phải tải lên đúng dạng ảnh cho sản phẩm',
            'numeric'=>'yêu cầu số lượng sản phẩm và giá sản phẩm phải ở dạng số',
        ]);
        $products = new Products();
        $products->pro_title = $request->pro_title;
        $products->pro_descript = $request->pro_descript;
        $products->cat_id = $request->cat_id;
        $products->pro_detail = $request->pro_detail;
        $products->quantity = $request->quantity;
        $products->pro_price = $request->pro_price;
        $products->pro_status = $request->pro_status;
        if($request->hasFile('pro_img')){
            $pro_img = $request->file('pro_img');
            $filename = time().'.'.$pro_img->getClientOriginalExtension();
            $location = public_path('backend/images/products/'.$filename);
            Image::make($pro_img)->resize(800,400)->save($location);
            $products->pro_img=$filename;
        }
        $products->save();
        Session::flash('prosuccess','them san pham thanh cong!');
        return redirect()->route('back.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Products::getall();
        $product = Products::find($id);
        $categories = Categories::getall();
        return view('back.products.edit', ['products' => $products, 'product' => $product,'categories'=>$categories]);
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
        $request->validate([
                'pro_title' => 'required|unique:tbl_products,pro_title|min:3|max:30',
                'pro_descript' => 'required',
                'cat_id' => 'required',
                'pro_detail' => 'required',
                'pro_img' => 'required|image',
                'quantity' => 'required|numeric',
                'pro_price' => 'required|numeric',
                'pro_status' => 'required|in:0,1',]
            ,[
                'required'=>'Trường thông tin cần điền đầy đủ',
                'unique:tbl_products,pro_title'=>'tên sản phẩm không được trùng',
                'min:3'=>'Tên sản phẩm phải có ít nhất 3 ký tự',
                'max:20'=>'Tên sản phẩm tối đa 20 ký tự',
                'image'=>'phải tải lên đúng dạng ảnh cho sản phẩm',
                'numeric'=>'yêu cầu số lượng sản phẩm và giá sản phẩm phải ở dạng số',
            ]);
        $product = Products::find($id);
        $product->pro_title = $request->pro_title;
        $product->pro_descript = $request->pro_descript;
        $product->cat_id = $request->cat_id;
        $product->pro_detail = $request->pro_detail;
        $product->quantity = $request->quantity;
        $product->pro_price = $request->pro_price;
        $product->pro_status = $request->pro_status;
        if($request->hasFile('pro_img')){
            $pro_img = $request->file('pro_img');
            $filename = time().'.'.$pro_img->getClientOriginalExtension();
            $location = public_path('backend/images/products/'.$filename);
            Image::make($pro_img)->resize(800,400)->save($location);
            $oldimage=$product->pro_img;
            //anh cu
            $product->pro_img=$filename;
            Storage::delete($oldimage);
        }
        $product->update();
        Session::flash('updatepro','Cap nhat san pham thanh cong');
        return redirect()->route('back.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Products::find($id);
        if($product->delete()){
            Session::flash('xoapro','Xoa san pham thanh cong');
            return redirect()->route('back.products.index');
        }
        Session::flash('failxoapro','Khong xoa duoc san pham');
        return redirect()->route('back.products.index');
    }
    public function imgview($id)
    {
        $product_imgs = Product_images::getall();
        $product = Products::find($id);
        $all_imgs=Product_images::where('pro_id',$id)->get();
        return view('back.products.image',compact('product_imgs','product','all_imgs'));
    }
    public function updateImg(Request $request,$id)
    {
        $this->validate($request,array(
            'product_img' => 'required|image',
        ));
        $product_img = new Product_images();
        $product_img->pro_id =$id;
        if($request->hasFile('product_img')){
            $pro_img = $request->file('product_img');
            $filename = time().'.'.$pro_img->getClientOriginalExtension();
            $location = public_path('backend/images/product_imgs/'.$filename);
            Image::make($pro_img)->resize(800,400)->save($location);
            $product_img->product_img=$filename;
        }
        $product_img->save();
        Session::flash('proimgsuccess','them anh san pham thanh cong thanh cong!');
        return redirect()->back();
    }
}
