<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--Links the cloudflare source-->
		<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
		
		<title>Admin</title>
	</head>
	
	<body>
		<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<img src="../images/Logo.png" alt="Logo" style="width:108px; height:102px;">
 	<a class="navbar-brand" href="#" style:"font-family:Richardson Brand Accelerator;">ADMIN SITE</a>
		
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link <?php if ( strpos( $_SERVER['REQUEST_URI'], 'home' ) ) {?> active 
				<?php } ?>" href="?page=home" id="home">ANALYTICS <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="editstock.php">EDIT STOCK</a>
		</li>
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
		
	<h3 style="text-align: center; font-weight: bold;">ANALYTICS</h3>

<meta charset="UTF-8">


		<?php 
	$servername = "localhost";
	$username = "id16023100_stocksheet";
	$password = "^B[mzSgm0{Er0lm=";
	$dbname = "id16023100_inventory";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	//Gets all data from table and sorts accordingly
    $sql ="SELECT * FROM sales ORDER BY sales . Cut";
	$sql2 ="SELECT * FROM sales ORDER BY sales . Color";
	$sql3 ="SELECT * FROM sales ORDER BY sales . Clarity";
    $result = mysqli_query($conn,$sql);
	$result2 = mysqli_query($conn,$sql2);
	$result3 = mysqli_query($conn,$sql3);
	$cut = "Asscer";
	$color = "D";
	$clarity = "IF";
	$quantity = 0;
	$quantity2 = 0;
	$quantity3 = 0;
	$Cut[] = $cut;
	$Color[]=$color;
	$Clarity[]=$clarity;
		
    while ($row = mysqli_fetch_array($result)) { 
    	if ($row['Cut']!=$cut){ //checks if next data is not the same as the previous value
			$cut = $row['Cut']; //changes local variable to current data
			$Quantity[]=$quantity; //adds the quantity of corresponding data to array
			$Cut[] = $cut; //adds data to array
			$quantity = 1; //resets quantity of corresponding data
		}
		else if($row['Cut'] = $cut){ //checks if next data is the same as previous value
			$quantity = $quantity + 1; //adds quantity by 1
		}
        }
		$Quantity[]=$quantity; //adds the quantity of corresponding data to array
	
	 while ($row2 = mysqli_fetch_array($result2)) { 
    	if ($row2['Color']!=$color){
			$color = $row2['Color'];
			$Quantity2[]=$quantity2;
			$Color[] = $color;
			$quantity2 = 1;
		}
		else if($row2['Color'] = $color){
			$quantity2 = $quantity2 + 1;
		}
        }
		$Quantity2[]=$quantity2;
		
	while ($row3 = mysqli_fetch_array($result3)) { 
    	if ($row3['Clarity']!=$clarity){
			$clarity = $row3['Clarity'];
			$Quantity3[]=$quantity3;
			$Clarity[] = $clarity;
			$quantity3 = 1;
		}
		else if($row3['Clarity'] = $clarity){
			$quantity3 = $quantity3 + 1;
		}
        }
		$Quantity3[]=$quantity3;
?>

<div style="width:33%;height:15%;text-align:center; position:absolute;">
<h3 style="font-size:15px;font-family:DINNeuzeitGroteskLTW01-BdCn;">Pie Chart of Cut</h3>    
    <canvas id="chartjs_bar"></canvas> 
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($Cut); ?>,
                        datasets: [{
                            backgroundColor: [
                                "#65bfbf","#65bfbf","#65bfbf","#65bfbf","#65bfbf",
                                "#65bfbf","#65bfbf","#65bfbf","#65bfbf","#65bfbf",
                            ],
                            data:<?php echo json_encode($Quantity); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontSize: 14,
                        }
                    },
 
                }
                });
    </script>
	</div>  
</div>
<div style="width:33%;height:15%; margin-left: 33%; text-align:center; position:absolute;">
<h3 style="font-size:15px;font-family:DINNeuzeitGroteskLTW01-BdCn;">Pie Chart of Color</h3>    
    <canvas id="chartjs_bar2"></canvas> 
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx2 = document.getElementById("chartjs_bar2").getContext('2d');
                var myChart = new Chart(ctx2, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($Color); ?>,
                        datasets: [{
                            backgroundColor: [
                                "#9f5cb5","#9f5cb5","#9f5cb5","#9f5cb5","#9f5cb5",
                                "#9f5cb5","#9f5cb5","#9f5cb5","#9f5cb5","#9f5cb5",
                            ],
                            data:<?php echo json_encode($Quantity2); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontSize: 14,
                        }
                    },
 
                }
                });
    </script>
	</div>  
</div>
<div style="width:33%;height:15%; margin-left: 66%; text-align:center; position:absolute;">
<h3 style="font-size:15px;font-family:DINNeuzeitGroteskLTW01-BdCn;">Pie Chart of Clarity</h3>    
	<!--creates the chart-->
    <canvas id="chartjs_bar3"></canvas>  
	<!-- links jQuery and cloudflare sources-->
<script src="//code.jquery.com/jquery-1.9.1.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
	//Calls on function from cloudflare
      var ctx3 = document.getElementById("chartjs_bar3").getContext('2d');
                var myChart3 = new Chart(ctx3, {
                    type: 'pie',
                    data: {
                        labels:<?php echo json_encode($Clarity); ?>,
                        datasets: [{
                            backgroundColor: [
                                "#22e08e","#22e08e","#22e08e","#22e08e","#22e08e",
                                "#22e08e","#22e08e","#22e08e","#22e08e","#22e08e",
                            ],
                            data:<?php echo json_encode($Quantity3); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontSize: 14,
                        }
                    },
 
                }
                });
    </script>
	</div> 
</div>
</body>
</html>
