
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>hello, you</title>
</head>
<body>

	<?php
	$dir = $_SERVER["DOCUMENT_ROOT"] . "\\files\\";
	if ( is_dir( $dir ) ) {
		$cursor = opendir( $dir );
		while ( ( $file = readdir( $cursor ) ) !== false ) :
			$fname = iconv( "GBK", "UTF-8", $file );
	?>
		<p><a target="_blank" href="<?php echo ( "http://" . $_SERVER["HTTP_HOST"] . "/files/" . $fname . "?t=" . rand() ) ?>"><?php echo $fname?></a>
	<?php
		endwhile;
	}	
	?>

</body>
</html>
		