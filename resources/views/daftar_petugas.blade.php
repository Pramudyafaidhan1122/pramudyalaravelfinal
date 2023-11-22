<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Daftar Petugas</h1>
            <form action="tambah-petugas" method="post" >
                @method("POST")
                @csrf 

                <label>Nama</label><br>
                <input type="text" name="nama"><br>
                <label>Username</label><br>
                <input type="text" name="un"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <label>no.telp</label><br>
                <input type="text" name="telp"><br>
                <div class="form-group">
                  <label for="sel1">Level:</label>
                    <select class="form-control" id="sel1" name="level">
                      <option>Admin</option>
                      <option>Petugas</option>
                     </select>
                  </div>
                <button type="submit">Daftar</button>
            </form>
        </div>     
    </body>
</html