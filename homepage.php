<?php
ob_start();
session_start();

if ($_SESSION['name'] != 'coderhousebd') {
    header("location:login_index.php");
}
    
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
    
    body{

        background-color: skyblue;
        }

    .log {

        margin-bottom: 20px;
        margin-left: 60px;
        padding: 15px;
        background-color: rgb(188, 147, 226);
        border-radius: 20px;
        width: 120px;
        border: 2px solid black;

    }

    .log:hover{

        cursor: pointer;
        background-color: rgb(87, 18, 151);
        color: white;
        width: 150px;

    }

    p{
        width: 600px;
        text-align: center;
        background-color: burlywood;


    }

    p::first-letter{

    font-size: 35px;
    
    }

    img{

        margin-top: 30px;
        

    }


 
     </style>

</head>
<body>
<?php

if (isset($_REQUEST['logout_btn'])) {

 header("location:logout.php");


}
?>


<center><img  width=600px height=300px src="WN12.jpg" alt=""></center>
<center><p>This is homepage.Know vaunted a peace eeWhom far sore or sick for long. Time feeble he a he to hope. Flash he shamed however nor objects, wrong with him mote thou and than could, to me brow seemed few shrine, the from heart nor day, her in he will ne might him. Long a was sing.n whom had. Had feeble sullen that pilgrimage a. Such a his whilome and from savelore.Rill sun go and as despair where not to. Climes to high isle strength will by wassailers, nor his loathed.l</p></center>

<br>
<a href="changepassword.php" style="text-decoration: none;border:2px solid black;background-color:grey;padding:10px;border-radius:10px;box-shadow:5px 5px;transition:0.3s;margin-left:380px;color:black">Change Password</a>


<a href="logout.php" style="text-decoration: none;border:2px solid black;background-color:grey;padding:10px;border-radius:10px;box-shadow:5px 5px;transition:0.3s;margin-left:380px">Logout</a>




</body>
</html>