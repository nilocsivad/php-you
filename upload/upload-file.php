
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>hello, you</title>
</head>
<body>

	<?php foreach ( $_FILES["mfile"] as $var => $val ) : ?>
	<p><?php echo $var . " --> " . $val ?></p>
	<?php endforeach;?>
	<hr />
	
	<?php 
	$fname = $_FILES["mfile"]["name"];
	$fname = iconv( "UTF-8", "GBK", $fname );
	$fprefix = date("Y-m-d_H-i-s_l") . "_" . rand() . "_" . rand() . "_";
	$fpath = $_SERVER["DOCUMENT_ROOT"] . "\\files\\" . $fprefix . $fname;
	move_uploaded_file(  $_FILES["mfile"]["tmp_name"], $fpath ); 
	$fname = iconv( "GBK", "UTF-8", $fname );
	?>
	<p><a href="<?php echo ( "http://" . $_SERVER["HTTP_HOST"] . "/files/" . $fprefix . $fname . "?t=" . rand() ) ?>"><?php echo $fname?></a>

</body>
</html>
