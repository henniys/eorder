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
    <td valign="top"><p class="judul">PENAMBAHAN MERK</p>
    <form method="post" action="merk_proses_tambah.php">
    <table align="center" bgcolor="white" border="0">
    	<tr><td colspan="2" align="center" class="judultable"><b>TAMBAH MERK BARU</b></td></tr>
        <tr><td>Nama Merk</td><td><input type="text" name="namamerk" size="31" maxlength="30"></td></tr>
        <tr><td></td><td><input type="submit" value="Simpan"><input type="reset"></td></tr>
    </table>
    </form>
    <p>&nbsp;</p></td>
</tr>
<tr><td colspan=2 bgcolor="#FFCC00"><?php footer_web();?></td></tr>
</table>
</body>
</html>
