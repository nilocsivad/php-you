
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>hello, you</title>
</head>
<body>

	<form action="upload-file.php" method="post" enctype="multipart/form-data">
		<p>
			<label for="fileID">File:</label><input id="fileID" name="mfile" type="file" />
		</p>
		<p><input type="submit" value="upload" />
	</form>
	
	<p><?php echo realpath( "." )?></p>
	<p><?php echo realpath( "upload-form.php" )?></p>
	<p><?php echo realpath( "/" )?></p>
	<p><?php echo realpath( __FILE__ )?></p>
	<p><?php echo $_SERVER["DOCUMENT_ROOT"]?></p>

</body>
</html>
