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
    <td valign="top"><p class="judul">PENGEDITAN KATEGORI</p>
    <?php
		$id_kategori = $_POST['id_kategori'];
		$nama = $_POST['nama'];
		$dihapus = $_POST['dihapus'];
		$link = koneksi_db();
		$sql = "update kategori set nama = '$nama', dihapus = '$dihapus' where id_kategori = '$id_kategori'";
		$res = mysqli_query($link, $sql);
		if($res){
		?>
        	<div class="info">Data Kategori dengan ID <?php echo $id_kategori?> telah diupdate.</div>
        <?php
		}
		else {
		?>
        	<div class="error"
            Data kategori dengan ID <?php echo $id_kategori?> gagal diupdate, dengan pesan kesalahan <b><?php echo mysqli_error($link)?></b></div>
        <?php
		}
	?>
    <p>&nbsp;</p></td>
</tr>
<tr><td colspan=2 bgcolor="#FFCC00"><?php footer_web();?></td></tr>
</table>
</body>
</html>