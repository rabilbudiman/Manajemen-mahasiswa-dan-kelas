<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("sesi/index");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            return redirect('dashboard')->with('success','Berhasil Login');
        } else {
            return redirect('sesi')->withErrors('Username atau password salah KONTOL');
        }

    }
    function logout()
{
    Auth::logout();
    return redirect('sesi')->with('success', 'Berhasil logout');
}
function register()
{
    return view('sesi/register');
}
function create(Request $request)
{
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ],[
            'name.required'=>'nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'email.email'=>'silahkan masukan email yang benar',
            'email.unique'=>'email sudah digunakan',
            'password.required'=>'Password wajib diisi'
        ]);

        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password)
        ];
      return User::create($data);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            return redirect('dashboard')->with('success', Auth::user()->name);
        } else {
            return redirect('sesi')->withErrors('Username atau password salah');
        }
    
   
}

}



