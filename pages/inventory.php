<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
		ul{
			background-color: rgb(258,258,258, 0);
		}
		h4{
			background-color: rgb(0,0,0, 0);
		}
		li{
			background-color: rgb(0,0,0, 0);
		}
	</style>
</head>
<body>

    <h1>Inventory</h1>
   	
	<div class="container">
		<p style="text-align: center;">
			We sell a variety of GIA certified fancy cut diamonds and non certified brillian cut natural diamonds. In addition to that, we also sell an assortment of exotic jewelry carefuly designed by our experienced and skilled staff and manufactured in respectable facotries in Hong Kong and India. 
			<br>
			We are a member of the respected Hong Kong Indian Diamond Association (HKIDA). In addition, we have a rapnet membership. <br><b>Our rapnet ID is 86829</b><br> 
			Below is a link to our stocksheet of available GIA certified Diamonds, and below that a list of the brilliant cut natural diamonds we sell.
			<form class="form-horizontal" action="pages/stock.php" method="POST">
				<div class="form-group">
					<label class="col-lg-2 control-label"></label>
					<div class="row">
						<div class="col text-center">
							<input type="submit" name="submit" value="GIA Stock Sheet" class= "btn btn-secondary">
						</div>
					  </div>
				  </div>
			</form>
		
			<table class='table'>
	  			<thead><tr style='background-color: #777; color: #fff;'>
					<th scope='col' class='text-center'>Cut</th>
					<th scope='col' class='text-center'>Color</th>
					<th scope='col' class='text-center'>Carat</th>
					<th scope='col' class='text-center'>Clarity</th>
					</tr></thead>
				<tbody>
				<tr>
					<td class='text-center'>Round Brilliant</td>
					<td class='text-center'>White (H+)</td>
					<td class='text-center'>1/6 ~ 1/10 (0.17~0.08)</td>
					<td class='text-center'>VVS ~ PK</td>
				</tr>
				<tr>
					<td class='text-center'>Round Brilliant</td>
					<td class='text-center'>White (H+)</td>
					<td class='text-center'>+6.5 - 11 (0.03~0.07)</td>
					<td class='text-center'>VVS ~ PK</td>
				</tr>
				<tr>
					<td class='text-center'>Round Brilliant</td>
					<td class='text-center'>White (H+)</td>
					<td class='text-center'>+2 - 6.5 (0.01~0.02)</td>
					<td class='text-center'>VVS ~ PK</td>
				</tr>
				<tr>
					<td class='text-center'>Round Brilliant</td>
					<td class='text-center'>White (H+)</td>
					<td class='text-center'>- 2 (Below 0.01)</td>
					<td class='text-center'>VVS ~ PK</td>
				</tr>
				</tbody></table
		</p></div>		
</body>
</html>