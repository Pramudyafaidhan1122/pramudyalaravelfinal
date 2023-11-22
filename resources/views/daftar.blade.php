

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Daftar </h1>
            <form action={{url("/daftar") }} method="post" >
                @method("POST")
                @csrf 
                <label>nik</label><br>
                <input type="text" name="nik"><br>
                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <label>Username</label><br>
                <input type="text" name="un"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <label>no.telp</label><br>
                <input type="text" name="telp"><br>
                <button type="submit">Daftar</button>
                <p>sudah punya akun?silahkan<a href="{{url('login')}}">login</a></p>
                <a href="{{('tambah-petugas')}}" type="submit" class="btn btn-outline-secondary" >Daftar Sebagai Masyarakat</a>
               
            </form>
        </div>     
    </body>
</html