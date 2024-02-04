<?php
require_once ('connect.php');

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


if(isset($_POST) & !empty($_POST)){
	$date = ($_POST['date']);
	$time = ($_POST['time']);
	$name = ($_POST['name']);
	$phone = $_POST['phone'];

	$CreateSql = "INSERT INTO `booking` (date, time, name, phone) VALUES 
    ('$date', '$time', '$name', '$phone')";
	$res = mysqli_query($connection, $CreateSql) or die(mysqli_error($connection));
	if($res){
		$smsg = "Booking Successful.";
	}else{
		$fmsg = "Booking Not Successful. Please try again later.";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Booking System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <link rel="stylesheet" href="styles.css" >
 
<!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="navbar-collapse collapse justify-content-between">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="view.php">Booking</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item mr-sm-2">
					<a class="nav-link btn btn-warning" href="reset-password.php">Reset Password</a>
				</li>
				<li class="nav-item mr-sm-2">
					<a class="nav-link btn btn-danger" href="logout.php">Sign Out</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="d-flex my-4">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Book Something.</h1>
    	</div>
	<div class="row mt-4">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>

		<form method="post" class="col-md-6 col-md-offset-3">
		<h2>Online Booking System - Create</h2>
			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name"  class="form-control" id="input1" placeholder="Enter Your Name" />
			    </div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Date</label>
			    <div class="col-sm-10">
			      <input type="date" name="date"  class="form-control" id="input1" placeholder="select date" />
			    </div>
			</div>

            <div class="form-group">
			<label for="input1" class="col-sm-2 control-label">Time</label>
			<div class="col-sm-10">
            <input type="time" name="time" class="form-control" id="input1" min="06:00" max="22:00" required>
			</div>
			</div>

			<div class="form-group">
			    <label for="input1" class="col-sm-2 control-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="number" name="phone"  class="form-control" id="input1" min="10" placeholder="Your Phone Number" />
			    </div>
			</div>

			<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
		</form>
	</div>
</div>
</body>
</html>
