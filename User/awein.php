<html>
	<head>
	</head>
	
	<body bgcolor=#FFE4E1 >
		<font color=#C71585>
		<form action="wall1.php" method="post">
			
			
			Update Status:  <table border="0" cellspacing="0" cellpadding="5" ><tr>
			<td>
			<textarea name="status">
			</textarea>
			</td>
			</tr></table>
			<input type="submit" value="Share" />			
		</form>
		</font>
		<?php echo "HI There!" 
			$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
			//mysql_select_db ("connected", $connect) or die(mysql_error());
			//session_start();
		?>
	
	
	</body>
	
</html>
