<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	include("lib_func.php");
?>
<title>Situs e-Order</title>
<link rel="shortcut icon" href="favicon.ico">
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="100%" align="center" border=0 bordercolor="#FFFFFF">
<tr><td colspan=2 align="center" bgcolor="#0000CC"><?php header_web();?></td></tr><tr>
	<td width="200px" valign="top" bgcolor="white"><?php menu();?></td> 	
    <td valign="top"><p class="judul">PENGHAPUSAN KATEGORI</p>
    <?php
		$id_kategori = $_POST['id_kategori'];
		$link = koneksi_db();
		$sql = "select * from kategori where id_kategori = '$id_kategori'";
		$res = mysqli_query($link, $sql);
		if(mysqli_num_rows($res)==1) {
			$data = mysqli_fetch_array($res);
		?>
        	<form method="post" action="kategori_proses_hapus.php">
            <input type="hidden" name="id_kategori" value="<?php $data['id_kategori']?>">
            <table align="center" bgcolor="white" border="0">
            <tr><td colspan="2" align="center" class="judultable"><b>HAPUS KATEGORI</b></td></tr>
            <tr><td>ID Kategori</td>
            	<td><b><?php echo $data['id_kategori']?></b></td></tr>
            <tr><td>Nama Kategori</td><td><b><?php echo $data['nama']?></b></td></tr>
            <tr><td>Status Hapus</td><td><b><?php echo $data['dihapus']?></b></td></tr>
            <tr><td></td>
            	<td><input type="submit" value="Hapus" />
                	<input type="button" onclick="javascript:history.back()" value="Batal" /></td></tr>
            </table>
            </form>
      	 	<?php
		}
		else {
			?>
            <div class="warning">Data kategori yang akan dihapus tidak ditemukan!</div>
        <?php 
		}
	?>
    <p>&nbsp;</p></td>
</tr>
<tr><td colspan=2 bgcolor="#FFCC00"><?php footer_web();?></td></tr>
</table>
</body>
</html>
