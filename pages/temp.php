<!DOCTYPE html>
<html lang="en">
<head>

</head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
table {
	width: 100%;	
	border-collapse: collapse;
	border: 0px;
}

th {
	height:30px;
	background-color: #b9f2ff;
	color: black;
	width: 16.6%;
}

td {
	text-align: center;
	width: 16.6%;
	border: 0px;
}

tr{
	border: 0px;
}


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
  background-color: #f1f1f1;
}
	</style>

<body>

	<div class="hero-image">
    <h3 style="text-align: center; font-weight: bold;">STOCK SHEET</h3>
    
    <div class="container">
    	<form class="form-horizontal" action="stock.php" method="POST">
        	<div class="form-group">
            	<label class="col-lg-1 control-label">Cut</label>
                <div class="col-lg-4">
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
            
            <div class="form-group">
            	<label class="col-lg-1 control-label">Color</label>
                <div class="col-lg-4">
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
            
            <div class="form-group">
            	<label class="col-lg-1 control-label">Clarity</label>
                <div class="col-lg-4">
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
            
              <div class="form-group">
            	<label class="col-lg-2 control-label"></label>
               <div class="col-lg-4">
                	<input type="submit" name="submit" class= "btn btn-primary">
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
	
	echo $cut;
	echo $color;
	echo $clarity;
	$sql = "SELECT * FROM GIA ORDER BY GIA . ID ";
	if($cut != ""){
			$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' ORDER BY GIA . ID ";
	}
	if($color != ""){
			$sql = "SELECT * FROM GIA WHERE Color = '" . $color . "' ORDER BY GIA . ID ";
	}
	if($clarity != ""){
			$sql = "SELECT * FROM GIA WHERE Clarity = '" . $clarity . "' ORDER BY GIA . ID ";
	}
	
	if($cut != "" && $color != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' AND Color = '" . $color . "' ORDER BY GIA . ID ";
	}
	if($cut != "" && $clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' AND Clarity = '" . $clarity . "' ORDER BY GIA . ID ";
	}
	if($color != "" && $clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Color = '" . $color . "' AND Clarity = '" . $clarity . "' ORDER BY GIA . ID ";
	}
	if($cut != "" && $color != "" && $clarity != ""){
		$sql = "SELECT * FROM GIA WHERE Cut = '" . $cut . "' AND Color = '" . $color . "' AND Clarity = '" . $clarity . "' ORDER BY GIA . ID ";
	} 
	
	echo $sql;
	$result = mysqli_query($conn, $sql);
	
	  echo "<div class='row'><div class='col'>Stock ID</div><div class='col'>Cut</div><div class='col'>Color</div><div class='col'>Carat</div><div class='col'>Clarity</div></div>";
	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	   $table = $table . "<button type='button' class='collapsible'><div class='row'><div class='col nopadding'>" .$row["Stock ID"]."</div><div class='col align-center'>|</div><div class='col'>".$row["Cut"]."</div><div class='col align-center'>|</div><div class='col'>".$row["Color"]."</div><div class='col align-center'>|</div><div class='col'>".$row["Carat"]."</div><div class='col align-center'>|</div><div class='col'>".$row["Clarity"]."</div></div></button><div class='content'><p>TEST" . $row["Stock ID"].  "</p></div>";
	  }
	  $table = $table . "<script>var coll = document.getElementsByClassName('collapsible');var i;for (i = 0; i < coll.length; i++) {  coll[i].addEventListener('click', function() {    this.classList.toggle('active');    var content = this.nextElementSibling;    if (content.style.display === 'block') {      content.style.display = 'none';    } else {      content.style.display = 'block';    }  });}</script>";
	  echo $table;
	} 
	else {
	  echo "0 results";
	}	
mysqli_close($conn);
    
   ?>
    </div>
</body>
	
	
	
	
</html>