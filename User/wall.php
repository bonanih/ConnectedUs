<html>
	<head>
	</head>
	
	<body bgcolor=#FFE4E1 >	
		<form action="wall1.php" method="post">
			<font color=#C71585>
			
			Update Status:  <table border="0" cellspacing="0" cellpadding="5" ><tr>
			<td>
			<textarea name="status">
			</textarea>
			</td>
			</tr></table>
			<input type="submit" value="Share" />			
		</form>
		
		<?php
		$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
		mysql_select_db ("connected", $connect);
		session_start();
		$n_name = $_SESSION['NickName'];
		?>
		</br><font color='red'>
		<p>My Recent Update:</font><?php  $query = mysql_query("SELECT * FROM Login WHERE NickName = '$n_name'");
				$info = mysql_fetch_array($query); 
				echo $info['status']?>
				</p>
		</br><p><font color='red'>Friends on Connected Us: </font><?php $query = mysql_query("SELECT NickName FROM Login");								
								while($row = mysql_fetch_assoc($query)) {
									echo"</br>";
									if( $row['NickName'] != $n_name)
										print_r($row['NickName']); 		
								}
								
								?>
								</p>

								
								
			
		
		
		</br><p><font color='red'>Latest Updates From friends:</font><?php 
								$query = mysql_query("SELECT NickName, status FROM Login");
								while($row = mysql_fetch_assoc($query)) {
									echo"<br>";
									if( $row['NickName'] != $n_name){
										print_r($row['NickName']); echo": ";
										print_r($row['status']); 
									}
								}
								?>
								</p>
		
		
		
		
			
		
		
		
			
	
		
	</body>
		
</html>
