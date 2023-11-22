<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Fortify;

class MasyarakatController extends Controller
{
    function data_masyarakat(){
        $daftar = "Data masyarakat di App Pengaduan Masyarakat";
        $masyarakat =  DB::table('masyarakat')->get();

        return view('data-masyarakat',['masyarakat'=>$masyarakat, 'df'=>$daftar]);
    }


 


}