<html>
	<body>
		<?php
			$name_user = $_POST["new_name"];
			$username_1 = $_POST["username"];
			$password = $_POST["password"];
			$startup_name = $_POST["startup_name"];
			$type = $_POST["type"];
			$s_name = $_POST["s_name"];
			$a_name = $_POST["a_name"];
			$username = "root";
			$password = "aseem";
			$hostname = "127.0.0.1";
			$dbname = 'startup';
			//connection to the database
			$conn = mysql_connect($hostname, $username, $password)
  				or die("Unable to connect to MySQL");
			echo "Connected to MySQL<br>";
			$selected = mysql_select_db($dbname,$conn)
				or die("Could not select database");
			$sql = mysql_query("INSERT INTO register(name_user, username, password, startup_name, startup_type, address, area, verify) values('$name_user','$username_1','$password','$startup_name','$type','$s_name','$a_name',0)");
			if($sql === FALSE) {
    			die(mysql_error());
    		}
			header("Location: /WET_Final/index.html");
			//$sql = mysql_query("INSERT INTO entry values(3,78,65,'xyz@abc.com')");	
			//close the connection
			mysql_close($conn);
		?>
</body>
</html> 