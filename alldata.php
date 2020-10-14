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
				<a href="home.php" style="padding-top: 0%; padding-left: 40%">
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
			<div class="col-sm-6" style="padding-top: 2%; padding-left: 4%;"><h1 class="fontsize5">All Customers Datails</h1></div>
		</div>
	</div>

	<div style="padding-left: 4%;"><p style="border:2px solid orange; width: 15%; height: 0px;" ></p></div>

	<?php

		session_start();

		$con = mysqli_connect('localhost', 'id15072714_mydb', 'Gripfoundation01@');
		mysqli_select_db($con, 'id15072714_gripdb');

		$query = " SELECT userid, name, email, balance from foundationdata order by userid asc ";

		$result = mysqli_query($con, $query);

		$num = mysqli_num_rows($result);

		if($num > 0)
		{
			while ($fdata = mysqli_fetch_array($result)) 
			{
				?>
					<div style="background-color: white; padding-left: 5%;">
					<br><br>
						<form action="getreciever.php" method="POST">
							<div class="container-fluid" style="width: 70%; background-color: #e6ffff; border-radius: 25px;" id="boxshadow">
								<div style="padding: 1px;">
									<div class="jumbotron text-center" style="background-color: #e6ffff;">
										<div class="col-lg-1 col-md-1 col-sm-1"><p><?php echo $fdata['userid']; ?></p></div>
										<div class="col-lg-3 col-md-3 col-sm-3"><p><?php echo $fdata['name']; ?></p></div>
										<div class="col-lg-4 col-md-4 col-sm-4"><p><?php echo $fdata['email']; ?></p></div>
										<div class="col-lg-4 col-md-4 col-sm-4" style="margin-bottom: 3%;"><p><?php echo $fdata['balance']; ?></p></div>
										<input type="hidden" name="name" value="<?php echo $fdata['name']; ?>">
										<input type="hidden" name="user" value="<?php echo $fdata['userid']; ?>">

										<input type="submit" name="sbtbtn" value="Transfer Money" id="buttontwo1">
									</div>
								</div>
							</div>
						</form>
					</div><br>

				<?php
			}
		}
?>


</body>
</html>