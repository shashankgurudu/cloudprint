<!DOCTYPE html>
<html>
<head>
	<title>Cloud Print</title>
</head>
<body>
		<form method="post" enctype="multipart/form-data" action="upload.php">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
			<input type="file" name="userfile" id="userfile">
			<input name="upload" type="submit" id="upload" value="Upload" >
		</form>
</body>
</html>