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
		$id_kategori=$_POST['id_kategori'];
		$link=koneksi_db();
		$sql="select * from kategori where id_kategori='$id_kategori'";
		$res=mysqli_query($link,$sql);
		if(mysqli_num_rows($res)==1){ 
			$data=mysqli_fetch_array($res);
		?> 
            <form method=post action="kategori_proses_update.php">
            <table align="center" bgcolor="white" border=0>
            <tr><td colspan=2 align=center class="judultable"><b>EDIT KATEGORI</b></td></tr>
            <tr><td>ID Kategori</td> 
                <td><input type=text name="id_kategori" value="<?php echo $data['id_kategori']?>" readonly></td></tr>
                <tr><td>Nama Kategori</td> 
                	<td><input type=text name="nama" value="<?php $data['nama']?>" size=31 maxlength=30></td></tr>
                <tr><td valign=top>Status Dihapus</td> 
                	<td><input type=radio name="dihapus" value="Y" <?php if($data['dihapus']=="Y") echo "checked";?>>
                Ya<br> 
                		<input type=radio name="dihapus" value="T" <?php if($data['dihapus']=="T") echo "checked";?>>
                Tidak
                	</td> 
                </tr>
                <tr><td></td>
                	<td><input type="submit" value="Update">
                    	<input type="button" onclick="javascript:history.back()" value="Batal"></td>
                </tr>
                </table>
                </form>
          <?php
		}
		else {
			?>
            <div class="warning" Data Kategori Tidak Ditemukan!. </div>
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
