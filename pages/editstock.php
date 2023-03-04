<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<title>Admin</title>
	</head>
	
	<body>
		<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="../images/Logo.png" alt="Logo" style="width:108px; height:102px;">
 	<a class="navbar-brand" href="#" style:"font-family:RichardsonBrandAccelerator;">ADMIN SITE</a>
		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="admin.php">ANALYTICS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link <?php if ( strpos( $_SERVER['REQUEST_URI'], 'stock' ) ) {?> active 
				<?php } ?>" href="?page=stock" id="stock">EDIT STOCK <span class="sr-only">(current)</span></a></li>
		<li class="nav-item">
        <a class="nav-link" href="sales.php">SALES</a>
      </li>
    </ul>
    <span class="navbar-text">
      <div class="row">
    	<form class="form-horizontal" action="../index.php" method="POST">
              <div class="form-group">
            	<label class="col-lg-2 control-label"></label>
               <div class="col-lg-4">
                	<input type="submit" name="submit" value="Website" class= "btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    </span>
  </div>
</nav>
		</header>
	<div class="hero-image">
    <h3 style="text-align: center; font-weight: bold;">EDIT STOCKS</h3>
    
    <div class="container">
    	<form class="form-horizontal" action="editstock.php" method="POST">
        	<div class="form-group">
            	<label class="col-lg control-label  text-center">Cut</label>
                <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                <select name="cut" class="form-control">
                	<option value="">Select</option>
                    <option value="Princess">Princess</option>
                    <option value="Emerald">Emerald</option>
                    <option value="Asscher">Asscher</option>
                    <option value="Marquise">Marquise</option>
                    <option value="Pear">Pear</option>
                    <option value="Oval">Oval</option>
                    <option value="Radiant">Radiant</option>
                    <option value="Cushion Modified">Cushion Modified</option>
                    <option value="Heart">Heart</option>
                    <option value="Triangular">Triangular</option>
                 </select>
                </div>
                </div>
            </div>

            <div class="form-group">
            	<label class="col-lg control-label text-center">Color</label>
            	<div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                <select name="color" class="form-control">
                	<option value="">Select</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G">G</option>
                    <option value="H">H</option>
                    <option value="I">I</option>
                    <option value="J">J</option>
                    <option value="K">K</option>
                 </select>
                 </div>
                </div>
            </div>
            
            <div class="form-group">
            	<label class="col-lg control-label text-center">Clarity</label>
            	<div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 text-center">
                <select name="clarity" class="form-control">
                	<option value="">Select</option>
                    <option value="FL">FL - Flawless</option>
                    <option value="IF">IF - Internally Flawless</option>
                    <option value="VVS1">VVS1 - Very Very Slightly Included 1</option>
                    <option value="VVS2">VVS2 - Very Very Slightly Included 2</option>
                    <option value="VS1">VS1 - Very Slightly Included 1</option>
                    <option value="VS2">VS2 - Very Slightly Included 2</option>
                    <option value="SI1">SI1 - Slightly Included 1</option>
                    <option value="SI2">SI2 - Slightly Included 2</option>
                 </select>
                 </div>
                </div>
            </div>
            
              <div class="form-group">
            	<label class="col-lg-2 control-label text-center"></label>
            	<div class="row">
                <div class="col-lg-4"><button onClick='window.location.href="addstock.php"' type='button' class='btn btn-secondary'>Add Stock</button></div>
               <div class="col-lg-4 text-center">
                	<input type="submit" name="submit" value="Filter" class="btn btn-primary">
                </div>
                </div>
            </div>
        </form>
        </div>
    
    <?php
$servername = "localhost";
$username = "id16023100_stocksheet";
$password = "^B[mzSgm0{Er0lm=";
$dbname = "id16023100_inventory";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully <br>";

//FILTERING DATA
	$cut = $_POST['cut'];
	$color = $_POST['color'];
	$clarity = $_POST['clarity'];
	$display = "";
	

	$sql = "SELECT * FROM GIA ORDER BY GIA . Cut ";
	if($cut != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for CUT: " . $cut;
	}
	if($color != ""){
		$sql = "SELECT * FROM GIA WHERE Color = '" . $color . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for COLOR: " . $color;
	}
	if($clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Clarity = '" . $clarity . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for Clarity: " . $clarity;
	}
	
	if($cut != "" && $color != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' AND Color = '" . $color . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for CUT: " . $cut . " and COLOR: " . $color;
	}
	if($cut != "" && $clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' AND Clarity = '" . $clarity . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for CUT: " . $cut . " and CLARITY: " . $clarity;
	}
	if($color != "" && $clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Color = '" . $color . "' AND Clarity = '" . $clarity . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for COLOR: " . $color . " and CLARITY: " . $clarity;
	}
	
	if($cut != "" && $color != "" && $clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' AND Color = '" . $color . "' AND Clarity = '" . $clarity . "' ORDER BY GIA . Cut ";
		$display = "<div class='col text-center'><p class='lead'>Showing Results for CUT: " . $cut . " and COLOR: " . $color . " and CLARITY: " . $clarity;
	} 
	
	if($display != ""){
		$display = $display . "</p></div>";
		echo $display;
	}
	

	$result = mysqli_query($conn, $sql);
	
	  echo "<table class='table table-hover'><thead class='thead-dark'><tr>
	  <th>Stock ID</th>
	  <th>Cut</th>
	  <th>Color</th>
	  <th>Carat</th>
	  <th>Clarity</th>
	  <th>Sell</th>
	  </thead></tr>";
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	   echo "<tr>
	   <td>" .$row["Stock ID"]."</td>
	   <td>".$row["Cut"]."</td>
	   <td>".$row["Color"]."</td>
	   <td>".$row["Carat"]."</td>
	   <td>".$row["Clarity"]."</td>
	   
	   <!--This sends all the following data to editdelete.php-->
	   <td><a href='editdelete.php?id=".$row["Stock ID"]." & 
	   cut=".$row["Cut"]." &
	   color=".$row["Color"]." &
	   carat=".$row["Carat"]." &
	   clarity=".$row["Clarity"]." &
	   certificate=".$row["Certificate"]." &
	   measurements=".$row["Measurements"]." &
	   lab=".$row["Lab"]." &
	   polish=".$row["Polish"]." & 
	   symmetry=".$row["Symmetry"]." &
	   flourescence=".$row["Flourescence"]." & 
	   depth=".$row["Depth"]." &
	   table=".$row["Table"]." &
	   remarks=".$row["Remarks"]." &
	   rapnet=".$row["Rapnet"]." &
	   discount=".$row["Discount"]." &
	   sell=".$row["Sell"]." &
	   total=".$row['Total']."
	   '>Sell</a></td></tr>";
	  }
	  echo "</table>";
	} 
	else {
	  echo "We currently do now have this in stock, please contact us to make an order or for more details. <button onclick='contactus()' type='button' class='btn btn-secondary'>Contact US</button>";
	}	
mysqli_close($conn);
    
   ?>
    </div>
	</body>
</html>
