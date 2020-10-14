<?php

	session_start();

	$con = mysqli_connect('localhost', 'id15072714_mydb', 'Gripfoundation01@');
	mysqli_select_db($con, 'id15072714_gripdb');

	$name1 = $_POST['name'];

	$_SESSION['sessionname1'] = $_POST['user'];

	$query = " SELECT name from foundationdata where name != '$name1' ";

	$result = mysqli_query($con, $query);

	$num = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="style.css">

</head>


<body>
	<div class="container-fluid" id="boxshadow">
		<div>
		<style="height: 1px;">
			<div>
				<div class="col-sm-6" style="padding-left: 4%; padding-top: 1%;">
				<h1>The Spark Foundation</h1>
				</div><br>
			</div>

			<div class="col-sm-6">
				<p style="padding-top: 3%;">
				<a href="home.php" target="_blank" style="padding-top: 0%; padding-left: 40%">
					<button class="btn" id="buttontwo1">HOME</button>
				</a>
			

			
				<a href="https://www.thesparksfoundationsingapore.org/contact-us/">
					<button class="btn" id="buttontwo2">CONTACT US</button>
				</a>

				</p><br>
			</div>
		</div>
	</div>

	

	<div class="container-fluid">
		<div>
			<div class="col-sm-6" style="padding-top: 2%; padding-left: 4%;"><h1 class="fontsize5">Select Reciever</h1></div>
		</div>
	</div>

	<div style="padding-left: 4%;"><p style="border:2px solid orange; width: 15%; height: 0px;" ></p></div>

	<form action="getamount.php" method="POST">
		<div class="jumbotron text-center" style="background-color: white;">
			<div style="background-color: white; padding-left: 5%;">
				<br><br>
					<div class="container-fluid" style="width: 70%; background-color: #e6ffff; border-radius: 25px;" id="boxshadow">
						<div style="padding: 1px;">
							<div class="jumbotron text-center" style="background-color: #e6ffff;">
								<div class="form-group">
              						<label style="font-size: 20px;">Enter Recievers Account Number : </label>
            						<input type="text" name="userid" class="form-control"><br>

									<input type="submit" value="Proceed" name="subbtn" class="btn btn-primary">
            					</div>
							</div>
						</div>
					</div>
			</div><br>
		</div>
	</form>
	

</body>
</html>