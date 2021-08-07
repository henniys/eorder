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
    <td valign="top"><p class="judul">PENAMBAHAN KATEGORI</p>
    <?php
		$nama=$_POST['namakategori']; // Ambil data dari Form
		$link=koneksi_db();
		$sql="insert into kategori values(null,'$nama','T')"; // susun SQL
		$res=mysqli_query($link, $sql); // Eksekusi SQL
		if($res){ // Jika berhasil
			$id_kategori=mysqli_insert_id($link);
		?>
            <div class="info">Data Kategori <b><?php echo $nama;?></b> telah disimpan dengan id kategori <b><?php echo $id_kategori;?></b></div>
			<?php
            }
            else { // Jika gagal
				?>
                <div class="error">Terjadi kesalahan dalam penyimpanan data kategori baru. Silahkan diulang lagi.<br></div>
                <?php
			}
	?> 
    <p>&nbsp;</p></td>
</tr>
<tr><td colspan=2 bgcolor="#FFCC00"><?php footer_web();?></td></tr>
</table>
<body>
</body>
</html>
