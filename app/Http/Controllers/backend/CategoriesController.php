<?php

namespace App\Http\Controllers\backend;

use App\Http\Models\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\MessageBag;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();
        return view('back.categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::getall();
        return view('back.categories.create', ['categories' => $categories]);
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
            'cat_name' => 'required|unique:tbl_category,cat_name|min:3|max:20',
            'cat_detail' => 'required',
            'cat_img'=>'required|image',
        ],[
            'required'=>'Trường thông tin cần điền đầy đủ',
            'unique:tbl_category,cat_name'=>'tên danh mục không được trùng',
            'min:3'=>'Tên danh mục phải có ít nhất 3 ký tự',
            'max:20'=>'Tên danh mục tối đa 20 ký tự',
            'image'=>'Phải chọn đúng dạng ảnh',
        ]);
            $categories = new Categories;
            $categories->cat_name = $request->cat_name;
            $categories->cat_detail = $request->cat_detail;
            if($request->hasFile('cat_img')){
                $cat_img = $request->file('cat_img');
                $filename = time().'.'.$cat_img->getClientOriginalExtension();
                $location = public_path('backend/images/categories/'.$filename);
                Image::make($cat_img)->resize(800,400)->save($location);
                $categories->cat_img=$filename;
            }
            $categories->save();
            Session::flash('success','them danh muc thanh cong!');
            return redirect()->route('back.categories.index')->with('thongbao', 'Thêm thành công');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Categories::find($categories->cat_id);

        		return view('back.categories.show', ['categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::getall();
        $categories = Categories::find($id);
        return view('back.categories.edit', ['categories' => $categories, 'category' => $category]);
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
            'cat_name' => 'required|unique:tbl_category,cat_name|min:3|max:20',
            'cat_detail' => 'required',
            'cat_img'=>'required|image',
        ],[
            'required'=>'Trường thông tin cần điền đầy đủ',
            'unique:tbl_category,cat_name'=>'tên danh mục không được trùng',
            'min:3'=>'Tên danh mục phải có ít nhất 3 ký tự',
            'max:20'=>'Tên danh mục tối đa 20 ký tự',
            'image'=>'Phải chọn đúng dạng ảnh',
        ]);
        $categories = Categories::find($id);
        $categories->cat_name = $request->cat_name;
        $categories->cat_detail = $request->cat_detail;
        if($request->hasFile('cat_img')){
            $cat_img = $request->file('cat_img');
            $filename = time().'.'.$cat_img->getClientOriginalExtension();
            $location = public_path('backend/images/categories/'.$filename);
            Image::make($cat_img)->resize(800,400)->save($location);
            $oldimage=$categories->cat_img;
            //anh cu
            $categories->cat_img=$filename;
            Storage::delete($oldimage);
        }
        $categories->update();
        Session::flash('updatecat','Sua danh muc thanh cong');
        return redirect()->route('back.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories=Categories::find($id);
        if($categories->delete()){
            Session::flash('xoacat','Xoa danh muc thanh cong');
            return redirect()->route('back.categories.index');
        }
        Session::flash('failxoacat','Khong xoa duoc danh muc');
        return redirect()->route('back.categories.index');
    }
}
