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

if($_GET['From']){

    $MyName=$user_data['Username'];
    $RequestTo=$_GET['From'];

        echo "My Name is" .$user_data['Username'];
        echo "Request send to" .$_GET['From'];

        $query="INSERT INTO `request`(`RequestTo`, `RequestFrom`) VALUES ('$RequestTo','$MyName')";
        $Req_result=mysqli_query($connect,$query);
        if($Req_result){
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Request Send Successfully');
                        window.location.href='profiles.php';
                        </script>");
             die;

             
        }else{
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Request send fails');
                        window.location.href='ViewProfile.php';
                        </script>");
        }
}

?>