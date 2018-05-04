<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
class BackloginController extends Controller
{
    public function getBackendlogin(){
        return view('back.auth.login');
    }
    public function postBackendlogin(Request $request){
        if (Auth::attempt ( array (
            'email' => $request->get ( 'email' ),
            'password' => $request->get ( 'password' ),
        ) )) {
            session ( [
                'email' => $request->get ( 'email' )
            ] );
            if(Auth::user()->role_id != 4){
                return redirect()->route('backend');
            }
            else{
                Session::flash('failauth','Ban khong phai la admin');
                return redirect()->route('backend-login');
            }
        } else {
            Session::flash('failauth','Ban khong phai la admin');
            return redirect()->route('backend-login');
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('backend-login');
    }
}
