<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Situs e-Order</title>
</head>
<body background="gambar/fresh-water.jpg">
<?php
	function header_web() {
	?>
    	<font color="#999999" size="6">Situs Administrator</font>
    <?php
	}
	function footer_web() {
	?>
    <center>
    	<small>Developed By Henni Y.S.</small>
    </center>
   <?php
	}
	function form_login(){
	?>
		<form method=post action="login.php">
		<table border=0 width="100%" bgcolor="white" align="center">
			<tr><td colspan=2 align="center" bgcolor="#CCCCCC"><b>LOGIN ADMIN</b></td></tr>
			<tr><td>Username</td><td><input type="text" name="username" maxlength="8" size="9"> </td></tr>
			<tr><td>Password</td><td><input type="password" name="userpass" maxlength="8" size="9"> </td></tr>
			<tr><td></td><td><input type="submit" name="btn_submit" value="Login"></td>
			</tr>
		</table>
		</form>
	<?php
	 }
	 function menu_admin() {
	 ?>
     	<table border="0" width="100%" bgcolor="#66FFFF">
        <tr><td align="center" bgcolor="#CCCCCC"><b>MENU ADMIN</b></td></tr>
        <tr><td align="center" bgcolor="#FFCC00"><b>DATA MERK</b></td></tr>
		<tr><td align="center"><a href="merk_form_tambah.php">Tambah</a></td></tr>
        <tr><td align="center"><a href="merk_form_edit.php">Edit</a></td></tr>
        <tr><td align="center"><a href="merk_form_hapus.php">Hapus</a></td></tr>
        <tr><td align="center"><a href="merk_view.php">View</a></td></tr>
        <tr><td align="center"><a href="merk_pencarian.php">Pencarian</a></td></tr>
        <tr><td align="center" bgcolor="#FFCC00" height=2></td></tr>
        
        <tr><td align="center" bgcolor="#FFCC00"><b>DATA KATEGORI</b></td></tr>
        <tr><td align="center"><a href="kategori_tambah.php">Tambah</a></td></tr>
        <tr><td align="center"><a href="kategori_view.php">View</a></td></tr>
        <tr><td align="center"><a href="kategori_pencarian.php">Pencarian</a></td></tr>
        <tr><td align="center"><a href="kategori_form_edit.php">Edit</a></td></tr>
        <tr><td align="center"><a href="kategori_form_hapus.php">Hapus</a></td></tr>
        <tr><td align="center" bgcolor="#FFCC00" height=2></td></tr>
        
        <tr><td align="center" bgcolor="#FFCC00"><b>DATA PRODUK</b></td></tr>
        <tr><td align="center"><a href="produk_form_tambah.php">Tambah</a></td></tr>
        <tr><td align="center"><a href="produk_view.php">View</a></td></tr>
        
        <tr><td align="center" bgcolor="#FFCC00" height="2"></td></tr>
        <tr><td align="center"><a href="logout.php">LOGOUT</a></td></tr>
        <tr><td align="center" bgcolor="#FFCC00" height="2"></td></tr>
        </table>
        </form>
      <?php
	  }
	  function menu() {
	  	  $telahlogin=true;
		  if($telahlogin == false)
		  		form_login();
		  else
		  		menu_admin();
	  }
	  function koneksi_db() {
	  		$host = "localhost";
			$database = "dbeorder10113247";
			$user = "root";
			$password = "";
			$link=mysqli_connect($host,$user,$password);
			mysqli_select_db($link,$database);
			if(!$link)
				echo "Error : ".mysqli_error();
			return $link;
	  }
	 ?>	  
</body>
</html>
