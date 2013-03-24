<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/connect/css/style1.css" />
	</head>
	
	<body class="repeat" TEXT="DeepPink">
		<?php session_start(); ?>
		</br></br>
		<font size="5">
		<p>Hi <?php echo ucfirst($_SESSION['NickName'])?>!</p>
		<p> You have been successfully logged in. </p>
		<p>Click <a href="../User/user.php" target="_top">here</a> 
		to continue</p>
		</font>
		<img class="right-bottom" src="/connect/images/logo.gif" width="300" height="180"/>
	
	</body>



</html>
