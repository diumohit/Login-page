<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
    <style>

    body{
        background-color: whitesmoke;
    }
    </style>
</head>

<body>

<?php

require_once("login_connect.php");

?>

<?php

if (isset($_REQUEST['Password_Updated'])) {
    echo "<br>"."<h2 style='color:blue';>Password Updated Successfully</h2>";
}

?>


<?php

if (isset($_REQUEST['registered'])) {
    echo "<h1 style='color:blue;'>Congratulations !!! You are a registered user now</h1>";
}

?>


<?php

if (isset($_REQUEST['user_name']) && ($_REQUEST['user_password'])) {

$password1 = $_REQUEST['user_password'];    
$password = md5($password1);

$num = 0;
$db_login = "SELECT * FROM tbl_login WHERE user_name= '$_REQUEST[user_name]' AND  user_password = '$password'";

/// art + f8 for view the error 

$result = mysqli_query($connect,$db_login);
$num = mysqli_num_rows($result);



if ($num>0) {

    session_start();
    $_SESSION['name'] = 'coderhousebd';
    header('location:homepage.php'); 
}
else {
    echo "<br>"."<h4 style='color:red;text-align:center;'>Invalid username or password</h4>";
}

}


?>


    <form action="" method="post">


        <h1>Login</h1>
        <div class="login_section">
            <br><br>

            <label>User Name:</label>
            <input type="text" name="user_name" placeholder="Enter Your username Here">
            <br><br>
            <label>Password:</label>
            <input type="password" class="pass" name="user_password" placeholder="Enter Your password Here"><br>
            <input type="submit" value="Login" class="log" name="login_btn">
           <marquee style="text-align:center" behavior="scroll" direction="down" scrollamount="1"><h2 style="margin-left:60px;margin-top:0px;margin-bottom:10px"><label style="color: red;">Not a member ???  </label> <label  style="color: green;">Signup Now <img src="https://img.icons8.com/fluent/20/000000/down.png"/> <label></h2></marquee>
           <br><br> <br>
           <a  style="text-align: center;text-decoration:none" href="signup.php" class="log">Sign up</a>
            <br> <br><br><br>
        </div>


    </form>

</body>

</html>