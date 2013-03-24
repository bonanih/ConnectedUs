<html>
	<head>
	</head>
	
	<body>
		<?php 
				$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
				mysql_select_db ("connected", $connect);
				session_start(); 
				$n_name = $_SESSION['NickName'];
				$v_status = $_POST['status'];
				echo $v_status;
				$query="UPDATE Login SET status='$v_status' WHERE NickName = '$n_name'";
				mysql_query($query) or die(mysql_error());
				$query="INSERT INTO $n_name status='$v_status' VALUES = '$n_name'";
				
				$query = mysql_query("SELECT * FROM Login WHERE NickName = '$n_name'");
				$info = mysql_fetch_array($query); 
				echo $info['status'];
				header('location: wall.php');
				
				
		?>
	
	
	</body>

</html>
