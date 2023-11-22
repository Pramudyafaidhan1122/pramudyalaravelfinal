

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href={{asset("css/style.css")}}>


    </head>
   
    <body>
        <div class="peringatan">
        @if(session("salah"))
            <div class="alert alert-danger">{{(session("salah"))}}</div>
        @endif
    </div>
        <div class="container">
        <form action={{url('/petugas/login')}} method="post">
            @method("post")
            @csrf 
          <h1>Login Petugas</h1>
            <form>
                <label>Username</label><br>
                <input type="text" name="username" required><br>
                <label>Password</label><br>
                <input type="password" name ="password" required><br>
                <button type="submit">Log in</button>
                <p>Belum punya akun?silahkan<a href="{{url('daftar')}}">Daftar</a></p>
            </form>
        </div>     
    </body>
</html