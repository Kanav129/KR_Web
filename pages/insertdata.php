<?php

$servername = "localhost";
$username = "id16023100_stocksheet";
$password = "^B[mzSgm0{Er0lm=";
$dbname = "id16023100_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$id = $_POST['id']; // get id through query string
$cut = $_POST['cut'];
$color = $_POST['color'];
$carat = $_POST['carat'];
$clarity = $_POST['clarity'];
$certificate = $_POST['certificate'];
$measurements = $_POST['measurements'];
$lab = $_POST['lab'];
$polish = $_POST['polish'];
$symmetry = $_POST['symmetry'];
$flourescence = $_POST['flourescence'];
$depth = $_POST['depth'];
$table = $_POST['table'];
$remarks = $_POST['remarks'];
$rapnet = $_POST['rapnet'];
$discount = $_POST['discount'];
$sell = $_POST['sell'];
$total = $_POST['total'];

$sql = "INSERT INTO GIA (`Stock ID`, `Cut`, `Color`, `Carat`, `Clarity`, `Polish`, `Symmetry`, `Flourescence`, `Depth`, `Table`, `Measurements`, `Lab`, `Certificate`, `Rapnet`, `Discount`, `Sell`, `Total`, `Remarks`) VALUES ('$id', '$cut', '$color', '$carat', '$clarity', '$polish', '$symmetry', '$fluorescence', '$depth', '$table', '$measurements', '$lab', '$certificate', '$rapnet', '$discount', '$sell', '$total', '$remarks')";

if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	}else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    mysqli_close($conn); // Close connection
  echo "<script>window.location = 'addstock.php'</script>"; // redirects to all records page
?>