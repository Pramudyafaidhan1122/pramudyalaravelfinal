
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("bs1\bs2\css\bootstrap.min.css")}}>
</head>
<body>
    @include('layout.navbar')
<div class="container">
    <br><br>
    @foreach ($pengaduan as $pengaduan)
    <ul class="list-group" >
        <b><li class="list-group-item" >ID : {{$pengaduan->id_pengaduan}} </li>
        <li class="list-group-item">Tanggal     : {{$pengaduan->tgl_pengaduan}}</li>
        <li class="list-group-item">Isi Laporan : {{$pengaduan->isi_laporan}}</li>
        <li class="list-group-item">Foto : <img src='{{asset("storage/image/".$pengaduan->foto)}}' width="125px" style="border-radius: 9px"/>   </li>
        <li class="list-group-item">Status : {{$pengaduan->status}}</li></b>
      </ul>
      @endforeach
    
</div>
</body>
</html>