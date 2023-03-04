<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	
	 <script>
		function contact(){
			location.replace("https://computerscienceiakanav.000webhostapp.com/?page=contact")
		}
	</script>
	
	<style>
		body{
			margin-left: 1%;
		}
	</style>
</head>

<body>
	<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$number = $_POST["number"];
	$message = $_POST["message"];
	
	mail($email, "Inquiry Confirmation" , "We have recieved your inquiry and we will get back to you as soon as possible. Thank you so much for your patience and interest in our company. 
	Inquiry: " . $message . "
	
	Email: " . $email . "
	Contact Number: " . $number);
	
	
	mail("temp@.gmail.com", "Inquiry from: " . $name , "
	Inquiry: " . $message . "
	
	Email: " . $email . "
	Contact Number: " . $number);
	
	
	
	$inquiry = "<h2>Your Inquiry</h2><br>
	<p>Inquiry from: "
	. $name . "<br>Inquiry: " . $message . "
	<br>Email: " . $email . "
	<br>Contact Number: " . $number . "</p>";
	
	echo $inquiry;
	
	$servername = "localhost";
	$username = "id16023100_stocksheet";
	$password = "^B[mzSgm0{Er0lm=";
	$dbname = "id16023100_inventory";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//inserts data into table
	$sql = "INSERT INTO Inquiries (Name, Email, Contact, Message) VALUES ('" . $name . "', '" . $email . "', '" . $number . "', '" . $message . "')";
	//checks if input is successful
	if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	?>
	
	<h4>Inquiry Confirmation</h4>
	<p><b>We have recieved your inquiry and we will get back to you as soon as possible. Thank you so much for your patience and interest in our company.</b></p>
		
		<div class="row">
                <div class="col-lg-4"><button onclick='contact()' type='button' class='btn btn-secondary'>Back to website</button></div>
			
	
</body>
	
	
	
	
</html>