<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/connect/css/style.css"/>
	</head>

	<body class="new" bgcolor = 'Black' >
		<?php session_start(); ?>
		<font color='DeepPink' size="4.8">
			<p class="right" > <a href="user.php" target="_top" >Welcome <?php echo ucfirst($_SESSION['NickName'])?>! </a>
			<a href="logout.php" target="_top" ><img src="/connect/images/logout.png" height="70" width="100"></a></p>
		</font>
</body>
</html>
