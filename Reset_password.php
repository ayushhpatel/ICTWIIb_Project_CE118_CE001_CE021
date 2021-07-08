<?php
include("connections.php");
include("functions.php"); 
if(isset($_POST['Rsubmit'])){
    if($_POST['newpassword']!=$_POST['cpassword'])
    {
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Password and Confirm Password must be same');
        window.location.href='Reset_password.php';
        </script>");
       die;
    }
    else
    {
        $secure_password=password_hash($_POST['newpassword'],PASSWORD_BCRYPT);
        if(!empty($secure_password))
        {
            $Rusername=$_GET['Username'];
            //store the data
            echo $Rusername;
            $update_query="UPDATE profile SET Password ='$secure_password' WHERE Username='$Rusername'";
            $test=mysqli_query($connect,$update_query);
            if($test)
            {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Password Changed Successfully....!!');
                window.location.href='Login_page.php';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Oops Password not changed Unexpectedly');
                window.location.href='Login_page.php';
                </script>");
            }
        }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESET PASSWORD</title>
</head>
<body>
<form method="POST">
    <label for="password">PASSWORD:<input type="password" name="newpassword" required></label><br><br>
    <label for="password">CONFIRM PASSWORD:<input type="password" name="cpassword" required></label><br><br>
    <button type="submit" name="Rsubmit">Save New password</button>
</body>
</html>