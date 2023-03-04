<?php

$servername = "localhost";
$username = "id16023100_stocksheet";
$password = "^B[mzSgm0{Er0lm=";
$dbname = "id16023100_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Get following data through query string
$id = $_GET['id']; 
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

//adds all values into table in respected fields
$sql = "INSERT INTO sales (`Stock ID`, `Cut`, `Color`, `Carat`, `Clarity`, `Polish`, `Symmetry`, `Flourescence`, `Depth`, `Table`, `Measurements`, `Lab`, `Certificate`, `Rapnet`, `Discount`, `Sell`, `Total`, `Remarks`) VALUES ('$id', '$cut', '$color', '$carat', '$clarity', '$polish', '$symmetry', '$flourescence', '$depth', '$table', '$measurements', '$lab', '$certificate', '$rapnet', '$discount', '$sell', '$total', '$remarks')";

//checks if data is inputed correctly
if ($conn->query($sql) === TRUE) {
	  echo "New record created successfully";
	}else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
//deletes data that matches the criteria
$delete = "DELETE FROM GIA WHERE `Stock ID` = '".$id."'";

$del = mysqli_query($conn,$delete); // delete query

    mysqli_close($conn); // Close connection
  echo "<script>window.location = 'editstock.php'</script>"; // redirects to all records page
?>