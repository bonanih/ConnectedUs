<html>
<head>
</head>

<body bgcolor = #FFE4E1>
<?php
				$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
				mysql_select_db ("connected", $connect);
				session_start(); 
				$n_name = $_SESSION['NickName'];	
				$v_find = $_SESSION['find'];
				
				$query = mysql_query("SELECT * FROM Login WHERE NickName = '$v_find'");
				$info = mysql_fetch_array($query);
?>


				<font face="arial">
					<!--<p  align="right" ><a href="/connect/Sign/details1.html" target="_top">Edit</a></p>-->
					
					<h3><?php echo ucfirst($v_find)."'s"?> Profile </h3> 
					<p>Her Name: <?php echo $info['firstname']." ".$info['lastname'] ?></p>
					<p>Contact Her at: <?php echo $info['Email']?></p>
					<p>She is from <?php echo $info['place']?>.</p>
					<p>She lives in <?php Print $info['livesin']?>.</p>
					<p>She is interested in <?php Print $info['likes']?>.</p>
					<p>Her Political views are: <?php Print $info['politics']?>.</p>
					<p>Her Favourite quotes: <?php Print $info['quotes']?>.</p>
					<p>She was born on: <?php Print $info['dob']; Print "-"; Print $info['mob']; Print "-";Print $info['yob'];?></p>	
				</font>



</body>


</html>
