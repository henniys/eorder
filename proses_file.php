<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proses Upload File</title>
</head>
<body>

<?php
	echo "<pre>";
	print r($_FILES['userfile']);
	echo "</pre>";
	if($_FILES['userfile']['error']==0) {
		
		$namafilebaru="../gambar/".$_FILES['userfile']['name'];
		
		if(move_uploaded_file($_FILES[['userfile']['tmp_name'],$namafilebaru)==true) {
			echo "File telah tersimpan.";
		}
		else
			echo "Gagal menyimpan file upload";
	}
	else
		echo "Gagal Upload";
?>
</body>
</html>
