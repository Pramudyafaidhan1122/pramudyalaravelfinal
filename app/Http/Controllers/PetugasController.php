<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\petugas;
use Illuminate\Support\Facades\Session;


class PetugasController extends Controller
{
    function data_petugas(request $request){
        $hi = "Data petugas di App Pengaduan Masyarakat";
        $petugas =  DB::table('petugas')->get();

        return view('data_petugas',['petugas'=>$petugas, 'hi'=>$hi]);
    }

    function index(){
        return view("login_petugas");
    }

    function proses_login(request $request){
        $datalogin = $request->only("username","password");
        if (Auth::guard("petugas")->attempt($datalogin)) {
            return redirect('/petugas/home');
        }else{
            return redirect('/petugas/login')->with("salah","username atau password salah");
        }

    }

    function logout(){
        Auth::guard('petugas')->logout();

        return redirect('/petugas/login');
    }

    function petugas_home(){
        $pengaduan = DB::table('pengaduan')->get();
        return view('home_petugas',['pengaduan'=>$pengaduan]);
    }

    function tanggapan($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan','=', $id )->first();
        return view('/tanggapan',['pengaduan'=> $pengaduan]);
    }

    function proses_tanggapan(){
        $pengaduan = DB::table('tanggapan')->where('id_pengaduan',$request->id)->insert([
            'isi_laporan' => $request-> isi_laporan,
    
        ]);
        return redirect('/home');
    }
}