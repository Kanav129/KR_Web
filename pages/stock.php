<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    
	
	<script src="../js/bootstrap.min.js"></script>
    <script>
		function contactus(){
			location.replace("https://computerscienceiakanav.000webhostapp.com/?page=contact")
		}
		function inventory(){
			location.replace("https://computerscienceiakanav.000webhostapp.com/?page=inventory")
		}
	</script>
    
	<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: rgba(256,256,256,0);
}
	</style>
</head>
<body>

	<div class="hero-image">
    <h3 style="text-align: center; font-weight: bold;">STOCK SHEET</h3>
    
    <div class="container">
    	<form class="form-horizontal" action="stock.php" method="POST">
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
                <div class="col-lg-4"><button onclick='inventory()' type='button' class='btn btn-secondary'>Back to website</button></div>
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


//FILTERING DATA
//Fetches the criterias that need to be met
	$cut = $_POST['cut'];
	$color = $_POST['color'];
	$clarity = $_POST['clarity'];
	$display = "";
	
//Fetches all data from table
	$sql = "SELECT * FROM GIA ORDER BY GIA . ID ";
//Fetches data meeting requirements depending on what parts of the form is filled
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
	
	  echo "<div class='row no-gutters'>
	  <div class='col text-center'><b>Stock ID</b></div>
	  <div class='col'></div>
	  <div class='col text-center'><b>Cut</b></div>
	  <div class='col'></div>
	  <div class='col text-center'><b>Color</b></div>
	  <div class='col'></div>
	  <div class='col text-center'><b>Carat</b></div>
	  <div class='col'></div>
	  <div class='col text-center'><b>Clarity</b></div>
	  </div>";
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
		  //Dropdown button
	   $table = $table . "<button type='button' class='collapsible'>
	   <div class='row no-gutters'>
	   <div class='col text-center'>" .$row["Stock ID"]."</div>
	   <div class='col text-center'> | </div>
	   <div class='col text-center'>".$row["Cut"]."</div>
	   <div class='col text-center'> | </div>
	   <div class='col text-center'>".$row["Color"]."</div>
	   <div class='col text-center'> | </div>
	   <div class='col text-center'>".$row["Carat"]."</div>
	   <div class='col text-center'> | </div>
	   <div class='col text-center'>".$row["Clarity"]."</div></div>
	   </button><div class='content'>
	   
	   <!-- Dropdown content-->
	   
	   <div class='col-3'></div><div class='col-6'><table class='table table-sm'>
	   <thead><tr style='background-color: #777; color: #fff;'><th scope='col'>GIA NATURAL DIAMOND DOSSIER</th><th></th></tr></thead>
	   <tbody><tr><th class='text-left'>GIA Report Number</th>
	   <td class='text-right'>" . $row["Certificate"] . "</tr>
	   <tr><th class='text-left'>Shape and Cutting Style</th>
	   <td class='text-right'>" . $row["Cut"] . " Cut</tr>
	   <tr><th class='text-left'>Measurements</th>
	   <td class='text-right'>" . $row["Measurements"] . " mm</tr></tbody>
	   
	   <thead><tr style='background-color: #777; color: #fff;'><th scope='col'>GRADING RESULTS</th><th></th></tr></thead>
	   <tbody><tr><th class='text-left'>Carat Weight</th>
	   <td class='text-right'>" . $row["Carat"] . " carat</tr>
	   <tr><th class='text-left'>Color Grade</th>
	   <td class='text-right'>" . $row["Color"] . "</tr>
	   <tr><th class='text-left'>Clarity Grade</th>
	   <td class='text-right'>" . $row["Clarity"] . "</tr></tbody>
	   
	   <thead><tr style='background-color: #777; color: #fff;'><th scope='col'>ADDITIONAL GRADING INFORMATION</th><th></th></tr></thead>
	   <tr><th class='text-left'>Polish</th>
	   <td class='text-right'>" . $row["Polish"] . "</tr>
	   <tr><th class='text-left'>Symmetry</th>
	   <td class='text-right'>" . $row["Symmetry"] . "</tr>
	   <tr><th class='text-left'>Fluorescence</th>
	   <td class='text-right'>" . $row["Fluorescence"] . "</tr> 
	   <tr><td scope='col'><b>Remarks: </b>" . $row["Remarks"] .
	   "</table></div></div>";
	  }
	  $table = $table . "<script>var coll = document.getElementsByClassName('collapsible');var i;for (i = 0; i < coll.length; i++) {  coll[i].addEventListener('click', function() {    this.classList.toggle('active');    var content = this.nextElementSibling;    if (content.style.display === 'block') {      content.style.display = 'none';    } else {      content.style.display = 'block';    }  });}</script>";
	  echo $table;
	} 
	else {
	  echo "We currently do now have this in stock, please contact us to make an order or for more details. <button onclick='contactus()' type='button' class='btn btn-secondary'>Contact US</button>";
	}	
mysqli_close($conn);
    
   ?>
    </div>
</body>
	
	
	
	
</html>