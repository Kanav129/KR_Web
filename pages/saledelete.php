<?php

$servername = "localhost";
$username = "id16023100_stocksheet";
$password = "^B[mzSgm0{Er0lm=";
$dbname = "id16023100_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$id = $_GET['id']; // get id through query string
$cut = $_GET['cut'];
$color = $_GET['color'];
$carat = $_GET['carat'];
$clarity = $_GET['clarity'];
$certificate = $_GET['certificate'];
$measurements = $_GET['measurements'];
$lab = $_GET['lab'];
$polish = $_GET['polish'];
$symmetry = $_GET['symmetry'];
$flourescence = $_GET['flourescence'];
$depth = $_GET['depth'];
$table = $_GET['table'];
$remarks = $_GET['remarks'];
$rapnet = $_GET['rapnet'];
$discount = $_GET['discount'];
$sell = $_GET['sell'];
$total = $_GET['total'];

$sql = "INSERT INTO GIA (`Stock ID`, `Cut`, `Color`, `Carat`, `Clarity`, `Polish`, `Symmetry`, `Flourescence`, `Depth`, `Table`, `Measurements`, `Lab`, `Certificate`, `Rapnet`, `Discount`, `Sell`, `Total`, `Remarks`) VALUES ('$id', '$cut', '$color', '$carat', '$clarity', '$polish', '$symmetry', '$flourescence', '$depth', '$table', '$measurements', '$lab', '$certificate', '$rapnet', '$discount', '$sell', '$total', '$remarks')";

$delete = "DELETE FROM sales WHERE `Stock ID` = '".$id."'";

$del = mysqli_query($conn,$delete); // delete query
if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	}else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

    mysqli_close($conn); // Close connection
  echo "<script>window.location = 'sales.php'</script>"; // redirects to all records page
?>