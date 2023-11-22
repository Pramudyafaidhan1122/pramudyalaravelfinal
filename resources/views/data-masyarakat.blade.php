<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs1/bs2/css/bootstrap.min.css">
</head>
<body>
    @include('layout.navbar')
    <div class="container">
        <br><br>
       <h2 style="text-align: center">{{$df}}</h2>
       <br><br>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">nik</th>
      <th scope="col">Nama</th>
      <th scope="col">nomer telpon</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach ($masyarakat as $masyarakat)
    <tr>
      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->telp}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{('daftar')}}" type="submit" class="btn btn-outline-secondary" >Daftar Sebagai Masyarakat</a>
</div>
</body>
</html>