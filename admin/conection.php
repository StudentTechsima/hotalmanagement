<?php 
$localhost = "localhost";
$user = "root";
$pass = "";
$database = "hotalLogin";
$conn = mysqli_connect($localhost,$user,$pass,$database);
if(isset($conn)){
}
else{
    echo "<script>alert('connection failed')</script>".mysqli_error($conn);
}
