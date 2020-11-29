<html>
<head>
	<title>CRUD MySQLi</title>
</head>
<body>
	<style>
body{
    background-color: #0fe519;
}
</style>
	<center><h2>LOGIN</h2> 
	<?php 
		if(isset($_GET['pesan'])){
			if($_GET ['pesan'] == "gagal"){
				echo "Login gagal! username dan pasword salah!";

 			}else if($_GET['PESAN'] == "logout"){
 				echo "Anda telah berhasil logout";

 			}else if($_GET['PESAN'] == "belum_login"){
 				echo "Anda harus login untuk mengakses halaman admin";
 			}
		}

	 ?>
	 <br>
	 <br>
	 <form method="post" action="cek_login.php">
	 	<table>
	 		<tr>
	 			<td>Username</td>
	 			<td>:</td>
	 			<td><input type="text" name="username" placeholder="Masukan username"></td>
	 		</tr>

	 		<tr>
	 			<td>Password</td>
	 			<td>:</td>
	 			<td> <input type="password" name="password" placeholder="Masukan password"></td>	
	 		</tr>

	 		<tr>
	 			<td></td>
	 			<td></td>
	 			<td><input type="submit" value="Login"></td>
	 		</tr>			
	 	</table></center>	
	 </form>
</body>
</html>		