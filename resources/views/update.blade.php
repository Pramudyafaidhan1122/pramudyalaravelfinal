<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("bs1/bs2/css/bootstrap.min.css")}}>

</head>
<body>
@include('layout.navbar')
<br>
<br>
<h2 style= text-align:center>Update  <br>Laporan Anda</h2>
<br>
<div class="container">
  <form action="{{url('/update',$pengaduan->id_pengaduan)}}" method="post" enctype="multipart/form-data" >
    @method("POST")
    @csrf 
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">IsiLaporan</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" value="{{$pengaduan->id_pengaduan}}" required>{{$pengaduan->isi_laporan}}</textarea >

    </div>
    <button type="submit" class="btn btn-outline-secondary">Update</button>
</form>
</div>
</body>
</html>