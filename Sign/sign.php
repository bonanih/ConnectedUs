<html>
<head>
</head>
<body>
<?php
	require_once('config.php');
// connect to database
	$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
	mysql_select_db ("connected", $connect);
	//Get data in local variable	
		$f_name=$_POST['firstname'];
		$l_name=$_POST['lastname'];
		$n_name=$_POST['Nickname'];
		$v_degree=$_POST['degree'];
		$v_email=$_POST['Email'];
		$v_pass=$_POST['passwd'];
		$c_pass=$_POST['pwd1'];
		$dob_month=$_POST['month'];
		$dob_date=$_POST['date'];
		$dob_year=$_POST['year'];
		
		$v_pass = stripslashes($v_pass);
		$c_pass = stripslashes($v_pass);
		$v_pass = mysql_real_escape_string($v_pass);
		$c_pass = mysql_real_escape_string($v_pass);
		//$v_date = $dob_year."-".$dob_month"-"$dob_year;


	// check for null values
	if ($f_name=="" or $l_name=="" or $n_name=="" or $v_degree=="" or $v_email=="" or $v_pass=="" or $c_pass=="" or $dob_date=="" or $dob_month=="" or $dob_year==""){
		echo "All fields must be entered, hit back button and re-enter information";
		header("location:sign1.html");
	}
	else{ 
		$querynick = mysql_query("SELECT * FROM Login WHERE NickName='$n_name' ");
		$checknick=mysql_num_rows($querynick);
		
		$querymail = mysql_query("SELECT * FROM Login WHERE Email='$v_email' ");
		$checkmail=mysql_num_rows($querymail);
		
		if($checkmail != 0 ){
			echo "Email already in use. Use another I.D";
			header("location:sign2.html");
		}
		
		else if($checknick != 0){
			echo "Sorry, ".$n_name." has already been taken. Go Back and choose another name";
			header("location:sign3.html");
		 }
			
		else {	
			if($v_pass != $c_pass ){
				echo "The passwords do not match, Try again";
				header("location:sign4.html");
		}

			else{	
				session_id($n_nick);
				session_start();
				$_SESSION['NickName'] = $n_name;
				echo $n_name;
				$_SESSION['passwd'] = $v_pass;
				$query="INSERT INTO Login (firstname,lastname,NickName,Email,passwd,degree,dob,mob,yob) VALUES('$f_name','$l_name','$n_name','$v_email', '$v_pass','$v_degree', '$dob_date', '$dob_month', '$dob_year')";
				mysql_query($query)  or die(mysql_error());
				$query = "CREATE TABLE $n_name( status varchar(1000) )";
				mysql_query($query)  or die(mysql_error());
				
				echo "Your message has been received";
				header("location:details.html");
			}
		}
	}

mysql_close($connect);

?>
</body>
</html>





 


