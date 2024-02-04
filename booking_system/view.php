<?php
require_once('connect.php');
$ReadSql = "SELECT * FROM `booking`";
$res = mysqli_query($connection, $ReadSql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Booking System - View</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/responsive.css">
	<style>
		.container{
			min-height: 90vh;
			width: 100%;
		}
	</style>
 
<!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php include "../subheader.php"?>
<?php include "../headder.php"?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="navbar-collapse collapse justify-content-between">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="signin.php">Home <span class="sr-only">(current)</span></a>
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

	<div class="row mt-4">
	<h2>Online Booking System - Read</h2>
		<table class="table "> 
		<thead> 
			<tr> 
				<th>#</th> 
				<th>Name</th> 
				<th>Date</th> 
				<th>Time</th> 
				<th>Phone Number</th> 
				<th>Action</th>
			</tr> 
		</thead> 
		<tbody> 
		<?php 
		while($r = mysqli_fetch_assoc($res)){
		?>
			<tr> 
				<th scope="row"><?php echo $r['id']; ?></th> 
				<td><?php echo $r['name']; ?></td> 
				<td><?php echo $r['date']; ?></td> 
				<td><?php echo $r['time']; ?></td> 
				<td><?php echo $r['phone']; ?></td> 
				<td>
					<a href="update.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-info">Edit</button></a>

					<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>

					<!-- Modal -->
					  <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
                            <h5 class="modal-title">Delete Booking</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
					        </button>
					        </div>
					        <div class="modal-body">
					          <p>Are you sure?</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					          <a href="delete.php?id=<?php echo $r['id']; ?>"><button type="button" class="btn btn-danger"> Yes, Delete</button></a>
					        </div>
					      </div>
					      
					    </div>
					  </div>

				</td>
			</tr> 
		<?php } ?>
		</tbody> 
		</table>
	</div>
</div>

  


<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>
<?php include "../footer.php"?>
</body>
</html>