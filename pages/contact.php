<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		
	</style>
</head>

<body>
    <h1>Contact Us</h1>



	<div class="row">
		<div class="col">
			 <h4>About Us</h4>
			<div class="container">
			<div class="row">
				<div class="col-1">
					<img src="../images/address.png" alt="Email" style="width:25px; height:25px;">
				</div>
				<div class="col-5">
				<h5>Address:</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5">
				<p>607, Rise Commercial Building,<br>5 ~ 11, Granville Circuit,<br>T.S.T., Kowloon,<br>Hong Kong.<br></p>
				</div>
			</div>	
				
			
			<div class="row">
				<div class="col-1">
					<img src="../images/email.png" alt="Email" style="width:25px; height:25px;">
				</div>
				<div class="col-5">
				<h5>Have any questions?</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5">
				<p>niraj@kanayrocks.com<br></p>
				</div>
			</div>	
				
			
			<div class="row">
				<div class="col-1">
					<img src="../images/telephone.png" alt="Email" style="width:25px; height:25px;">
				</div>
				<div class="col-5">
				<h5>Telephone Number:</h5>
				</div>
			</div>
			
			<div class="row">
				<div class="col-1"></div>
				<div class="col-5">
				<p>+852 2723 9789<br></p>
				</div>
			</div>	
			</div>
			
			</div>
		<!--"col" helps grid the page-->
		<div class="col">
			<h4>Inquire</h4>
			<!--Classifies form as a horizontal form-->
			<form method="post" action="pages/form.php">
				<!--Divides each input into a form group with the respected text-->
				<!--"Form-control" styles the input for the resepected type-->
					<div class="form-group">
					<label for="name">Name</label>
					<input name ="name" type="name" class="form-control" id="name" placeholder="Enter Name" required>
				  </div>
				  <div class="form-group">
					<label for="email">Email</label>
					<input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" required>
				</div>
				<div class="form-group">
					<label for="number">Contact Number</label>
					<input name="number" type="number" class="form-control" id="number" placeholder="Enter Contact Number" required>
				</div>
				<div class="form-group">
					<label for="message">Your Inquiry:</label>
					<input name="message" type="message" class="form-control" id="message" placeholder="Enter Inquiry" required>
				</div>
				<!--Button classes-->
				  <button type="submit" class="btn btn-primary">Enter Inquiry</button>
			</form>
		</div>
		</div>
		<div class="row">
			<div class="col text-center">
				<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29532.53688159193!2d114.17385152959031!3d22.29438216854422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x883970984074b28!2sRise%20Commercial%20Building!5e0!3m2!1sen!2shk!4v1614440087059!5m2!1sen!2shk" width=90% height="500px" style="border:0; align: center;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	</div>
	
	</body>	
</html>