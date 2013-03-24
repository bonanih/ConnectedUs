<html>
<head>
</head>

<body>
	<?php
				$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
				mysql_select_db ("connected", $connect);
				session_start(); 
				$n_name = $_SESSION['NickName'];	
				$v_find = $_POST['find'];
				$_SESSION['find'] = $v_find;
				$query = mysql_query("SELECT * FROM Login WHERE NickName = '$v_find'");
				$num = mysql_num_rows($query);
				//echo $num;
				if( $num == 0 )
					header('location: photo1.php');
				else
					header('location: photo2.php');
					
				
					
	?>
</body>

</html>
