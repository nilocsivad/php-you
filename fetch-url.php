
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>hello, you</title>
</head>
<body>

	<?php
	$url = "http://kaijiang.zhcw.com/zhcw/html/ssq/list_1.html";
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
	
	//var_dump( $data );
	
	echo "<br /><br /><br />";
	
// 	$txt = iconv( "GBK", "UTF-8", htmlspecialchars( $data, ENT_COMPAT, "GB2312" ) );
	//echo $txt;
	
	$doc = new DOMDocument();
	$doc->loadHTML( $data );
	$body = $doc->getElementsByTagName( "body" )[ 0 ];
	
	//var_dump( $body->nodeValue );
	
	//echo "<br /><br /><br />";
	
	$xpath = new DOMXpath( $doc );
	$trs = $xpath->query( "//html/body/table/tr" );
	
	for ( $i = 2, $l = $trs->length - 1; $l > $i; $i++ ) {
		
		$tds = $xpath->query( "td", $trs[ $i ] );
		echo "<p>";
		echo $tds[ 0 ]->nodeValue;
		echo " ";
		echo $tds[ 1 ]->nodeValue;
		echo " ";
		$ems = $xpath->query( "em", $tds[ 2 ] );
		echo $ems[ 0 ]->nodeValue;
		echo $ems[ 1 ]->nodeValue;
		echo $ems[ 2 ]->nodeValue;
		echo $ems[ 3 ]->nodeValue;
		echo $ems[ 4 ]->nodeValue;
		echo $ems[ 5 ]->nodeValue;
		echo " ";
		echo $ems[ 6 ]->nodeValue;
		echo "</p>";
		
		//echo "<p>" . var_dump( $ems ) . "</p>";
		
		
		
		
// 		$val = $trs[ $i ]->nodeValue;
// 		$arr_all = explode( " ", $val );
// 		$c = 0;
// 		$arr_final = array();
// 		foreach ( $arr_all as $item ) {
// 			if ( $c > 9 )
// 				break;
// 			$item = str_ireplace( " ", "", $item );
// 			echo "\"" . $item . "\"  -- ";
// 			if ( $item != "" && str_ireplace( " ", "", $item ) != "" && strlen( $item ) > 0 )
// 				$arr_final[ $c++ ] = $item;
// 		}
// 		echo "<p>" . count( $arr_final ) . "<br />" . implode( "", $arr_final )  . "<br />" . implode( "", $arr_final ) . "</p>";
		



		//var_dump( $arr_all );
		
// 		$date = trim( substr( $val, 0, 10 ) );
// 		$val = trim( substr( $val, 10 ) );
// 		$num = trim( substr( $val, 0, 10 ) );
// 		$val = trim( substr( $val, 10 ) );
// 		$codes = trim( substr( $val, 0, 175 ) );
		
// 		$arrd = explode( " ", $codes );
// 		$idx = 0;
// 		$final_arr = array();
// 		foreach ( $arrd as $itm ) {
// 			if ( $itm != "" ) {
// 				$final_arr[ $idx++ ] = $itm;
// 			}
// 		}
// 		echo "<p>" . $date . " -- " . $num . " -- " . $codes . " -- " . implode( "", $final_arr ) . "</p>";
		//$arr = explode( " ", $val );
		//var_dump( $arr );
		echo "<br /> End of " . $i . "<br /><br />";
	}
	
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
// 	$xpath = new DOMXpath( $doc );
// 	$tabs = $xpath->query( "//*[@id]" );
	?>
	<p><?php /* var_dump( $tabs->length ) */?></p>
	
</body>
</html>
