<html>
<head>
</head>
<body>
	<?php
		session_start();
		session_unset();
		session_destroy();
		header("location:../Main/index.html");
		?>
</body>
</html>
