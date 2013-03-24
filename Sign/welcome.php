<html>
	<head>	
		<link rel="stylesheet" type="text/css" href="/connect/css/style1.css">	
	</head>
	
	<body class="repeat" TEXT="DeepPink">
		<?php session_start()?>
		<img src="/connect/images/logo.gif" width="300" height="180"/>
		<font size="5.5">
		<p>Welcome <?php echo ucfirst($_SESSION['NickName'])?> to Connected Us</p>
		<p>Thanks For Signing Up!<img class="right" src="/connect/images/smiley.gif" width="30" height="30"/></p>
		<p>Please Login to continue...</p>
		</font>
	    <?php session_unset();
			  session_destroy();
			  ?>
	</body>
	
	


</html>
