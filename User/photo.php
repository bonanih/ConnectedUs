<html>
	
	<head>
		<link rel="stylesheet" type="text/css" href="/connect/css/style.css";/>
	</head>

	<body bgcolor=#C71585>
		
		<?php
						$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
						mysql_select_db ("connected", $connect);
						session_start(); 
						$n_name = $_SESSION['NickName'];
						$query = mysql_query("SELECT * FROM Login WHERE NickName = '$n_name'");
						$row = mysql_fetch_array($query);
						echo "<img src='$row[image_loc]' height='300' width='190'>";		
						
		?>
		<p><a href="/connect/Sign/image1.html" target="_top">Change Profile Pic</a></p>
		<form action = "search.php" method = "post" >
		<font  color = "White" face = "impact" size = 3.5> 
		Search By Nickname:</br>
		<input type="text" size="14" name="find"/><br/>
		<input type="submit" value = "Submit"/> </font> <br/>	
	</form>	
	
	</body>

</body>

</html>
