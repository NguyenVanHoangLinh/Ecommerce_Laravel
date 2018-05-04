<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Categories;
use App\Http\Models\Products;
class UserController extends Controller
{
    public function getSignup(){
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front/auth/register',compact('categories','pro_shirt','pro_pant','pro_dress'));
    }
    public function postSignup(Request $request){
        $this->validate($request,[
            'user_fullname'=>'required',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:4',
            'birthday'=>'required',
            'sex'=>'required|in:male,female',
            'address'=>'required',
        ]);

        $user = new User([
            'user_fullname'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('password')),
            'birthday'=>$request->input('birthday'),
            'sex'=>$request->input('sex'),
            'address'=>$request->input('address'),
        ]);
        $user->save();

        Auth::login($user);
        return redirect()->back();
    }
    public function getSignin(){
        $categories=Categories::orderBy('cat_id','ASC')->Paginate(3);
        $pro_shirt=Products::where('cat_id','8')->get();
        $pro_pant=Products::where('cat_id','9')->get();
        $pro_dress=Products::where('cat_id','10')->get();
        return view('front/auth/signin',compact('categories','pro_shirt','pro_pant','pro_dress'));
    }
    public function postSignin(Request $request){
        $this->validate($request,[
            'email'=>'email|required',
            'password'=>'required|min:4',
        ]);
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }
}
