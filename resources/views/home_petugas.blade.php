<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("bs1/bs2/css/bootstrap.min.css")}}>
</head>
<body>
    <div class="container">
        <ul class="nav nav-underline nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/petugas/logout')}}">loguot</a>
            </li>

        </ul>  
    <div>
        <div class="container">
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
                      <a href="tanggapan/{{$pengaduan->id_pengaduan}}" type="submit" class="btn btn-outline-success" >Tanggapi</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
</body>
</html>