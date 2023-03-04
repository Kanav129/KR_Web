<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css"/>
		<title>Admin</title>
		
		<style>
			table{
				table-layout: fixed;
			}
		</style>
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
		
    <h3 style="text-align: center; font-weight: bold;">Go Back</h3>
	<div class="col-lg-4"><button onClick='window.location.href="editstock.php"' type='button' class='btn btn-secondary'>Make Sale</button></div>
		
	<div class="container">
	<form method="post" action="insertdata.php">
		<div class="form-group">
            <label class="col-lg control-label  text-center">Stock ID</label>
			<input class="form-control" type="text" placeholder="e.g. F156/16695" name="id" required>
		</div>
		<div class="form-group">
			<table class='table'><tr>
            <td><label class="col-lg control-label  text-center">Cut</label>
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
				</select></td>
			<td><label class="col-lg control-label  text-center">Color</label>
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
				</select></td>
			<td><label class="col-lg control-label  text-center">Clarity</label>
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
                 </select></td>
			<td><label class="col-lg control-label  text-center">Carat</label>
			<input type="number" class="form-control" name="carat" min="0" value="0" step="0.01" required></td>
		</div></tr>
		<tr>
		<td><label class="col-lg control-label  text-center">Polish</label>
			<select name="polish" class="form-control">
                	<option value="">Select</option>
                    <option value="EX">EX - Excellent</option>
                    <option value="VG">VG - Very Good</option>
                    <option value="G">G - Good</option>
                    <option value="FP">FP - Fair and Poor</option>
                 </select></td>
		<td><label class="col-lg control-label  text-center">Symmetry</label>
			<select name="symmetry" class="form-control">
                	<option value="">Select</option>
                    <option value="EX">EX - Excellent</option>
                    <option value="VG">VG - Very Good</option>
                    <option value="G">G - Good</option>
                    <option value="FP">FP - Fair and Poor</option>
                 </select></td>
		<td><label class="col-lg control-label  text-center">Depth</label>
			<input type="number" class="form-control" name="depth" min="0" value="0" step="0.001" required></td>
		<td><label class="col-lg control-label  text-center">Table</label>
			<input type="number" class="form-control" name="table" min="0" value="0" step="0.01" required></td>
		</tr>
		<tr>
		<td><label class="col-lg control-label  text-center">Flourescence</label>
			<select name="flourescence" class="form-control">
                	<option value="">Select</option>
                    <option value="None">No Fluorescence</option>
                    <option value="Faint">Faint</option>
                    <option value="Medium">Medium</option>
                    <option value="Strong">Strong</option>
					<option value="Very Strong">Very Strong</option>
                 </select></td>
		<td><label class="col-lg control-label  text-center">Measurements</label>
			<input class="form-control" type="text" placeholder="e.g. 5.19*5.14*3.82" name="measurements" required></td>
		<td><label class="col-lg control-label  text-center">Lab</label>
			<input class="form-control" type="text" value="GIA" name="lab" required></td>
		<td><label class="col-lg control-label  text-center">Certificate Number</label>
			<input type="number" class="form-control" name="certificate" value="0000000000" min="0" required></td>
		</tr>
		<tr>
		<td><label class="col-lg control-label  text-center">Rapnet Price</label>
			<input type="number" class="form-control" name="rapnet" value="0000" min="0" required></td>
		<td><label class="col-lg control-label  text-center">Discount</label>
			<input type="number" class="form-control" name="discount" value="-0.00" step="0.01" required></td>
		<td><label class="col-lg control-label  text-center">Sell Price</label>
			<input type="number" class="form-control" name="sell" min="0" value="0000" step="0.01" required></td>
		<td><label class="col-lg control-label  text-center">Total Price</label>
			<input type="number" class="form-control" name="total" min="0" value="000.0" step="0.01" required></td>
		</tr>
			</table>
		<div class="form-group">
            <label class="col-lg control-label  text-center">Remarks</label>
			<input class="form-control" type="text" placeholder="e.g. Crystal, Feather, Indented Natural" name="remarks">
		</div>
		
		<div class="col-lg text-center">
                	<input type="submit" name="submit" value="Add Stock" class="btn btn-primary">
                </div>
		</form>
		</div>
 
    </div>
	</body>
</html>
