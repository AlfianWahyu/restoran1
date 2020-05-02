<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
   
   ?>
<div class = "logo">
<title>Login</title>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Belum Punya akun ? <a href="daftar.php"><b>Daftar</b></a></td></tr>
  <td>
  <BOTTON><a class="edit" href="edit.php?ID=<?php echo $data['ID'];?>">Edit</a></BOTTON> |
	<BOTTON	><a class="hapus" href="hapus.php?ID=<?php echo $data['ID']; ?>">Hapus</a>		</BOTTON>		
	</TD>
  </tbody>
  </table>
  </form>
</div>
<style>

    body{
       margin: 0;
       padding: 0;
       font-family: sans-serif;
       background-image: url(bgo.jpg);
       background-size: 87%;
       
   }
   .logo {
        position: absolute;
        top: 65%;
        left: 45%;
        transform: translate(-50%, -100%);
        }</style>
        
       