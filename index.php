<?php

session_start();
$_SESSION;


include("connections.php");
include("functions.php");
    
        if($_SERVER['REQUEST_METHOD']=="POST")
        {
            $username=$_POST['username'];
            if(check_username($connect,$username))
            {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Username already exits...Please Select different username');
                window.location.href='index.php';
                </script>");
               die;
            }
            

            if($_POST['password']!=$_POST['cpassword'])
            {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Password and Confirm Password must be same');
                window.location.href='Sign_in.php';
                </script>");
               die;
            }
            
            else
            {
                $username=$_POST['username'];
                $secure_password=password_hash($_POST['password'],PASSWORD_BCRYPT);
                $email=$_POST['email'];

                if(!empty($username)&&!empty($secure_password)&&!empty($email))
                {
                    //store the data
                    $query="INSERT INTO profile (Username,Password,email) values ('$username','$secure_password','$email');";
                    
                    $test=mysqli_query($connect,$query);
                    if($test)
                    {
                        ?>
                        <script>
                        alert("You have succesfully Signed in...!!! Now You can Login");
                        </script>
                        <?php
                        header("location:Login_page.php");
                    }
                }
        }
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="mycss.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>SIGN IN</header>
        <form method ="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" name="username" placeholder="Username" required>
            <!-- <input type="email" placeholder="enter email" name="user_name"  required> -->
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <!-- <input type="password" class="pass-key" placeholder="Password" name = "password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'] ;}?>" required>  -->
            <input type="password" name="password" placeholder="Password"  required>
            <span class="show">SHOW</span>
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" name="cpassword" placeholder="Confirm Password" required>
            <span class="show">SHOW</span>
          </div>
          <div class="field space">
            <span class="fa fa-envelope"></span>
            <input type="email" name="email" placeholder="enter email" required>
        
          </div>

          <div class="field space">
            <input type="submit" value="LOGIN">
          </div>
 
          <div id="signup">Already have an account?    
          <a href="Login_page.php"> <br> Signup Now</a>
        </div>
    </label>
</div>
        </form>
        
      </div>
    </div>
<style>
.container {
  padding: 16px;
color: white;
}
</style>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <form method="POST">
    <label for="username">USERNAME:<input type="text" name="username" required><br><br></label>
    <label for="password">PASSWORD:<input type="password" name="password" required></label><br><br>
    <label for="password">CONFIRM PASSWORD:<input type="password" name="cpassword" required></label><br><br>
    <label for="email">E-mail: <input type="email" name="email" required></label><br><br>
    <input type="submit">
    <a href="Login_page.php">Click here to login</a>
    </form>
</body>
</html> -->