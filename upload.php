<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload File</title>
</head>
<body>
<form name="f" enctype="multipart/form-data" method="post" action="proses_file.php">
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
    File: <input name="userfile" type="file"/>
    <input type="submit" value="Kirim File" name="tbl" />
</form>
</body>
</html>
