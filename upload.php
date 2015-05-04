<?php
	include("connection.php");
	if (isset($_POST['upload']) && $_FILES['userfile']['size']>0) {
		$filename = $_FILES['userfile']['name'];
		$tmpname = $_FILES['userfile']['tmp_name'];
		$filesize = $_FILES['userfile']['type'];

		$fp = fopen($tmpname, 'r');
		$content = fread($fp,filesize($tmpname));
		$content = addslashes($content);
		fclose($fp);

		if(!get_magic_quotes_gpc())
		{
    		$filename = addslashes($filename);
		}
		$query = "INSERT into upload (name,size,type,content) VALUES ('$filename', '$filesize', '$filetype', '$content' )";
		mysql_query($query) or die('error executing query');
		echo "File uplaoded succesfully";

	}
?>
