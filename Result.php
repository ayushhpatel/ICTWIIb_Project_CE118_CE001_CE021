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

if(isset($_POST['Ans'])=="Accept"){
    $EmailTo=$_GET['To'];
    // echo $EmailTo;
   $Myname=$user_data['Username'];
    // echo "My Name is".$user_data['Username'];

    $emailquery="SELECT * FROM profile where Username ='$EmailTo'";
    $query=mysqli_query($connect,$emailquery);
    $email=mysqli_fetch_assoc($query);
    // echo $email['email'];
    $Email=$email['email'];

    $subject="Congratulation";
    $body="HELLO, $EmailTo.Congratulation Your Request has been accepted Now you can see Full Profile: http://localhost/DAKSHAY%20SEM%20-2%20ICTW/PHP/Matrimonial_website/ViewFullProfileMail.php?Username=$Myname";
    $sender_email="From:matrimonialtester@gmail.com";

    if(mail($Email,$subject,$body,$sender_email)){
        // $_SESSION['msg']="Please Check your Gmail to reset your password";
        // echo "Congratulation hope you will get your LifePartner As your Wish";
        header('location:Result.php');
    }else{
        echo "Email sending failed..";
    }
}
else if(isset($_POST['Ans'])=="Decline"){
    $EmailTo=$_GET['To'];
    // echo $EmailTo;
   $Myname=$user_data['Username'];
    // echo "My Name is".$user_data['Username'];

    $emailquery="SELECT * FROM profile where Username ='$EmailTo'";
    $query=mysqli_query($connect,$emailquery);
    $email=mysqli_fetch_assoc($query);
    // echo $email['email'];
    $Email=$email['email'];

    $subject="Congratulation";
    $body="HELLO, $EmailTo.Sorry Your Request has been Decline By $Myname. Find Another Suitable Partner On our Website: http://localhost/DAKSHAY%20SEM%20-2%20ICTW/PHP/Matrimonial_website/Login_Page.php";
    $sender_email="From:matrimonialtester@gmail.com";

    if(mail($Email,$subject,$body,$sender_email)){
        // $_SESSION['msg']="Please Check your Gmail to reset your password";
        // $echo "Congratulation hope you will get your LifePartner As your Wish";
//         echo ("<script LANGUAGE='JavaScript'>
//         window.alert('Thanks For Your Response wait hope you find Your Partner');
//         window.location.href='Login_page.php';
//         </script>");
// die;
// echo "Mail Send";
        header('location:profiles.php');
    }else{
        echo "Email sending failed..";
    }
}


?>