<html>
<head>
</head>

<?php
	// Connecting to database
	$connect = mysql_connect("localhost", "root", "music") or die ("Error, check your server connection.");
	mysql_select_db ("connected", $connect);
	session_start();
	echo "Connected to database";
	$v_place = $_POST['place'];
	$v_livesin = $_POST['livesin'];
	$v_likes = $_POST['likes'];
	$v_politics = $_POST['politics'];
	$v_quotes = $_POST['quotes'];
	$n_name = $_SESSION['NickName'];
	$v_likes = mysql_real_escape_string($v_likes);
	$v_politics = mysql_real_escape_string($v_politics);
	$v_quotes = mysql_real_escape_string($v_quotes);
	echo $n_name;
	
	if( isset($v_place)){
		$query="UPDATE Login SET place='$v_place' WHERE NickName = '$n_name'";
				mysql_query($query)  or die(mysql_error());
	}	
	if( isset($v_livesin)){
		$query="UPDATE Login SET livesin='$v_livesin' WHERE NickName = '$n_name'";
				mysql_query($query)  or die(mysql_error());
	}
	if( isset($v_likes)){
		$query="UPDATE Login SET likes='$v_likes' WHERE NickName = '$n_name'";
				mysql_query($query)  or die(mysql_error());
	}
	if( isset($v_politics)){
		echo "Error here???</br>";
		$query="UPDATE Login SET politics='$v_politics' WHERE NickName = '$n_name'";
				mysql_query($query)  or die(mysql_error());
				
	}
	if( isset($v_quotes)){
		$query="UPDATE Login SET quotes='$v_quotes' WHERE NickName = '$n_name'";
				mysql_query($query)  or die(mysql_error());
	}
	header("location:image.html");



?>


</html>
