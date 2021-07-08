
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="myprofile.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="profiles.php">Profiles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php">Edit Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notification.php">Notification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>    
</body>
</html>

<?php
require_once "connections.php";
session_start();
$srno=$_SESSION['Sr.No'];
$sql="SELECT * FROM `userinfo` WHERE `SrNo` = '$srno'";
if($result1 = mysqli_query($connect, $sql)){       
    while($row = mysqli_fetch_array($result1)){
        // echo "Mobile Number:<strong>".$row['MobileNo']."</strong></br>";
        // echo "Gender:<strong>".$row['Gender']."</strong></br>";
        // echo "Marital Status:<strong>".$row['MaritalStatus']."</strong></br>";
        // echo "Religion:<strong>".$row['Religion']."</strong></br>";
        // echo "Mother Tongue:<strong>".$row['MotherTongue']."</strong></br>";
        // echo "Country:<strong>".$row['Country']."</strong></br>";
        // echo "Date Of Birth:<strong>".$row['dob']."</strong></br>";
        // echo "Age:<strong>".$row['Age']."</strong></br>";
        // echo "Education:<strong>".$row['Education']."</strong></br>";
        // echo "Work In:<strong>".$row['workas']."</strong></br>";
        // echo "Income:<strong>".$row['Income']."</strong></br>";
        $link=$row['photo'];
        // echo "Photo:<img src='$link' alt='Profile Photo'></img></br>";
        // echo "About:<strong>".$row['about']."</strong></br>";
        ?>
<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                .image{
                    height:32vh;
                    width:50vw;
                }

body{
    font-family: 'Roboto', sans-serif;
    background-color:lightpink;
}
h3{
   font-size:20px;
    margin-left: 50px;
}
.First{
   
    margin-top: 60px;
}

            </style>
            <title>Document</title>
        </head>
        <body>
            <div class="image"><?php echo "Photo:<img src='$link' alt='Profile Photo' height=300 width=250></img></br>";?></div>

        <h3 class="First"><?php echo "Gender:<strong>".$row['Gender']."</strong></br>";?></h3>
        <h3><?php echo "Marital Status:<strong>".$row['MaritalStatus']."</strong></br>";?></h3>
        <h3><?php echo "Religion:<strong>".$row['Religion']."</strong></br>";?></h3>
        <h3><?php echo "Mother Tongue:<strong>".$row['MotherTongue']."</strong></br>";?></h3>
        <h3><?php echo "Country:<strong>".$row['Country']."</strong></br>";?></h3>
        <h3><?php echo "dob:<strong>".$row['dob']."</strong></br>";?></h3>
        <h3><?php echo "Age:<strong>".$row['Age']."</strong></br>";?></h3>
        <h3><?php echo "Education:<strong>".$row['Education']."</strong></br>";?></h3>
        <h3><?php echo "Working as:<strong>".$row['workas']."</strong></br>";?></h3>
        <h3><?php echo "Yearly Income:<strong>".$row['Income']."</strong></br>";?></h3>
        <h3><?php echo "About Me:<strong>".$row['about']."</strong></br>";?></h3>

        </body>
        </html>

<?php

    }
    mysqli_free_result($result1);
    }
     else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link1);
    }

?>












































<!-- <?php
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
if($SrNo){
    $mysql="SELECT * FROM userinfo WHERE SrNo='$SrNo'";
    $result_select=mysqli_query($connect,$mysql);
    $user_data =mysqli_fetch_assoc($result_select);
}

if($user_data['Gender']=="male"){
    $OppGender="female";
    // $Data=mysqli_fetch_assoc($Result);
}else{
    $OppGender="male";
}
$mysql="SELECT * FROM userinfo WHERE Gender='$OppGender'";
$result_select=mysqli_query($connect,$mysql);
// $Data =mysqli_fetch_assoc($result_select);
while($Data=mysqli_fetch_assoc($result_select)){
    echo "<br>";
    $mobileno=$Data['MobileNo'];
    echo "<br>";
    $Username=$Data['Username'];
    echo $Username;
        echo "Mobile No is".$mobileno;
        echo "<br>";
        echo "Id is :".$Data['id'];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <a href='ViewProfile.php?Username=<?php echo $Username?> '>Send</a>
        </body>
        </html>
<?php
}


?> -->