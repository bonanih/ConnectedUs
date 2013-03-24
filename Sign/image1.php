<html>
	<head>
	
	
	</head>
	<body>
		<?php
			
			if ((($_FILES["datafile"]["type"] == "image/gif")
			|| ($_FILES["datafile"]["type"] == "image/jpeg")
			|| ($_FILES["datafile"]["type"] == "image/pjpeg"))
			)
			{
				if ($_FILES["datafile"]["error"] > 0)
				{
					echo "Return Code: " . $_FILES["datafile"]["error"] . "<br />";
				}
				else
				{
					echo "Upload: " . $_FILES["datafile"]["name"] . "<br />";
					echo "Type: " . $_FILES["datafile"]["type"] . "<br />";
					echo "Size: " . ($_FILES["datafile"]["size"] / 1024) . " Kb<br />";
					echo "Temp file: " . $_FILES["datafile"]["tmp_name"] . "<br />";

					if (file_exists("/connect/pics/" . $_FILES["datafile"]["name"]))
					{
						echo $_FILES["datafile"]["name"] . " already exists. ";
					}
					else
					{
						$connect = mysql_connect("localhost", "root", "music") or die ("Error , check your server connection.");
						mysql_select_db ("connected", $connect);
						session_start(); 
						$n_name = $_SESSION['NickName'];
						$loc = "/connect/pics/" . $_FILES["datafile"]["name"];
						$query = mysql_query("UPDATE Login SET image_loc='$loc' WHERE NickName='$n_name'") or die("Bad Query");
						
						move_uploaded_file($_FILES["datafile"]["tmp_name"], "/connect/pics/" . $_FILES["datafile"]["name"]);
						echo "Stored in: " . "./connect/pics/" . $_FILES["datafile"]["name"];
						
						echo "trying to disp";
						
						$query = mysql_query("SELECT * FROM Login WHERE NickName = '$n_name'");
						$row = mysql_fetch_array($query);
						$content = $row['image'];
						echo "<img src='$row[image_loc]' height='500' width='500'>";
						header("location:/connect/User/user.php");
						
						//header('Content-type: $row['image_mine']');
						//echo $content;
						
						
						
						
						
						
					}
				}
			}
			else
			{
				echo "Invalid file";
				header("location: image2.html");
			}
			
			/*$folder = "/connect/pics/";
			move_uploaded_file($_FILES["datafile"]["temp_name"], "$folder".$_FILES["filep"]["name"]);
			$img = $_FILES["filep"]["name"];
			
			echo "File ".$_FILES["filep"]["name"]."loaded...";
			/*$pic = $_POST['datafile'];
			$handle = fopen($pic,"rb");
			$img = fread($handle, filesize($pic);
			fclose($handle);
			
			$img = base64_encode($img);
			
			
			
			
			
			echo "Success, image inserted";*/
			?>
			
			


	</body>


</html>
