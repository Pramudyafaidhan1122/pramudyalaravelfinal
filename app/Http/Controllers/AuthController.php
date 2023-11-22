<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    //register
    function register(){
        return view('/daftar');
    }

    function daftar_masyarakat(request $request){

        $nik = $request->nik;
        $nama = $request->nama;
        $user = $request->username;
        $pass = $request->password;
        $telp = $request->telp;
        $masyarakat = DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $user,
            'password' => Hash::make($pass),
            'telp' => $telp
        ]);

        return redirect('/login ');
    }

    function tambah(){
        return view('/daftar_petugas');
    }


    function daftar_petugas(request $request){

        $nama = $request->nama_petugas;
        $user = $request->username;
        $pass = $request->password;
        $telp = $request->telp;
        $level =$request->level;
        $id = $request->id;
        $masyarakat = DB::table('petugas')->insert([
            
            'nama_petugas' => $nama,
            'username' => $user,
            'password' => Hash::make($pass),//hash
            'telp' => $telp,
            'level' => $level
        ]);

        return redirect('/petugas/login');
    }

    function login(){
        return view ("/login");
    }

    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::attempt($datalogin)) {
           return redirect('/home');
        }else{
           return redirect('/login')->with("salah","username atau password salah");
        }

    }

    function logout(){
        Auth::logout();

        return redirect('/login');
    }
}