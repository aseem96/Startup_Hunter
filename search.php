<html>
	<body>
		<?php
			$search = $_POST["search"];
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
			$result = mysql_query("SELECT * FROM register WHERE area='$search' AND verify=0");
			if($result === FALSE) {
    			die(mysql_error());
    		}?>
    		<table border="1" style="width:500px;"><tr><th>STARTUP NAME<th>STARTUP TYPE<th>n2<th>ADDRESS<tr><?php
    		//fetch tha data from the database
			while ($row = mysql_fetch_array($result)) {?><tr><td><?php
   				echo $row{'id'}; ?><td><?php echo $row{'startup_name'}; ?><td><?php echo $row{'startup_type'}; ?><td><?php echo $row{'address'};   				
			}?></td></table><?php
			//$sql = mysql_query("INSERT INTO entry values(3,78,65,'xyz@abc.com')");	
			//close the connection
			mysql_close($conn);
		?>
</body>
</html> 