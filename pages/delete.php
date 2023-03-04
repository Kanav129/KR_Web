<?php

$servername = "localhost";
$username = "id16023100_stocksheet";
$password = "^B[mzSgm0{Er0lm=";
$dbname = "id16023100_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$id = $_GET['id']; // get id through query string

$delete = "DELETE FROM sales WHERE `Stock ID` = '".$id."'";

$del = mysqli_query($conn,$delete); // delete query


    mysqli_close($conn); // Close connection
echo "<script>window.location = 'sales.php'</script>"; // redirects to all records page
?>