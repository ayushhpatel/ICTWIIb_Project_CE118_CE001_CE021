<?php

    session_start();

    if(isset($_SESSION['Sr.No']))
    {
       $_SESSION;
    include("connections.php");
    include("functions.php");
    $user_data=check_login($connect); 
    }

    else{
        echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Please Login or Signup to visit Website');
                            window.location.href='Login_page.php';
                            </script>");
        die;
    }

    $SrNo=$user_data['Sr.No'];
    

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimonial Website</title>
</head>
<body>
    <h1>Matrimonial Website</h1>
    <p>Hello <?php echo $user_data['Username'];?></p>
    <br><a href="myprofile.php?SrNo=$SrNo">Create Your Profile Here</a>

    <a href="Logout.php">Logout</a>
</body>
</html>