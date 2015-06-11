
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>hello, you</title>
</head>
<body>

	<?php
	$url = "http://www.w3school.com.cn/php/php_ref_string.asp";
	//$url = "https://www.yahoo.com/";
	//$fcursor = file_get_contents( $url, "r" );
	//echo iconv( "UTF-8", "GBK", $fcursor );
	
	$curl = curl_init();
	$timeout = 60;
	curl_setopt( $curl, CURLOPT_URL, $url );
	curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $curl, CURLOPT_CONNECTTIMEOUT, $timeout );
	$data = curl_exec( $curl );
	curl_close( $curl );
	
	$txt = iconv( "GBK", "UTF-8", htmlspecialchars( $data, ENT_COMPAT, "GB2312" ) );
	//echo $txt;
	
	$doc = new DOMDocument();
	$doc->loadHTML( $txt );
	$body = $doc->getElementsByTagName("body");
	
	//echo strip_tags( $txt );
	//$search = htmlspecialchars( "<body", ENT_COMPAT, "GB2312" );
	//$search = "<body>";
	//echo $search;
	//echo "<p>Search \"" . $search . "\" : " . strstr( $txt, "/^<body$/") . "</p>";
	
	//fclose( $fcursor );
	?>
	<p><?php /* echo $body->length; */ ?></p>
	<p><?php /* var_dump( $body->item(0) ); */ ?></p>

	<?php 
	$xpath = new DOMXpath( $doc );
	$tabs = $xpath->query( "//*[@id]" );
	?>
	<p><?php var_dump( $tabs->length )?></p>
	
</body>
</html>
