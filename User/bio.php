<html>
	<head>
	</head>
	
	<body bgcolor=	#C71585>	
				<?php
				$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
				mysql_select_db ("connected", $connect);
				session_start(); 
				$n_name = $_SESSION['NickName'];
				$query = mysql_query("SELECT * FROM Login WHERE NickName = '$n_name'");
				$info = mysql_fetch_array($query);
				
				?>
			
			
				<font face="arial">
					<p  align="right" ><a href="/connect/Sign/details1.html" target="_top">Edit</a></p>
					
					<h3>My Profile </h3> 
					<p>My Name: <?php echo $info['firstname']." ".$info['lastname'] ?></p>
					<p>Contact Me at: <?php echo $info['Email']?></p>
					<p>I am from <?php echo $info['place']?>.</p>
					<p>I live in <?php Print $info['livesin']?>.</p>
					<p>I am interested in <?php Print $info['likes']?>.</p>
					<p>My Political views are: <?php Print $info['politics']?>.</p>
					<p>My Favourite quotes: <?php Print $info['quotes']?>.</p>
					<p>I was born on: <?php Print $info['dob']; Print "-"; Print $info['mob']; Print "-";Print $info['yob'];?></p>	
					
					<p  align="right" ><a href="delete.php" target="_top"><img src="/connect/images/del.png" width="50" height = "50"</a></p>
				</font>
			
		   
		
	</body>

</html>
