<html>
	<head>
	</head>
	
	<body>
			<?php
				$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
				mysql_select_db ("connected", $connect);
				session_start(); 
				$n_name = $_SESSION['NickName'];
				echo $n_name;
				mysql_query("DROP TABLE $n_name") or die(mysql_error());
				//mysql_query($query) or die mysql_error();
				mysql_query("DELETE FROM Login WHERE NickName='$n_name'") or die(mysql_error());
				//mysql_query($query) or die mysql_error();
				session_unset();
				session_destroy();
				header("location:../Main/index1.html");
				?>
	
	
	
	
	</body>
</html>
