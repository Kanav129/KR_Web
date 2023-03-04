<!DOCTYPE html>
<html lang="en">
<head>
	<script src="../js/bootstrap.min.js"></script>
</head>

<body>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
	<title>KANAY ROCKS</title>
	
	<script type="text/javascript">
    $(document).ready(function() {
      $('#body').load('./home.php');
	  
      $('#about').click(function() {
        $('#body').load('./pages/home.php');
      });
	  $('#trade').click(function() {
		  $('#body').load('./pages/trade.php');
	  });
      $('#invetory').click(function() {
        $('#body').load('./pages/inventory.html');
      });
      $('#contact').click(function() {
        $('#body').load('./pages/contact.php');
      });
      $('.nav-item a').on('click', function() {
        $('.nav-item a').removeClass('active');
        $(this).addClass('active');
      });
    });
  </script>
	</head>
	
	<body>
		
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<!--Logo Element-->
	<img src="../images/Logo.png" alt="Logo" style="width:108px; height:102px;">
  <a class="navbar-brand" href="#" style:"font-family:Richardson Brand Accelerator;">COMPANY NAME</a>
	<!--Here is the code that makes the navbar resposive--->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
	 <!---Elements for navigation within the requested nav-bar--->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link <?php if ( strpos( $_SERVER['REQUEST_URI'], 'home' ) ) {?> active 
				<?php } ?>" href="?page=home" id="home">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php
		if ( strpos( $_SERVER['REQUEST_URI'], 'trade' ) ) {
			?>
			active 
			<?php
		}
		?>" href="?page=trade" id="trade">TRADE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php
		if ( strpos( $_SERVER['REQUEST_URI'], 'inventory' ) ) {
			?>
			active 
			<?php
		}
		?>" href="?page=inventory" id="inventory">INVENTORY</a>
      </li>
	 <li class="nav-item">
        <a class="nav-link <?php
		 if ( strpos($_SERVER['REQUEST_URI'], 'contact')){
			 ?>
             active
             <?php
		 }
		 ?>" href="?page=contact" id="contact">CONTACT US</a>
      </li>
    </ul>
    <span class="navbar-text">
      <div class="row">
    	<form class="form-horizontal" action="pages/login.php" method="POST">
              <div class="form-group">
            	<label class="col-lg-2 control-label"></label>
               <div class="col-lg-4">
                	<input type="submit" name="submit" value="Admin Login" class= "btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    </span>
  </div>
</nav>
	
	



</body>
