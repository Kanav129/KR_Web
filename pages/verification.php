<!DOCTYPE html>
<html lang="en">
<head>
	<script>
			function admin(){
				location.replace("https://computerscienceiakanav.000webhostapp.com/pages/admin.php")
			}
	</script>
	<title>Failed to Login</title>
</head>

<body>
	
		<?php
		$servername = "localhost";
		$username = "id16023100_stocksheet";
		$password = "^B[mzSgm0{Er0lm=";
		$dbname = "id16023100_inventory";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//fetches data from form in login.php
		$Username = $_POST["uname"];
		$Password = $_POST["psw"];
	
		//verifies login
		$sql = "SELECT * FROM Login WHERE Username = '" . $Username . "' AND Password = '" . $Password."'";
		//checks connection
		$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		if($row['Username']== "" && $row['Password']== "") {
			echo "Failed to login";
			echo "<br><br><button><a href='login.php'>Try Again</a></button>";
		} 
		else if($row['Username']== $Username && $row['Password'] == $Password) {
		  echo "<script>window.location = 'admin.php'</script>";
		} 
		?>
</body>
</html>
