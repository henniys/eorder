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
    <td valign="top"><p class="judul">PENCARIAN KATEGORI</p>
    <div align="center">
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            Pencarian
            <select name="fieldcari">
                <option value="id_kategori" <?php if($_POST['fieldcari']=="id_kategori") echo "selected";?>>ID Kategori</option>
                <option value="nama" <?php if($_POST['fieldcari']=="nama") echo "selected";?>>Nama Kategori</option>
            </select>
            <input type="text" name="keyword" size=10 maxlength="30" value="<?php $_POST['keyword'];?>">
            <input type="submit" name="tblcari" value="Cari">
        </form>
    </div>
    <?php
		$link=koneksi_db();
		$sql="select * from kategori ";
		$fieldcari=$_POST['fieldcari'];
		$keyword=$_POST['keyword']; 
		if($_POST['tblcari']=="Cari")// Jika tblcari diklik, tambahkan perintah WHERE ... 
			$sql=$sql." where $fieldcari like '%$keyword%' ";
		$sql.=" order by nama"; 
		$res=mysqli_query($link,$sql);;
		$banyakrecord=mysqli_num_rows($res);
		if($banyakrecord>0){ 
			?>
            <div class="info">Data Kategori ditemukan sebanyak : <b><?php echo $banyakrecord?></b> Record</div>
            <table border=0 align="center">
            <tr class="judultable"><td colspan=3>DAFTAR KATEGORI</td></tr>
            <tr class="judultable"><td>ID KATEGORI</td><td>NAMA</td><td>DIHAPUS</td></tr>
            <?php 
				$i=0;
				while($data=mysqli_fetch_array($res)){ 
					$i++; 
					?> 
                    <tr class="<?php if($i%2==1) echo "isitabelganjil"; else echo "isitabelgenap";?>">
                    <td align="center"><?php echo $data['id_kategori'];?></td>
                        <td><?php echo $data['nama'];?></td>
                        <td align="center"><?php echo $data['dihapus'];?></td> 
                    </tr>
                    <?php
				}
			?>
            </table>
            <?php
		}
        else {
			?>
			<div class="warning">Data kategori tidak ditemukan!.</div>
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
