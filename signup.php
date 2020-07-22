<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php

require_once("login_connect.php");

?>

<?php

if ((isset($_REQUEST['user_name'])) && (isset($_REQUEST['user_phonenumber'])) && (isset($_REQUEST['user_email'])) &&(isset($_REQUEST['user_password']))){
    

    $username = $_REQUEST['user_name'];
    $phonenumber = $_REQUEST['user_phonenumber'];
    $email = $_REQUEST['user_email'];
    $password = $_REQUEST['user_password'];


    $signup = "INSERT INTO tbl_login (user_name,user_phonenumber,user_email,user_password) VALUES('$username','$phonenumber','$email','$password')";

    $runquery = mysqli_query($connect,$signup);

    if ($runquery == true) {
        header("location:login_index.php?registered");
    }
    else {
        echo "Data insertion failed";
    }


}



?>

<h2 style="text-align: left;">Please Enter Your Details</h2>
<form action="" method="POST">
    
    <table border="2px">
        <tr>
            <td><label for="">User Name:</label></td>
            <td><input type="text" name="user_name" id=""></td>
        </tr>
        <tr>
            <td><label for="">Phone Number:</label></td>
            <td><input type="number" name="user_phonenumber" id=""></td>
        </tr>
        <tr>
            <td><label for="">Email:</label></td>
            <td><input type="email" name="user_email" id=""></td>
        </tr>
        <tr>
            <td><label for="">Password:</label></td>
            <td><input type="password" name="user_password" id=""></td>
        </tr>
    </table>
    <br>
    <input type="submit" class="log" style="text-align:center;" value="Signup" >-
</form>



</body>
</html>