<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    

    <title>Detail Pengaduan</title>

    
</head>
<body>
  


    <!-- <a href="{{ url('home.com') }}">Home</a>
    <a href="{{ url('about.com') }}">About</a>
    <a href="{{ url('login.com') }}">Login</a> -->


<!-- navbar -->
  


@include('layout.navbarpetugas')

@extends('layout.app')

@section('content')
<br>
<br>



<br>
<br>

<div class="container">
      
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                
                <th scope="col">Isi Laporan</th>
                
            </tr>
            
        </thead>
        
        <tbody>

     
        <thead>
            @foreach($data as $laporan)
            <tr>
                <td>{{$laporan->id_pengaduan}}</td>
                <td>{{$laporan->nik}}</td>
                <td>{{$laporan->tgl_pengaduan}}</td>
                
                

                

                <form action="{{url("/update_/$laporan->id_pengaduan")}}" method="POST">

                    @method("POST")
                    @csrf
            
                    <td>
                        <select {{$laporan->status}} name="status">
                          <option>Proses</option>
                          <option>Selesai</option>
                          
                        </select>
                    </td>
                        
                        
                    <td>
                        <label for="isi_laporan"></label>
                       {{$laporan->isi_laporan}}
                    </td>
                    <td>
                        <ul class="navbar-nav" style="margin-left: 58%;">
                            <li class="nav-item">
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </li>
                        </ul>
                    </td>
            
                </form>

                
            
               

                
            
               
               
            </tr>
        </thead>

        </tbody>

        <thead>
            <th scope="col">Foto</th>
        </thead>

        
    </table>

    <table>
        <tbody>
            <td ><img style="width: 700px;" src="{{asset("storage/image/".$laporan->foto)}}"></td>

            @endforeach
        </tbody>
    </table>
    <br>
    <br>



@endsection

   


</body>
</html>