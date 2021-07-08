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
if($_GET['Username']){
    $ProfileUsername=$_GET['Username'];
    $mysql="SELECT * FROM userinfo WHERE Username='$ProfileUsername'";
    $result_select=mysqli_query($connect,$mysql);
    $row =mysqli_fetch_assoc($result_select);
    $link=$row['photo'];
       
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
                    height:vh;
                    width:50vw;
                }
.btn{
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
body{
    font-family: 'Roboto', sans-serif;
    background-color:lightpink;
}
h3{
   
    margin-left: 50px;
}
            </style>
            <title>Document</title>
        </head>
        <body>
            <div class="image"><?php echo "Photo:<img src='$link' alt='Profile Photo' height=450 width=400></img></br>";?></div>

        <h3><?php echo "Gender:<strong>".$row['Gender']."</strong></br>";?></h3>
        <h3 class="First"><?php echo "Contact No:xxxxxxxxx</br>";?></h3>
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
        <a href='request.php?From=<?php echo $row['Username']?> ' class="btn">Send request</a>

        </body>
        </html>
        <?php
}
else{
    ("<script LANGUAGE='JavaScript'>
                        window.alert('oops Something is wrong');
                        window.location.href='ViewProfile.php';
                        </script>");
                        die;
}
?>