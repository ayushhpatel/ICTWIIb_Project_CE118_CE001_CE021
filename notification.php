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

$MyName=$user_data['Username'];
$sql="SELECT * FROM `request` WHERE RequestTo='$MyName'";
$Result=mysqli_query($connect,$sql);
$data=mysqli_fetch_assoc($Result);

if($Result){
    // echo "You have a request From".$data['RequestFrom'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <title>Notification</title>
        <style>
            body{
                background-color: lightskyblue;
            }
            h2{
                font-family: 'Roboto', sans-serif;
                font-size: 20px;
                display: inline;
            }
            h1{
                text-align: center;
                font-family: 'Roboto', sans-serif;
                font-size: 25px;
            }
            .btn{
                font-family: 'Roboto', sans-serif;
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
margin-left: 50px;
}
.btn:hover{
background: transparent;
color: #7F00FF;
border: 2px solid #7F00FF;
}
        </style>
    </head>
    <body>
        <h1>Notification</h1>
        <h2><?php echo "You have a request From ".$data['RequestFrom']; ?></h2>
    <a href='ViewFullProfile.php?Username=<?php echo $data['RequestFrom']?> ' class="btn">View Full Profile</a>
    </body>
    </html>
<?php
}




?>