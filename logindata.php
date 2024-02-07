<?php include "admin/conection.php";
if(isset($_POST['login'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$quiry ="insert into login(userName, password) values('$user', $pass)";
$result = mysqli_query($conn,$quiry);
if($result){
    echo "<script>alert('Log in successfull')</script>";
}
}
?>
<div class="popup-container" id="popup-container">
            <div class="popup">
                <form action="" method="post">
                    <h2>
                        <span>User Login</span>
                        <span onclick="reset()">X</span>
                    </h2>
                    <input class="login-input" type="email" placeholder="Email Or User Name" required name="user">
                    <input class="login-input" type="password" placeholder="Password" required name="pass">
                    <input type="submit" class="login-btn" name="login" value="Login">
                    <form>
            </div>
         </div>