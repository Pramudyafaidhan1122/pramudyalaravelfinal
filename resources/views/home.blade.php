
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs1/bs2/css/bootstrap.min.css">
</head>
<body>
@extends('layout.app')

@section('content')
    

<div class="container">
        <br>
        <br>
        <h2 style="text-align: center">selamat datang {{auth()->user()->username}} di App <br>
        pengaduan masyarakat
        </h2>
        <br>
        <br>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">tanggal</th>
      <th scope="col">nik</th>
      <th scope="col">isi laporan</th>
      <th scope="col">foto</th>
      <th scope="col">Status</th>
      <th scope="col">Opsi</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td><img src='{{asset("storage/image/".$pengaduan->foto)}}' width="125px" style="border-radius: 9px"/></td>
      <td>{{$pengaduan->status}}</td>
      <td>
        <a href="Update/{{$pengaduan->id_pengaduan}}" type="submit" class="btn btn-outline-success" >U</a>
        <br>
        <a  href="hapus_pengaduan/{{$pengaduan->id_pengaduan}}" type="submit" class="btn btn-outline-danger" >Hapus</a>
         <br>
        <a  href="detail_pengaduan/{{$pengaduan->id_pengaduan}}" type="submit" class="btn btn-outline-info" >Detail</a> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
</body>
</html>