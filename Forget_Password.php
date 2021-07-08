<?php
include("connections.php");
include("functions.php"); 

if(isset($_POST['esubmit'])){
    $Recovery_email=mysqli_real_escape_string($connect,$_POST['email']);
    $emailquery="SELECT * FROM profile where email ='$Recovery_email'";
    $query=mysqli_query($connect,$emailquery);
    $emailcount=mysqli_num_rows($query);
    

    if($emailcount){
        $userdata=mysqli_fetch_array($query);
        $eusername=$userdata['Username'];

        $subject="Password Reset";
        $body="HELLO, $eusername.Click here to reset your password http://localhost/DAKSHAY%20SEM%20-2%20ICTW/PHP/Matrimonial_website/Reset_password.php?Username=$eusername";
        $sender_email="From:matrimonialtester@gmail.com";

        if(mail($Recovery_email,$subject,$body,$sender_email)){
            $_SESSION['msg']="Please Check your Gmail to reset your password";
            header('location:Login_page.php');
        }else{
            echo "Email sending failed..";
        }
    }
    else{
        echo "E-mail Not Found";
    }
}
else{
    echo "Please Enter Your Registred Email";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
    <form method="POST">
        <label for="email">Enter Your Registered Email:</label>
        <input type="email" name="email"><br>
        <button type="submit" name="esubmit">Send Mail</button>
    </form>
</body>

</html>