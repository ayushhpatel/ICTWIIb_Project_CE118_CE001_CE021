
<?php

session_start();
$_SESSION;
include("connections.php");
            include("functions.php"); 
            

if(isset($_POST['submit']))
         {      
                if( isset($_POST['username'])&& isset($_POST['password']))
                {
                    $user_name=$_POST['username'];
                    $pass_word=$_POST['password'];
           
                    //Read From data
                    $query="SELECT * FROM profile where Username ='$user_name' limit 1";

                    $result=mysqli_query($connect,$query);

                    if($result && mysqli_num_rows($result)>0)
                    {
                        $user_data=mysqli_fetch_assoc($result);
                        $pass_check=password_verify($pass_word,$user_data['Password']);
                        if($pass_check)
                        {
                            $_SESSION['Sr.No']=$user_data['Sr.No'];
                            echo ("<script LANGUAGE='JavaScript'>
                            window.alert('Login Succesfully.....!!');
                            window.location.href='myprofile.php?SrNo=$SrNo';
                            </script>");
                        }else{
                           
                            ?>
                                <script>
                                    alert("Incorrect Password");
                                </script>
                                <?php
                        }
                    }else
                    {
                        ?>
                            <script>
                                alert("User does'nt Exist");
                            </script>

                            <?php
                    }

                }else
                {
                    ?>
                <script>
                    alert("Please Fill Required Information");
                </script>
                <?php
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
        <header>Log in</header>
        <form method ="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
          <input type="submit" value="Submit" name="submit">
          </div>
 
          <div id="signup">Doesn't Have any account? 
          <a href="index.php">Sign In Now</a><br>   
        </div>
          <div id="signup">Forget Password ?
          <a href="Forget_Password.php">Forget Password</a> 
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
    <title>Login Page</title>
</head>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Username:<input type="text" name="username" placeholder="Enter Your Name Here"><br><br>
        Password:<input type="password" name="password" placeholder="Enter Your password Here"><br><br>
        <input type="submit" value="Submit" name="submit">
        <a href="sign_in.php">Doesn't Have any account Sign In Now</a><br>
        <a href="Forget_Password.php">Forget Password</a>
    </form>

 
</body>

</html> -->


 
       