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
        <br/><br/><br/>
    <h2 style= text-align:center>给予反馈</h2>
    
        <form action= "" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">isi tanggapan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan"></textarea>
            </div>
                 Status:
                 <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">selesai</label>
                 </div>
                 <br><br>
                    <button type="submit" class="btn btn-outline-secondary">selesai</button>
                    <a class="btn btn-outline-secondary" href="/petugas/home" role="button">kembali</a>     
        </form>
     </div>
</body>
</html>