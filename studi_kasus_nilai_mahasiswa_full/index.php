<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Selamat Datang Administrator</title>
    <style>
      .login{
      top:100px;
      position: relative;
      border-radius: 4px;
      display:block;
      padding: 10px;
      width: 100%;
      background-color: #65a79d;
      max-width: 370px;
      box-shadow: 0 2px 2px balck;
      }
    </style>
  </head>
  <br>
  <br>
  <br>
  <body>
    <center>
      <form method="post" name="login" action="cek_login.php">
        <table border="1" class="login">
          <tr>
            <th colspan="3">LOGIN</th>
          </tr>
          <tr>
            <th><font size="4">Nama Pengguna</font></th>
            <th><font size="4">:</font></th>
            <th><input type="text" name="nama_pengguna" size="30" placeholder="nama pengguna"></th>
          </tr>
          <tr>
            <th><font size="4">Password</font></th>
            <th><font size="4">:</font></th>
            <th><input type="password" name="password" size="30" placeholder="password"></th>
          </tr>
          <tr>
            <th colspan="3">
              <input type="submit" value="Login" name="submit">
              <input type="reset" value="Reset">
            </th>
          </tr>
        </table>
      </form>
  </center>
</body>
</html>
