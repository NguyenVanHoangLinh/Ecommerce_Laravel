<?php

namespace App\Http\Controllers\backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('back.users.index', ['users' => $users]);
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
        $request->validate([
            'email' => 'required|unique:tbl_users,email|email',
            'password'=>'required',
            'role_id' => 'required|numeric|min:1',
            'user_fullname' => 'required',
            'birthday' => 'nullable|date',
            'address' => 'nullable',
            'phone' => 'nullable|digits_between:3,20|numeric',
            'user_status' => 'required|numeric|min:1',
            'sex' => 'required|in:nam,nữ',
            ]
            ,[
                'required'=>'Trường thông tin cần điền đầy đủ',
                'unique:tbl_users,email'=>'email đã tồn tại',
                'min:3'=>'Tên sản phẩm phải có ít nhất 3 ký tự',
                'max:20'=>'Tên sản phẩm tối đa 20 ký tự',
                'image'=>'phải tải lên đúng dạng ảnh cho sản phẩm',
                'date'=>'Phải nhập đúng ngày sinh',
                'numeric'=>'yêu cầu số số điện thoại ở dạng số',
            ]);
        $users = new User();
        $users->email = $request->email;
        $users->password= bcrypt($request->password);
        $users->role_id = $request->role_id;
        $users->user_fullname = $request->user_fullname;
        $users->birthday = $request->birthday;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->user_status = $request->user_status;
        $users->sex = $request->sex;
        $users->save();
        Session::flash('usersuccess','them nguoi dung thanh cong!');
        return redirect()->route('back.users.index');
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
        $users = User::getall();
        $user = User::find($id);
        return view('back.users.edit', ['users' => $users, 'user' => $user]);
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
                'email' => 'required|unique:tbl_users,email|email',
                'password'=>'required',
                'role_id' => 'required|numeric|min:1',
                'user_fullname' => 'required',
                'birthday' => 'nullable|date',
                'address' => 'nullable',
                'phone' => 'nullable|digits_between:3,20|numeric',
                'user_status' => 'required|numeric|min:1',
                'sex' => 'required|in:nam,nữ',
            ]
            ,[
                'required'=>'Trường thông tin cần điền đầy đủ',
                'unique:tbl_users,email'=>'email đã tồn tại',
                'min:3'=>'Tên sản phẩm phải có ít nhất 3 ký tự',
                'max:20'=>'Tên sản phẩm tối đa 20 ký tự',
                'image'=>'phải tải lên đúng dạng ảnh cho sản phẩm',
                'date'=>'Phải nhập đúng ngày sinh',
                'numeric'=>'yêu cầu số số điện thoại ở dạng số',
            ]);
        $user = User::find($id);
        $user->email = $request->email;
//        $password->password=bcrypt($request->password);
        $user->role_id = $request->role_id;
        $user->user_fullname = $request->user_fullname;
        $user->birthday = $request->birthday;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->user_status = $request->user_status;
        $user->sex = $request->sex;
        $user->update();
        Session::flash('useredit','sua nguoi dung thanh cong!');
        return redirect()->route('back.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        if($user->delete()){
            Session::flash('xoauser','Xoa nguoi dung thanh cong');
            return redirect()->route('back.users.index');
        }
        Session::flash('failxoauser','Khong xoa duoc nguoi dung');
        return redirect()->route('back.users.index');
    }
}
