<?php
if(isset($_POST['submit']))
{
        if(!($_POST['password']==$_POST['cpassword']))
        { ?>
            <script>
                alert("Password and Confirm Password Not Matched");
            </script>
            <?php
        }

}else{
include("connections.php");
$username=$_POST['username'];
$secure_password=password_hash($_POST['password'],PASSWORD_BCRYPT);

$sql="INSERT INTO `profile`(`Username`, `Password`) VALUES ('$username','$secured_password');";
mysqli_query($connect,$sql);

if($connect)
{
    echo "Login Successfull";
}
}
?>