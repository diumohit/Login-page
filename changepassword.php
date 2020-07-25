<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <Style>

    table{

        border: none;
        background-color: skyblue;
    }

    table tr td{

        padding: 5px;
    }

   </Style>


</head>
<body>

<?php

require_once("login_connect.php");

?>


<?php

try {
    if ((isset($_REQUEST['old_password'])) && (isset($_REQUEST['new_password'])) && (isset($_REQUEST['confirm_password']))) {
        $old_password1 = $_REQUEST['old_password'];
        $old_password = md5($old_password1); //////// password encryption with MD5 tecnique

        $new_password = $_REQUEST['new_password'];
        $confirm_password1 = $_REQUEST['confirm_password'];
        /// making confirm password MD5
        $confirm_password =md5($confirm_password1);


        //// checking old password by query
        $db_password = "SELECT * FROM tbl_login WHERE user_password = '$old_password'";
        $result = mysqli_query($connect,$db_password);
        $check_old_password = mysqli_num_rows($result);

        if ($check_old_password != 1) {
            throw new Exception("Old password don't match");
            }
        if ($new_password != $confirm_password1) {
            throw new Exception("New Password and confirm password don't match");
            }
        else {
        
            $update_password = "UPDATE tbl_login SET user_password='$confirm_password' WHERE id=1";
            $run_update_query = mysqli_query($connect,$update_password);
            if ($run_update_query != true) {
                throw new Exception("Password not updated");
                
            }
        }

    }
} catch (Exception $e) {
    
      $error_msg = $e->getMessage();

}

?>

<?php
if (isset($error_msg)) {
    echo $error_msg;
}


?>


<h1>Change Password</h1>

<form action="" method="post">

<table >
    <tr>
        <td>Old Password:</td>
        <td><input type="password" placeholder="Enter your old password" name="old_password"></td>
    </tr>
    <tr>
        <td>New Password:</td>
        <td><input type="password" placeholder="Enter new password" name="new_password"></td>
    </tr>
    <tr>
        <td>Confirm New Password:</td>
        <td><input type="password" placeholder="Enter confirm new password" name="confirm_password"></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center;padding:10px"><input type="submit" value="Change"></>
    </tr>
</table>

</form>



</body>
</html>