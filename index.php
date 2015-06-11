
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">

<title>hello, you</title>
</head>
<body>

	<?php
	$name = "you";
	if ( isset ( $_GET ["name"] ) ) {
		$name = $_GET ["name"];
	}
	?>
	<h1>Hello, <?php echo $name?>!</h1>
	<hr />
	
	
	
	
	
	<?php
	/* $new_file = fopen( "E:\\txt-" . rand() . ".txt", "w" );
	fwrite( $new_file, "ÄãºÃ£¡" );
	fwrite( $new_file, "Hello Wrold!" );
	fclose( $new_file ); */
	 ?>
	
	<hr />
	
	
	
	
	
	<?php 
	$txt_path = "E:\\__ËµÃ÷__.txt";
	$txt_file = fopen( $txt_path, "r" );
	$novel = fread( $txt_file, filesize( $txt_path ) );
	?>
	<p><?php echo filemtime( $txt_path )?>
	<p><?php echo $novel?></p>
	<?php fclose( $txt_file )?>
	<hr />
	
	
	
	
	
	<?php $txt_file = fopen( $txt_path, "r" );?>
	<?php while ( !feof( $txt_file ) ) : ?>
	<p><?php echo fgets( $txt_file )?>
	<?php endwhile;?>
	<?php fclose( $txt_file )?>
	<hr />
	
	
	
	
	
	<p><?php echo date("Y-m-d l")?></p>
	<p><?php echo date("H:i:s")?></p>
	<p><?php echo date("Y-m-d H:i:s l")?></p>
	<p><?php echo date("Y-m-d_H-i-s_l")?></p>
	<p><?php echo mktime( 11, 22, 33, 12, 2, 2013 )?></p>
	<?php $date_m = strtotime( "2015-11-01 12:33:24" )?>
	<p><?php echo date( "Y-m-d H:i:s l", $date_m )?></p>
	<hr />
	
	
	
	
	
	<?php 
	class KVItem {
		public $key;
		public $val;
		function KVItem($key, $val) {
			$this->key = $key;
			$this->val = $val;
		}
	}
	?>
	
	
	
	
	
	<?php foreach ( $_POST as $var => $val ) : ?>
	<p><?php echo $var?> --> <?php echo $val?></p>
	<?php endforeach;?>
	<hr />
	<?php foreach ( $_GET as $var => $val ) : ?>
	<p><?php echo $var?> --> <?php echo $val?></p>
	<?php endforeach;?>
	<hr />
	<?php foreach ( $_ENV as $var => $val ) : ?>
	<p><?php echo $var?> --> <?php echo $val?></p>
	<?php endforeach;?>
	<hr />
	<?php foreach ( $_REQUEST as $var => $val ) : ?>
	<p><?php echo $var?> --> <?php echo $val?></p>
	<?php endforeach;?>
	<hr />
	<?php $servers = array();?>
	<?php foreach ( $_SERVER as $var => $val ) : ?>
	<p><?php array_push( $servers, new KVItem( $var, $val ) )?></p>
	<?php endforeach;?>
	<?php echo json_encode( $servers )?>
	<br />
	<?php foreach ( $servers as $item ) : ?>
	<p><?php echo $item->key . " : " . $item->val ?>
	<?php endforeach;?>
	<hr />
	
	
	
	
	
	<p><?php echo $_SERVER["QUERY_STRING"]?>
	<p><?php echo $_SERVER["REQUEST_URI"]?>
	<p><?php echo $_SERVER["SCRIPT_NAME"]?>
	<hr />
	
	
	
	
	
	<p>
	<?php echo json_encode($_SERVER)?>
	</p>
	<hr />
	
	
	
	
	
	<?php 
	$mName = "abcdefghijklmn";
	?>
	<p>String: <?php echo $mName?></p>
	<p>strlen:<?php echo strlen($mName)?></p>
	<p>strpos 'hello':<?php echo strpos($mName, "hello")?></p>
	<p>strpos 'lm':<?php echo strpos($mName, "lm")?></p>
	<p>count_chars:<?php echo count_chars($mName)?></p>
	<p><?php echo $mName{0}?></p>
	<p><?php echo substr($mName, 5)?>
	<p><?php echo substr($mName, 5, 2)?>
	<hr />
	
	
	
	
	
	<?php 
	if ( class_exists("Student") != 1 ) 
		include_once 'beans\Student.bean.php'; 
	?>
	<div>
	<?php
	$p = new Person( "Colin" );
	echo $p;
	?>
	</div>
	
	
	
	
	
	<div>
	<?php 
	$time = rand();
	$stu = new Student( "Student-" . $time, 5 );
	echo $stu;
	?>
	</div>

</body>
</html>
