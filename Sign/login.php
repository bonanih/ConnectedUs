<html>
<head>
</head>
<body>

<?php
	
	//echo "i am here";
	//ob_start();
   	$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
	mysql_select_db ("connected", $connect);
	
	// Defining the variable
	$n_name=$_POST['NickName'];
	$v_pass=$_POST['passwd'];
	if( isset($n_name, $v_pass)){
		//Protecting MySql from injection
		$n_name = stripslashes($n_name);
		$v_pass = stripslashes($v_pass);
		$n_name = mysql_real_escape_string($n_name);
		$v_pass = mysql_real_escape_string($v_pass);

	
	
		$query = mysql_query("SELECT * FROM Login WHERE NickName = '$n_name'");
			//echo $query;
		$num = mysql_num_rows($query);
			//echo " Number of entries with ".$num." uff";
		if( $num == 0 ){
			header("location:login2.html");
			//echo " The Nickname ".$n_name." does not exist. If you are a new user, sign up first";
		}
	
		else {	
			//echo "I am entering here";	
			$sql=mysql_query("SELECT * FROM Login WHERE NickName='$n_name' and passwd='$v_pass'");
			//echo $sql;
			$correct = mysql_num_rows($sql);
			//echo $correct;
	
			if( $correct == 0 ) {
				echo "WRONG PASSWORD";
				//alert(WRONG PASSWORD";
				header("location:login1.html");
			}

			else{
				session_id($n_name);
				session_start();
				$_SESSION['NickName'] = $n_name;
				echo "Login successfull";
				header("location:logged.php");
			}
		}
	}
		close($connect)	
   
	?>
</body>
</html>


