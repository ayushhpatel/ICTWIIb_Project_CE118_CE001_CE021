


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .profiles{
        display:flex;
        width:calc(33%-300px);
        flex-wrap: wrap;
        flex-direction: row;
    }
    body{
margin: 0px;
padding: 0px;
background: #f1f1f1;
font-family: arial;
box-sizing: border-box;
}
.card-container{
width: 450px;
height: 400px;
background: #FFF;
border-radius: 6px;
box-shadow: 0px 1px 10px 1px #000;
overflow: hidden;
display: inline-block;
margin-left: 573px;
margin-top: 50px;

}
.lower-container{
height: 280px;
background: #FFF;
padding: 20px;
padding-top: 75px;
text-align: center;
}

.lower-container h5{
    text-align: left;
}
.lower-container h3, h4{
box-sizing: border-box;
line-height: .6;
font-weight: lighter;
}
.lower-container h4{
color: #7F00FF;
opacity: .6;
font-weight: bold;
}
.lower-container h3{
font-size: 16px;
color: gray;
margin-bottom: 30px;
}
.lower-container .image{
   padding-top: 0px;
    width: 218px;
    height: 177px;
}
/* .lower-container img{
width:50px;
height:50px;
} */
.lower-container .btn{
padding: 12px 20px;
background: #7F00FF;
border: none;
width: 140px;
margin-top: 17px;
color: white;
border-radius: 30px;
font-size: 12px;
text-decoration: none;
font-weight: bold;
transition: all .3s ease-in;
}
.lower-container .btn:hover{
background: transparent;
color: #7F00FF;
border: 2px solid #7F00FF;
}

.lower-container .image{
    height: 400px;
    width: 300px;
}
.lower-container .image img{
    height: 100%;
    width: 100%;
}
    </style>
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
          <a class="nav-link " aria-current="page" href="myprofile.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="profiles.php">Profiles</a>
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
 $Username=$Data['Username'];
    // echo $Username;
    ?>
<div class="profiles">
<div class="card-container">
         <div class="lower-container">
            <!-- <div class="image">
               <img src="<?php  echo $Data['photo'];?></" alt="Photo" > 
            </div> -->
            <div>
            <h5>Name:<?php  echo $Data['Username'];?></h5>
            <h5>Age:<?php  echo $Data['Age'];?></h5>
                <h5>  Marital Status:<?php  echo $Data['MaritalStatus'];?></</h5>
                  <h5>Religion:<?php  echo $Data['Religion'];?></</h5>
                  <h5>Mother Tongue:<?php  echo $Data['MotherTongue'];?></</h5>
                  <h5>Country:<?php  echo $Data['Country'];?></</h5>
                  <h5>Date Of Birth:<?php  echo $Data['dob'];?></</h5>
            </div>
            <div>
            <a href='ViewProfile.php?Username=<?php echo $Username?> ' class="btn">View Full Profile</a>
            </div>
         </div>
      </div>
      </div>


<?php
    
}

?>
<!-- <div class="profiles">
<div class="card-container">
         <div class="lower-container">
            <div>
               <h3><?php $to="ayushh";?>ayushh</h3>
            </div>
            <div>
            <h5>Gender:Male</h5>
                <h5>  Marital Status:Married</h5>
                  <h5>Religion:Hindu</h5>
                  <h5>Mother Tongue:Rajasthani</h5>
                  <h5>Country:India</h5>
                  <h5>Date Of Birth:2003-07-02</h5>
            </div>
            <div>
               <a href="#" class="btn">Send Interest</a>
            </div>
         </div>
      </div>
      </div> -->
</body>
</html>