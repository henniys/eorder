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
    <td valign="top"><p class="judul">PENGHAPUSAN MERK</p>
    <?php
		$id_merk = $_POST['id_merk'];
		$link = koneksi_db();
		$sql = "update merk set dihapus = 'Y' where id_merk = '$id_merk'";
		$res = mysqli_query($link, $sql);
		if($res){
		?>
        	<div class="info">Data Merk dengan ID <?php echo $id_merk?> telah dihapus.</div>
        <?php
		}
		else {
		?>
        	<div class="error">
            Data merk dengan ID <?php echo $id_merk?> gagal dihapus, dengan pesan kesalahan <b><?php echo mysqli_error($link)?></b>
            </div>
        <?php 
		}
	?>
    <p>&nbsp;</p></td>
</tr>
<tr><td colspan=2 bgcolor="#FFCC00"><?php footer_web();?></td></tr>
</table>
</body>
</html>
